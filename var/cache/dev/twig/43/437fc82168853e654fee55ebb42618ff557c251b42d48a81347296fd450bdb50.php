<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_09f57fdc096c2fa445d0a549bf55a5781b4a46df10ff858bbab987900b12c25e extends Twig_Template
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
        $__internal_90a1315f1227c41f434c23a6a953327e77865fef5dc82d61e21593489145baac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a1315f1227c41f434c23a6a953327e77865fef5dc82d61e21593489145baac->enter($__internal_90a1315f1227c41f434c23a6a953327e77865fef5dc82d61e21593489145baac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4a18517c4669a5e14f797bcb72158ed02ac5454d90cf41a8ac4a702be7db8eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a18517c4669a5e14f797bcb72158ed02ac5454d90cf41a8ac4a702be7db8eda->enter($__internal_4a18517c4669a5e14f797bcb72158ed02ac5454d90cf41a8ac4a702be7db8eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_90a1315f1227c41f434c23a6a953327e77865fef5dc82d61e21593489145baac->leave($__internal_90a1315f1227c41f434c23a6a953327e77865fef5dc82d61e21593489145baac_prof);

        
        $__internal_4a18517c4669a5e14f797bcb72158ed02ac5454d90cf41a8ac4a702be7db8eda->leave($__internal_4a18517c4669a5e14f797bcb72158ed02ac5454d90cf41a8ac4a702be7db8eda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
