<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_dfeaa606c9d97cc28a839ce74b13bfdf31298925d3b79b059aa66592307f8f09 extends Twig_Template
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
        $__internal_b747204645c0de7466a462cfd1275f845248bced9e8cbc2240fe617e9ded88da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b747204645c0de7466a462cfd1275f845248bced9e8cbc2240fe617e9ded88da->enter($__internal_b747204645c0de7466a462cfd1275f845248bced9e8cbc2240fe617e9ded88da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5e74d0a081bdf5bc36aca9c9b5bc1b827e129e44d670497332276cbe049bab10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e74d0a081bdf5bc36aca9c9b5bc1b827e129e44d670497332276cbe049bab10->enter($__internal_5e74d0a081bdf5bc36aca9c9b5bc1b827e129e44d670497332276cbe049bab10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b747204645c0de7466a462cfd1275f845248bced9e8cbc2240fe617e9ded88da->leave($__internal_b747204645c0de7466a462cfd1275f845248bced9e8cbc2240fe617e9ded88da_prof);

        
        $__internal_5e74d0a081bdf5bc36aca9c9b5bc1b827e129e44d670497332276cbe049bab10->leave($__internal_5e74d0a081bdf5bc36aca9c9b5bc1b827e129e44d670497332276cbe049bab10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
