<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_ce8f346d261c40f908d424020bc44b8e extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

        // line 3
        $context['__internal_ce8f346d261c40f908d424020bc44b8e_1'] = $this;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/profiler/events.png"), "html");
        echo "\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector'), "calledlisteners", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['listener']) {
            // line 21
            echo "            <tr>
                <td><code>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'listener'), "event", array(), "any", false), "html");
            echo "</code></td>
                <td><code>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context['__internal_ce8f346d261c40f908d424020bc44b8e_1'], "display_listener", array($this->getContext($context, 'listener'), ), "method", false), "html");
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "    </table>

    ";
        // line 28
        if ($this->getAttribute($this->getContext($context, 'collector'), "notcalledlisteners", array(), "any", false)) {
            // line 29
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector'), "notcalledlisteners", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['listener']) {
                // line 37
                echo "                <tr>
                    <td><code>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'listener'), "event", array(), "any", false), "html");
                echo "</code></td>
                    <td><code>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context['__internal_ce8f346d261c40f908d424020bc44b8e_1'], "display_listener", array($this->getContext($context, 'listener'), ), "method", false), "html");
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 42
            echo "        </table>
    ";
        }
    }

    // line 46
    public function getdisplay_listener($listener = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "listener" => $listener,
        ));

        ob_start();
        // line 47
        echo "    ";
        if (($this->getAttribute($this->getContext($context, 'listener'), "type", array(), "any", false) == "Closure")) {
            // line 48
            echo "        Closure
    ";
        } else {
            // line 50
            echo "        ";
            $context['link'] = $this->env->getExtension('templating')->getFileLink($this->getAttribute($this->getContext($context, 'listener'), "file", array(), "any", false), $this->getAttribute($this->getContext($context, 'listener'), "line", array(), "any", false));
            // line 51
            echo "        ";
            echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'listener'), "class", array(), "any", false));
            echo "::";
            if ($this->getContext($context, 'link')) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'link'), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'listener'), "event", array(), "any", false), "html");
                echo "</a>";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'listener'), "event", array(), "any", false), "html");
            }
            // line 52
            echo "    ";
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }
}
