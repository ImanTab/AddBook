<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_5cc99c2dc58bd355dc9d1f44ef61956ef8adf4da7f2620f2ae53cb979c4e8d29 extends Twig_Template
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
        $__internal_9db71279f3608f68501f02c1ed5a4bea19573dd0e7a4e2c441b9856adda8f365 = $this->env->getExtension("native_profiler");
        $__internal_9db71279f3608f68501f02c1ed5a4bea19573dd0e7a4e2c441b9856adda8f365->enter($__internal_9db71279f3608f68501f02c1ed5a4bea19573dd0e7a4e2c441b9856adda8f365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9db71279f3608f68501f02c1ed5a4bea19573dd0e7a4e2c441b9856adda8f365->leave($__internal_9db71279f3608f68501f02c1ed5a4bea19573dd0e7a4e2c441b9856adda8f365_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
