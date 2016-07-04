<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cee9c9bae966a160848667270606055ff423afbfd08b1e081dc79e699e99130e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d0059ae14cd4dc7667c13a5002ae30613c6e44b8821e1441819ea593e5f1999 = $this->env->getExtension("native_profiler");
        $__internal_0d0059ae14cd4dc7667c13a5002ae30613c6e44b8821e1441819ea593e5f1999->enter($__internal_0d0059ae14cd4dc7667c13a5002ae30613c6e44b8821e1441819ea593e5f1999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0d0059ae14cd4dc7667c13a5002ae30613c6e44b8821e1441819ea593e5f1999->leave($__internal_0d0059ae14cd4dc7667c13a5002ae30613c6e44b8821e1441819ea593e5f1999_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c47f1cfdbf99b86f86a447a3c79b66948497497bcdeb8600c2c627841f77340 = $this->env->getExtension("native_profiler");
        $__internal_2c47f1cfdbf99b86f86a447a3c79b66948497497bcdeb8600c2c627841f77340->enter($__internal_2c47f1cfdbf99b86f86a447a3c79b66948497497bcdeb8600c2c627841f77340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2c47f1cfdbf99b86f86a447a3c79b66948497497bcdeb8600c2c627841f77340->leave($__internal_2c47f1cfdbf99b86f86a447a3c79b66948497497bcdeb8600c2c627841f77340_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
