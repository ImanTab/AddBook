<?php

/* @Contact/Contact_view/Contact_list.html.twig */
class __TwigTemplate_9ad9dcba1465aa7182845e4f849cbb22e4ebdb9a7cb66811d002c01f77074ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Contact/Contact_view/Contact_list.html.twig", 1);
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
        $__internal_960734a21ec666bb1a04749d9048499f9e5a5615e69f856cad2a15e6a6040142 = $this->env->getExtension("native_profiler");
        $__internal_960734a21ec666bb1a04749d9048499f9e5a5615e69f856cad2a15e6a6040142->enter($__internal_960734a21ec666bb1a04749d9048499f9e5a5615e69f856cad2a15e6a6040142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Contact/Contact_view/Contact_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960734a21ec666bb1a04749d9048499f9e5a5615e69f856cad2a15e6a6040142->leave($__internal_960734a21ec666bb1a04749d9048499f9e5a5615e69f856cad2a15e6a6040142_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80917fd084881553ee3646e96d41f801270d6cd395270a8bcb3211ce22772d60 = $this->env->getExtension("native_profiler");
        $__internal_80917fd084881553ee3646e96d41f801270d6cd395270a8bcb3211ce22772d60->enter($__internal_80917fd084881553ee3646e96d41f801270d6cd395270a8bcb3211ce22772d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Address Book";
        
        $__internal_80917fd084881553ee3646e96d41f801270d6cd395270a8bcb3211ce22772d60->leave($__internal_80917fd084881553ee3646e96d41f801270d6cd395270a8bcb3211ce22772d60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31dd8ab4cf8452798c02837d477b42727a7139e0d6ed7821e15f069e4bdf3ea5 = $this->env->getExtension("native_profiler");
        $__internal_31dd8ab4cf8452798c02837d477b42727a7139e0d6ed7821e15f069e4bdf3ea5->enter($__internal_31dd8ab4cf8452798c02837d477b42727a7139e0d6ed7821e15f069e4bdf3ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    ";
            // line 21
            echo "  </tr>
  <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </table>

";
        
        $__internal_31dd8ab4cf8452798c02837d477b42727a7139e0d6ed7821e15f069e4bdf3ea5->leave($__internal_31dd8ab4cf8452798c02837d477b42727a7139e0d6ed7821e15f069e4bdf3ea5_prof);

    }

    public function getTemplateName()
    {
        return "@Contact/Contact_view/Contact_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  83 => 21,  77 => 15,  71 => 14,  68 => 13,  64 => 12,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*     {##<td><form action="{{ path('contact_delete', {"contactId" : user.id})}}">*/
/*               <input type="submit" value="Delete">*/
/*             </form></td>##}*/
/*   </tr>*/
/*   <br />*/
/*     {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
