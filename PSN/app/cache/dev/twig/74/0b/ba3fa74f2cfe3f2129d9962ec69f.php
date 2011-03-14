<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_740bba3fa74f2cfe3f2129d9962ec69f extends Twig_Template
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
            $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->renderParentBlock("content", $context, $blocks), "html");
        echo "

    <p>
        Hello ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, 'name', '7'), "html");
        echo "!
    </p>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }
}
