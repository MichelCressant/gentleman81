<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_63c1d323467bdbe7e480cb76c4ea0383141e425b716ec17b4393e0cd0785f2f3 extends Twig_Template
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
        $__internal_5e07d33adf96f3bc93d5b6cba4bc9e03e86908d8e694658061b00378b0e62413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e07d33adf96f3bc93d5b6cba4bc9e03e86908d8e694658061b00378b0e62413->enter($__internal_5e07d33adf96f3bc93d5b6cba4bc9e03e86908d8e694658061b00378b0e62413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_dc0c408e52a1a33b8ed6968e142e87658b6fea98379d149303ff78a3b677056a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0c408e52a1a33b8ed6968e142e87658b6fea98379d149303ff78a3b677056a->enter($__internal_dc0c408e52a1a33b8ed6968e142e87658b6fea98379d149303ff78a3b677056a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5e07d33adf96f3bc93d5b6cba4bc9e03e86908d8e694658061b00378b0e62413->leave($__internal_5e07d33adf96f3bc93d5b6cba4bc9e03e86908d8e694658061b00378b0e62413_prof);

        
        $__internal_dc0c408e52a1a33b8ed6968e142e87658b6fea98379d149303ff78a3b677056a->leave($__internal_dc0c408e52a1a33b8ed6968e142e87658b6fea98379d149303ff78a3b677056a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
