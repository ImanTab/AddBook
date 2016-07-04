<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ac2fe6c6309f59e8afff8d51697762e4f263f102ab6909482d41595336dc7712 extends Twig_Template
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
        $__internal_1c91cdd89c6885c478687f065a10d229603948b629f31e6e2e24c9204214bf6b = $this->env->getExtension("native_profiler");
        $__internal_1c91cdd89c6885c478687f065a10d229603948b629f31e6e2e24c9204214bf6b->enter($__internal_1c91cdd89c6885c478687f065a10d229603948b629f31e6e2e24c9204214bf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1c91cdd89c6885c478687f065a10d229603948b629f31e6e2e24c9204214bf6b->leave($__internal_1c91cdd89c6885c478687f065a10d229603948b629f31e6e2e24c9204214bf6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
