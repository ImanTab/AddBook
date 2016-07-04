<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e0a418470a7b6405476d318966c7f9e1ce9096354f4f9a6b142dde5e04f1572a extends Twig_Template
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
        $__internal_15cd63675dbc70cd02b3b94d79cd8d2bac4ac0d9cd884d2e9af9fcd73e02e74c = $this->env->getExtension("native_profiler");
        $__internal_15cd63675dbc70cd02b3b94d79cd8d2bac4ac0d9cd884d2e9af9fcd73e02e74c->enter($__internal_15cd63675dbc70cd02b3b94d79cd8d2bac4ac0d9cd884d2e9af9fcd73e02e74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_15cd63675dbc70cd02b3b94d79cd8d2bac4ac0d9cd884d2e9af9fcd73e02e74c->leave($__internal_15cd63675dbc70cd02b3b94d79cd8d2bac4ac0d9cd884d2e9af9fcd73e02e74c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
