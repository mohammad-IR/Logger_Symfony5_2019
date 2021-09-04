<?php


namespace App\Services\Logger;


use App\Entity\Application;
use App\Entity\Log;
use App\Entity\Package;
use App\Entity\User;
use App\Entity\UserPackage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class LoggerServices
{
    private EntityManagerInterface $manger;
    private $type_logs = array("DANGER", "WARNING", "INFO", "ERROR");

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->manger = $entityManager;
    }


    public function request_for_log(Request $request)
    {
        try {
            $token_request = $request->headers->get('Authorization');
            if ($token_request == null) {
                return new JsonResponse(["message" => "forget get token"], 503);
            }
            $token_request = trim($token_request, "Bearer ");

            $app = $this->manger->getRepository(Application::class)->findOneBy(["token" => $token_request]);
            if ($app == null) {
                return new JsonResponse(["message" => "not found app"], 503);
            }
            $sum = 0;
            foreach ($this->manger->getRepository(UserPackage::class)->findAll() as $item) {
                if ($item->getNameUser()->getId() == $app->getUser()->getId()) {
                    $sum += $item->getNamePackage()->getLimitReport();
                }
            }
            if ($app->getUser()->getNumberLogNow() >= $sum) {
                return new JsonResponse(["message" => "تعداد لاگ های ثبت شده بیش از حد مجاز هست باید یه بسته جدید فعال کنید."], 503);
            }
            $type = $request->get('type');
            $type = strtoupper($type);
            if (!in_array($type, $this->type_logs, true)) {
                return new JsonResponse(["message" => "type of input invalid"], 503);
            }
            $parameters = $request->get('parameters');
            try {
                $parameters = json_decode($parameters);
            }
            catch (\Exception $exception){
                return new JsonResponse (["message" => "نوع json وارد شده اشتباه است"], 503);
            }

            $description = $request->get('description');
        } catch (\Exception $exception) {
            return new JsonResponse(["message" => $exception->getMessage()], 500);
        }
        // DOTHAT: get type and date
        $logger = new Log();
        $logger->setDate(new \DateTime("UTC"));
        $logger->setType($type);
        $logger->setUser($app->getUser());
        $logger->setDescription($description);
        $logger->setParameters($parameters);
        $this->manger->persist($logger);
        $this->manger->flush();
        $app->addLogger($logger);
        $logger->setApp($app);

        $this->manger->persist($logger);
        $this->manger->flush();

        $app->getUser()->setNumberLogNow($app->getUser()->getNumberLogNow() + 1);
        $this->manger->persist($app->getUser());
        $this->manger->flush();

        return new JsonResponse(["id_log" => $logger->getId(), "date" => $logger->getDate()], 200);
    }


    public function log_Application($nameApp, $type = null)
    {
        if ($type == null) {
            return $this->manger->getRepository(Log::class)->findBy(['app.name' => $nameApp, 'type' => $type]);
        } else {
            return $this->manger->getRepository(Log::class)->findBy(['app.name' => $nameApp, 'type' => $type]);
        }
    }

    public function logs_user($user, $type = null)
    {
        if ($type == null) {
            return $this->manger->getRepository(Log::class)->findBy(['user' => $user]);
        } else {
            return $this->manger->getRepository(Log::class)->findBy(['user' => $user, 'type' => $type]);
        }
    }

    public function log_month_ago($user)
    {
        $userId = $user->getId();
        $date = date('Y-m-d h:i:s', strtotime("-30 days"));
        return $this->manger->getRepository(Log::class)
            ->createQueryBuilder('log')
            ->select('log')
            ->where('log.date BETWEEN :n30days AND :today')
            ->andWhere("log.user = $userId")
            ->setParameter('today', date('Y-m-d h:i:s'))
            ->setParameter('n30days', $date)
            ->getQuery()
            ->getArrayResult();
    }

    public function log_week_ago(User $user)
    {
        $date = date('Y-m-d h:i:s', strtotime("-7 days"));
        $userId = $user->getId();
        return $this->manger->getRepository(Log::class)
            ->createQueryBuilder('log')
            ->select('log')
            ->where('log.date BETWEEN :n7days AND :today')
            ->andWhere("log.user = $userId")
            ->setParameter('today', date('Y-m-d h:i:s'))
            ->setParameter('n7days', $date)
            ->getQuery()
            ->getArrayResult();
    }
}




