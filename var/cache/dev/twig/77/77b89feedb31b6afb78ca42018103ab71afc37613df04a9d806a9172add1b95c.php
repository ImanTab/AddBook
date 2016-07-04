<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_dd1900e9ded322532f75bbb5013527c3b1aed8c27cceea30726e0341c2f9b134 extends Twig_Template
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
        $__internal_5ef1a60353373c1ab8af442669d75350d13359625665c65ef4c9e01efd658e5f = $this->env->getExtension("native_profiler");
        $__internal_5ef1a60353373c1ab8af442669d75350d13359625665c65ef4c9e01efd658e5f->enter($__internal_5ef1a60353373c1ab8af442669d75350d13359625665c65ef4c9e01efd658e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5ef1a60353373c1ab8af442669d75350d13359625665c65ef4c9e01efd658e5f->leave($__internal_5ef1a60353373c1ab8af442669d75350d13359625665c65ef4c9e01efd658e5f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
