<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ed351b42ed0140f4b1cabba974b3adc26d43874152982cc648a74042cae32692 extends Twig_Template
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
        $__internal_2c7fe528f1abf4f7b81aea18eb3c195c0a365a56a4571024f3265cdee5a78eff = $this->env->getExtension("native_profiler");
        $__internal_2c7fe528f1abf4f7b81aea18eb3c195c0a365a56a4571024f3265cdee5a78eff->enter($__internal_2c7fe528f1abf4f7b81aea18eb3c195c0a365a56a4571024f3265cdee5a78eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2c7fe528f1abf4f7b81aea18eb3c195c0a365a56a4571024f3265cdee5a78eff->leave($__internal_2c7fe528f1abf4f7b81aea18eb3c195c0a365a56a4571024f3265cdee5a78eff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
