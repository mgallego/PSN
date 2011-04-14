<?php

use Symfony\Component\Routing\Matcher\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Matcher\Exception\NotFoundException;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        // _profiler_search
        if ($pathinfo === '/_profiler/search') {
            return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
        }

        // _profiler_purge
        if ($pathinfo === '/_profiler/purge') {
            return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
        }

        // _profiler_import
        if ($pathinfo === '/_profiler/import') {
            return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
        }

        // _profiler_export
        if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\.]+?)\.txt$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
        }

        // _profiler_search_results
        if (0 === strpos($pathinfo, '/_profiler') && preg_match('#^/_profiler/(?P<token>[^/\.]+?)/search/results$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
        }

        // _profiler
        if (0 === strpos($pathinfo, '/_profiler') && preg_match('#^/_profiler/(?P<token>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
        }

        // _configurator_home
        if (rtrim($pathinfo, '/') === '/_configurator') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_configurator_home');
            }
            return array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
        }

        // _configurator_step
        if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
        }

        // _configurator_final
        if ($pathinfo === '/_configurator/final') {
            return array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }
            return array (  '_controller' => 'SFM\\PicmntBundle\\Controller\\IndexController::indexAction',  '_route' => 'home',);
        }

        // _security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'fos_user.controller.security:loginAction',  '_route' => '_security_login',);
        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'fos_user.controller.security:loginAction',  '_route' => '_security_check',);
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
