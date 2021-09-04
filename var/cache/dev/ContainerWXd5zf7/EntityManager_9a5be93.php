<?php

namespace ContainerWXd5zf7;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8b643 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9970f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad80b = [
        
    ];

    public function getConnection()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getConnection', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getMetadataFactory', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getExpressionBuilder', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'beginTransaction', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getCache', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'transactional', array('func' => $func), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->transactional($func);
    }

    public function commit()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'commit', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->commit();
    }

    public function rollback()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'rollback', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getClassMetadata', array('className' => $className), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'createQuery', array('dql' => $dql), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'createNamedQuery', array('name' => $name), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'createQueryBuilder', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'flush', array('entity' => $entity), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'clear', array('entityName' => $entityName), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->clear($entityName);
    }

    public function close()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'close', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->close();
    }

    public function persist($entity)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'persist', array('entity' => $entity), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'remove', array('entity' => $entity), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'refresh', array('entity' => $entity), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'detach', array('entity' => $entity), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'merge', array('entity' => $entity), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'contains', array('entity' => $entity), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getEventManager', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getConfiguration', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'isOpen', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getUnitOfWork', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getProxyFactory', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'initializeObject', array('obj' => $obj), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'getFilters', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'isFiltersStateClean', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'hasFilters', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return $this->valueHolder8b643->hasFilters();
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

        $instance->initializer9970f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8b643) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8b643 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8b643->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, '__get', ['name' => $name], $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        if (isset(self::$publicPropertiesad80b[$name])) {
            return $this->valueHolder8b643->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b643;

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

        $targetObject = $this->valueHolder8b643;
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
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b643;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8b643;
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
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, '__isset', array('name' => $name), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b643;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8b643;
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
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, '__unset', array('name' => $name), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b643;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8b643;
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
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, '__clone', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        $this->valueHolder8b643 = clone $this->valueHolder8b643;
    }

    public function __sleep()
    {
        $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, '__sleep', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;

        return array('valueHolder8b643');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9970f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9970f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9970f && ($this->initializer9970f->__invoke($valueHolder8b643, $this, 'initializeProxy', array(), $this->initializer9970f) || 1) && $this->valueHolder8b643 = $valueHolder8b643;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8b643;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8b643;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
