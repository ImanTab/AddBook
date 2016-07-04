<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6bba75b9229d5d7af70dcb61e1c3e1300cc8f0700bd146b30c0c17fae38e11f6 extends Twig_Template
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
        $__internal_19e7c61ddb010422f8ab7a265d78ef5ccf9e62b33532e66a6e0c889a062d7be8 = $this->env->getExtension("native_profiler");
        $__internal_19e7c61ddb010422f8ab7a265d78ef5ccf9e62b33532e66a6e0c889a062d7be8->enter($__internal_19e7c61ddb010422f8ab7a265d78ef5ccf9e62b33532e66a6e0c889a062d7be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_19e7c61ddb010422f8ab7a265d78ef5ccf9e62b33532e66a6e0c889a062d7be8->leave($__internal_19e7c61ddb010422f8ab7a265d78ef5ccf9e62b33532e66a6e0c889a062d7be8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
