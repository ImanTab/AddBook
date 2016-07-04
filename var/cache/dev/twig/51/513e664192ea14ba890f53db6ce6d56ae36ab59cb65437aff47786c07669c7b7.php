<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_723931af07f5a252b4412a00bbf76a90bbd6f0538ee8bb2747a12a60da63f4c3 extends Twig_Template
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
        $__internal_db07c687bb4b6f86997d923fda9e30a3ee3ca797a9ad94b481ebadd82f66876b = $this->env->getExtension("native_profiler");
        $__internal_db07c687bb4b6f86997d923fda9e30a3ee3ca797a9ad94b481ebadd82f66876b->enter($__internal_db07c687bb4b6f86997d923fda9e30a3ee3ca797a9ad94b481ebadd82f66876b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_db07c687bb4b6f86997d923fda9e30a3ee3ca797a9ad94b481ebadd82f66876b->leave($__internal_db07c687bb4b6f86997d923fda9e30a3ee3ca797a9ad94b481ebadd82f66876b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
