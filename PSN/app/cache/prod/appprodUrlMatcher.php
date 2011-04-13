<?php

use Symfony\Component\Routing\Matcher\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Matcher\Exception\NotFoundException;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'fos_user.controller.security:loginAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
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
                return $this->redirect($pathinfo.'/', '_demo');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
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
            return array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::contactAction',  '_route' => '_demo_contact',);
        }

        // _demo_create_user
        if ($pathinfo === '/demo/createUser') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::CreateUserAction',  '_route' => '_demo_create_user',);
        }

        // _demo_create
        if ($pathinfo === '/demo/create') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::createAction',  '_route' => '_demo_create',);
        }

        // _psn
        if (rtrim($pathinfo, '/') === '/psn') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_psn');
            }
            return array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => '_psn',);
        }

        // _psn_prueba
        if ($pathinfo === '/psn/prueba') {
            return array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::pruebaAction',  '_route' => '_psn_prueba',);
        }

        // _psn_login
        if ($pathinfo === '/psn/login') {
            return array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::loginAction',  '_route' => '_psn_login',);
        }

        // _psn_login_check
        if ($pathinfo === '/psn/login_check') {
            return array (  '_controller' => 'PSN\\MainBundle\\Controller\\DefaultController::loginCheckAction',  '_route' => '_psn_login_check',);
        }

        // _security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'fos_user.controller.security:loginAction',  '_route' => '_security_login',);
        }

        // _security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'fos_user.controller.security:logoutAction',  '_route' => '_security_logout',);
        }

        // fos_user_user_list
        if ($pathinfo === '/user/list') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_list;
            }
            return array (  '_controller' => 'fos_user.controller.user:listAction',  '_route' => 'fos_user_user_list',);
        }
        not_fos_user_user_list:

        // fos_user_user_new
        if ($pathinfo === '/user/new') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_new;
            }
            return array (  '_controller' => 'fos_user.controller.user:newAction',  '_route' => 'fos_user_user_new',);
        }
        not_fos_user_user_new:

        // fos_user_user_create
        if ($pathinfo === '/user/new') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('post'))) {
                $allow = array_merge($allow, array('post'));
                goto not_fos_user_user_create;
            }
            return array (  '_controller' => 'fos_user.controller.user:createAction',  '_route' => 'fos_user_user_create',);
        }
        not_fos_user_user_create:

        // fos_user_user_check_confirmation_email
        if ($pathinfo === '/user/check-confirmation-email') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_check_confirmation_email;
            }
            return array (  '_controller' => 'fos_user.controller.user:checkConfirmationEmailAction',  '_route' => 'fos_user_user_check_confirmation_email',);
        }
        not_fos_user_user_check_confirmation_email:

        // fos_user_user_confirm
        if (0 === strpos($pathinfo, '/user/confirm') && preg_match('#^/user/confirm/(?P<token>[^/\.]+?)$#x', $pathinfo, $matches)) {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_confirm;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'fos_user.controller.user:confirmAction',)), array('_route' => 'fos_user_user_confirm'));
        }
        not_fos_user_user_confirm:

        // fos_user_user_confirmed
        if ($pathinfo === '/user/confirmed') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_confirmed;
            }
            return array (  '_controller' => 'fos_user.controller.user:confirmedAction',  '_route' => 'fos_user_user_confirmed',);
        }
        not_fos_user_user_confirmed:

        // fos_user_user_change_password
        if ($pathinfo === '/user/change-password') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_change_password;
            }
            return array (  '_controller' => 'fos_user.controller.user:changePasswordAction',  '_route' => 'fos_user_user_change_password',);
        }
        not_fos_user_user_change_password:

        // fos_user_user_change_password_update
        if ($pathinfo === '/user/change-password') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('post'))) {
                $allow = array_merge($allow, array('post'));
                goto not_fos_user_user_change_password_update;
            }
            return array (  '_controller' => 'fos_user.controller.user:changePasswordUpdateAction',  '_route' => 'fos_user_user_change_password_update',);
        }
        not_fos_user_user_change_password_update:

        // fos_user_user_request_reset_password
        if ($pathinfo === '/user/request-reset-password') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_request_reset_password;
            }
            return array (  '_controller' => 'fos_user.controller.user:requestResetPasswordAction',  '_route' => 'fos_user_user_request_reset_password',);
        }
        not_fos_user_user_request_reset_password:

        // fos_user_user_send_resetting_email
        if ($pathinfo === '/user/send-resetting-email') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('post'))) {
                $allow = array_merge($allow, array('post'));
                goto not_fos_user_user_send_resetting_email;
            }
            return array (  '_controller' => 'fos_user.controller.user:sendResettingEmailAction',  '_route' => 'fos_user_user_send_resetting_email',);
        }
        not_fos_user_user_send_resetting_email:

        // fos_user_user_check_resetting_email
        if ($pathinfo === '/user/check-resetting-email') {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_check_resetting_email;
            }
            return array (  '_controller' => 'fos_user.controller.user:checkResettingEmailAction',  '_route' => 'fos_user_user_check_resetting_email',);
        }
        not_fos_user_user_check_resetting_email:

        // fos_user_user_reset_password
        if (0 === strpos($pathinfo, '/user/reset-password') && preg_match('#^/user/reset\-password/(?P<token>[^/\.]+?)$#x', $pathinfo, $matches)) {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_reset_password;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'fos_user.controller.user:resetPasswordAction',)), array('_route' => 'fos_user_user_reset_password'));
        }
        not_fos_user_user_reset_password:

        // fos_user_user_reset_password_update
        if (0 === strpos($pathinfo, '/user/reset-password') && preg_match('#^/user/reset\-password/(?P<token>[^/\.]+?)$#x', $pathinfo, $matches)) {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('post'))) {
                $allow = array_merge($allow, array('post'));
                goto not_fos_user_user_reset_password_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'fos_user.controller.user:resetPasswordUpdateAction',)), array('_route' => 'fos_user_user_reset_password_update'));
        }
        not_fos_user_user_reset_password_update:

        // fos_user_user_show
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<username>[^/\.]+?)$#x', $pathinfo, $matches)) {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_show;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'fos_user.controller.user:showAction',)), array('_route' => 'fos_user_user_show'));
        }
        not_fos_user_user_show:

        // fos_user_user_edit
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<username>[^/\.]+?)/edit$#x', $pathinfo, $matches)) {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_edit;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'fos_user.controller.user:editAction',)), array('_route' => 'fos_user_user_edit'));
        }
        not_fos_user_user_edit:

        // fos_user_user_update
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<username>[^/\.]+?)/edit$#x', $pathinfo, $matches)) {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('post'))) {
                $allow = array_merge($allow, array('post'));
                goto not_fos_user_user_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'fos_user.controller.user:updateAction',)), array('_route' => 'fos_user_user_update'));
        }
        not_fos_user_user_update:

        // fos_user_user_delete
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<username>[^/\.]+?)/delete$#x', $pathinfo, $matches)) {
            if (isset($this->context['method']) && !in_array(strtolower($this->context['method']), array('get'))) {
                $allow = array_merge($allow, array('get'));
                goto not_fos_user_user_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'fos_user.controller.user:deleteAction',)), array('_route' => 'fos_user_user_delete'));
        }
        not_fos_user_user_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new NotFoundException();
    }
}
