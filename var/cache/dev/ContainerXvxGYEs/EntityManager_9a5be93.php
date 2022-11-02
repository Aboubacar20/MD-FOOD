<?php

namespace ContainerXvxGYEs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd7ac8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer761b8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2da12 = [
        
    ];

    public function getConnection()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getConnection', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getMetadataFactory', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getExpressionBuilder', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'beginTransaction', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getCache', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'transactional', array('func' => $func), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'commit', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->commit();
    }

    public function rollback()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'rollback', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getClassMetadata', array('className' => $className), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'createQuery', array('dql' => $dql), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'createNamedQuery', array('name' => $name), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'createQueryBuilder', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'flush', array('entity' => $entity), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'clear', array('entityName' => $entityName), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->clear($entityName);
    }

    public function close()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'close', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->close();
    }

    public function persist($entity)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'persist', array('entity' => $entity), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'remove', array('entity' => $entity), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'refresh', array('entity' => $entity), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'detach', array('entity' => $entity), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'merge', array('entity' => $entity), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'contains', array('entity' => $entity), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getEventManager', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getConfiguration', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'isOpen', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getUnitOfWork', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getProxyFactory', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'initializeObject', array('obj' => $obj), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'getFilters', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'isFiltersStateClean', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'hasFilters', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return $this->valueHolderd7ac8->hasFilters();
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

        $instance->initializer761b8 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd7ac8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd7ac8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd7ac8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, '__get', ['name' => $name], $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        if (isset(self::$publicProperties2da12[$name])) {
            return $this->valueHolderd7ac8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7ac8;

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

        $targetObject = $this->valueHolderd7ac8;
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
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7ac8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7ac8;
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
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, '__isset', array('name' => $name), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7ac8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd7ac8;
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
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, '__unset', array('name' => $name), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7ac8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd7ac8;
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
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, '__clone', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        $this->valueHolderd7ac8 = clone $this->valueHolderd7ac8;
    }

    public function __sleep()
    {
        $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, '__sleep', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;

        return array('valueHolderd7ac8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer761b8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer761b8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer761b8 && ($this->initializer761b8->__invoke($valueHolderd7ac8, $this, 'initializeProxy', array(), $this->initializer761b8) || 1) && $this->valueHolderd7ac8 = $valueHolderd7ac8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd7ac8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd7ac8;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
