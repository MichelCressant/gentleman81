<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_775191e24aa794cc7ea3237facfc36e38760631eb90b19ade025aa6b8d6b4f16 extends Twig_Template
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
        $__internal_8cb2d7a7db7de39946f857eb49b6fe8e775da6fc1d592bddba16f1816da15f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb2d7a7db7de39946f857eb49b6fe8e775da6fc1d592bddba16f1816da15f18->enter($__internal_8cb2d7a7db7de39946f857eb49b6fe8e775da6fc1d592bddba16f1816da15f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_612dd7d55dde292a8e75f8e53dff28e27e372239221c56351649bf9333cbcca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612dd7d55dde292a8e75f8e53dff28e27e372239221c56351649bf9333cbcca1->enter($__internal_612dd7d55dde292a8e75f8e53dff28e27e372239221c56351649bf9333cbcca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8cb2d7a7db7de39946f857eb49b6fe8e775da6fc1d592bddba16f1816da15f18->leave($__internal_8cb2d7a7db7de39946f857eb49b6fe8e775da6fc1d592bddba16f1816da15f18_prof);

        
        $__internal_612dd7d55dde292a8e75f8e53dff28e27e372239221c56351649bf9333cbcca1->leave($__internal_612dd7d55dde292a8e75f8e53dff28e27e372239221c56351649bf9333cbcca1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
