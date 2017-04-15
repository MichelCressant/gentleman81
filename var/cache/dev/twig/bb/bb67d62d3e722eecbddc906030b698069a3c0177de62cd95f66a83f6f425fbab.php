<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ea294f2e7259562bf9f96625486c06b4e2da4469bbaef87f051ef1826e89836f extends Twig_Template
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
        $__internal_1f6fda6e5ba8478c7f0f6398b00f9b518e78388093d562fcf02a5ea5cdbdbfdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6fda6e5ba8478c7f0f6398b00f9b518e78388093d562fcf02a5ea5cdbdbfdc->enter($__internal_1f6fda6e5ba8478c7f0f6398b00f9b518e78388093d562fcf02a5ea5cdbdbfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3f217403e23c7315fe46b9135526708fa7b3ce16d5dd3ff3790ca9b7b6b5522b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f217403e23c7315fe46b9135526708fa7b3ce16d5dd3ff3790ca9b7b6b5522b->enter($__internal_3f217403e23c7315fe46b9135526708fa7b3ce16d5dd3ff3790ca9b7b6b5522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1f6fda6e5ba8478c7f0f6398b00f9b518e78388093d562fcf02a5ea5cdbdbfdc->leave($__internal_1f6fda6e5ba8478c7f0f6398b00f9b518e78388093d562fcf02a5ea5cdbdbfdc_prof);

        
        $__internal_3f217403e23c7315fe46b9135526708fa7b3ce16d5dd3ff3790ca9b7b6b5522b->leave($__internal_3f217403e23c7315fe46b9135526708fa7b3ce16d5dd3ff3790ca9b7b6b5522b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
