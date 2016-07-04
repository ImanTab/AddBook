<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_df5cc76797c12e8367bf591788c684d7387ef544b3cdb7b8edbb85de07b1afa7 extends Twig_Template
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
        $__internal_a4fdce411707c19e0ca91572ac9107fe75012a024a1eee85aaa48ddebbe985e4 = $this->env->getExtension("native_profiler");
        $__internal_a4fdce411707c19e0ca91572ac9107fe75012a024a1eee85aaa48ddebbe985e4->enter($__internal_a4fdce411707c19e0ca91572ac9107fe75012a024a1eee85aaa48ddebbe985e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a4fdce411707c19e0ca91572ac9107fe75012a024a1eee85aaa48ddebbe985e4->leave($__internal_a4fdce411707c19e0ca91572ac9107fe75012a024a1eee85aaa48ddebbe985e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
