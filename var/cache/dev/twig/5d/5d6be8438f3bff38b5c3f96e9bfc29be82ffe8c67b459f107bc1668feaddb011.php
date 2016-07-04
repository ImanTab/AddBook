<?php

/* @Contact/Contact_view/Contact_edit.html.twig */
class __TwigTemplate_10b7177c200ce9c205c67c4e6808a12264bf4e01863b604b267f00d82a2dd245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Contact/Contact_view/Contact_edit.html.twig", 1);
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
        $__internal_4b953f22050f5fa861f2016bbfc96f0a2550affac4be53bbc4e9159dc5d68d68 = $this->env->getExtension("native_profiler");
        $__internal_4b953f22050f5fa861f2016bbfc96f0a2550affac4be53bbc4e9159dc5d68d68->enter($__internal_4b953f22050f5fa861f2016bbfc96f0a2550affac4be53bbc4e9159dc5d68d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Contact/Contact_view/Contact_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b953f22050f5fa861f2016bbfc96f0a2550affac4be53bbc4e9159dc5d68d68->leave($__internal_4b953f22050f5fa861f2016bbfc96f0a2550affac4be53bbc4e9159dc5d68d68_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0bb24b994bcc194b86190892e5fcca2e9da7ff565ae8925f47bd7af3d4b4f8a = $this->env->getExtension("native_profiler");
        $__internal_c0bb24b994bcc194b86190892e5fcca2e9da7ff565ae8925f47bd7af3d4b4f8a->enter($__internal_c0bb24b994bcc194b86190892e5fcca2e9da7ff565ae8925f47bd7af3d4b4f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Address Book";
        
        $__internal_c0bb24b994bcc194b86190892e5fcca2e9da7ff565ae8925f47bd7af3d4b4f8a->leave($__internal_c0bb24b994bcc194b86190892e5fcca2e9da7ff565ae8925f47bd7af3d4b4f8a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7e415d59c9ffd623ac203173ddee17f51b0ee49dee10feec9cf328f957f07ea = $this->env->getExtension("native_profiler");
        $__internal_b7e415d59c9ffd623ac203173ddee17f51b0ee49dee10feec9cf328f957f07ea->enter($__internal_b7e415d59c9ffd623ac203173ddee17f51b0ee49dee10feec9cf328f957f07ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div>Modification</div>
<br />
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("contact_edit", array("contactId" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "method" => "POST"));
        echo "
\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
        echo "
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "

";
        
        $__internal_b7e415d59c9ffd623ac203173ddee17f51b0ee49dee10feec9cf328f957f07ea->leave($__internal_b7e415d59c9ffd623ac203173ddee17f51b0ee49dee10feec9cf328f957f07ea_prof);

    }

    public function getTemplateName()
    {
        return "@Contact/Contact_view/Contact_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Address Book{% endblock %}*/
/* */
/* {% block body %}*/
/* <div>Modification</div>*/
/* <br />*/
/* 	{{ form_start(form, {'action': path('contact_edit', {"contactId" : contact.id}), 'method': 'POST'}) }}*/
/* 	{{ form_row(form) }}*/
/* 	{{ form_widget(form.save )}}*/
/* */
/* {% endblock %}*/
/* */
