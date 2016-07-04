<?php

/* base.html.twig */
class __TwigTemplate_b7507871f5cb39981cd3bdad75dd606d5d2b5ad3b4c1ffcacb78528cf46253ab extends Twig_Template
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
        $__internal_d4489779d430a6cb2f97404761bb0ba65e6765cee2841c5215c10b9ec4554977 = $this->env->getExtension("native_profiler");
        $__internal_d4489779d430a6cb2f97404761bb0ba65e6765cee2841c5215c10b9ec4554977->enter($__internal_d4489779d430a6cb2f97404761bb0ba65e6765cee2841c5215c10b9ec4554977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d4489779d430a6cb2f97404761bb0ba65e6765cee2841c5215c10b9ec4554977->leave($__internal_d4489779d430a6cb2f97404761bb0ba65e6765cee2841c5215c10b9ec4554977_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_004715c019cff52e24dc5a0ad9200822aba2f73525ef97c55e0fc923305a6a0d = $this->env->getExtension("native_profiler");
        $__internal_004715c019cff52e24dc5a0ad9200822aba2f73525ef97c55e0fc923305a6a0d->enter($__internal_004715c019cff52e24dc5a0ad9200822aba2f73525ef97c55e0fc923305a6a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_004715c019cff52e24dc5a0ad9200822aba2f73525ef97c55e0fc923305a6a0d->leave($__internal_004715c019cff52e24dc5a0ad9200822aba2f73525ef97c55e0fc923305a6a0d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a5d78d758ce09816ebbcf8fa6750d86e37c3d4a6a13c7122d56c9cd9c8113cb = $this->env->getExtension("native_profiler");
        $__internal_0a5d78d758ce09816ebbcf8fa6750d86e37c3d4a6a13c7122d56c9cd9c8113cb->enter($__internal_0a5d78d758ce09816ebbcf8fa6750d86e37c3d4a6a13c7122d56c9cd9c8113cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0a5d78d758ce09816ebbcf8fa6750d86e37c3d4a6a13c7122d56c9cd9c8113cb->leave($__internal_0a5d78d758ce09816ebbcf8fa6750d86e37c3d4a6a13c7122d56c9cd9c8113cb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_755ee97cfed487d504e25816bfb755ad227aa4f89e0d07b000754a7b2091e792 = $this->env->getExtension("native_profiler");
        $__internal_755ee97cfed487d504e25816bfb755ad227aa4f89e0d07b000754a7b2091e792->enter($__internal_755ee97cfed487d504e25816bfb755ad227aa4f89e0d07b000754a7b2091e792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_755ee97cfed487d504e25816bfb755ad227aa4f89e0d07b000754a7b2091e792->leave($__internal_755ee97cfed487d504e25816bfb755ad227aa4f89e0d07b000754a7b2091e792_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee946fa554df7565c353e5b8abe1dba648bcff82971b9cf9fcad05a1d92790cd = $this->env->getExtension("native_profiler");
        $__internal_ee946fa554df7565c353e5b8abe1dba648bcff82971b9cf9fcad05a1d92790cd->enter($__internal_ee946fa554df7565c353e5b8abe1dba648bcff82971b9cf9fcad05a1d92790cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ee946fa554df7565c353e5b8abe1dba648bcff82971b9cf9fcad05a1d92790cd->leave($__internal_ee946fa554df7565c353e5b8abe1dba648bcff82971b9cf9fcad05a1d92790cd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
