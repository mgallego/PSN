<?php

/* PSNMainBundle:Default:index.html.twig */
class __TwigTemplate_97113d3bd4234b4ba866a09fcb46d0ab extends Twig_Template
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
            $this->parent = $this->env->loadTemplate("PSNMainBundle::layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<h1>PSN</h1>

<h2> Acciones disponibles </h2>

  <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_psn_prueba"), "html");
        echo "\">Prueba</a>

  ";
        // line 10
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        echo "  

  ";
        // line 12
        echo $this->getContext($context, 'code', '12');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PSNMainBundle:Default:index.html.twig";
    }
}
