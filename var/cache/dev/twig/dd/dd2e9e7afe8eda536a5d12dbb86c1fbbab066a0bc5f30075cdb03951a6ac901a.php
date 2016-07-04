<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b9821a23dd7ea6359adb9c090a7f046908fbb0b12399b0a741b6684b96ca0c40 extends Twig_Template
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
        $__internal_e0e44c9ed28ac4f4d3e3d54d79dedabe54bdd28cea8a447962f4dca4a73ea746 = $this->env->getExtension("native_profiler");
        $__internal_e0e44c9ed28ac4f4d3e3d54d79dedabe54bdd28cea8a447962f4dca4a73ea746->enter($__internal_e0e44c9ed28ac4f4d3e3d54d79dedabe54bdd28cea8a447962f4dca4a73ea746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e0e44c9ed28ac4f4d3e3d54d79dedabe54bdd28cea8a447962f4dca4a73ea746->leave($__internal_e0e44c9ed28ac4f4d3e3d54d79dedabe54bdd28cea8a447962f4dca4a73ea746_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
