<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5e494e6747934d266ae570c5dca841d20419f678b4e9b915785685af1848eb85 extends Twig_Template
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
        $__internal_c3051049d8e4dc1ec890f559ef073ca7583196f9a710a27ed1cae578e4223e15 = $this->env->getExtension("native_profiler");
        $__internal_c3051049d8e4dc1ec890f559ef073ca7583196f9a710a27ed1cae578e4223e15->enter($__internal_c3051049d8e4dc1ec890f559ef073ca7583196f9a710a27ed1cae578e4223e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c3051049d8e4dc1ec890f559ef073ca7583196f9a710a27ed1cae578e4223e15->leave($__internal_c3051049d8e4dc1ec890f559ef073ca7583196f9a710a27ed1cae578e4223e15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
