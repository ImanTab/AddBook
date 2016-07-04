<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_41510bd5ab335a662f96d316722ac78d65d5ce236a33da5321d99cd85f318851 extends Twig_Template
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
        $__internal_52166652648dacfb79ac330df4a0d7718680a236bd1590ed31236553d3a4b17c = $this->env->getExtension("native_profiler");
        $__internal_52166652648dacfb79ac330df4a0d7718680a236bd1590ed31236553d3a4b17c->enter($__internal_52166652648dacfb79ac330df4a0d7718680a236bd1590ed31236553d3a4b17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_52166652648dacfb79ac330df4a0d7718680a236bd1590ed31236553d3a4b17c->leave($__internal_52166652648dacfb79ac330df4a0d7718680a236bd1590ed31236553d3a4b17c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
