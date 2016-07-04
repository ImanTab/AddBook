<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_628815b587b142f18b2b2bcad1238f14e0fa13351fcdec8c3fb44ea77ec32ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_1fb051ef7bd9f4d7ccde5d7f4df9797c95d7dfcce1b03588649cc4631c2468ab = $this->env->getExtension("native_profiler");
        $__internal_1fb051ef7bd9f4d7ccde5d7f4df9797c95d7dfcce1b03588649cc4631c2468ab->enter($__internal_1fb051ef7bd9f4d7ccde5d7f4df9797c95d7dfcce1b03588649cc4631c2468ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb051ef7bd9f4d7ccde5d7f4df9797c95d7dfcce1b03588649cc4631c2468ab->leave($__internal_1fb051ef7bd9f4d7ccde5d7f4df9797c95d7dfcce1b03588649cc4631c2468ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_562d59e9c391ace433f174ad0c2125a9667bddcfbab26313dba534c736ed5c8f = $this->env->getExtension("native_profiler");
        $__internal_562d59e9c391ace433f174ad0c2125a9667bddcfbab26313dba534c736ed5c8f->enter($__internal_562d59e9c391ace433f174ad0c2125a9667bddcfbab26313dba534c736ed5c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_562d59e9c391ace433f174ad0c2125a9667bddcfbab26313dba534c736ed5c8f->leave($__internal_562d59e9c391ace433f174ad0c2125a9667bddcfbab26313dba534c736ed5c8f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_563a15f5225940034411bc0b262446b5818922c811bc18ec3fea7a24464c840f = $this->env->getExtension("native_profiler");
        $__internal_563a15f5225940034411bc0b262446b5818922c811bc18ec3fea7a24464c840f->enter($__internal_563a15f5225940034411bc0b262446b5818922c811bc18ec3fea7a24464c840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_563a15f5225940034411bc0b262446b5818922c811bc18ec3fea7a24464c840f->leave($__internal_563a15f5225940034411bc0b262446b5818922c811bc18ec3fea7a24464c840f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73c2b79e148a4f35ee3cb88d73372c9e6d782a107aeb1c80f6124c54411468fb = $this->env->getExtension("native_profiler");
        $__internal_73c2b79e148a4f35ee3cb88d73372c9e6d782a107aeb1c80f6124c54411468fb->enter($__internal_73c2b79e148a4f35ee3cb88d73372c9e6d782a107aeb1c80f6124c54411468fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_73c2b79e148a4f35ee3cb88d73372c9e6d782a107aeb1c80f6124c54411468fb->leave($__internal_73c2b79e148a4f35ee3cb88d73372c9e6d782a107aeb1c80f6124c54411468fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
