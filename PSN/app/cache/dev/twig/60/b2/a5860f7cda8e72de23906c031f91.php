<?php

/* WebProfilerBundle:Collector:config.html.twig */
class __TwigTemplate_60b2a5860f7cda8e72de23906c031f91 extends Twig_Template
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
        echo "<span style=\"white-space:nowrap; color:#2f2f2f; display:inline-block; min-height:24px; border-right:1px solid #cdcdcd; padding:5px 12px 5px 5px; margin:0;\">
    <a href=\"http://symfony.com/\"><img width=\"26\" height=\"28\" alt=\"Symfony\" style=\"margin: 0pt 5px 0pt 10px; vertical-align: middle;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABRZJREFUeNqkVnlM03cUb38tFFqKB4UyGZccYrZyVpnGEQzngAlOQATcFMiWJcZFOZzb4pYNFTYnmYh4/OVEFCSIYAYIbhzCNpm0BMjCBAqFUsohMHrQFmTvbf2RDosWfc3L93rf76e/d1MXFxcp+uTj5bc0F3Q8oiXuS942JpMdVKs1nnK5nK8vy2Qy/2IwGF2WlpZ3KirLb8BdLdyhGCKqISAQpgNA1ODAYK5SqXSnGEEAOGrDtcmtrKq4AEvNi4CoJ7NPb2j4paFgYmIimvISxGazH8XERO8+mnFkGJaLhoCoFwsvOV4vKq4HFblQXoHodLpiq//W6IIL+Q2wXMA9Qh+k+PqN+68KgjQ/P89qe9hWWXKzFN+i6gMx6+vun5mdnd242kcDAt7WItvachdyvj09/k5EuAr3tVot88rlK2WoTRKInpV5LK6vr2/PakHCwsPk/m/5i5uamk1GR2U08L5WXz/fDvJ8cvIJ78O0j9Jhaoo24oSHRjTLZDKP1YC4uLhoyspLb0dF7AqVSCTrcG/N2jV/q+fUZnNzc6aknIWFxZPmlkYebZO7R+C92nufrPRg/N44ZVBwkHy91XqKJZtNlUpH/1X3seNZDebmZm2XLl6OIGUBhAH2oenf12g05qJ+0STR2toauxJI9qlv+oNDgn8990P+uuqfaswlkhGKm5vrvJOzkzIsLPROTXWtOSkL8TPk6uqiNfSOWCyOImamZ3iGDp03Os9FRkYUT01NdZJ7oF76yIiUiI+Pa4HlY4FAuHS3rq5eJpVKCUNvgSpfJ8DTuIYOR6WjqILfQ0NDGiOjIsXkvkKhINzc3RBo0tTUhMHjvSlHzj93nq9QKGmG3hoYGHQgaDQ63dChSqUySTmQmoRy2Se/vsrz5Clxn8PhzPH5fkI0SVdnN6+zs8sC+UXOQ1Cp/wUUSbav2T5FfVtbW6tBNQngnrthuxnU+BDPHRzsp2CYQJcdHx+3NdZLn9GpGYOhsnewr1nU5abhYUkCDFNDQ0P4OGWDnZ0ENXj2TF6gsSBWHCsV4bF58/AyfbJSD6b5czhWShaLuQCR3g9eF3LrVlkUnnt5e6JzLPb29u4wFsjB3n6K7u3t1X236u7/6kx7u8ATRzTy7fKKHeB54eTZli38dhhovb19/sYCbfLwEBF7Yt/7Ge1hSACNDCBLhkZHcHR0FOfmfBewGvsk70+sRRv17k2IFxpzwY/vN4Rpv7Gh8WNjQQJ3Bkrt7OwECDSQmpZSggG6XKig8PxITu4pGbne/35Sw4EPUg5DYBpVdVks1tNPj2eVYnATOlf9LTMroxYS4FIVtLGx0Wzfvq1EJBr4E9e7ot+VXrta5NEh7Ag19muOph/5g8vl1sFUQlZYK8z6134s+uzs93lvkIKQ17oJgkaHn+2YbIwB5d3MWJCMzPTHScmJeZgGgUdIIEwdDsBRoP+0Lz4/wYNKS33ZCgva6UtM2lcI0ypgEdZB/Z7BVAe2EwpWzJcnvgpsedDCXA2Aj4+39tDhQwJfX5+bsKwG7ic7ouVdEOY9a3Qw4CChsGNnaUmpW3PTA/OVvhC6HgrEojo2PlYEJb0JthrR5phU9NuuZ/o6XTOBseMEjIHrjTEHTuA0Oytn9fT0sCHj0/h8/jSbbaHw8vbCzN4H3KFjVNUM2f08D4gkmq6xsMFcq/tSLNlrdTlyGkuFzmvHdIwA80Z1qs8BZWDO1TF+NcYddjzq5f/eEP0jwAAGCybA1KhGOwAAAABJRU5ErkJggg==\"/></a>
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '6'), "symfonyversion", array(), "any", false, 6), "html");
        echo "
</span>

<span style=\"white-space:nowrap; color:2f2f2f; display:inline-block; min-height:24px; border-right:1px solid #cdcdcd; padding:5px 10px 5px 6px; margin:0;\">
    PHP ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '10'), "phpversion", array(), "any", false, 10), "html");
        echo "
    <span style=\"margin: 0pt; padding: 0pt; color: #979696;\">|</span>
    <span style=\"color: ";
        // line 12
        echo (($this->getAttribute($this->getContext($context, 'collector', '12'), "hasxdebug", array(), "any", false, 12)) ? ("#759e1a") : ("#a33"));
        echo "\">xdebug</span>
    <span style=\"margin: 0pt; padding: 0pt; color: #979696\">|</span>
    <span style=\"color: ";
        // line 14
        echo (($this->getAttribute($this->getContext($context, 'collector', '14'), "hasaccelerator", array(), "any", false, 14)) ? ("#759e1a") : ("#a33"));
        echo "\">accel</span>
</span>

<span style=\"white-space:nowrap; color:#2f2f2f; display:inline-block; min-height:24px; border-right:1px solid #cdcdcd; padding:5px 10px 5px 6px;\">
    <img width=\"21\" height=\"28\" alt=\"Environment\" style=\"vertical-align: middle; margin-right: 10px;\" src=\"data:image/png;base64,
    iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAYAAACOGPReAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAZNJREFUeNpi/P//PwO1ARMDDcCooWDA4+npeRiEQWw0NTweHh4nQZhYORYoLf39+3cbGBuIbyJplPnx44cZjA3ENwjJwQzljoqKOghjo7lGBAcbBLiA+g7B2DBBRqCXj3/79s0CRSUX14lt27a5AplfgNgBCPaDxA8cOOAIokBe9fLy2o1LHxO6BAhAxWTwxIUMPn0seDTCvPotLi7uJIyNIxhQ9OEzVADoRZSgWbRo0UmoF1vx6GPBl06l8XhRmtzEL0KmHF5DWcmUo1E21dLSeo0uCBX7jUffb3z6GIGFdC2QYXPp0iVw4Ovp6T0FUkeA+BUw0c/AZiIwE2QAKTEc+laBktQqIL6al5e3FqqhDsQHYhU8Ln0CzVnY9D1hghYeD5E0PISKfcDjxQ949H2FJX5eJEkY+820adMm4/DiGzz6GFgIeBFX0DzBF/swQ/8oKCi8h7Gh9FeodzikpKSeQ8XuopW12PQxMEKraE0gDoSKrQfi60gaSZaDGQqqCiShks+h5Si8yiBVjnFkNyYAAgwAQGPBFLF65f4AAAAASUVORK5CYII=\"/>
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '20'), "appname", array(), "any", false, 20), "html");
        echo "
    <span style=\"margin: 0pt; padding: 0pt; color: #979696;\">|</span>
    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '22'), "env", array(), "any", false, 22), "html");
        echo "
    <span style=\"margin: 0pt; padding: 0pt; color: #979696;\">|</span>
    ";
        // line 24
        echo (($this->getAttribute($this->getContext($context, 'collector', '24'), "debug", array(), "any", false, 24)) ? ("debug") : ("no-debug"));
        echo "
    <span style=\"margin: 0pt; padding: 0pt; color: #979696;\">|</span>
    ";
        // line 26
        if ($this->getContext($context, 'profiler_url', '26')) {
            // line 27
            echo "        <a style=\"color: #2f2f2f\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'profiler_url', '27'), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '27'), "token", array(), "any", false, 27), "html");
            echo "</a>
    ";
        } else {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '29'), "token", array(), "any", false, 29), "html");
            echo "
    ";
        }
        // line 31
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:config.html.twig";
    }
}