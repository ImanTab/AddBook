<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_236f577e0d492c10c6ee0b186bc9c1703b6b02b5d2f08c5e76380ea56085fd76 extends Twig_Template
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
        $__internal_7c6a79b0ed68d7c8098535349e8902075763225ebcb22100e21374129459c770 = $this->env->getExtension("native_profiler");
        $__internal_7c6a79b0ed68d7c8098535349e8902075763225ebcb22100e21374129459c770->enter($__internal_7c6a79b0ed68d7c8098535349e8902075763225ebcb22100e21374129459c770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7c6a79b0ed68d7c8098535349e8902075763225ebcb22100e21374129459c770->leave($__internal_7c6a79b0ed68d7c8098535349e8902075763225ebcb22100e21374129459c770_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
