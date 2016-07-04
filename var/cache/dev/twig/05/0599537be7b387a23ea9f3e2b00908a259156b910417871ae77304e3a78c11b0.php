<?php

/* @Contact/Contact_view/Contact_new.html.twig */
class __TwigTemplate_3fb06ae4fcba1243b6ae5349b225d9a6e836ce7368113a30edc187f08e9abafc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@Contact/Contact_view/Contact_new.html.twig", 2);
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
        $__internal_12b9a386309b38051b9d4bd8e57caba00be9c544702149e7d41a0b26a92849b9 = $this->env->getExtension("native_profiler");
        $__internal_12b9a386309b38051b9d4bd8e57caba00be9c544702149e7d41a0b26a92849b9->enter($__internal_12b9a386309b38051b9d4bd8e57caba00be9c544702149e7d41a0b26a92849b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Contact/Contact_view/Contact_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b9a386309b38051b9d4bd8e57caba00be9c544702149e7d41a0b26a92849b9->leave($__internal_12b9a386309b38051b9d4bd8e57caba00be9c544702149e7d41a0b26a92849b9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_25841018fad4ee20f8af363f65cc0b66f981cd823c1ceb7b3df8ac3a08cd8bb1 = $this->env->getExtension("native_profiler");
        $__internal_25841018fad4ee20f8af363f65cc0b66f981cd823c1ceb7b3df8ac3a08cd8bb1->enter($__internal_25841018fad4ee20f8af363f65cc0b66f981cd823c1ceb7b3df8ac3a08cd8bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Address Book";
        
        $__internal_25841018fad4ee20f8af363f65cc0b66f981cd823c1ceb7b3df8ac3a08cd8bb1->leave($__internal_25841018fad4ee20f8af363f65cc0b66f981cd823c1ceb7b3df8ac3a08cd8bb1_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b151d2f4f0729754c5d748cbcaf2b42e43dce9c102822e287f6fc3a6d6d3174 = $this->env->getExtension("native_profiler");
        $__internal_9b151d2f4f0729754c5d748cbcaf2b42e43dce9c102822e287f6fc3a6d6d3174->enter($__internal_9b151d2f4f0729754c5d748cbcaf2b42e43dce9c102822e287f6fc3a6d6d3174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b151d2f4f0729754c5d748cbcaf2b42e43dce9c102822e287f6fc3a6d6d3174->leave($__internal_9b151d2f4f0729754c5d748cbcaf2b42e43dce9c102822e287f6fc3a6d6d3174_prof);

    }

    public function getTemplateName()
    {
        return "@Contact/Contact_view/Contact_new.html.twig";
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
