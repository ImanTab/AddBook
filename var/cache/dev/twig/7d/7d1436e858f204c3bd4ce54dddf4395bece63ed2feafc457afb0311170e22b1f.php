<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f089016ab6df9b4c2378c8b8791ea83ef562e526c1d5ede01de8b4b79f40ccbf extends Twig_Template
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
        $__internal_359deb88f05055bb6671fd42b58c2d84f6aa7072364e79be0922f9b59c698b23 = $this->env->getExtension("native_profiler");
        $__internal_359deb88f05055bb6671fd42b58c2d84f6aa7072364e79be0922f9b59c698b23->enter($__internal_359deb88f05055bb6671fd42b58c2d84f6aa7072364e79be0922f9b59c698b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_359deb88f05055bb6671fd42b58c2d84f6aa7072364e79be0922f9b59c698b23->leave($__internal_359deb88f05055bb6671fd42b58c2d84f6aa7072364e79be0922f9b59c698b23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
