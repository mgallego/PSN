<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7ca468c8854bf7c8a24716cfcb700458 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        if ($this->getContext($context, 'error')) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'error'), "html");
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_username'), "html");
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">Remember Me</label>

    <input type=\"submit\" name=\"login\" />
</form>
<p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_user_request_reset_password"), "html");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Forgotten password", array(), "FOSUserBundle");
        echo "</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }
}
