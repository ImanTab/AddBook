<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_448632d0fc9b6675fc93929b513316a9c3948550f4bd83cb51169b7b235e1c2c extends Twig_Template
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
        $__internal_9aa9b551e9a844eb197ab1c42883c8ef03602ea11110f56425bc1123dd86c0ab = $this->env->getExtension("native_profiler");
        $__internal_9aa9b551e9a844eb197ab1c42883c8ef03602ea11110f56425bc1123dd86c0ab->enter($__internal_9aa9b551e9a844eb197ab1c42883c8ef03602ea11110f56425bc1123dd86c0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9aa9b551e9a844eb197ab1c42883c8ef03602ea11110f56425bc1123dd86c0ab->leave($__internal_9aa9b551e9a844eb197ab1c42883c8ef03602ea11110f56425bc1123dd86c0ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
