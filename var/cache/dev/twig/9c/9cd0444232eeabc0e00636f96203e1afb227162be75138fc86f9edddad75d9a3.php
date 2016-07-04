<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ab91a6ab8bb79fa40a2790ee1b2ce001bc0157b57c7b5115ce38f804d3e8a957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_cf7144f24d03ce6b46da337aef50fbc3b952979c4565d4515670faf8ebab8461 = $this->env->getExtension("native_profiler");
        $__internal_cf7144f24d03ce6b46da337aef50fbc3b952979c4565d4515670faf8ebab8461->enter($__internal_cf7144f24d03ce6b46da337aef50fbc3b952979c4565d4515670faf8ebab8461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7144f24d03ce6b46da337aef50fbc3b952979c4565d4515670faf8ebab8461->leave($__internal_cf7144f24d03ce6b46da337aef50fbc3b952979c4565d4515670faf8ebab8461_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3677583e93c4605a1e8b3af4fbd69684e5ae4b84af8d51042748c5ce2b835bf2 = $this->env->getExtension("native_profiler");
        $__internal_3677583e93c4605a1e8b3af4fbd69684e5ae4b84af8d51042748c5ce2b835bf2->enter($__internal_3677583e93c4605a1e8b3af4fbd69684e5ae4b84af8d51042748c5ce2b835bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3677583e93c4605a1e8b3af4fbd69684e5ae4b84af8d51042748c5ce2b835bf2->leave($__internal_3677583e93c4605a1e8b3af4fbd69684e5ae4b84af8d51042748c5ce2b835bf2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75f19f972b050d0e2d13ad5fff3db1ef8141bf82cb9ee671782a1cd72297a080 = $this->env->getExtension("native_profiler");
        $__internal_75f19f972b050d0e2d13ad5fff3db1ef8141bf82cb9ee671782a1cd72297a080->enter($__internal_75f19f972b050d0e2d13ad5fff3db1ef8141bf82cb9ee671782a1cd72297a080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_75f19f972b050d0e2d13ad5fff3db1ef8141bf82cb9ee671782a1cd72297a080->leave($__internal_75f19f972b050d0e2d13ad5fff3db1ef8141bf82cb9ee671782a1cd72297a080_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8635c276c92f4e34aa72ae24df39b1ee0145b18759f42225a1c7c19cc9a22091 = $this->env->getExtension("native_profiler");
        $__internal_8635c276c92f4e34aa72ae24df39b1ee0145b18759f42225a1c7c19cc9a22091->enter($__internal_8635c276c92f4e34aa72ae24df39b1ee0145b18759f42225a1c7c19cc9a22091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8635c276c92f4e34aa72ae24df39b1ee0145b18759f42225a1c7c19cc9a22091->leave($__internal_8635c276c92f4e34aa72ae24df39b1ee0145b18759f42225a1c7c19cc9a22091_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
