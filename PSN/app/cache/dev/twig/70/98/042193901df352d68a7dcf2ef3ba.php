<?php

/* FOSUserBundle:User:confirmed.html.twig */
class __TwigTemplate_7098042193901df352d68a7dcf2ef3ba extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $context['username'] = $this->getAttribute($this->getContext($context, 'user'), "getUsername", array(), "method", false);
        // line 2
        echo $this->env->getExtension('translator')->getTranslator()->trans("Congrats %username%, your account is now confirmed.", array("%username%" => $this->getContext($context, 'username'), ), "FOSUserBundle");
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:confirmed.html.twig";
    }
}
