<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_b40f7e9b8c22a40852380ee76e46358aec2a7d8258f204c83f0d46995e2fe0d7 extends Twig_Template
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
        $__internal_28b3b558d28feb053b07ee789714fa6c2afab5733909285ff5ed88f04932976d = $this->env->getExtension("native_profiler");
        $__internal_28b3b558d28feb053b07ee789714fa6c2afab5733909285ff5ed88f04932976d->enter($__internal_28b3b558d28feb053b07ee789714fa6c2afab5733909285ff5ed88f04932976d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_28b3b558d28feb053b07ee789714fa6c2afab5733909285ff5ed88f04932976d->leave($__internal_28b3b558d28feb053b07ee789714fa6c2afab5733909285ff5ed88f04932976d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
