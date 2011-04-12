<?php

/* AcmeDemoBundle:Demo:create.html.twig */
class __TwigTemplate_1f0e0f5b8bd16a3aab3caed65f0168e6 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Login form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>


</h1>

\t    <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_create_user"), "html");
        echo "\" method=\"POST\">
\t\t

\t<!--";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_psn_login_check"), "html");
        echo " -->

\t\t<!-- Muestra todos los campos, si no se mete una variable label en el codigo del campo del form aparece como
\t\t     label el nombre del campo, lo cual no queda bien. Si no se implementa esa funcionalidad habría que 
\t\t     hacerlo mostrando los campos de uno en uno -->
        <!--";
        // line 20
        echo $this->env->getExtension('form')->renderField($this->getContext($context, 'form', '20'));
        echo "-->

\t\t
\t\t<!-- Creamos la etiqueta para el campo -->
        ";
        // line 24
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form', '24'), "username", array(), "any", false, 24), "Usuario");
        echo "
        <!-- Mostramos el campo -->
        ";
        // line 26
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'form', '26'), "username", array(), "any", false, 26));
        echo "
        
        <br>
        
        ";
        // line 30
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form', '30'), "userpass", array(), "any", false, 30), "Password");
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'form', '31'), "userpass", array(), "any", false, 31));
        echo "
        
        <br>
      
\t";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form', '35'), "first_name", array(), "any", false, 35), "nombre");
        echo "
\t";
        // line 36
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'form', '36'), "first_name", array(), "any", false, 36));
        echo "

\t<br>

\t";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form', '40'), "last_name", array(), "any", false, 40), "apellidos");
        echo "
\t";
        // line 41
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'form', '41'), "last_name", array(), "any", false, 41));
        echo "
  
\t<br>

\t";
        // line 45
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form', '45'), "email", array(), "any", false, 45), "email");
        echo "
\t";
        // line 46
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'form', '46'), "email", array(), "any", false, 46));
        echo "

\t<br>

\t<input type=\"submit\" value=\"Crear\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:create.html.twig";
    }
}
