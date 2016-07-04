<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_435e4a31673392e1897a378845ac415750ab0ccc5e91a490ea740c45ee4ea11b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_947129e16f63b08271cb86b560954d2b20716d2fc18ecd3d8d6769f7168c71ee = $this->env->getExtension("native_profiler");
        $__internal_947129e16f63b08271cb86b560954d2b20716d2fc18ecd3d8d6769f7168c71ee->enter($__internal_947129e16f63b08271cb86b560954d2b20716d2fc18ecd3d8d6769f7168c71ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_947129e16f63b08271cb86b560954d2b20716d2fc18ecd3d8d6769f7168c71ee->leave($__internal_947129e16f63b08271cb86b560954d2b20716d2fc18ecd3d8d6769f7168c71ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
