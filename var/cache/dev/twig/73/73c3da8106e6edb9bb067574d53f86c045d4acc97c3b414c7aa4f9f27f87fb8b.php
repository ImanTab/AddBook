<?php

/* ContactBundle:Contact_view:Contact_new.html.twig */
class __TwigTemplate_c6e23a74b8dbefc7f1441c2b808b90b34bb04f806c84b5cf5f3df9cdfb57c688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "ContactBundle:Contact_view:Contact_new.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c54865dc46336e0ae86cc370923e9eb53ef40129efbf9f28055d5880be9c1ea = $this->env->getExtension("native_profiler");
        $__internal_3c54865dc46336e0ae86cc370923e9eb53ef40129efbf9f28055d5880be9c1ea->enter($__internal_3c54865dc46336e0ae86cc370923e9eb53ef40129efbf9f28055d5880be9c1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactBundle:Contact_view:Contact_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c54865dc46336e0ae86cc370923e9eb53ef40129efbf9f28055d5880be9c1ea->leave($__internal_3c54865dc46336e0ae86cc370923e9eb53ef40129efbf9f28055d5880be9c1ea_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d66e153508d3fc93d8b7a4f9281cc991b907b75969cd974160921548317f4e9 = $this->env->getExtension("native_profiler");
        $__internal_9d66e153508d3fc93d8b7a4f9281cc991b907b75969cd974160921548317f4e9->enter($__internal_9d66e153508d3fc93d8b7a4f9281cc991b907b75969cd974160921548317f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Address Book";
        
        $__internal_9d66e153508d3fc93d8b7a4f9281cc991b907b75969cd974160921548317f4e9->leave($__internal_9d66e153508d3fc93d8b7a4f9281cc991b907b75969cd974160921548317f4e9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1fa15d9253873cbd151237dee733c1dcd7a5ef60d1e2b698075cf704ed5995d = $this->env->getExtension("native_profiler");
        $__internal_c1fa15d9253873cbd151237dee733c1dcd7a5ef60d1e2b698075cf704ed5995d->enter($__internal_c1fa15d9253873cbd151237dee733c1dcd7a5ef60d1e2b698075cf704ed5995d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div>Créer un nouveau contact</div>
<br />
\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("contact_new"), "method" => "POST"));
        echo "
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
        echo "
\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "

";
        
        $__internal_c1fa15d9253873cbd151237dee733c1dcd7a5ef60d1e2b698075cf704ed5995d->leave($__internal_c1fa15d9253873cbd151237dee733c1dcd7a5ef60d1e2b698075cf704ed5995d_prof);

    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact_view:Contact_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 10,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Address Book{% endblock %}*/
/* */
/* {% block body %}*/
/* <div>Créer un nouveau contact</div>*/
/* <br />*/
/* 	{{ form_start(form, {'action': path('contact_new'), 'method': 'POST'}) }}*/
/* 	{{ form_row(form) }}*/
/* 	{{ form_widget(form.save )}}*/
/* */
/* {% endblock %}*/
/* */
