<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_7b4a301e5653aae9aae05bdb6c6c891c extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
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
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
    ";
        $context['icon'] = new Twig_Markup(ob_get_clean());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <span title=\"";
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, 'collector'), "time", array(), "any", false) * 1000)), "html");
        echo " ms\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector'), "querycount", array(), "any", false), "html");
        echo "</span>
    ";
        $context['text'] = new Twig_Markup(ob_get_clean());
        // line 10
        echo "    ";
        $template = "WebProfilerBundle:Profiler:toolbar_item.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array_merge($context, array("link" => $this->getContext($context, 'profiler_url'))));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array_merge($context, array("link" => $this->getContext($context, 'profiler_url'))));
        }
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/profiler/db.png"), "html");
        echo "\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector'), "querycount", array(), "any", false), "html");
        echo "</span>
        <span>";
        // line 19
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute($this->getContext($context, 'collector'), "time", array(), "any", false) * 1000)), "html");
        echo " ms</span>
    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Queries</h2>

    ";
        // line 27
        if ((!$this->getAttribute($this->getContext($context, 'collector'), "querycount", array(), "any", false))) {
            // line 28
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <ul class=\"alt\">
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector'), "queries", array(), "any", false));
            foreach ($context['_seq'] as $context['i'] => $context['query']) {
                // line 34
                echo "                <li class=\"";
                echo ((twig_test_odd($this->getContext($context, 'i'))) ? ("odd") : ("even"));
                echo "\">
                    <div>
                        <code>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'query'), "sql", array(), "any", false), "html");
                echo "</code>
                    </div>
                    <small>
                        <strong>Parameters</strong>: ";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, 'query'), "params", array(), "any", false)), "html");
                echo "<br />
                        <strong>Time</strong>: ";
                // line 40
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, 'query'), "executionMS", array(), "any", false) * 1000)), "html");
                echo " ms
                    </small>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 44
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }
}
