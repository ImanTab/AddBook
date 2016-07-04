<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0ea22c587d39e7d9cfa99720b2da51d7bd452311394d8d843300218b11c450df extends Twig_Template
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
        $__internal_fb9015112434ef4f3f780875d7bac029097df8db07d4df67dc8d91d7f6f6aca2 = $this->env->getExtension("native_profiler");
        $__internal_fb9015112434ef4f3f780875d7bac029097df8db07d4df67dc8d91d7f6f6aca2->enter($__internal_fb9015112434ef4f3f780875d7bac029097df8db07d4df67dc8d91d7f6f6aca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fb9015112434ef4f3f780875d7bac029097df8db07d4df67dc8d91d7f6f6aca2->leave($__internal_fb9015112434ef4f3f780875d7bac029097df8db07d4df67dc8d91d7f6f6aca2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
