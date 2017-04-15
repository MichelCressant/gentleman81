<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a29f0d0947a8e4e7288f85f1e8446c6f20406aafc88cd93ec6160750dd96d261 extends Twig_Template
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
        $__internal_e4e9193af7595088e44b535f342f373a289e9bb72f505d797c5b4d2a3aaf47d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e9193af7595088e44b535f342f373a289e9bb72f505d797c5b4d2a3aaf47d2->enter($__internal_e4e9193af7595088e44b535f342f373a289e9bb72f505d797c5b4d2a3aaf47d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_74d2555d22e5a45a64d12087801d4646cc3ed4afc725f812db9060ddcb1d9a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d2555d22e5a45a64d12087801d4646cc3ed4afc725f812db9060ddcb1d9a90->enter($__internal_74d2555d22e5a45a64d12087801d4646cc3ed4afc725f812db9060ddcb1d9a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e4e9193af7595088e44b535f342f373a289e9bb72f505d797c5b4d2a3aaf47d2->leave($__internal_e4e9193af7595088e44b535f342f373a289e9bb72f505d797c5b4d2a3aaf47d2_prof);

        
        $__internal_74d2555d22e5a45a64d12087801d4646cc3ed4afc725f812db9060ddcb1d9a90->leave($__internal_74d2555d22e5a45a64d12087801d4646cc3ed4afc725f812db9060ddcb1d9a90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
