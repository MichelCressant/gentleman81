<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_37ab8e39fa2b3a7c2bdd4028659400af6747a6bdb9ef1fd47c1e2c9c7d47c7bc extends Twig_Template
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
        $__internal_3df0dc23a8bd1cf2b5c813ba0733ccde01c2f307af9a18258bcfdc6dbf1530d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df0dc23a8bd1cf2b5c813ba0733ccde01c2f307af9a18258bcfdc6dbf1530d8->enter($__internal_3df0dc23a8bd1cf2b5c813ba0733ccde01c2f307af9a18258bcfdc6dbf1530d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d4a3dc1abb870a32ddc980fc891f462ee1a59f4f04c1f62ff76bd448a6b005fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a3dc1abb870a32ddc980fc891f462ee1a59f4f04c1f62ff76bd448a6b005fd->enter($__internal_d4a3dc1abb870a32ddc980fc891f462ee1a59f4f04c1f62ff76bd448a6b005fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3df0dc23a8bd1cf2b5c813ba0733ccde01c2f307af9a18258bcfdc6dbf1530d8->leave($__internal_3df0dc23a8bd1cf2b5c813ba0733ccde01c2f307af9a18258bcfdc6dbf1530d8_prof);

        
        $__internal_d4a3dc1abb870a32ddc980fc891f462ee1a59f4f04c1f62ff76bd448a6b005fd->leave($__internal_d4a3dc1abb870a32ddc980fc891f462ee1a59f4f04c1f62ff76bd448a6b005fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
