<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b4a3f72e622ac46d28490e144d1eaed0f196c599edd55a13ad4be21343c26cfc extends Twig_Template
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
        $__internal_7352e176975ac5a5dbfa3909c2c02fa694ec17c2a8695d5820de210ba7f5cc82 = $this->env->getExtension("native_profiler");
        $__internal_7352e176975ac5a5dbfa3909c2c02fa694ec17c2a8695d5820de210ba7f5cc82->enter($__internal_7352e176975ac5a5dbfa3909c2c02fa694ec17c2a8695d5820de210ba7f5cc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7352e176975ac5a5dbfa3909c2c02fa694ec17c2a8695d5820de210ba7f5cc82->leave($__internal_7352e176975ac5a5dbfa3909c2c02fa694ec17c2a8695d5820de210ba7f5cc82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
