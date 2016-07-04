<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_046c914d3e4ac0870a23b01126901239ed50fa0deca431f903a3e77544f4923f extends Twig_Template
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
        $__internal_20448f257f922bc0002ccfbff52fb09847b530798baa5aecc3fbcfdc620603af = $this->env->getExtension("native_profiler");
        $__internal_20448f257f922bc0002ccfbff52fb09847b530798baa5aecc3fbcfdc620603af->enter($__internal_20448f257f922bc0002ccfbff52fb09847b530798baa5aecc3fbcfdc620603af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_20448f257f922bc0002ccfbff52fb09847b530798baa5aecc3fbcfdc620603af->leave($__internal_20448f257f922bc0002ccfbff52fb09847b530798baa5aecc3fbcfdc620603af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
