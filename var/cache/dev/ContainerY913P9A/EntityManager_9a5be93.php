<?php

namespace ContainerY913P9A;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0bd83 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2cdab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc597f = [
        
    ];

    public function getConnection()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getConnection', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getMetadataFactory', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getExpressionBuilder', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'beginTransaction', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getCache', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'transactional', array('func' => $func), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->transactional($func);
    }

    public function commit()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'commit', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->commit();
    }

    public function rollback()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'rollback', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getClassMetadata', array('className' => $className), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'createQuery', array('dql' => $dql), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'createNamedQuery', array('name' => $name), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'createQueryBuilder', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'flush', array('entity' => $entity), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'clear', array('entityName' => $entityName), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->clear($entityName);
    }

    public function close()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'close', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->close();
    }

    public function persist($entity)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'persist', array('entity' => $entity), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'remove', array('entity' => $entity), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'refresh', array('entity' => $entity), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'detach', array('entity' => $entity), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'merge', array('entity' => $entity), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'contains', array('entity' => $entity), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getEventManager', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getConfiguration', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'isOpen', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getUnitOfWork', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getProxyFactory', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'initializeObject', array('obj' => $obj), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'getFilters', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'isFiltersStateClean', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'hasFilters', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return $this->valueHolder0bd83->hasFilters();
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

        $instance->initializer2cdab = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0bd83) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0bd83 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0bd83->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, '__get', ['name' => $name], $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        if (isset(self::$publicPropertiesc597f[$name])) {
            return $this->valueHolder0bd83->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bd83;

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

        $targetObject = $this->valueHolder0bd83;
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
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bd83;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0bd83;
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
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, '__isset', array('name' => $name), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bd83;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0bd83;
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
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, '__unset', array('name' => $name), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bd83;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0bd83;
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
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, '__clone', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        $this->valueHolder0bd83 = clone $this->valueHolder0bd83;
    }

    public function __sleep()
    {
        $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, '__sleep', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;

        return array('valueHolder0bd83');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2cdab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2cdab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2cdab && ($this->initializer2cdab->__invoke($valueHolder0bd83, $this, 'initializeProxy', array(), $this->initializer2cdab) || 1) && $this->valueHolder0bd83 = $valueHolder0bd83;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0bd83;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0bd83;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
