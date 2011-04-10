<?php

use Symfony\Component\Routing\Matcher\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Matcher\Exception\NotFoundException;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function match($pathinfo)
    {
        $allow = array();

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$pathinfo.'/', 'permanent' => true, '_route' => '_welcome');
            }
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',)), array('_route' => '_welcome'));
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',)), array('_route' => '_demo_login'));
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',)), array('_route' => '_security_check'));
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',)), array('_route' => '_demo_logout'));
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array_merge($this->mergeDefaults(array(), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => 'acme_demo_secured_hello'));
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$pathinfo.'/', 'permanent' => true, '_route' => '_demo');
            }
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',)), array('_route' => '_demo'));
        }

        // _demo_crear
        if (0 === strpos($pathinfo, '/demo/crear') && preg_match('#^/demo/crear/(?P<name>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::crearAction',)), array('_route' => '_demo_crear'));
        }

        // _demo_consultar
        if (0 === strpos($pathinfo, '/demo/consultar') && preg_match('#^/demo/consultar/(?P<id>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::consultarAction',)), array('_route' => '_demo_consultar'));
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/psn/contact') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::contactAction',)), array('_route' => '_demo_contact'));
        }

        // _psn
        if (rtrim($pathinfo, '/') === '/psn') {
            if (substr($pathinfo, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$pathinfo.'/', 'permanent' => true, '_route' => '_psn');
            }
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::indexAction',)), array('_route' => '_psn'));
        }

        // _psn_prueba
        if ($pathinfo === '/psn/prueba') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::pruebaAction',)), array('_route' => '_psn_prueba'));
        }

        // _psn_login
        if ($pathinfo === '/psn/login') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::loginAction',)), array('_route' => '_psn_login'));
        }

        // _psn_login_check
        if ($pathinfo === '/psn/login_check') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::loginCheckAction',)), array('_route' => '_psn_login_check'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new NotFoundException();
    }
}
