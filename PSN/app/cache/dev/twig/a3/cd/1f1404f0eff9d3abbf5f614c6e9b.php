<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_a3cd1f1404f0eff9d3abbf5f614c6e9b extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"13\" height=\"28\" alt=\"Memory Usage\" style=\"vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcCAYAAAC6YTVCAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJBJREFUeNpi/P//PwOpgImBDDAcNbE4ODiAg+/AgQOC586d+4BLoZGRkQBQ7Xt0mxQIWKCAzXkCBDQJDEBAIHOKiooicSkEBtTz0WQ0xFI5Mqevr285HrUOMAajvb09ySULk5+f3w1SNIDUMwKLsAIg256IrAECoEx6EKQJlLkkgJiDCE0/gPgF4+AuLAECDAAolCeEmdURAgAAAABJRU5ErkJggg==\"/>
    ";
        $context['icon'] = new Twig_Markup(ob_get_clean());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, sprintf("%.0f", ($this->getAttribute($this->getContext($context, 'collector', '8'), "memory", array(), "any", false, 8) / 1024)), "html");
        echo " KB
    ";
        $context['text'] = new Twig_Markup(ob_get_clean());
        // line 10
        echo "    ";
        $template = "WebProfilerBundle:Profiler:toolbar_item.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array_merge($context, array("link" => false)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array_merge($context, array("link" => false)));
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }
}
