<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_49ede2b5f6c1b7d392feecc0e2baf0c63dae65c9aab607ec19d2fa6e976dcd08 extends Twig_Template
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
        $__internal_186b60b196e3c11ca36b75ee4df9b8becaa5731841fabbcb66ed89375897d8ec = $this->env->getExtension("native_profiler");
        $__internal_186b60b196e3c11ca36b75ee4df9b8becaa5731841fabbcb66ed89375897d8ec->enter($__internal_186b60b196e3c11ca36b75ee4df9b8becaa5731841fabbcb66ed89375897d8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_186b60b196e3c11ca36b75ee4df9b8becaa5731841fabbcb66ed89375897d8ec->leave($__internal_186b60b196e3c11ca36b75ee4df9b8becaa5731841fabbcb66ed89375897d8ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
