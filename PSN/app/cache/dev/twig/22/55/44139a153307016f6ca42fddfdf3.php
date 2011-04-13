<?php

/* FOSUserBundle:User:show_content.html.twig */
class __TwigTemplate_225544139a153307016f6ca42fddfdf3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo $this->env->getExtension('translator')->getTranslator()->trans("Username", array(), "FOSUserBundle");
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "getUsername", array(), "method", false), "html");
        echo "</p>
    <p>";
        // line 3
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "FOSUserBundle");
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "getEmail", array(), "method", false), "html");
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:show_content.html.twig";
    }
}
