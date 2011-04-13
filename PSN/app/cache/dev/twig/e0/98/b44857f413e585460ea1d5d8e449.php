<?php

/* TwigBundle::form.html.twig */
class __TwigTemplate_e098b44857f413e585460ea1d5d8e449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'form' => array($this, 'block_form'),
            'errors' => array($this, 'block_errors'),
            'hidden' => array($this, 'block_hidden'),
            'label' => array($this, 'block_label'),
            'attributes' => array($this, 'block_attributes'),
            'field_attributes' => array($this, 'block_field_attributes'),
            'text_field' => array($this, 'block_text_field'),
            'password_field' => array($this, 'block_password_field'),
            'hidden_field' => array($this, 'block_hidden_field'),
            'textarea_field' => array($this, 'block_textarea_field'),
            'options' => array($this, 'block_options'),
            'choice_field' => array($this, 'block_choice_field'),
            'checkbox_field' => array($this, 'block_checkbox_field'),
            'radio_field' => array($this, 'block_radio_field'),
            'date_time_field' => array($this, 'block_date_time_field'),
            'date_field' => array($this, 'block_date_field'),
            'time_field' => array($this, 'block_time_field'),
            'number_field' => array($this, 'block_number_field'),
            'money_field' => array($this, 'block_money_field'),
            'url_field' => array($this, 'block_url_field'),
            'percent_field' => array($this, 'block_percent_field'),
            'file_field' => array($this, 'block_file_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->displayBlock('field_row', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('form', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('errors', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('hidden', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('label', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('attributes', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('field_attributes', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('text_field', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('password_field', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('hidden_field', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('textarea_field', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('options', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('choice_field', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('checkbox_field', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('radio_field', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('date_time_field', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('date_field', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('time_field', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('number_field', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('money_field', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('url_field', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('percent_field', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('file_field', $context, $blocks);
        // line 203
        echo "
";
    }

    // line 1
    public function block_field_row($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div>
        ";
        // line 5
        echo "        ";
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'child'));
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'child'));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderField($this->getContext($context, 'child'));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 12
    public function block_form($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'field'));
        echo "
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'field'), "visibleFields", array(), "any", false));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['child']) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->renderBlock("field_row", $context, $blocks), "html");
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "    ";
        echo $this->env->getExtension('form')->renderHidden($this->getContext($context, 'field'));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_errors($context, array $blocks = array())
    {
        // line 23
        ob_start();
        // line 24
        echo "    ";
        if ($this->getAttribute($this->getContext($context, 'field'), "hasErrors", array(), "any", false)) {
            // line 25
            echo "    <ul>
        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'field'), "errors", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['error']) {
                // line 27
                echo "            <li>";
                echo $this->env->getExtension('translator')->getTranslator()->trans($this->getAttribute($this->getContext($context, 'error'), "messageTemplate", array(), "any", false), array_merge(array(), $this->getAttribute($this->getContext($context, 'error'), "messageParameters", array(), "any", false)), "validators");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 29
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_hidden($context, array $blocks = array())
    {
        // line 35
        ob_start();
        // line 36
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'field'), "allHiddenFields", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['child']) {
            // line 37
            echo "        ";
            echo $this->env->getExtension('form')->renderField($this->getContext($context, 'child'));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_label($context, array $blocks = array())
    {
        // line 43
        ob_start();
        // line 44
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "id", array(), "any", false), "html");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans($this->getContext($context, 'label'), array(), "messages");
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 48
    public function block_attributes($context, array $blocks = array())
    {
        // line 49
        ob_start();
        // line 50
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['key'] => $context['value']) {
            // line 51
            echo "        ";
            echo twig_escape_filter($this->env, $this->getContext($context, 'key'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
            echo "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 56
    public function block_field_attributes($context, array $blocks = array())
    {
        // line 57
        ob_start();
        // line 58
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "id", array(), "any", false), "html");
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "name", array(), "any", false), "html");
        echo "\"";
        if ($this->getAttribute($this->getContext($context, 'field'), "disabled", array(), "any", false)) {
            echo " disabled=\"disabled\"";
        }
        if ($this->getAttribute($this->getContext($context, 'field'), "required", array(), "any", false)) {
            echo " required=\"required\"";
        }
        // line 59
        echo "    ";
        echo twig_escape_filter($this->env, $this->renderBlock("attributes", $context, $blocks), "html");
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 63
    public function block_text_field($context, array $blocks = array())
    {
        // line 64
        ob_start();
        // line 65
        echo "    ";
        if (($this->getAttribute($this->getContext($context, 'attr'), "type", array(), "any", true) && ($this->getAttribute($this->getContext($context, 'attr'), "type", array(), "any", false) != "text"))) {
            // line 66
            echo "        <input ";
            echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "displayedData", array(), "any", false), "html");
            echo "\" />
    ";
        } else {
            // line 68
            echo "        ";
            $context['attr'] = twig_array_merge($this->getContext($context, 'attr'), array("maxlength" => (($this->getAttribute($this->getContext($context, 'attr'), "maxlength", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'attr'), "maxlength", array(), "any", true), $this->getAttribute($this->getContext($context, 'field'), "maxlength", array(), "any", false))) : ($this->getAttribute($this->getContext($context, 'field'), "maxlength", array(), "any", false)))));
            // line 69
            echo "        <input type=\"text\" ";
            echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "displayedData", array(), "any", false), "html");
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 74
    public function block_password_field($context, array $blocks = array())
    {
        // line 75
        ob_start();
        // line 76
        echo "    ";
        $context['attr'] = twig_array_merge($this->getContext($context, 'attr'), array("maxlength" => (($this->getAttribute($this->getContext($context, 'attr'), "maxlength", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'attr'), "maxlength", array(), "any", true), $this->getAttribute($this->getContext($context, 'field'), "maxlength", array(), "any", false))) : ($this->getAttribute($this->getContext($context, 'field'), "maxlength", array(), "any", false)))));
        // line 77
        echo "    <input type=\"password\" ";
        echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "displayedData", array(), "any", false), "html");
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_hidden_field($context, array $blocks = array())
    {
        // line 82
        ob_start();
        // line 83
        echo "    <input type=\"hidden\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "id", array(), "any", false), "html");
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "name", array(), "any", false), "html");
        echo "\"";
        if ($this->getAttribute($this->getContext($context, 'field'), "disabled", array(), "any", false)) {
            echo " disabled=\"disabled\"";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "displayedData", array(), "any", false), "html");
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 87
    public function block_textarea_field($context, array $blocks = array())
    {
        // line 88
        ob_start();
        // line 89
        echo "    <textarea ";
        echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "displayedData", array(), "any", false), "html");
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function block_options($context, array $blocks = array())
    {
        // line 94
        ob_start();
        // line 95
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'options'));
        foreach ($context['_seq'] as $context['choice'] => $context['label']) {
            // line 96
            echo "        ";
            if ($this->getAttribute($this->getContext($context, 'field'), "isChoiceGroup", array($this->getContext($context, 'label'), ), "method", false)) {
                // line 97
                echo "            <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'choice'), "html");
                echo "\">
                ";
                // line 98
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'label'));
                foreach ($context['_seq'] as $context['nestedChoice'] => $context['nestedLabel']) {
                    // line 99
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'nestedChoice'), "html");
                    echo "\"";
                    if ($this->getAttribute($this->getContext($context, 'field'), "isChoiceSelected", array($this->getContext($context, 'nestedChoice'), ), "method", false)) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'nestedLabel'), "html");
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nestedChoice'], $context['nestedLabel'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 101
                echo "            </optgroup>
        ";
            } else {
                // line 103
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'choice'), "html");
                echo "\"";
                if ($this->getAttribute($this->getContext($context, 'field'), "isChoiceSelected", array($this->getContext($context, 'choice'), ), "method", false)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getContext($context, 'label'), "html");
                echo "</option>
        ";
            }
            // line 105
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 109
    public function block_choice_field($context, array $blocks = array())
    {
        // line 110
        ob_start();
        // line 111
        echo "    ";
        if ($this->getAttribute($this->getContext($context, 'field'), "isExpanded", array(), "any", false)) {
            // line 112
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'field'));
            foreach ($context['_seq'] as $context['choice'] => $context['child']) {
                // line 113
                echo "            ";
                echo $this->env->getExtension('form')->renderField($this->getContext($context, 'child'));
                echo "
            <label for=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'child'), "id", array(), "any", false), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "label", array($this->getContext($context, 'choice'), ), "method", false), "html");
                echo "</label>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['choice'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 116
            echo "    ";
        } else {
            // line 117
            echo "        <select ";
            echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
            if ($this->getAttribute($this->getContext($context, 'field'), "isMultipleChoice", array(), "any", false)) {
                echo " multiple=\"multiple\"";
            }
            echo ">
            ";
            // line 118
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "preferredChoices", array(), "any", false)) > 0)) {
                // line 119
                echo "                ";
                $context['options'] = $this->getAttribute($this->getContext($context, 'field'), "preferredChoices", array(), "any", false);
                // line 120
                echo "                ";
                echo twig_escape_filter($this->env, $this->renderBlock("options", $context, $blocks), "html");
                echo "
                <option disabled=\"disabled\">";
                // line 121
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'params'), "separator", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'params'), "separator", array(), "any", true), "-------------------")) : ("-------------------")), "html");
                echo "</option>
            ";
            }
            // line 123
            echo "            ";
            $context['options'] = $this->getAttribute($this->getContext($context, 'field'), "otherChoices", array(), "any", false);
            // line 124
            echo "            ";
            echo twig_escape_filter($this->env, $this->renderBlock("options", $context, $blocks), "html");
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 130
    public function block_checkbox_field($context, array $blocks = array())
    {
        // line 131
        ob_start();
        // line 132
        echo "    <input type=\"checkbox\" ";
        echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
        if ($this->getAttribute($this->getContext($context, 'field'), "hasValue", array(), "any", false)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "value", array(), "any", false), "html");
            echo "\"";
        }
        if ($this->getAttribute($this->getContext($context, 'field'), "ischecked", array(), "any", false)) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 136
    public function block_radio_field($context, array $blocks = array())
    {
        // line 137
        ob_start();
        // line 138
        echo "    <input type=\"radio\" ";
        echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
        if ($this->getAttribute($this->getContext($context, 'field'), "hasValue", array(), "any", false)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field'), "value", array(), "any", false), "html");
            echo "\"";
        }
        if ($this->getAttribute($this->getContext($context, 'field'), "ischecked", array(), "any", false)) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 142
    public function block_date_time_field($context, array $blocks = array())
    {
        // line 143
        ob_start();
        // line 144
        echo "    ";
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'field'), "date", array(), "any", false));
        echo "
    ";
        // line 145
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'field'), "time", array(), "any", false));
        echo "
    ";
        // line 146
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'field'), "date", array(), "any", false));
        echo "
    ";
        // line 147
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'field'), "time", array(), "any", false));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 151
    public function block_date_field($context, array $blocks = array())
    {
        // line 152
        ob_start();
        // line 153
        echo "    ";
        if ($this->getAttribute($this->getContext($context, 'field'), "isField", array(), "any", false)) {
            // line 154
            echo "        ";
            echo twig_escape_filter($this->env, $this->renderBlock("text_field", $context, $blocks), "html");
            echo "
    ";
        } else {
            // line 156
            echo "        ";
            echo twig_strtr($this->getAttribute($this->getContext($context, 'field'), "pattern", array(), "any", false), array("{{ year }}" => $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'field'), "year", array(), "any", false)), "{{ month }}" => $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'field'), "month", array(), "any", false)), "{{ day }}" => $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'field'), "day", array(), "any", false))));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 161
    public function block_time_field($context, array $blocks = array())
    {
        // line 162
        ob_start();
        // line 163
        echo "    ";
        if ($this->getAttribute($this->getContext($context, 'field'), "isField", array(), "any", false)) {
            $context['attr'] = twig_array_merge($this->getContext($context, 'attr'), array("size" => 1));
        }
        // line 164
        echo "    ";
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'field'), "hour", array(), "any", false), $this->getContext($context, 'attr'));
        echo ":";
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'field'), "minute", array(), "any", false), $this->getContext($context, 'attr'));
        if ($this->getAttribute($this->getContext($context, 'field'), "isWithSeconds", array(), "any", false)) {
            echo ":";
            echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'field'), "second", array(), "any", false), $this->getContext($context, 'attr'));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 168
    public function block_number_field($context, array $blocks = array())
    {
        // line 169
        ob_start();
        // line 170
        echo "    ";
        $context['attr'] = twig_array_merge($this->getContext($context, 'attr'), array("type" => "number"));
        // line 171
        echo "    ";
        echo twig_escape_filter($this->env, $this->renderBlock("text_field", $context, $blocks), "html");
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 175
    public function block_money_field($context, array $blocks = array())
    {
        // line 176
        ob_start();
        // line 177
        echo "    ";
        echo twig_strtr($this->getAttribute($this->getContext($context, 'field'), "pattern", array(), "any", false), array("{{ widget }}" => $this->renderBlock("number_field", $context, $blocks)));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 181
    public function block_url_field($context, array $blocks = array())
    {
        // line 182
        ob_start();
        // line 183
        echo "    ";
        $context['attr'] = twig_array_merge($this->getContext($context, 'attr'), array("type" => "url"));
        // line 184
        echo "    ";
        echo twig_escape_filter($this->env, $this->renderBlock("text_field", $context, $blocks), "html");
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 188
    public function block_percent_field($context, array $blocks = array())
    {
        // line 189
        ob_start();
        // line 190
        echo "    ";
        echo twig_escape_filter($this->env, $this->renderBlock("text_field", $context, $blocks), "html");
        echo " %
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 194
    public function block_file_field($context, array $blocks = array())
    {
        // line 195
        ob_start();
        // line 196
        echo "    ";
        $context['group'] = $this->getContext($context, 'field');
        // line 197
        echo "    ";
        $context['field'] = $this->getAttribute($this->getContext($context, 'group'), "file", array(), "any", false);
        // line 198
        echo "    <input type=\"file\" ";
        echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
        echo " />
    ";
        // line 199
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'group'), "token", array(), "any", false));
        echo "
    ";
        // line 200
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'group'), "original_name", array(), "any", false));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TwigBundle::form.html.twig";
    }
}
