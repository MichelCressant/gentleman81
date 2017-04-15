<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_dea05a16990ecce5c4d4f705d6b312e6eaee5410cbc723b2cf9731a21c18b04a extends Twig_Template
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
        $__internal_74ea9996250cad2f4d22d4ddc4a40d782f340439dcbb9a0b764a125a57c94c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ea9996250cad2f4d22d4ddc4a40d782f340439dcbb9a0b764a125a57c94c45->enter($__internal_74ea9996250cad2f4d22d4ddc4a40d782f340439dcbb9a0b764a125a57c94c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e4db9a3e80a03226df2387c20defd5b3fbbb7a3e4e2bf2fab68d2d80740e291a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4db9a3e80a03226df2387c20defd5b3fbbb7a3e4e2bf2fab68d2d80740e291a->enter($__internal_e4db9a3e80a03226df2387c20defd5b3fbbb7a3e4e2bf2fab68d2d80740e291a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_74ea9996250cad2f4d22d4ddc4a40d782f340439dcbb9a0b764a125a57c94c45->leave($__internal_74ea9996250cad2f4d22d4ddc4a40d782f340439dcbb9a0b764a125a57c94c45_prof);

        
        $__internal_e4db9a3e80a03226df2387c20defd5b3fbbb7a3e4e2bf2fab68d2d80740e291a->leave($__internal_e4db9a3e80a03226df2387c20defd5b3fbbb7a3e4e2bf2fab68d2d80740e291a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
