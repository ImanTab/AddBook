<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_44a7e71b8bac3f96a128073e75d1ae27de8393ff99773b66e29f592e7dab060b extends Twig_Template
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
        $__internal_152736ec79c2238c13c2ca212ec2fa0eeee5af29769404dcd7df522190e46856 = $this->env->getExtension("native_profiler");
        $__internal_152736ec79c2238c13c2ca212ec2fa0eeee5af29769404dcd7df522190e46856->enter($__internal_152736ec79c2238c13c2ca212ec2fa0eeee5af29769404dcd7df522190e46856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_152736ec79c2238c13c2ca212ec2fa0eeee5af29769404dcd7df522190e46856->leave($__internal_152736ec79c2238c13c2ca212ec2fa0eeee5af29769404dcd7df522190e46856_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
