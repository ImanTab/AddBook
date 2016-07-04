<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4cf6501d40b6b6718d23a6d435384ad0765582f61ece6060a7f0ac4685ea4306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae9a82d0f3bb286903f24fa632ef92408d89446d3d17b6fb3dceb2cc3d4676ee = $this->env->getExtension("native_profiler");
        $__internal_ae9a82d0f3bb286903f24fa632ef92408d89446d3d17b6fb3dceb2cc3d4676ee->enter($__internal_ae9a82d0f3bb286903f24fa632ef92408d89446d3d17b6fb3dceb2cc3d4676ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae9a82d0f3bb286903f24fa632ef92408d89446d3d17b6fb3dceb2cc3d4676ee->leave($__internal_ae9a82d0f3bb286903f24fa632ef92408d89446d3d17b6fb3dceb2cc3d4676ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4978edd5afb06230a6619bee1200cfa7639613889eda9e0e1e4d49e452b84feb = $this->env->getExtension("native_profiler");
        $__internal_4978edd5afb06230a6619bee1200cfa7639613889eda9e0e1e4d49e452b84feb->enter($__internal_4978edd5afb06230a6619bee1200cfa7639613889eda9e0e1e4d49e452b84feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4978edd5afb06230a6619bee1200cfa7639613889eda9e0e1e4d49e452b84feb->leave($__internal_4978edd5afb06230a6619bee1200cfa7639613889eda9e0e1e4d49e452b84feb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_979be53b482ce526c385629eea69c020a436e023bcaae0fa52ea3005a5d7bf5f = $this->env->getExtension("native_profiler");
        $__internal_979be53b482ce526c385629eea69c020a436e023bcaae0fa52ea3005a5d7bf5f->enter($__internal_979be53b482ce526c385629eea69c020a436e023bcaae0fa52ea3005a5d7bf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_979be53b482ce526c385629eea69c020a436e023bcaae0fa52ea3005a5d7bf5f->leave($__internal_979be53b482ce526c385629eea69c020a436e023bcaae0fa52ea3005a5d7bf5f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fa92d4c42352d7caf0a6b9eddbcf0965d641f3d801fba9fb294bafadfe431ec = $this->env->getExtension("native_profiler");
        $__internal_9fa92d4c42352d7caf0a6b9eddbcf0965d641f3d801fba9fb294bafadfe431ec->enter($__internal_9fa92d4c42352d7caf0a6b9eddbcf0965d641f3d801fba9fb294bafadfe431ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9fa92d4c42352d7caf0a6b9eddbcf0965d641f3d801fba9fb294bafadfe431ec->leave($__internal_9fa92d4c42352d7caf0a6b9eddbcf0965d641f3d801fba9fb294bafadfe431ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
