<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4a9d074b5c7da2645db77644db2a1d1e6f3820a5fb47ecb39b2de8f537380a3c extends Twig_Template
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
        $__internal_bcdc15d5f23c14303c131d2420221c800d61f22083c60bbec1a8e268b66d9808 = $this->env->getExtension("native_profiler");
        $__internal_bcdc15d5f23c14303c131d2420221c800d61f22083c60bbec1a8e268b66d9808->enter($__internal_bcdc15d5f23c14303c131d2420221c800d61f22083c60bbec1a8e268b66d9808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_bcdc15d5f23c14303c131d2420221c800d61f22083c60bbec1a8e268b66d9808->leave($__internal_bcdc15d5f23c14303c131d2420221c800d61f22083c60bbec1a8e268b66d9808_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
