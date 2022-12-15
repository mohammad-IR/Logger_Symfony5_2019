<?php

namespace ContainerSxkGjlo;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5ed8d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf2652 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties09e03 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getConnection', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getMetadataFactory', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getExpressionBuilder', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'beginTransaction', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getCache', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'transactional', array('func' => $func), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->transactional($func);
    }

    public function commit()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'commit', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->commit();
    }

    public function rollback()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'rollback', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getClassMetadata', array('className' => $className), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'createQuery', array('dql' => $dql), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'createNamedQuery', array('name' => $name), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'createQueryBuilder', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'flush', array('entity' => $entity), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'clear', array('entityName' => $entityName), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->clear($entityName);
    }

    public function close()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'close', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->close();
    }

    public function persist($entity)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'persist', array('entity' => $entity), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'remove', array('entity' => $entity), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'refresh', array('entity' => $entity), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'detach', array('entity' => $entity), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'merge', array('entity' => $entity), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'contains', array('entity' => $entity), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getEventManager', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getConfiguration', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'isOpen', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getUnitOfWork', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getProxyFactory', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'initializeObject', array('obj' => $obj), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'getFilters', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'isFiltersStateClean', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'hasFilters', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return $this->valueHolder5ed8d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf2652 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5ed8d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5ed8d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5ed8d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, '__get', ['name' => $name], $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        if (isset(self::$publicProperties09e03[$name])) {
            return $this->valueHolder5ed8d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ed8d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ed8d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ed8d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ed8d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, '__isset', array('name' => $name), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ed8d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5ed8d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, '__unset', array('name' => $name), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ed8d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5ed8d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, '__clone', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        $this->valueHolder5ed8d = clone $this->valueHolder5ed8d;
    }

    public function __sleep()
    {
        $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, '__sleep', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;

        return array('valueHolder5ed8d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf2652 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf2652;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf2652 && ($this->initializerf2652->__invoke($valueHolder5ed8d, $this, 'initializeProxy', array(), $this->initializerf2652) || 1) && $this->valueHolder5ed8d = $valueHolder5ed8d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ed8d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ed8d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
