<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_11b2bbe2999916bf9665ad5bed2c7e328ff4c539ccd2da63d2b6ebeb08b69ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f84876aec2b481e506c9238917de9fe7f8f6f22402f51bf7e2090cb4011fe30f = $this->env->getExtension("native_profiler");
        $__internal_f84876aec2b481e506c9238917de9fe7f8f6f22402f51bf7e2090cb4011fe30f->enter($__internal_f84876aec2b481e506c9238917de9fe7f8f6f22402f51bf7e2090cb4011fe30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f84876aec2b481e506c9238917de9fe7f8f6f22402f51bf7e2090cb4011fe30f->leave($__internal_f84876aec2b481e506c9238917de9fe7f8f6f22402f51bf7e2090cb4011fe30f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8fec0430ef617e18f24e43062da60b12edb73108ef32896a0be5faf50da794e = $this->env->getExtension("native_profiler");
        $__internal_c8fec0430ef617e18f24e43062da60b12edb73108ef32896a0be5faf50da794e->enter($__internal_c8fec0430ef617e18f24e43062da60b12edb73108ef32896a0be5faf50da794e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c8fec0430ef617e18f24e43062da60b12edb73108ef32896a0be5faf50da794e->leave($__internal_c8fec0430ef617e18f24e43062da60b12edb73108ef32896a0be5faf50da794e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2a8c2e3d195ded3ccfbe18e7f4a7c56a2650714cd2286375df8e3e5ee0b37df = $this->env->getExtension("native_profiler");
        $__internal_b2a8c2e3d195ded3ccfbe18e7f4a7c56a2650714cd2286375df8e3e5ee0b37df->enter($__internal_b2a8c2e3d195ded3ccfbe18e7f4a7c56a2650714cd2286375df8e3e5ee0b37df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b2a8c2e3d195ded3ccfbe18e7f4a7c56a2650714cd2286375df8e3e5ee0b37df->leave($__internal_b2a8c2e3d195ded3ccfbe18e7f4a7c56a2650714cd2286375df8e3e5ee0b37df_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
