<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0e5085c8e7e4888862b01084d23872f1aec27cb83bc25063738d8844b2b118a6 extends Twig_Template
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
        $__internal_3c9d9156b9b9931ac2fac819fad568332cb9d9829b6d7acc5c811a7a351a9173 = $this->env->getExtension("native_profiler");
        $__internal_3c9d9156b9b9931ac2fac819fad568332cb9d9829b6d7acc5c811a7a351a9173->enter($__internal_3c9d9156b9b9931ac2fac819fad568332cb9d9829b6d7acc5c811a7a351a9173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3c9d9156b9b9931ac2fac819fad568332cb9d9829b6d7acc5c811a7a351a9173->leave($__internal_3c9d9156b9b9931ac2fac819fad568332cb9d9829b6d7acc5c811a7a351a9173_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
