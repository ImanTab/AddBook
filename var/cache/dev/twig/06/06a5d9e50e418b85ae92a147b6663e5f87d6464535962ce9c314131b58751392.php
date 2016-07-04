<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_6687be200182372ad1b366d0fb3a44a293e98f5a3d1e9edaca15711d80da090c extends Twig_Template
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
        $__internal_fda328bda128d1f22b06ee25fa3b4d919999d72fd39380caf265672f8ee25f04 = $this->env->getExtension("native_profiler");
        $__internal_fda328bda128d1f22b06ee25fa3b4d919999d72fd39380caf265672f8ee25f04->enter($__internal_fda328bda128d1f22b06ee25fa3b4d919999d72fd39380caf265672f8ee25f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fda328bda128d1f22b06ee25fa3b4d919999d72fd39380caf265672f8ee25f04->leave($__internal_fda328bda128d1f22b06ee25fa3b4d919999d72fd39380caf265672f8ee25f04_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d283d7d6fa82730301f0e858b158418b0a851f8ccdb53745749281f357f87267 = $this->env->getExtension("native_profiler");
        $__internal_d283d7d6fa82730301f0e858b158418b0a851f8ccdb53745749281f357f87267->enter($__internal_d283d7d6fa82730301f0e858b158418b0a851f8ccdb53745749281f357f87267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d283d7d6fa82730301f0e858b158418b0a851f8ccdb53745749281f357f87267->leave($__internal_d283d7d6fa82730301f0e858b158418b0a851f8ccdb53745749281f357f87267_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
