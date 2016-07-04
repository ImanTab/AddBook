<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_dfee25588ab1865cdd3888c808f92c484473ff700b0d2e59e1cb81834704b0fe extends Twig_Template
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
        $__internal_378649df91f7ace39317107c8b644f4c22b440183abf9be1348f508ca51f8ae5 = $this->env->getExtension("native_profiler");
        $__internal_378649df91f7ace39317107c8b644f4c22b440183abf9be1348f508ca51f8ae5->enter($__internal_378649df91f7ace39317107c8b644f4c22b440183abf9be1348f508ca51f8ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_378649df91f7ace39317107c8b644f4c22b440183abf9be1348f508ca51f8ae5->leave($__internal_378649df91f7ace39317107c8b644f4c22b440183abf9be1348f508ca51f8ae5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
