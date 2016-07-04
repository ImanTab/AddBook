<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7c91075496a7b25ddccce764f60efe3ad13d8af6c833e1e5880ca61d7e12654e extends Twig_Template
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
        $__internal_8b47de44ce6a204743cec680aecac8112be5f014acdd7a564749a92ac6352c15 = $this->env->getExtension("native_profiler");
        $__internal_8b47de44ce6a204743cec680aecac8112be5f014acdd7a564749a92ac6352c15->enter($__internal_8b47de44ce6a204743cec680aecac8112be5f014acdd7a564749a92ac6352c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8b47de44ce6a204743cec680aecac8112be5f014acdd7a564749a92ac6352c15->leave($__internal_8b47de44ce6a204743cec680aecac8112be5f014acdd7a564749a92ac6352c15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
