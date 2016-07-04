<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13ca2b043ce78ce8bd3c88f206596c9d0aed1818dd32ae64cb24d28085441453 extends Twig_Template
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
        $__internal_f04c6e478421df4ae69d9806a95f82d44d621a4bb33ec2f2f599872d1f1bfcab = $this->env->getExtension("native_profiler");
        $__internal_f04c6e478421df4ae69d9806a95f82d44d621a4bb33ec2f2f599872d1f1bfcab->enter($__internal_f04c6e478421df4ae69d9806a95f82d44d621a4bb33ec2f2f599872d1f1bfcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f04c6e478421df4ae69d9806a95f82d44d621a4bb33ec2f2f599872d1f1bfcab->leave($__internal_f04c6e478421df4ae69d9806a95f82d44d621a4bb33ec2f2f599872d1f1bfcab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
