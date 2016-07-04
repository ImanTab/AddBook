<?php

/* ContactBundle:Contact_view:Contact_edit.html.twig */
class __TwigTemplate_88fb315a5c1a8147c0c6e0f7e9d42e4d295764e57d21b5228324fddbbc03c869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ContactBundle:Contact_view:Contact_edit.html.twig", 1);
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
        $__internal_ff25798af9020967510b73f25bf2444c616bb15f17169cbecd5069d81ce557b7 = $this->env->getExtension("native_profiler");
        $__internal_ff25798af9020967510b73f25bf2444c616bb15f17169cbecd5069d81ce557b7->enter($__internal_ff25798af9020967510b73f25bf2444c616bb15f17169cbecd5069d81ce557b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactBundle:Contact_view:Contact_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff25798af9020967510b73f25bf2444c616bb15f17169cbecd5069d81ce557b7->leave($__internal_ff25798af9020967510b73f25bf2444c616bb15f17169cbecd5069d81ce557b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6523071757249978d68465f6bdda0c3b2134625904dc66825eae96d79eeb959 = $this->env->getExtension("native_profiler");
        $__internal_d6523071757249978d68465f6bdda0c3b2134625904dc66825eae96d79eeb959->enter($__internal_d6523071757249978d68465f6bdda0c3b2134625904dc66825eae96d79eeb959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Address Book";
        
        $__internal_d6523071757249978d68465f6bdda0c3b2134625904dc66825eae96d79eeb959->leave($__internal_d6523071757249978d68465f6bdda0c3b2134625904dc66825eae96d79eeb959_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_26bc81d207fbd770b440109286fdfb34519eaa004d8c7ca740fe29765ff9f7b6 = $this->env->getExtension("native_profiler");
        $__internal_26bc81d207fbd770b440109286fdfb34519eaa004d8c7ca740fe29765ff9f7b6->enter($__internal_26bc81d207fbd770b440109286fdfb34519eaa004d8c7ca740fe29765ff9f7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26bc81d207fbd770b440109286fdfb34519eaa004d8c7ca740fe29765ff9f7b6->leave($__internal_26bc81d207fbd770b440109286fdfb34519eaa004d8c7ca740fe29765ff9f7b6_prof);

    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact_view:Contact_edit.html.twig";
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
