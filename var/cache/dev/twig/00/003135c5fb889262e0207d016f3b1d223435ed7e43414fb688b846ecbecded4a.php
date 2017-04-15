<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e2699b053f15534bdda33ec9dbfc60684166a2c96e7c64af8bfff4cb4cda3f47 extends Twig_Template
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
        $__internal_9e7efb6bd79829acd11ba7a736e30de6fdab1dd0d006e7ee909a99e22f0a76f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7efb6bd79829acd11ba7a736e30de6fdab1dd0d006e7ee909a99e22f0a76f6->enter($__internal_9e7efb6bd79829acd11ba7a736e30de6fdab1dd0d006e7ee909a99e22f0a76f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f23a107d29cd9d6e4df92694fd5ad7b5415d63d1690f7d1d0887e4d5627f18e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23a107d29cd9d6e4df92694fd5ad7b5415d63d1690f7d1d0887e4d5627f18e5->enter($__internal_f23a107d29cd9d6e4df92694fd5ad7b5415d63d1690f7d1d0887e4d5627f18e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9e7efb6bd79829acd11ba7a736e30de6fdab1dd0d006e7ee909a99e22f0a76f6->leave($__internal_9e7efb6bd79829acd11ba7a736e30de6fdab1dd0d006e7ee909a99e22f0a76f6_prof);

        
        $__internal_f23a107d29cd9d6e4df92694fd5ad7b5415d63d1690f7d1d0887e4d5627f18e5->leave($__internal_f23a107d29cd9d6e4df92694fd5ad7b5415d63d1690f7d1d0887e4d5627f18e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
