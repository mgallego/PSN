<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;


/**
 * appDevDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
    }

    /**
     * Gets the 'annotations.cache.array' service.
     *
     * @return Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getAnnotations_Cache_ArrayService()
    {
        return new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the 'annotations.configuration_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Configuration\AnnotationReader A Sensio\Bundle\FrameworkExtraBundle\Configuration\AnnotationReader instance.
     */
    protected function getAnnotations_ConfigurationReaderService()
    {
        return $this->services['annotations.configuration_reader'] = new \Sensio\Bundle\FrameworkExtraBundle\Configuration\AnnotationReader(new \Doctrine\Common\Cache\ArrayCache(), $this->get('annotations.parser'));
    }

    /**
     * Gets the 'annotations.controller_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Controller\ControllerAnnotationParser A Sensio\Bundle\FrameworkExtraBundle\Controller\ControllerAnnotationParser instance.
     */
    protected function getAnnotations_ControllerParserService()
    {
        return $this->services['annotations.controller_parser'] = new \Sensio\Bundle\FrameworkExtraBundle\Controller\ControllerAnnotationParser($this->get('annotations.configuration_reader'));
    }

    /**
     * Gets the 'annotations.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\Parser A Doctrine\Common\Annotations\Parser instance.
     */
    protected function getAnnotations_ParserService()
    {
        $this->services['annotations.parser'] = $instance = new \Doctrine\Common\Annotations\Parser();

        $instance->setAutoloadAnnotations(true);
        $instance->setAnnotationNamespaceAlias('Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\', 'extra');

        return $instance;
    }

    /**
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance.
     */
    protected function getAnnotations_ReaderService()
    {
        return $this->services['annotations.reader'] = new \Doctrine\Common\Annotations\AnnotationReader(new \Doctrine\Common\Cache\ArrayCache(), $this->get('annotations.parser'));
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/home/moises/Desarrollo/PSN/PSN/app/cache/dev/assetic/config'), true)));

        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/FrameworkBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/SecurityBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/TwigBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/MonologBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/symfony/src/Symfony/Bundle/MonologBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/SwiftmailerBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/symfony/src/Symfony/Bundle/SwiftmailerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/DoctrineBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/symfony/src/Symfony/Bundle/DoctrineBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/AsseticBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/symfony/src/Symfony/Bundle/AsseticBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/SensioFrameworkExtraBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/bundles/Sensio/Bundle/FrameworkExtraBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/JMSSecurityExtraBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/bundles/JMS/SecurityExtraBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SFMPicmntBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/SFMPicmntBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SFMPicmntBundle', '/home/moises/Desarrollo/PSN/PSN/src/SFM/PicmntBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/FOSUserBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/bundles/FOS/UserBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/WebProfilerBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Assetic\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyWebConfiguratorBundle', '/home/moises/Desarrollo/PSN/PSN/app/Resources/SymfonyWebConfiguratorBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyWebConfiguratorBundle', '/home/moises/Desarrollo/PSN/PSN/vendor/bundles/Symfony/Bundle/WebConfiguratorBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/home/moises/Desarrollo/PSN/PSN/app/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * @return Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        return new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('request'), $this->get('assetic.asset_manager'), $this->get('assetic.cache'));
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the 'cache.annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Cache\AnnotationCacheListener A Sensio\Bundle\FrameworkExtraBundle\Cache\AnnotationCacheListener instance.
     */
    protected function getCache_AnnotationService()
    {
        return $this->services['cache.annotation'] = new \Sensio\Bundle\FrameworkExtraBundle\Cache\AnnotationCacheListener();
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this->get('assetic.asset_manager')), 1 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassMapCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router.real')), 3 => new \Symfony\Bundle\DoctrineBundle\CacheWarmer\ProxyCacheWarmer($this)));
    }

    /**
     * Gets the 'converter.doctrine.mongodb.odm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getConverter_Doctrine_Mongodb_OdmService()
    {
        return $this->services['converter.doctrine.mongodb.odm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(NULL);
    }

    /**
     * Gets the 'converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getConverter_Doctrine_OrmService()
    {
        return $this->services['converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Controller\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\Controller\ParamConverterListener instance.
     */
    protected function getConverter_ListenerService()
    {
        return $this->services['converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\Controller\ParamConverterListener($this->get('converter.manager'));
    }

    /**
     * Gets the 'converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getConverter_ManagerService()
    {
        $this->services['converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager(array());

        $instance->add($this->get('converter.doctrine.orm'), 0);
        $instance->add($this->get('converter.doctrine.mongodb.odm'), 0);

        return $instance;
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\DoctrineBundle\ConnectionFactory A Symfony\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Symfony\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();
        $a->setSQLLogger($this->get('doctrine.dbal.logger'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'symfony2', 'host' => 'localhost', 'user' => 'root', 'password' => 'P4ssW0rd', 'driver' => 'pdo_mysql', 'port' => NULL, 'driverOptions' => array()), $a, new \Doctrine\Common\EventManager());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2orm_default_d980ee430d0a904d0cc99cc616b8b9b8');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_d980ee430d0a904d0cc99cc616b8b9b8');

        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_d980ee430d0a904d0cc99cc616b8b9b8');

        $d = new \Doctrine\Common\Annotations\AnnotationReader();
        $d->setAnnotationNamespaceAlias('Doctrine\\ORM\\Mapping\\', 'orm');

        $e = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, array(0 => '/home/moises/Desarrollo/PSN/PSN/src/SFM/PicmntBundle/Entity')), 'SFM\\PicmntBundle\\Entity');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(array(0 => '/home/moises/Desarrollo/PSN/PSN/vendor/bundles/FOS/UserBundle/Resources/config/doctrine/metadata/orm')), 'FOS\\UserBundle\\Entity');

        $f = new \Doctrine\ORM\Configuration();
        $f->setEntityNamespaces(array('SFMPicmntBundle' => 'SFM\\PicmntBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity'));
        $f->setMetadataCacheImpl($a);
        $f->setQueryCacheImpl($b);
        $f->setResultCacheImpl($c);
        $f->setMetadataDriverImpl($e);
        $f->setProxyDir('/home/moises/Desarrollo/PSN/PSN/app/cache/dev/doctrine/orm/Proxies');
        $f->setProxyNamespace('Proxies');
        $f->setAutoGenerateProxyClasses(true);
        $f->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');

        return $this->services['doctrine.orm.default_entity_manager'] = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $f);
    }

    /**
     * Gets the 'error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\ErrorHandler A Symfony\Component\HttpKernel\Debug\ErrorHandler instance.
     */
    protected function getErrorHandlerService()
    {
        return $this->services['error_handler'] = new \Symfony\Component\HttpKernel\Debug\ErrorHandler('');
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Debug\TraceableEventDispatcher A Symfony\Bundle\FrameworkBundle\Debug\TraceableEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Bundle\FrameworkBundle\Debug\TraceableEventDispatcher($this, $this->get('monolog.logger.event'));

        $instance->addListenerService('onCoreRequest', 'request_listener', 0);
        $instance->addListenerService('onCoreResponse', 'response_listener', 0);
        $instance->addListenerService('onCoreException', 'exception_listener', -128);
        $instance->addListenerService('onCoreResponse', 'profiler_listener', 0);
        $instance->addListenerService('onCoreException', 'profiler_listener', 0);
        $instance->addListenerService('onCoreRequest', 'profiler_listener', 0);
        $instance->addListenerService('onCoreController', 'data_collector.request', 0);
        $instance->addListenerService('onCoreRequest', 'security.firewall', -128);
        $instance->addListenerService('onCoreResponse', 'security.rememberme.response_listener', 0);
        $instance->addListenerService('onCoreController', 'annotations.controller_parser', 0);
        $instance->addListenerService('onCoreController', 'converter.listener', 0);
        $instance->addListenerService('onCoreController', 'view.template_annotation', 0);
        $instance->addListenerService('onCoreView', 'view.template_annotation', 0);
        $instance->addListenerService('onCoreResponse', 'cache.annotation', 0);
        $instance->addListenerService('onCoreController', 'security.extra.controller_listener', -255);
        $instance->addListenerService('onSecurityInteractiveLogin', 'fos_user.security.interactive_login_listener', 0);
        $instance->addListenerService('onCoreResponse', 'web_profiler.debug.toolbar', -128);

        return $instance;
    }

    /**
     * Gets the 'exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\ExceptionListener A Symfony\Component\HttpKernel\Debug\ExceptionListener instance.
     */
    protected function getExceptionListenerService()
    {
        return $this->services['exception_listener'] = new \Symfony\Component\HttpKernel\Debug\ExceptionListener('Symfony\\Bundle\\FrameworkBundle\\Controller\\ExceptionController::showAction', $this->get('monolog.logger.request'));
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Util\Filesystem A Symfony\Component\HttpKernel\Util\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\HttpKernel\Util\Filesystem();
    }

    /**
     * Gets the 'form.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormContext A Symfony\Component\Form\FormContext instance.
     */
    protected function getForm_ContextService()
    {
        return $this->services['form.context'] = new \Symfony\Component\Form\FormContext(array('validator' => $this->get('validator'), 'validation_groups' => 'Default', 'field_factory' => $this->get('form.field_factory'), 'csrf_protection' => true, 'csrf_field_name' => '_token', 'csrf_provider' => $this->get('form.csrf_provider')));
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\CsrfProvider\SessionCsrfProvider A Symfony\Component\Form\CsrfProvider\SessionCsrfProvider instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\CsrfProvider\SessionCsrfProvider($this->get('session'), 'xxxxxxxxxx');
    }

    /**
     * Gets the 'form.field_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FieldFactory\FieldFactory A Symfony\Component\Form\FieldFactory\FieldFactory instance.
     */
    protected function getForm_FieldFactoryService()
    {
        return $this->services['form.field_factory'] = new \Symfony\Component\Form\FieldFactory\FieldFactory(array(0 => new \Symfony\Component\Form\FieldFactory\ValidatorFieldFactoryGuesser($this->get('validator.mapping.class_metadata_factory')), 1 => new \Symfony\Component\Form\FieldFactory\EntityFieldFactoryGuesser($this->get('doctrine.orm.default_entity_manager'))));
    }

    /**
     * Gets the 'fos_user.controller.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Controller\SecurityController A FOS\UserBundle\Controller\SecurityController instance.
     */
    protected function getFosUser_Controller_SecurityService()
    {
        $this->services['fos_user.controller.security'] = $instance = new \FOS\UserBundle\Controller\SecurityController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_user.controller.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Controller\UserController A FOS\UserBundle\Controller\UserController instance.
     */
    protected function getFosUser_Controller_UserService()
    {
        $this->services['fos_user.controller.user'] = $instance = new \FOS\UserBundle\Controller\UserController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_user.form.change_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\ChangePasswordForm A FOS\UserBundle\Form\ChangePasswordForm instance.
     */
    protected function getFosUser_Form_ChangePasswordService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.form.change_password', 'request');
        }

        $this->services['fos_user.form.change_password'] = $this->scopedServices['request']['fos_user.form.change_password'] = $instance = call_user_func(array('FOS\\UserBundle\\Form\\ChangePasswordForm', 'create'), $this->get('form.context'), 'fos_user_change_password_form', array('theme' => 'FOSUserBundleaa::layout.html.twig', 'validation_groups' => array(0 => 'ChangePassword')));

        $instance->setRequest($this->get('request'));
        $instance->setUserManager($this->get('fos_user.user_manager'));

        return $instance;
    }

    /**
     * Gets the 'fos_user.form.reset_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\ResetPasswordForm A FOS\UserBundle\Form\ResetPasswordForm instance.
     */
    protected function getFosUser_Form_ResetPasswordService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.form.reset_password', 'request');
        }

        $this->services['fos_user.form.reset_password'] = $this->scopedServices['request']['fos_user.form.reset_password'] = $instance = call_user_func(array('FOS\\UserBundle\\Form\\ResetPasswordForm', 'create'), $this->get('form.context'), 'fos_user_reset_password_form', array('theme' => 'FOSUserBundleaa::layout.html.twig', 'validation_groups' => array(0 => 'ResetPassword')));

        $instance->setRequest($this->get('request'));
        $instance->setUserManager($this->get('fos_user.user_manager'));

        return $instance;
    }

    /**
     * Gets the 'fos_user.form.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\UserForm A FOS\UserBundle\Form\UserForm instance.
     */
    protected function getFosUser_Form_UserService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.form.user', 'request');
        }

        $this->services['fos_user.form.user'] = $this->scopedServices['request']['fos_user.form.user'] = $instance = call_user_func(array('FOS\\UserBundle\\Form\\UserForm', 'create'), $this->get('form.context'), 'fos_user_user_form', array('theme' => 'FOSUserBundleaa::layout.html.twig', 'validation_groups' => array(0 => 'Registration')));

        $instance->setRequest($this->get('request'));
        $instance->setUserManager($this->get('fos_user.user_manager'));

        return $instance;
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Security\InteractiveLoginListener A FOS\UserBundle\Security\InteractiveLoginListener instance.
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Entity\UserManager A FOS\UserBundle\Entity\UserManager instance.
     */
    protected function getFosUser_UserManagerService()
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Entity\UserManager($this->get('fos_user.encoder_factory'), 'sha512', $this->get('fos_user.util.username_canonicalizer'), $this->get('fos_user.util.email_canonicalizer'), $this->get('doctrine.orm.default_entity_manager'), 'SFM\\PicmntBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance.
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\Mailer A FOS\UserBundle\Util\Mailer instance.
     */
    protected function getFosUser_Util_MailerService()
    {
        return $this->services['fos_user.util.mailer'] = new \FOS\UserBundle\Util\Mailer($this->get('mailer'), $this->get('router.real'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:User:confirmationEmail', 'resetting_password.template' => 'FOSUserBundle:User:resettingPasswordEmail', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting_password' => array('webmaster@example.com' => 'webmaster'))));
    }

    /**
     * Gets the 'fos_user.util.username_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance.
     */
    protected function getFosUser_Util_UsernameCanonicalizerService()
    {
        return $this->services['fos_user.util.username_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.validator.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Validator\PasswordValidator A FOS\UserBundle\Validator\PasswordValidator instance.
     */
    protected function getFosUser_Validator_PasswordService()
    {
        $this->services['fos_user.validator.password'] = $instance = new \FOS\UserBundle\Validator\PasswordValidator();

        $instance->setEncoderFactory($this->get('fos_user.encoder_factory'));

        return $instance;
    }

    /**
     * Gets the 'fos_user.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Validator\UniqueValidator A FOS\UserBundle\Validator\UniqueValidator instance.
     */
    protected function getFosUser_Validator_UniqueService()
    {
        return $this->services['fos_user.validator.unique'] = new \FOS\UserBundle\Validator\UniqueValidator($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\HttpKernel A Symfony\Bundle\FrameworkBundle\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Bundle\FrameworkBundle\HttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request')));
    }

    /**
     * Gets the 'mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Mailer A Swift_Mailer instance.
     */
    protected function getMailerService()
    {
        require_once '/home/moises/Desarrollo/PSN/PSN/vendor/swiftmailer/lib/swift_init.php';

        return $this->services['mailer'] = new \Swift_Mailer($this->get('swiftmailer.transport'));
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\DebugHandler A Symfony\Bundle\MonologBundle\Logger\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bundle\MonologBundle\Logger\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler('/home/moises/Desarrollo/PSN/PSN/app/logs/dev.log', 100, false);
    }

    /**
     * Gets the 'monolog.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\Logger A Symfony\Bundle\MonologBundle\Logger\Logger instance.
     */
    protected function getMonolog_LoggerService()
    {
        $this->services['monolog.logger'] = $instance = new \Symfony\Bundle\MonologBundle\Logger\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\Logger A Symfony\Bundle\MonologBundle\Logger\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bundle\MonologBundle\Logger\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\Logger A Symfony\Bundle\MonologBundle\Logger\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bundle\MonologBundle\Logger\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\Logger A Symfony\Bundle\MonologBundle\Logger\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bundle\MonologBundle\Logger\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\Logger A Symfony\Bundle\MonologBundle\Logger\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bundle\MonologBundle\Logger\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\Logger A Symfony\Bundle\MonologBundle\Logger\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bundle\MonologBundle\Logger\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\Logger A Symfony\Bundle\MonologBundle\Logger\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bundle\MonologBundle\Logger\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\Logger A Symfony\Bundle\MonologBundle\Logger\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bundle\MonologBundle\Logger\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('profiler', 'request');
        }

        $this->services['profiler'] = $this->scopedServices['request']['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler($this->get('profiler.storage'), $this->get('monolog.logger.profiler'));

        $instance->add($this->get('data_collector.config'));
        $instance->add($this->get('data_collector.request'));
        $instance->add($this->get('data_collector.exception'));
        $instance->add($this->get('data_collector.events'));
        $instance->add($this->get('data_collector.logger'));
        $instance->add($this->get('data_collector.timer'));
        $instance->add($this->get('data_collector.memory'));
        $instance->add($this->get('data_collector.security'));
        $instance->add($this->get('swiftmailer.data_collector'));
        $instance->add($this->get('data_collector.doctrine'));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Profiler\ProfilerListener A Symfony\Bundle\FrameworkBundle\Profiler\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Bundle\FrameworkBundle\Profiler\ProfilerListener($this, NULL, false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws \RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new \RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\RequestListener A Symfony\Bundle\FrameworkBundle\RequestListener instance.
     */
    protected function getRequestListenerService()
    {
        return $this->services['request_listener'] = new \Symfony\Bundle\FrameworkBundle\RequestListener($this, $this->get('router.real'), $this->get('monolog.logger.request'));
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\ResponseListener A Symfony\Component\HttpKernel\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router.cached' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\CachedRouter A Symfony\Bundle\FrameworkBundle\Routing\CachedRouter instance.
     */
    protected function getRouter_CachedService()
    {
        return $this->services['router.cached'] = new \Symfony\Bundle\FrameworkBundle\Routing\CachedRouter('/home/moises/Desarrollo/PSN/PSN/app/cache/dev', 'appdevUrlMatcher', 'appdevUrlGenerator');
    }

    /**
     * Gets the 'router.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Routing\Router A Symfony\Component\Routing\Router instance.
     */
    protected function getRouter_RealService()
    {
        return $this->services['router.real'] = new \Symfony\Component\Routing\Router(new \Symfony\Bundle\FrameworkBundle\Routing\LazyLoader($this, 'routing.loader.real'), '/home/moises/Desarrollo/PSN/PSN/app/config/routing_dev.yml', array('cache_dir' => '/home/moises/Desarrollo/PSN/PSN/app/cache/dev', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appdevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appdevUrlMatcher', 'resource_type' => ''));
    }

    /**
     * Gets the 'routing.loader.annot_class' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader A Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader instance.
     */
    protected function getRouting_Loader_AnnotClassService()
    {
        $this->services['routing.loader.annot_class'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($this->get('annotations.reader'), $this->get('annotations.configuration_reader'));

        $instance->setRouteAnnotationClass('Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route');
        $instance->setRoutesAnnotationClass('Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Routes');

        return $instance;
    }

    /**
     * Gets the 'routing.loader.annot_dir' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Routing\Loader\AnnotationDirectoryLoader A Symfony\Component\Routing\Loader\AnnotationDirectoryLoader instance.
     */
    protected function getRouting_Loader_AnnotDirService()
    {
        return $this->services['routing.loader.annot_dir'] = new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($this->get('routing.file_locator'), $this->get('routing.loader.annot_class'));
    }

    /**
     * Gets the 'routing.loader.annot_file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Routing\Loader\AnnotationFileLoader A Symfony\Component\Routing\Loader\AnnotationFileLoader instance.
     */
    protected function getRouting_Loader_AnnotFileService()
    {
        return $this->services['routing.loader.annot_file'] = new \Symfony\Component\Routing\Loader\AnnotationFileLoader($this->get('routing.file_locator'), $this->get('routing.loader.annot_class'));
    }

    /**
     * Gets the 'routing.loader.annot_glob' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Routing\Loader\AnnotationGlobLoader A Symfony\Component\Routing\Loader\AnnotationGlobLoader instance.
     */
    protected function getRouting_Loader_AnnotGlobService()
    {
        return $this->services['routing.loader.annot_glob'] = new \Symfony\Component\Routing\Loader\AnnotationGlobLoader($this->get('routing.file_locator'), $this->get('routing.loader.annot_class'));
    }

    /**
     * Gets the 'routing.loader.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_Loader_RealService()
    {
        $a = $this->get('routing.file_locator');

        $b = new \Symfony\Component\Config\Loader\LoaderResolver();
        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $b->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager')));
        $b->addLoader($this->get('routing.loader.annot_glob'));
        $b->addLoader($this->get('routing.loader.annot_dir'));
        $b->addLoader($this->get('routing.loader.annot_file'));
        $b->addLoader($this->get('routing.loader.annot_class'));

        return $this->services['routing.loader.real'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router'), $b);
    }

    /**
     * Gets the 'security.access.method_interceptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor A JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor instance.
     */
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array()), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('monolog.logger'));
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.extra.controller_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Controller\ControllerListener A JMS\SecurityExtraBundle\Controller\ControllerListener instance.
     */
    protected function getSecurity_Extra_ControllerListenerService()
    {
        return $this->services['security.extra.controller_listener'] = new \JMS\SecurityExtraBundle\Controller\ControllerListener($this);
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.main' => NULL)), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security');
        $b = $this->get('security.context');
        $c = $this->get('event_dispatcher');
        $d = $this->get('security.authentication.manager');

        $e = new \Symfony\Component\HttpFoundation\RequestMatcher('^/_wdt/');

        $f = new \Symfony\Component\HttpFoundation\RequestMatcher('^/_profiler/');

        $g = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$');

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login_check$');

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/new$');

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/check-confirmation-email$');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/confirm/');

        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/confirmed$');

        $m = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/request-reset-password$');

        $n = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/send-resetting-email$');

        $o = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/check-resetting-email$');

        $p = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/reset-password/');

        $q = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/');

        $r = new \Symfony\Component\HttpFoundation\RequestMatcher('^/demo/secured/.*');

        $s = new \Symfony\Component\Security\Http\AccessMap();
        $s->add($e, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($f, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($g, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($k, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($l, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($m, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($n, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($o, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($p, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $s->add($q, array(0 => 'ROLE_ADMIN'), NULL);
        $s->add($r, array(0 => 'ROLE_USER'), NULL);

        $t = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, '/logout', '/', NULL);
        $t->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($s, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('fos_user.user_manager')), 'main', $a, $c), 2 => $t, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $d, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), 'main', array('login_path' => '/login', 'check_path' => '/login_check', 'use_forward' => false, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false, 'failure_path' => NULL, 'failure_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_page_id' => 'form_login', 'post_only' => true), NULL, NULL, $a, $c), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '4da6f90768c76', $a), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $s, $d, $a)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($this->get('http_kernel'), '/login', false), NULL, NULL, $a));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\ResponseListener A Symfony\Bundle\SecurityBundle\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Bundle\SecurityBundle\ResponseListener();
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session A Symfony\Component\HttpFoundation\Session instance.
     */
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session($this->get('session.storage'), 'en');

        $instance->start();

        return $instance;
    }

    /**
     * Gets the 'session.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\SessionStorage\NativeSessionStorage A Symfony\Component\HttpFoundation\SessionStorage\NativeSessionStorage instance.
     */
    protected function getSession_StorageService()
    {
        return $this->services['session.storage'] = new \Symfony\Component\HttpFoundation\SessionStorage\NativeSessionStorage(array('lifetime' => 3600));
    }

    /**
     * Gets the 'swiftmailer.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_TransportService()
    {
        $this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost('localhost');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setUsername('');
        $instance->setPassword('');
        $instance->setAuthMode(NULL);
        $instance->registerPlugin($this->get('swiftmailer.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'symfony.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebConfiguratorBundle\Configurator A Symfony\Bundle\WebConfiguratorBundle\Configurator instance.
     */
    protected function getSymfony_WebconfiguratorService()
    {
        return $this->services['symfony.webconfigurator'] = new \Symfony\Bundle\WebConfiguratorBundle\Configurator('/home/moises/Desarrollo/PSN/PSN/app');
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance.
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.globals'));
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('http_kernel'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('request'), array(), NULL, array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper('', '/home/moises/Desarrollo/PSN/PSN/app');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.dynamic'));

        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper($a);
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router.real'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context'));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\IdentityTranslator A Symfony\Component\Translation\IdentityTranslator instance.
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator($this->get('translator.selector'));
    }

    /**
     * Gets the 'translator.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_RealService()
    {
        return $this->services['translator.real'] = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, $this->get('translator.selector'), array('cache_dir' => '/home/moises/Desarrollo/PSN/PSN/app/cache/dev/translations', 'debug' => true), $this->get('session'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'cache' => '/home/moises/Desarrollo/PSN/PSN/app/cache/dev/twig', 'charset' => 'UTF-8'));

        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\SecurityExtension($this->get('security.context')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\TemplatingExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router.real')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\FormExtension(array(0 => 'TwigBundle::form.html.twig')));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\DynamicExtension($this->get('assetic.asset_factory'), true));

        return $instance;
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        return $this->services['twig.loader'] = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Validator A Symfony\Component\Validator\Validator instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('fos_user.validator.unique' => 'fos_user.validator.unique', 'fos_user.validator.password' => 'fos_user.validator.password')));
    }

    /**
     * Gets the 'view.template_annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\View\AnnotationTemplateListener A Sensio\Bundle\FrameworkExtraBundle\View\AnnotationTemplateListener instance.
     */
    protected function getView_TemplateAnnotationService()
    {
        return $this->services['view.template_annotation'] = new \Sensio\Bundle\FrameworkExtraBundle\View\AnnotationTemplateListener($this);
    }

    /**
     * Gets the 'web_profiler.debug.toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_Debug_ToolbarService()
    {
        return $this->services['web_profiler.debug.toolbar'] = new \Symfony\Bundle\WebProfilerBundle\WebDebugToolbarListener($this->get('templating'), false, true);
    }

    /**
     * Gets the annotations.cache service alias.
     *
     * @return Doctrine\Common\Cache\ArrayCache An instance of the annotations.cache.array service
     */
    protected function getAnnotations_CacheService()
    {
        return $this->get('annotations.cache.array');
    }

    /**
     * Gets the database_connection service alias.
     *
     * @return Doctrine\DBAL\Connection An instance of the doctrine.dbal.default_connection service
     */
    protected function getDatabaseConnectionService()
    {
        return $this->get('doctrine.dbal.default_connection');
    }

    /**
     * Gets the debug.event_dispatcher service alias.
     *
     * @return Symfony\Bundle\FrameworkBundle\Debug\TraceableEventDispatcher An instance of the event_dispatcher service
     */
    protected function getDebug_EventDispatcherService()
    {
        return $this->get('event_dispatcher');
    }

    /**
     * Gets the doctrine.orm.entity_manager service alias.
     *
     * @return Doctrine\ORM\EntityManager An instance of the doctrine.orm.default_entity_manager service
     */
    protected function getDoctrine_Orm_EntityManagerService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }

    /**
     * Gets the logger service alias.
     *
     * @return Symfony\Bundle\MonologBundle\Logger\Logger An instance of the monolog.logger service
     */
    protected function getLoggerService()
    {
        return $this->get('monolog.logger');
    }

    /**
     * Gets the router service alias.
     *
     * @return Symfony\Component\Routing\Router An instance of the router.real service
     */
    protected function getRouterService()
    {
        return $this->get('router.real');
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), '/home/moises/Desarrollo/PSN/PSN/app/../web', true);

        $instance->setFilterManager($this->get('assetic.filter_manager'));

        return $instance;
    }

    /**
     * Gets the 'assetic.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Assetic\Cache\FilesystemCache A Assetic\Cache\FilesystemCache instance.
     */
    protected function getAssetic_CacheService()
    {
        return $this->services['assetic.cache'] = new \Assetic\Cache\FilesystemCache('/home/moises/Desarrollo/PSN/PSN/app/cache/dev/assetic/assets');
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'), $this->get('monolog.logger.request'));
    }

    /**
     * Gets the 'data_collector.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector A Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector instance.
     */
    protected function getDataCollector_ConfigService()
    {
        return $this->services['data_collector.config'] = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector($this->get('kernel'));
    }

    /**
     * Gets the 'data_collector.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector A Symfony\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector instance.
     */
    protected function getDataCollector_DoctrineService()
    {
        return $this->services['data_collector.doctrine'] = new \Symfony\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine.dbal.logger'));
    }

    /**
     * Gets the 'data_collector.events' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\EventDataCollector A Symfony\Component\HttpKernel\DataCollector\EventDataCollector instance.
     */
    protected function getDataCollector_EventsService()
    {
        $this->services['data_collector.events'] = $instance = new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector();

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'data_collector.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector A Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector instance.
     */
    protected function getDataCollector_ExceptionService()
    {
        return $this->services['data_collector.exception'] = new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector();
    }

    /**
     * Gets the 'data_collector.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector A Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector instance.
     */
    protected function getDataCollector_LoggerService()
    {
        return $this->services['data_collector.logger'] = new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($this->get('monolog.logger.profiler'));
    }

    /**
     * Gets the 'data_collector.memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector A Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector instance.
     */
    protected function getDataCollector_MemoryService()
    {
        return $this->services['data_collector.memory'] = new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector A Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector instance.
     */
    protected function getDataCollector_SecurityService()
    {
        return $this->services['data_collector.security'] = new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.context'));
    }

    /**
     * Gets the 'data_collector.timer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\DataCollector\TimerDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\TimerDataCollector instance.
     */
    protected function getDataCollector_TimerService()
    {
        return $this->services['data_collector.timer'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\TimerDataCollector($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\DoctrineBundle\Logger\DbalLogger A Symfony\Bundle\DoctrineBundle\Logger\DbalLogger instance.
     */
    protected function getDoctrine_Dbal_LoggerService()
    {
        return $this->services['doctrine.dbal.logger'] = new \Symfony\Bundle\DoctrineBundle\Logger\DbalLogger($this->get('monolog.logger.doctrine'));
    }

    /**
     * Gets the 'fos_user.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return FOS\UserBundle\Security\Encoder\EncoderFactory A FOS\UserBundle\Security\Encoder\EncoderFactory instance.
     */
    protected function getFosUser_EncoderFactoryService()
    {
        return $this->services['fos_user.encoder_factory'] = new \FOS\UserBundle\Security\Encoder\EncoderFactory('Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', false, 1, new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array()));
    }

    /**
     * Gets the 'profiler.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\HttpKernel\Profiler\SqliteProfilerStorage A Symfony\Component\HttpKernel\Profiler\SqliteProfilerStorage instance.
     */
    protected function getProfiler_StorageService()
    {
        return $this->services['profiler.storage'] = new \Symfony\Component\HttpKernel\Profiler\SqliteProfilerStorage('sqlite:/home/moises/Desarrollo/PSN/PSN/app/cache/dev/profiler.db', '', '', 86400);
    }

    /**
     * Gets the 'routing.file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getRouting_FileLocatorService()
    {
        return $this->services['routing.file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'));
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        return $this->services['security.authentication.manager'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('fos_user.user_manager'), new \Symfony\Component\Security\Core\User\UserChecker(), 'main', $this->get('fos_user.encoder_factory')), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('4da6f90768c76')));
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'swiftmailer.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector A Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector instance.
     */
    protected function getSwiftmailer_DataCollectorService()
    {
        return $this->services['swiftmailer.data_collector'] = new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this->get('swiftmailer.plugin.messagelogger'), $this->get('mailer'));
    }

    /**
     * Gets the 'swiftmailer.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\SwiftmailerBundle\Logger\MessageLogger A Symfony\Bundle\SwiftmailerBundle\Logger\MessageLogger instance.
     */
    protected function getSwiftmailer_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.plugin.messagelogger'] = new \Symfony\Bundle\SwiftmailerBundle\Logger\MessageLogger();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/home/moises/Desarrollo/PSN/PSN/app/Resources');
    }

    /**
     * Gets the 'translator.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Translation\MessageSelector A Symfony\Component\Translation\MessageSelector instance.
     */
    protected function getTranslator_SelectorService()
    {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector();
    }

    /**
     * Gets the 'validator.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Validator\Mapping\ClassMetadataFactory A Symfony\Component\Validator\Mapping\ClassMetadataFactory instance.
     */
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader(array('assert' => 'Symfony\\Component\\Validator\\Constraints\\')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/home/moises/Desarrollo/PSN/PSN/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/DependencyInjection/../../../Component/Form/Resources/config/validation.xml', 1 => '/home/moises/Desarrollo/PSN/PSN/vendor/bundles/FOS/UserBundle/Resources/config/validation.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!array_key_exists($name, $this->parameters)) {
            throw new \InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        return array_key_exists(strtolower($name), $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new \LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/home/moises/Desarrollo/PSN/PSN/app',
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/home/moises/Desarrollo/PSN/PSN/app/cache/dev',
            'kernel.logs_dir' => '/home/moises/Desarrollo/PSN/PSN/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Symfony\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'SFMPicmntBundle' => 'SFM\\PicmntBundle\\SFMPicmntBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SymfonyWebConfiguratorBundle' => 'Symfony\\Bundle\\WebConfiguratorBundle\\SymfonyWebConfiguratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => 'localhost',
            'database_name' => 'symfony2',
            'database_user' => 'root',
            'database_password' => 'P4ssW0rd',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'localhost',
            'mailer_user' => '',
            'mailer_password' => '',
            'locale' => 'en',
            'csrf_secret' => 'xxxxxxxxxx',
            'request_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\RequestListener',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\ResponseListener',
            'exception_listener.class' => 'Symfony\\Component\\HttpKernel\\Debug\\ExceptionListener',
            'form.field_factory.class' => 'Symfony\\Component\\Form\\FieldFactory\\FieldFactory',
            'form.field_factory.validator_guesser.class' => 'Symfony\\Component\\Form\\FieldFactory\\ValidatorFieldFactoryGuesser',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\CsrfProvider\\SessionCsrfProvider',
            'form.context.class' => 'Symfony\\Component\\Form\\FormContext',
            'form.csrf_protection.enabled' => true,
            'form.csrf_protection.field_name' => '_token',
            'form.csrf_protection.secret' => 'xxxxxxxxxx',
            'form.validation_groups' => 'Default',
            'event_dispatcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpKernel',
            'error_handler.class' => 'Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler',
            'filesystem.class' => 'Symfony\\Component\\HttpKernel\\Util\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_warmer.autoloader_map.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ClassMapCacheWarmer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'debug.event_dispatcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\Debug\\TraceableEventDispatcher',
            'kernel.cache_warmup' => false,
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\Profiler\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.timer.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\TimerDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'router.class' => 'Symfony\\Component\\Routing\\Router',
            'router.cached.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\CachedRouter',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appdevUrlMatcher',
            'router.options.generator.cache_class' => 'appdevUrlGenerator',
            'router.options.resource_type' => '',
            'routing.resource' => '/home/moises/Desarrollo/PSN/PSN/app/config/routing_dev.yml',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\NativeSessionStorage',
            'session.storage.native.options' => array(
                'lifetime' => 3600,
            ),
            'session.storage.pdo.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\PdoSessionStorage',
            'session.storage.pdo.options' => array(

            ),
            'session.storage.array.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\ArraySessionStorage',
            'session.storage.array.options' => array(

            ),
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.locator.cached.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\CachedTemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset_package.class' => 'Symfony\\Component\\Templating\\Asset\\AssetPackage',
            'templating.debugger.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Debugger',
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.user.provider.entity.class' => 'Symfony\\Component\\Security\\Core\\User\\EntityUserProvider',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rembemerme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Bundle\\SecurityBundle\\ResponseListener',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.access.always_authenticate_before_granting' => false,
            'security.role_hierarchy.roles' => array(

            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.form.resources' => array(
                0 => 'TwigBundle::form.html.twig',
            ),
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'cache' => '/home/moises/Desarrollo/PSN/PSN/app/cache/dev/twig',
                'charset' => 'UTF-8',
            ),
            'monolog.logger.class' => 'Symfony\\Bundle\\MonologBundle\\Logger\\Logger',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bundle\\MonologBundle\\Logger\\DebugHandler',
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\Logger\\MessageLogger',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.transport.name' => 'smtp',
            'swiftmailer.transport.smtp.encryption' => NULL,
            'swiftmailer.transport.smtp.port' => 25,
            'swiftmailer.transport.smtp.host' => 'localhost',
            'swiftmailer.transport.smtp.username' => '',
            'swiftmailer.transport.smtp.password' => '',
            'swiftmailer.transport.smtp.auth_mode' => NULL,
            'swiftmailer.single_address' => NULL,
            'doctrine.dbal.default_connection' => 'default',
            'doctrine.dbal.logger.debug_class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger_class' => 'Symfony\\Bundle\\DoctrineBundle\\Logger\\DbalLogger',
            'doctrine.dbal.configuration_class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Symfony\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.event_manager_class' => 'Doctrine\\Common\\EventManager',
            'doctrine.dbal.connection_factory_class' => 'Symfony\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.dbal.types' => array(

            ),
            'doctrine.orm.default_entity_manager' => 'default',
            'doctrine.orm.configuration_class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager_class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.entity_managers' => array(
                0 => 'default',
            ),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine.orm.proxy_dir' => '/home/moises/Desarrollo/PSN/PSN/app/cache/dev/doctrine/orm/Proxies',
            'doctrine.orm.cache.array_class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc_class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache_class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance_class' => 'Memcache',
            'doctrine.orm.cache.xcache_class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.metadata.driver_chain_class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation_class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.annotation_reader_class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'doctrine.orm.metadata.xml_class' => 'Doctrine\\ORM\\Mapping\\Driver\\XmlDriver',
            'doctrine.orm.metadata.yml_class' => 'Doctrine\\ORM\\Mapping\\Driver\\YamlDriver',
            'doctrine.orm.metadata.php_class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp_class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.class_metadata_factory_name' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bundle\\DoctrineBundle\\CacheWarmer\\ProxyCacheWarmer',
            'form.field_factory.doctrine_guesser.class' => 'Symfony\\Component\\Form\\FieldFactory\\EntityFieldFactoryGuesser',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.coalescing_directory_resource.class' => 'Assetic\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => '/home/moises/Desarrollo/PSN/PSN/app/cache/dev/assetic',
            'assetic.twig_extension.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\DynamicExtension',
            'assetic.twig_extension.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\StaticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.read_from' => '/home/moises/Desarrollo/PSN/PSN/app/../web',
            'assetic.write_to' => '/home/moises/Desarrollo/PSN/PSN/app/../web',
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\DynamicExtension',
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.configuration_reader.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\AnnotationReader',
            'annotations.parser.class' => 'Doctrine\\Common\\Annotations\\Parser',
            'annotations.controller_parser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Controller\\ControllerAnnotationParser',
            'routing.loader.annot_glob.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationGlobLoader',
            'routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Controller\\ParamConverterListener',
            'converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'view.template_annotation.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\View\\AnnotationTemplateListener',
            'security.secured_services' => array(

            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.extra.controller_listener.class' => 'JMS\\SecurityExtraBundle\\Controller\\ControllerListener',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.secure_all_services' => false,
            'fos_user.user_manager.class' => 'FOS\\UserBundle\\Entity\\UserManager',
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.encoder_factory.class' => 'FOS\\UserBundle\\Security\\Encoder\\EncoderFactory',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.firewall_name' => 'main',
            'fos_user.encoder.algorithm' => 'sha512',
            'fos_user.encoder.encode_as_base64' => false,
            'fos_user.encoder.iterations' => 1,
            'fos_user.template.theme' => 'FOSUserBundleaa::layout.html.twig',
            'fos_user.template.engine' => 'twig',
            'fos_user.form.user.name' => 'fos_user_user_form',
            'fos_user.form.change_password.name' => 'fos_user_change_password_form',
            'fos_user.form.reset_password.name' => 'fos_user_reset_password_form',
            'fos_user.form.user.validation_groups' => array(
                0 => 'Registration',
            ),
            'fos_user.form.change_password.validation_groups' => array(
                0 => 'ChangePassword',
            ),
            'fos_user.form.reset_password.validation_groups' => array(
                0 => 'ResetPassword',
            ),
            'fos_user.model.user.class' => 'SFM\\PicmntBundle\\Entity\\User',
            'fos_user.form.user.class' => 'FOS\\UserBundle\\Form\\UserForm',
            'fos_user.form.change_password.class' => 'FOS\\UserBundle\\Form\\ChangePasswordForm',
            'fos_user.form.reset_password.class' => 'FOS\\UserBundle\\Form\\ResetPasswordForm',
            'fos_user.controller.user.class' => 'FOS\\UserBundle\\Controller\\UserController',
            'fos_user.controller.security.class' => 'FOS\\UserBundle\\Controller\\SecurityController',
            'fos_user.util.email_canonicalizer.class' => 'FOS\\UserBundle\\Util\\Canonicalizer',
            'fos_user.util.username_canonicalizer.class' => 'FOS\\UserBundle\\Util\\Canonicalizer',
            'fos_user.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.email.confirmation.enabled' => false,
            'fos_user.email.confirmation.template' => 'FOSUserBundle:User:confirmationEmail',
            'fos_user.email.resetting_password.template' => 'FOSUserBundle:User:resettingPasswordEmail',
            'fos_user.email.resetting_password.token_ttl' => 86400,
            'web_profiler.debug.toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\WebDebugToolbarListener',
            'symfony.webconfigurator.class' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Configurator',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => 'WebProfilerBundle:Collector:config',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => 'WebProfilerBundle:Collector:request',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => 'WebProfilerBundle:Collector:exception',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => 'WebProfilerBundle:Collector:events',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => 'WebProfilerBundle:Collector:logger',
                ),
                'data_collector.timer' => array(
                    0 => 'timer',
                    1 => 'WebProfilerBundle:Collector:timer',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => 'WebProfilerBundle:Collector:memory',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => 'SecurityBundle:Collector:security',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => 'SwiftmailerBundle:Collector:swiftmailer',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => 'DoctrineBundle:Collector:db',
                ),
            ),
            'kernel.compiled_classes' => array(
                0 => 'Symfony\\Component\\Routing\\RouterInterface',
                1 => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
                2 => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher',
                3 => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
                4 => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
                5 => 'Symfony\\Component\\Routing\\Router',
                6 => 'Symfony\\Component\\HttpFoundation\\Session',
                7 => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\SessionStorageInterface',
                9 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface',
                10 => 'Symfony\\Component\\Templating\\TemplateNameParserInterface',
                11 => 'Symfony\\Component\\Templating\\TemplateNameParser',
                12 => 'Symfony\\Component\\Templating\\EngineInterface',
                13 => 'Symfony\\Component\\Config\\FileLocatorInterface',
                14 => 'Symfony\\Component\\Templating\\TemplateReferenceInterface',
                15 => 'Symfony\\Component\\Templating\\TemplateReference',
                16 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference',
                17 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
                18 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
                19 => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
                20 => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                21 => 'Symfony\\Component\\HttpFoundation\\Request',
                22 => 'Symfony\\Component\\HttpFoundation\\Response',
                23 => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
                24 => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
                25 => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
                26 => 'Symfony\\Component\\EventDispatcher\\Event',
                27 => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
                28 => 'Symfony\\Component\\HttpKernel\\HttpKernel',
                29 => 'Symfony\\Component\\HttpKernel\\ResponseListener',
                30 => 'Symfony\\Component\\HttpKernel\\Controller\\ControllerResolver',
                31 => 'Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface',
                32 => 'Symfony\\Component\\HttpKernel\\Event\\KernelEvent',
                33 => 'Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent',
                34 => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
                35 => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
                36 => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent',
                37 => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
                38 => 'Symfony\\Component\\HttpKernel\\Events',
                39 => 'Symfony\\Bundle\\FrameworkBundle\\RequestListener',
                40 => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
                41 => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
                42 => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller',
                43 => 'Symfony\\Bundle\\FrameworkBundle\\ContainerAwareEventDispatcher',
                44 => 'Symfony\\Component\\Security\\Http\\AccessMap',
                45 => 'Symfony\\Component\\Security\\Http\\Firewall',
                46 => 'Symfony\\Component\\Security\\Http\\FirewallMapInterface',
                47 => 'Symfony\\Component\\Security\\Core\\SecurityContext',
                48 => 'Symfony\\Component\\Security\\Core\\SecurityContextInterface',
                49 => 'Symfony\\Component\\Security\\Core\\User\\UserProviderInterface',
                50 => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
                51 => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface',
                52 => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
                53 => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface',
                54 => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface',
                55 => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
                56 => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
                57 => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
                58 => 'Symfony\\Component\\HttpFoundation\\RequestMatcherInterface',
                59 => 'Twig_Environment',
                60 => 'Twig_ExtensionInterface',
                61 => 'Twig_Extension',
                62 => 'Twig_Extension_Core',
                63 => 'Twig_Extension_Escaper',
                64 => 'Twig_Extension_Optimizer',
                65 => 'Twig_LoaderInterface',
                66 => 'Twig_Markup',
                67 => 'Twig_TemplateInterface',
                68 => 'Twig_Template',
                69 => 'Monolog\\Formatter\\FormatterInterface',
                70 => 'Monolog\\Formatter\\LineFormatter',
                71 => 'Monolog\\Handler\\HandlerInterface',
                72 => 'Monolog\\Handler\\AbstractHandler',
                73 => 'Monolog\\Handler\\StreamHandler',
                74 => 'Monolog\\Handler\\FingersCrossedHandler',
                75 => 'Monolog\\Handler\\TestHandler',
                76 => 'Monolog\\Logger',
                77 => 'Symfony\\Bundle\\MonologBundle\\Logger\\Logger',
                78 => 'Symfony\\Bundle\\MonologBundle\\Logger\\DebugHandler',
                79 => 'JMS\\SecurityExtraBundle\\Controller\\ControllerListener',
                80 => 'JMS\\SecurityExtraBundle\\Mapping\\Driver\\AnnotationParser',
                81 => 'JMS\\SecurityExtraBundle\\Mapping\\Driver\\AnnotationConverter',
                82 => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodInvocation',
            ),
            'kernel.autoload_classes' => array(

            ),
            'translation.loaders' => array(
                'translation.loader.php' => 'php',
                'translation.loader.yml' => 'yml',
                'translation.loader.xliff' => 'xliff',
            ),
        );
    }
}
