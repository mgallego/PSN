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
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
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

    private function get_welcomeRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_security_checkRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login_check',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'logout',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['name'] = 'World';
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'hello',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction';

        return array(array (  'name' => '{name}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{name}',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'hello',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction';

        return array(array (  'name' => '{name}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{name}',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'hello',    3 => NULL,  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  4 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demoRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\DemoController::indexAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\DemoController::helloAction';

        return array(array (  'name' => '{name}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{name}',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'hello',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\DemoController::contactAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'contact',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }
}
