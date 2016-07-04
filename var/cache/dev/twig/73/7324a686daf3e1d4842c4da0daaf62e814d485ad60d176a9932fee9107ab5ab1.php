<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d43e121cc8e8b8fb35a82532776bafac4d09d2e0036b13c7d2e551b5ecc52974 extends Twig_Template
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
        $__internal_6cdbb4bbc1da978cee654e85c1f9d82025bc9afd27e59dc5621a8ad217ce0e3b = $this->env->getExtension("native_profiler");
        $__internal_6cdbb4bbc1da978cee654e85c1f9d82025bc9afd27e59dc5621a8ad217ce0e3b->enter($__internal_6cdbb4bbc1da978cee654e85c1f9d82025bc9afd27e59dc5621a8ad217ce0e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6cdbb4bbc1da978cee654e85c1f9d82025bc9afd27e59dc5621a8ad217ce0e3b->leave($__internal_6cdbb4bbc1da978cee654e85c1f9d82025bc9afd27e59dc5621a8ad217ce0e3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
