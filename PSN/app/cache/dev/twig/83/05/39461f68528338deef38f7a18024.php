<?php

/* FOSUserBundle:User:list.html.twig */
class __TwigTemplate_830539461f68528338deef38f7a18024 extends Twig_Template
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
        $template = "FOSUserBundle:User:list_content.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display($context);
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, $context);
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:list.html.twig";
    }
}