<?php

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'home' => true,
       '_security_login' => true,
       '_security_check' => true,
       '_security_logout' => true,
       'fos_user_user_list' => true,
       'fos_user_user_new' => true,
       'fos_user_user_create' => true,
       'fos_user_user_check_confirmation_email' => true,
       'fos_user_user_confirm' => true,
       'fos_user_user_confirmed' => true,
       'fos_user_user_change_password' => true,
       'fos_user_user_change_password_update' => true,
       'fos_user_user_request_reset_password' => true,
       'fos_user_user_send_resetting_email' => true,
       'fos_user_user_check_resetting_email' => true,
       'fos_user_user_reset_password' => true,
       'fos_user_user_reset_password_update' => true,
       'fos_user_user_show' => true,
       'fos_user_user_edit' => true,
       'fos_user_user_update' => true,
       'fos_user_user_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function generate($name, array $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new \InvalidArgumentException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function gethomeRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'SFM\\PicmntBundle\\Controller\\IndexController::indexAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),));
    }

    private function get_security_loginRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.security:loginAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login',    3 => NULL,  ),));
    }

    private function get_security_checkRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.security:loginAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login_check',    3 => NULL,  ),));
    }

    private function get_security_logoutRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.security:logoutAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'logout',    3 => NULL,  ),));
    }

    private function getfos_user_user_listRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:listAction';

        return array(array (), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'list',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_newRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:newAction';

        return array(array (), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'new',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_createRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:createAction';

        return array(array (), $defaults, array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'new',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_check_confirmation_emailRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:checkConfirmationEmailAction';

        return array(array (), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'check-confirmation-email',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_confirmRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:confirmAction';

        return array(array (  'token' => '{token}',), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'confirm',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_confirmedRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:confirmedAction';

        return array(array (), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'confirmed',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_change_passwordRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:changePasswordAction';

        return array(array (), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'change-password',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_change_password_updateRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:changePasswordUpdateAction';

        return array(array (), $defaults, array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'change-password',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_request_reset_passwordRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:requestResetPasswordAction';

        return array(array (), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'request-reset-password',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_send_resetting_emailRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:sendResettingEmailAction';

        return array(array (), $defaults, array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'send-resetting-email',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_check_resetting_emailRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:checkResettingEmailAction';

        return array(array (), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'check-resetting-email',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_reset_passwordRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:resetPasswordAction';

        return array(array (  'token' => '{token}',), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'reset-password',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_reset_password_updateRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:resetPasswordUpdateAction';

        return array(array (  'token' => '{token}',), $defaults, array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'reset-password',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_showRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:showAction';

        return array(array (  'username' => '{username}',), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{username}',    3 => 'username',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_editRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:editAction';

        return array(array (  'username' => '{username}',), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'edit',    3 => NULL,  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '{username}',    3 => 'username',  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_updateRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:updateAction';

        return array(array (  'username' => '{username}',), $defaults, array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'edit',    3 => NULL,  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '{username}',    3 => 'username',  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    private function getfos_user_user_deleteRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'fos_user.controller.user:deleteAction';

        return array(array (  'username' => '{username}',), $defaults, array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'delete',    3 => NULL,  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '{username}',    3 => 'username',  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }
}
