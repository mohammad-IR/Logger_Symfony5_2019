<?php

namespace ContainerPSIqBeK;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9d386 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9d2e4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties60b72 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getConnection', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getMetadataFactory', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getExpressionBuilder', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'beginTransaction', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getCache', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'transactional', array('func' => $func), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->transactional($func);
    }

    public function commit()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'commit', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->commit();
    }

    public function rollback()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'rollback', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getClassMetadata', array('className' => $className), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'createQuery', array('dql' => $dql), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'createNamedQuery', array('name' => $name), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'createQueryBuilder', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'flush', array('entity' => $entity), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'clear', array('entityName' => $entityName), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->clear($entityName);
    }

    public function close()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'close', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->close();
    }

    public function persist($entity)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'persist', array('entity' => $entity), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'remove', array('entity' => $entity), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'refresh', array('entity' => $entity), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'detach', array('entity' => $entity), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'merge', array('entity' => $entity), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'contains', array('entity' => $entity), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getEventManager', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getConfiguration', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'isOpen', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getUnitOfWork', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getProxyFactory', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'initializeObject', array('obj' => $obj), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'getFilters', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'isFiltersStateClean', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'hasFilters', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return $this->valueHolder9d386->hasFilters();
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

        $instance->initializer9d2e4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9d386) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9d386 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9d386->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, '__get', ['name' => $name], $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        if (isset(self::$publicProperties60b72[$name])) {
            return $this->valueHolder9d386->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d386;

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

        $targetObject = $this->valueHolder9d386;
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
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d386;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9d386;
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
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, '__isset', array('name' => $name), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d386;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9d386;
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
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, '__unset', array('name' => $name), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d386;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9d386;
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
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, '__clone', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        $this->valueHolder9d386 = clone $this->valueHolder9d386;
    }

    public function __sleep()
    {
        $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, '__sleep', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;

        return array('valueHolder9d386');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9d2e4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9d2e4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9d2e4 && ($this->initializer9d2e4->__invoke($valueHolder9d386, $this, 'initializeProxy', array(), $this->initializer9d2e4) || 1) && $this->valueHolder9d386 = $valueHolder9d386;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9d386;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9d386;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
