<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2f59c4827a4f4aeaa86e09b26dea3dcdace02c7530afe4099747bc5035970479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42fb0448240fe439e17a03b5395515937b4ef74a2b98b1733c3477d31ebfd705 = $this->env->getExtension("native_profiler");
        $__internal_42fb0448240fe439e17a03b5395515937b4ef74a2b98b1733c3477d31ebfd705->enter($__internal_42fb0448240fe439e17a03b5395515937b4ef74a2b98b1733c3477d31ebfd705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42fb0448240fe439e17a03b5395515937b4ef74a2b98b1733c3477d31ebfd705->leave($__internal_42fb0448240fe439e17a03b5395515937b4ef74a2b98b1733c3477d31ebfd705_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a42dc01f844d6b646ff6849f217993f2fee1f30635a30b49f24535bec7e2472d = $this->env->getExtension("native_profiler");
        $__internal_a42dc01f844d6b646ff6849f217993f2fee1f30635a30b49f24535bec7e2472d->enter($__internal_a42dc01f844d6b646ff6849f217993f2fee1f30635a30b49f24535bec7e2472d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a42dc01f844d6b646ff6849f217993f2fee1f30635a30b49f24535bec7e2472d->leave($__internal_a42dc01f844d6b646ff6849f217993f2fee1f30635a30b49f24535bec7e2472d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4134ff9fe79baaf8d9831cd11296bf921a31c20f26dc64eded65dcdcd40d8d4 = $this->env->getExtension("native_profiler");
        $__internal_c4134ff9fe79baaf8d9831cd11296bf921a31c20f26dc64eded65dcdcd40d8d4->enter($__internal_c4134ff9fe79baaf8d9831cd11296bf921a31c20f26dc64eded65dcdcd40d8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c4134ff9fe79baaf8d9831cd11296bf921a31c20f26dc64eded65dcdcd40d8d4->leave($__internal_c4134ff9fe79baaf8d9831cd11296bf921a31c20f26dc64eded65dcdcd40d8d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60bfc33251fb972461f57cb2388d2a67b09093ba6e1c9f6fce1828478d9424c3 = $this->env->getExtension("native_profiler");
        $__internal_60bfc33251fb972461f57cb2388d2a67b09093ba6e1c9f6fce1828478d9424c3->enter($__internal_60bfc33251fb972461f57cb2388d2a67b09093ba6e1c9f6fce1828478d9424c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_60bfc33251fb972461f57cb2388d2a67b09093ba6e1c9f6fce1828478d9424c3->leave($__internal_60bfc33251fb972461f57cb2388d2a67b09093ba6e1c9f6fce1828478d9424c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
