<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c04696db1b4f556ffc178f8fe11b7a5dd937db8e8d8cdcadcb73e163b7c2262f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_110f2c8b5f9997aef9aab160de2e1430fc499429ede86adb7cda7d44583b140c = $this->env->getExtension("native_profiler");
        $__internal_110f2c8b5f9997aef9aab160de2e1430fc499429ede86adb7cda7d44583b140c->enter($__internal_110f2c8b5f9997aef9aab160de2e1430fc499429ede86adb7cda7d44583b140c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_110f2c8b5f9997aef9aab160de2e1430fc499429ede86adb7cda7d44583b140c->leave($__internal_110f2c8b5f9997aef9aab160de2e1430fc499429ede86adb7cda7d44583b140c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
