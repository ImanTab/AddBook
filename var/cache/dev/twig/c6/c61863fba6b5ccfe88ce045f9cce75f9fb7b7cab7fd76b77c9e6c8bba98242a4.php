<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4d9af5062bc59fa461a22e9a853cc42b1814d90fa9663db3169f9c101761a471 extends Twig_Template
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
        $__internal_ef460df201feeac7dd28cd28e16d1f175937142bb38dd0adb07006f000493976 = $this->env->getExtension("native_profiler");
        $__internal_ef460df201feeac7dd28cd28e16d1f175937142bb38dd0adb07006f000493976->enter($__internal_ef460df201feeac7dd28cd28e16d1f175937142bb38dd0adb07006f000493976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ef460df201feeac7dd28cd28e16d1f175937142bb38dd0adb07006f000493976->leave($__internal_ef460df201feeac7dd28cd28e16d1f175937142bb38dd0adb07006f000493976_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
