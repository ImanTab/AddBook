<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e7ec7f17318a6e7044aef66c8fed89df8b10291be7dd0d7aac679e3f1c52fe59 extends Twig_Template
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
        $__internal_e49642faf8ccb22b283d72622f60ea356713d1afe436eaad27dd9f8fd93ab66d = $this->env->getExtension("native_profiler");
        $__internal_e49642faf8ccb22b283d72622f60ea356713d1afe436eaad27dd9f8fd93ab66d->enter($__internal_e49642faf8ccb22b283d72622f60ea356713d1afe436eaad27dd9f8fd93ab66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e49642faf8ccb22b283d72622f60ea356713d1afe436eaad27dd9f8fd93ab66d->leave($__internal_e49642faf8ccb22b283d72622f60ea356713d1afe436eaad27dd9f8fd93ab66d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
