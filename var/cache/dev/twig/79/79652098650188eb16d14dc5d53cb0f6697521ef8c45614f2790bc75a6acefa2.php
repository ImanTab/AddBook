<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_df7c38bded1f75b44a85515e8b141d3d8b8c3a63b08233d83a6c3edb064e9363 extends Twig_Template
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
        $__internal_0af49117e3638aee793f9b94b170a0126cdf90c54ae9a85e49f15d6f10b9af1f = $this->env->getExtension("native_profiler");
        $__internal_0af49117e3638aee793f9b94b170a0126cdf90c54ae9a85e49f15d6f10b9af1f->enter($__internal_0af49117e3638aee793f9b94b170a0126cdf90c54ae9a85e49f15d6f10b9af1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0af49117e3638aee793f9b94b170a0126cdf90c54ae9a85e49f15d6f10b9af1f->leave($__internal_0af49117e3638aee793f9b94b170a0126cdf90c54ae9a85e49f15d6f10b9af1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
