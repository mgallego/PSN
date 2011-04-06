<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_37ae276a58aa283e8c05e2b4bd0da262 extends Twig_Template
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

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 3
        $context['__internal_37ae276a58aa283e8c05e2b4bd0da262_1'] = $this;
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '20'), "calledlisteners", array(), "any", false, 20));
        foreach ($context['_seq'] as $context['_key'] => $context['listener']) {
            // line 21
            echo "            <tr>
                <td><code>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'listener', '22'), "event", array(), "any", false, 22), "html");
            echo "</code></td>
                <td><code>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context['__internal_37ae276a58aa283e8c05e2b4bd0da262_1'], "display_listener", array($this->getContext($context, 'listener', '23'), ), "method", false, 23), "html");
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
        if ($this->getAttribute($this->getContext($context, 'collector', '28'), "notcalledlisteners", array(), "any", false, 28)) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '36'), "notcalledlisteners", array(), "any", false, 36));
            foreach ($context['_seq'] as $context['_key'] => $context['listener']) {
                // line 37
                echo "                <tr>
                    <td><code>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'listener', '38'), "event", array(), "any", false, 38), "html");
                echo "</code></td>
                    <td><code>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context['__internal_37ae276a58aa283e8c05e2b4bd0da262_1'], "display_listener", array($this->getContext($context, 'listener', '39'), ), "method", false, 39), "html");
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
        if (($this->getAttribute($this->getContext($context, 'listener', '47'), "type", array(), "any", false, 47) == "Closure")) {
            // line 48
            echo "        Closure
    ";
        } else {
            // line 50
            echo "        ";
            $context['link'] = $this->env->getExtension('templating')->getFileLink($this->getAttribute($this->getContext($context, 'listener', '50'), "file", array(), "any", false, 50), $this->getAttribute($this->getContext($context, 'listener', '50'), "line", array(), "any", false, 50));
            // line 51
            echo "        ";
            echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'listener', '51'), "class", array(), "any", false, 51));
            echo "::";
            if ($this->getContext($context, 'link', '51')) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'link', '51'), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'listener', '51'), "event", array(), "any", false, 51), "html");
                echo "</a>";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'listener', '51'), "event", array(), "any", false, 51), "html");
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
