<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d3b327203596c862b72fb9bf7194241e61458698f0799395ff60e9a7578f6abc extends Twig_Template
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
        $__internal_f09b820c2f5bfe541eb3179c7d4106a4a69bf088414c63f3e856b09798437039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09b820c2f5bfe541eb3179c7d4106a4a69bf088414c63f3e856b09798437039->enter($__internal_f09b820c2f5bfe541eb3179c7d4106a4a69bf088414c63f3e856b09798437039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8ad0d6604f9cb1c4751afbc650c46672afd72d4f9aa8e78c378bb31c88358469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad0d6604f9cb1c4751afbc650c46672afd72d4f9aa8e78c378bb31c88358469->enter($__internal_8ad0d6604f9cb1c4751afbc650c46672afd72d4f9aa8e78c378bb31c88358469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f09b820c2f5bfe541eb3179c7d4106a4a69bf088414c63f3e856b09798437039->leave($__internal_f09b820c2f5bfe541eb3179c7d4106a4a69bf088414c63f3e856b09798437039_prof);

        
        $__internal_8ad0d6604f9cb1c4751afbc650c46672afd72d4f9aa8e78c378bb31c88358469->leave($__internal_8ad0d6604f9cb1c4751afbc650c46672afd72d4f9aa8e78c378bb31c88358469_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
