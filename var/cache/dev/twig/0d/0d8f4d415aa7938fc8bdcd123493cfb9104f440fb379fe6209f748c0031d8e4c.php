<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_09a9a040d123978a1efe7ea02c3c5d971c1e261969b9590b1b59f0c0ac539dba extends Twig_Template
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
        $__internal_3d4be0588998f420bf03565ac9e283aa1a6aebb336ee7ebfdf6484cbd591d1ce = $this->env->getExtension("native_profiler");
        $__internal_3d4be0588998f420bf03565ac9e283aa1a6aebb336ee7ebfdf6484cbd591d1ce->enter($__internal_3d4be0588998f420bf03565ac9e283aa1a6aebb336ee7ebfdf6484cbd591d1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3d4be0588998f420bf03565ac9e283aa1a6aebb336ee7ebfdf6484cbd591d1ce->leave($__internal_3d4be0588998f420bf03565ac9e283aa1a6aebb336ee7ebfdf6484cbd591d1ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
