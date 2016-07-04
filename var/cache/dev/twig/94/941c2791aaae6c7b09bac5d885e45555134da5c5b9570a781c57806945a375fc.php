<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b3050e47421d719654e283f383ca7fc9eae48a6e559342ab2a573773a582cc92 extends Twig_Template
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
        $__internal_885554da1e407305fa087f8fb7f85892109fe9314264ae926ff64ab8bb018a0b = $this->env->getExtension("native_profiler");
        $__internal_885554da1e407305fa087f8fb7f85892109fe9314264ae926ff64ab8bb018a0b->enter($__internal_885554da1e407305fa087f8fb7f85892109fe9314264ae926ff64ab8bb018a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_885554da1e407305fa087f8fb7f85892109fe9314264ae926ff64ab8bb018a0b->leave($__internal_885554da1e407305fa087f8fb7f85892109fe9314264ae926ff64ab8bb018a0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
