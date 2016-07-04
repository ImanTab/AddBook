<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8d5cbae52e4217d3d8b1d6132cd9a53e3fa80c8bc6e75835e301b5fded93d8d5 extends Twig_Template
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
        $__internal_eabc88f05415b3a804493a8372cff80c2e8f2c9790174e1a25debe601cdeeef0 = $this->env->getExtension("native_profiler");
        $__internal_eabc88f05415b3a804493a8372cff80c2e8f2c9790174e1a25debe601cdeeef0->enter($__internal_eabc88f05415b3a804493a8372cff80c2e8f2c9790174e1a25debe601cdeeef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_eabc88f05415b3a804493a8372cff80c2e8f2c9790174e1a25debe601cdeeef0->leave($__internal_eabc88f05415b3a804493a8372cff80c2e8f2c9790174e1a25debe601cdeeef0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
