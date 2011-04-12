<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_9092955ad87695806e3d3ae99dc01603 extends Twig_Template
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
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABOZJREFUeNrsVmsspFcY9jHMMsxKE9sxM1SUNHRpSNR9bbQqrrNUCG1E1z3ZyIpq+dEfIiToRtomEiFi/zQrWdlZFFstDYK632ZRu2yxFNu4GzOY6fPKN80YVu1m41dP8uac75zz3t/3OR+jVqv1LnLo613wuHCFnJcdTExM8LOzs+9vb28HaPZMTU1bSkpKohwcHDbPI3xwcPBMhUx+fv6V4eHhG0KhsMfd3V2srYwGfQ8MDPiWlZUtYHjZ2dlJYcBfOFK/qof6YHTs7OxsUigU4rW1tQNjY+NHpzGMjo6my2SyQJVKxcH6mzt37gRmZWXJcKQ6j0IGVcpUV1e/W1NT0y6Xyy1fNScwbCkmJuZaQkLCU11PTwspFc0lhPHW6yijQXzET3LOG9JLYWFhywiTan9//1jVisVilbe3946FhYVieXmZ297ezsN87I6hoaEqODj4BatQfh6FKlipCA8Pf1ZbW2urOQgICNjKzMxsNzExofxQVZrHx8c7FRQUXOvp6THW3CM+GCo/dw4lEsnP6+vrx6rRxsZGWVlZWcHhcH7a2tpaKCwsdElOTpbZ2tqKNjc3I5KSkj5fWVk51lLm5ubNUqk0CsudM3O4sbHxke6mj4/PYyirr6urm4+MjPy1u7v7bkpKyi9VVVV/8/l8qa+v71NdHsj5BJPwP0OKKj2BNmhwCuPs2NiYBOGyoL2DgwPzycnJT7G8y+Vyn2B+T5uHlUN3pzV7rq6uJz3EONG0s7OzXEyHKKZ1Ho93cGQZh6MODQ1dof3FxUXDUwSRHOPY2NjoiIiI22R3XFzcFyEhIT9ibfKvh6jCuY6Ojne0mYEmPsgV19nZ+Y/S0tIHQ0NDHo6OjqNOTk4j8JKP3Hyoq5DkUNEyDHMTwBEI427v7u6KDAwMFNgXgGY0jf/1/Py8pKGh4X00P18jwMrKqjE3N/dLKBJTh4CWR0ZGloqKir6Hhz6ae1FRUZsovMcI+RByzjQ1NcXv7e2ZaBuDtpIhNf2BgYFfkULHxsbGzwBROYeHh/o6KLKAy40I6zJwVLi6uhoKYW9r34EHqpycnO9aWlquA+pccK7n6em5nZqa+ufMzAwfcoU7OzsGkLWOar9Opf28q6tLoKuMRRHx3NxcyllVR3y9vb3CtLS0uoyMjKsU1vT09GZra+s2tJcFKjwVxliiX0ddXFz0SYkB+moQL4T8daBNIBDsARAGkC8F4TLtwYBZTA9Bj2DwUdG1tbU5jI+Pc0ihHJaMFRcXP0Tejg5R9nqJiYmnGkD7dE5DJBIdIGTEN15eXv4xQncEBhUVFbdQod9GR0f/MDU1ZUV7CDWvv7/fnmGtegvkBYbI1tZWLzc3t+dAGDXQxV9XIYS1mpmZMX19fSI/P7/fAQT3sT2pVCo94cHN+vr6D+DNZW2evLy8J7hbj+U9DvukrIE6URwv0HtNWO8iVJYeHh5XgZtXNIz4XrG3t7+H5RLu8TDPkzKQ0sjIqA+NzkxPT6dCoUdQUNAagUFzc/NlROQ33Kml1mC0/trIUyOWCIhtQDdAniAei5HdICnoGfu0KVlSsw+BAD0Yir6V+Pv7L5AcGMCBkTXkEDnCnPGbSL0kYuHKiBW8SlVNjC/hoeRas3zbhIisIcRzhFLMG/4vZVgFBqwyFRsJleb5Yv7/EX7T4x8BBgDTTU7fbnA/yAAAAABJRU5ErkJggg==\"/>
    ";
        $context['icon'] = new Twig_Markup(ob_get_clean());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        ob_start();
        // line 9
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '9'), "controller", array(), "any", false, 9), "class", array(), "any", true, 9)) {
            // line 10
            echo "                <span>";
            echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '10'), "controller", array(), "any", false, 10), "class", array(), "any", false, 10));
            echo "</span>
                <span>::</span>
                ";
            // line 12
            $context['link'] = $this->env->getExtension('templating')->getFileLink($this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '12'), "controller", array(), "any", false, 12), "file", array(), "any", false, 12), $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '12'), "controller", array(), "any", false, 12), "line", array(), "any", false, 12));
            // line 13
            echo "                <span>";
            if ($this->getContext($context, 'link', '13')) {
                echo "<a style=\"color: #2f2f2f\" href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'link', '13'), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '13'), "controller", array(), "any", false, 13), "method", array(), "any", false, 13), "html");
                echo "</a>";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '13'), "controller", array(), "any", false, 13), "method", array(), "any", false, 13), "html");
            }
            echo "</span>
            ";
        } else {
            // line 15
            echo "                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '15'), "controller", array(), "any", false, 15), "html");
            echo "</span>
            ";
        }
        // line 17
        echo "            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span";
        // line 18
        echo (((!$this->getAttribute($this->getContext($context, 'collector', '18'), "route", array(), "any", false, 18))) ? (" style=\"color:#a33\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'collector', '18'), "route", array(), "any", false, 18)) ? ($this->getAttribute($this->getContext($context, 'collector', '18'), "route", array(), "any", false, 18)) : ("NONE")), "html");
        echo "</span>
            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span style=\"color: ";
        // line 20
        echo (((200 == $this->getAttribute($this->getContext($context, 'collector', '20'), "statuscode", array(), "any", false, 20))) ? ("#759e1a") : ("#a33"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '20'), "statuscode", array(), "any", false, 20), "html");
        echo "</span>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 22
        echo "    ";
        $context['text'] = new Twig_Markup(ob_get_clean());
        // line 23
        echo "    ";
        $template = "WebProfilerBundle:Profiler:toolbar_item.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array_merge($context, array("link" => $this->getContext($context, 'profiler_url', '23'))));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array_merge($context, array("link" => $this->getContext($context, 'profiler_url', '23'))));
        }
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        // line 27
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/profiler/request.png"), "html");
        echo "\" alt=\"Request\" /></span>
    <strong>Request</strong>
</span>
";
    }

    // line 33
    public function block_panel($context, array $blocks = array())
    {
        // line 34
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 36
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '36'), "requestquery", array(), "any", false, 36), "all", array(), "any", false, 36))) {
            // line 37
            echo "        ";
            $template = "WebProfilerBundle:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '37'), "requestquery", array(), "any", false, 37)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '37'), "requestquery", array(), "any", false, 37)));
            }
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 43
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 46
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '46'), "requestrequest", array(), "any", false, 46), "all", array(), "any", false, 46))) {
            // line 47
            echo "        ";
            $template = "WebProfilerBundle:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '47'), "requestrequest", array(), "any", false, 47)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '47'), "requestrequest", array(), "any", false, 47)));
            }
            // line 48
            echo "    ";
        } else {
            // line 49
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 53
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '56'), "requestattributes", array(), "any", false, 56), "all", array(), "any", false, 56))) {
            // line 57
            echo "        ";
            $template = "WebProfilerBundle:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '57'), "requestattributes", array(), "any", false, 57)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '57'), "requestattributes", array(), "any", false, 57)));
            }
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '66'), "requestcookies", array(), "any", false, 66), "all", array(), "any", false, 66))) {
            // line 67
            echo "        ";
            $template = "WebProfilerBundle:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '67'), "requestcookies", array(), "any", false, 67)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '67'), "requestcookies", array(), "any", false, 67)));
            }
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Headers</h2>

    ";
        // line 76
        $template = "WebProfilerBundle:Profiler:bag.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '76'), "requestheaders", array(), "any", false, 76)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '76'), "requestheaders", array(), "any", false, 76)));
        }
        // line 77
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 80
        $template = "WebProfilerBundle:Profiler:bag.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '80'), "requestserver", array(), "any", false, 80)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '80'), "requestserver", array(), "any", false, 80)));
        }
        // line 81
        echo "
    <h2>Response Headers</h2>

    ";
        // line 84
        $template = "WebProfilerBundle:Profiler:bag.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '84'), "responseheaders", array(), "any", false, 84)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '84'), "responseheaders", array(), "any", false, 84)));
        }
        // line 85
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 88
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '88'), "sessionattributes", array(), "any", false, 88))) {
            // line 89
            echo "        <table>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>

            ";
            // line 95
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '95'), "sessionattributes", array(), "any", false, 95));
            foreach ($context['_seq'] as $context['key'] => $context['value']) {
                // line 96
                echo "                <tr>
                    <th>";
                // line 97
                echo twig_escape_filter($this->env, $this->getContext($context, 'key', '97'), "html");
                echo "</th>
                    <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($this->getContext($context, 'value', '98')), "html");
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 101
            echo "        </table>
    ";
        } else {
            // line 103
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 107
        echo "

    ";
        // line 109
        if ($this->getAttribute($this->getContext($context, 'profiler', '109'), "parent", array(), "any", false, 109)) {
            // line 110
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, 'profiler', '110'), "parent", array(), "any", false, 110))), "html");
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'profiler', '110'), "parent", array(), "any", false, 110), "html");
            echo "</a></h2>

        ";
            // line 112
            $template = "WebProfilerBundle:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'profiler', '112'), "parenttoken", array(), "any", false, 112), "get", array("request", ), "method", false, 112), "requestattributes", array(), "any", false, 112)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'profiler', '112'), "parenttoken", array(), "any", false, 112), "get", array("request", ), "method", false, 112), "requestattributes", array(), "any", false, 112)));
            }
            // line 113
            echo "    ";
        }
        // line 114
        echo "
    ";
        // line 115
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'profiler', '115'), "children", array(), "any", false, 115))) {
            // line 116
            echo "        <h2>Sub requests</h2>

        ";
            // line 118
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'profiler', '118'), "children", array(), "any", false, 118));
            foreach ($context['_seq'] as $context['_key'] => $context['subrequest']) {
                // line 119
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, 'subrequest', '119'), "token", array(), "any", false, 119))), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'subrequest', '119'), "token", array(), "any", false, 119), "html");
                echo "</a></h3>
            ";
                // line 120
                $template = "WebProfilerBundle:Profiler:bag.html.twig";
                if ($template instanceof Twig_Template) {
                    $template->display(array("bag" => $this->getAttribute($this->getAttribute($this->getContext($context, 'subrequest', '120'), "get", array("request", ), "method", false, 120), "requestattributes", array(), "any", false, 120)));
                } else {
                    echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getAttribute($this->getContext($context, 'subrequest', '120'), "get", array("request", ), "method", false, 120), "requestattributes", array(), "any", false, 120)));
                }
                // line 121
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subrequest'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 122
            echo "    ";
        }
        // line 123
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }
}
