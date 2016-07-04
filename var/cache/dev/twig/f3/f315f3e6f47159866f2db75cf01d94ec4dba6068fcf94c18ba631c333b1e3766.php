<?php

/* ContactBundle:Contact_view:Contact_list.html.twig */
class __TwigTemplate_481e2c210876370e761b028f03832434d39a526a9d122cc02308cf5ca7f16564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ContactBundle:Contact_view:Contact_list.html.twig", 1);
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
        $__internal_4f2d913dfe322559178c3eac1dceafd9ee6f7084e60e47d6ea0325cdff7732e7 = $this->env->getExtension("native_profiler");
        $__internal_4f2d913dfe322559178c3eac1dceafd9ee6f7084e60e47d6ea0325cdff7732e7->enter($__internal_4f2d913dfe322559178c3eac1dceafd9ee6f7084e60e47d6ea0325cdff7732e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactBundle:Contact_view:Contact_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f2d913dfe322559178c3eac1dceafd9ee6f7084e60e47d6ea0325cdff7732e7->leave($__internal_4f2d913dfe322559178c3eac1dceafd9ee6f7084e60e47d6ea0325cdff7732e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c576c08fa671bc2737db1f66ae16e9bcd04ee581b57c8ec1cde48345ed02098f = $this->env->getExtension("native_profiler");
        $__internal_c576c08fa671bc2737db1f66ae16e9bcd04ee581b57c8ec1cde48345ed02098f->enter($__internal_c576c08fa671bc2737db1f66ae16e9bcd04ee581b57c8ec1cde48345ed02098f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Address Book";
        
        $__internal_c576c08fa671bc2737db1f66ae16e9bcd04ee581b57c8ec1cde48345ed02098f->leave($__internal_c576c08fa671bc2737db1f66ae16e9bcd04ee581b57c8ec1cde48345ed02098f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2a40baa3f28dc18276235635913c2e80cfc8b72246fd420512d78358613c4b4 = $this->env->getExtension("native_profiler");
        $__internal_e2a40baa3f28dc18276235635913c2e80cfc8b72246fd420512d78358613c4b4->enter($__internal_e2a40baa3f28dc18276235635913c2e80cfc8b72246fd420512d78358613c4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div>
  <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">
  <input type=\"submit\" value=\"Ajouter un contact\">
  </form>
</div>
<table cellpadding=6>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "<tr>
        <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("contactId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</a></td>
        <td><form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("contactId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
              <input type=\"submit\" value=\"Modify\">
            </form></td>
    <td><form action=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_delete", array("contactId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
              <input type=\"submit\" value=\"Delete\">
            </form></td>
  </tr>
  <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </table>

";
        
        $__internal_e2a40baa3f28dc18276235635913c2e80cfc8b72246fd420512d78358613c4b4->leave($__internal_e2a40baa3f28dc18276235635913c2e80cfc8b72246fd420512d78358613c4b4_prof);

    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact_view:Contact_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  83 => 18,  77 => 15,  71 => 14,  68 => 13,  64 => 12,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Address Book{% endblock %}*/
/* */
/* {% block body %}*/
/* <div>*/
/*   <form action="{{ path('contact_new')}}">*/
/*   <input type="submit" value="Ajouter un contact">*/
/*   </form>*/
/* </div>*/
/* <table cellpadding=6>*/
/* {% for user in contact %}*/
/* <tr>*/
/*         <td><a href="{{ path('contact_show', {"contactId" : user.id})}}">{{ user.firstname }}</a></td>*/
/*         <td><form action="{{ path('contact_edit', {"contactId" : user.id})}}">*/
/*               <input type="submit" value="Modify">*/
/*             </form></td>*/
/*     <td><form action="{{ path('contact_delete', {"contactId" : user.id})}}">*/
/*               <input type="submit" value="Delete">*/
/*             </form></td>*/
/*   </tr>*/
/*   <br />*/
/*     {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
