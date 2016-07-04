<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_de2a55b08cec560cd10c66e3f785c8336b21a6e4879b6fb765ed4dd192d190c7 extends Twig_Template
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
        $__internal_f125888ad92967b55974a6fd3784554471d67b2502f47926d417851ac680e725 = $this->env->getExtension("native_profiler");
        $__internal_f125888ad92967b55974a6fd3784554471d67b2502f47926d417851ac680e725->enter($__internal_f125888ad92967b55974a6fd3784554471d67b2502f47926d417851ac680e725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f125888ad92967b55974a6fd3784554471d67b2502f47926d417851ac680e725->leave($__internal_f125888ad92967b55974a6fd3784554471d67b2502f47926d417851ac680e725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
