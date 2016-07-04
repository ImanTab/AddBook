<?php

/* ::base.html.twig */
class __TwigTemplate_af2d7f64e8c30091296e4d8ca6a7dd7ab97f7950c1f289d51156efdc899c2cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aae53ff82e666a20694a80338d3088a99e98bee029ad22617f70858e27c1580 = $this->env->getExtension("native_profiler");
        $__internal_4aae53ff82e666a20694a80338d3088a99e98bee029ad22617f70858e27c1580->enter($__internal_4aae53ff82e666a20694a80338d3088a99e98bee029ad22617f70858e27c1580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4aae53ff82e666a20694a80338d3088a99e98bee029ad22617f70858e27c1580->leave($__internal_4aae53ff82e666a20694a80338d3088a99e98bee029ad22617f70858e27c1580_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02a69cb8fb0aea75daa2082aa4ba0f7c94f8d3b0b9eda43f675cea823db653f8 = $this->env->getExtension("native_profiler");
        $__internal_02a69cb8fb0aea75daa2082aa4ba0f7c94f8d3b0b9eda43f675cea823db653f8->enter($__internal_02a69cb8fb0aea75daa2082aa4ba0f7c94f8d3b0b9eda43f675cea823db653f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_02a69cb8fb0aea75daa2082aa4ba0f7c94f8d3b0b9eda43f675cea823db653f8->leave($__internal_02a69cb8fb0aea75daa2082aa4ba0f7c94f8d3b0b9eda43f675cea823db653f8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7285e46e49e60bed0b65951febbcc2e30dd99e59591c550a229311a3be442402 = $this->env->getExtension("native_profiler");
        $__internal_7285e46e49e60bed0b65951febbcc2e30dd99e59591c550a229311a3be442402->enter($__internal_7285e46e49e60bed0b65951febbcc2e30dd99e59591c550a229311a3be442402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7285e46e49e60bed0b65951febbcc2e30dd99e59591c550a229311a3be442402->leave($__internal_7285e46e49e60bed0b65951febbcc2e30dd99e59591c550a229311a3be442402_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d72ab2cceba61f9cd4fc2b94897ac0f3481b6ff7915f65d48044df6eef085d50 = $this->env->getExtension("native_profiler");
        $__internal_d72ab2cceba61f9cd4fc2b94897ac0f3481b6ff7915f65d48044df6eef085d50->enter($__internal_d72ab2cceba61f9cd4fc2b94897ac0f3481b6ff7915f65d48044df6eef085d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d72ab2cceba61f9cd4fc2b94897ac0f3481b6ff7915f65d48044df6eef085d50->leave($__internal_d72ab2cceba61f9cd4fc2b94897ac0f3481b6ff7915f65d48044df6eef085d50_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22f1c2062e3ffebc9c93a8b937f046e8bc7b7aff4bdbcffa0698adc7df0ea5f5 = $this->env->getExtension("native_profiler");
        $__internal_22f1c2062e3ffebc9c93a8b937f046e8bc7b7aff4bdbcffa0698adc7df0ea5f5->enter($__internal_22f1c2062e3ffebc9c93a8b937f046e8bc7b7aff4bdbcffa0698adc7df0ea5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_22f1c2062e3ffebc9c93a8b937f046e8bc7b7aff4bdbcffa0698adc7df0ea5f5->leave($__internal_22f1c2062e3ffebc9c93a8b937f046e8bc7b7aff4bdbcffa0698adc7df0ea5f5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
