<?php

/* FOSUserBundle:User:new_content.html.twig */
class __TwigTemplate_20284373b55e2841877d5117ded922b6 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, 'form'), array($this->getAttribute($this->getContext($context, 'form'), "getOption", array("theme", ), "method", false), ));        // line 2
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_user_create"), "html");
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo " method=\"POST\" class=\"fos_user_user_new\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderField($this->getContext($context, 'form'));
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Create user", array(), "FOSUserBundle");
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:new_content.html.twig";
    }
}
