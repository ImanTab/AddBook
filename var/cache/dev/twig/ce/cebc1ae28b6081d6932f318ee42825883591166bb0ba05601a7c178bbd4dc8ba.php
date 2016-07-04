<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3ccf22fc9977bf005d0e2ee7c289f2a09522ec1226be41c7da08b64e23023518 extends Twig_Template
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
        $__internal_fc591f1a5995a312fc34e1317e414b082f0c41eff3572311629f77815b9419ce = $this->env->getExtension("native_profiler");
        $__internal_fc591f1a5995a312fc34e1317e414b082f0c41eff3572311629f77815b9419ce->enter($__internal_fc591f1a5995a312fc34e1317e414b082f0c41eff3572311629f77815b9419ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fc591f1a5995a312fc34e1317e414b082f0c41eff3572311629f77815b9419ce->leave($__internal_fc591f1a5995a312fc34e1317e414b082f0c41eff3572311629f77815b9419ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
