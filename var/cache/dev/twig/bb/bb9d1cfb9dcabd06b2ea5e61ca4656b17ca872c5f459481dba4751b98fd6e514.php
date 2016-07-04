<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3a51ac2472e9991428866cc434292a12887869a47f9581fe15f657fa4a6fd0f6 extends Twig_Template
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
        $__internal_501a32b6c3d1fa1ac0e17fdfc33971b62672863f55da545f21d740e340b35537 = $this->env->getExtension("native_profiler");
        $__internal_501a32b6c3d1fa1ac0e17fdfc33971b62672863f55da545f21d740e340b35537->enter($__internal_501a32b6c3d1fa1ac0e17fdfc33971b62672863f55da545f21d740e340b35537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_501a32b6c3d1fa1ac0e17fdfc33971b62672863f55da545f21d740e340b35537->leave($__internal_501a32b6c3d1fa1ac0e17fdfc33971b62672863f55da545f21d740e340b35537_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
