<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_8a50e0f8621c9d669ba0bd3fb464baa7 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->renderParentBlock("content_header_more", $context, $blocks), "html");
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context['app']) ? $context['app'] : null), "user", array(), "any", false)) ? ($this->getAttribute($this->getAttribute((isset($context['app']) ? $context['app'] : null), "user", array(), "any", false), "username", array(), "any", false)) : ("Anonymous")), "html");
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html");
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }
}
