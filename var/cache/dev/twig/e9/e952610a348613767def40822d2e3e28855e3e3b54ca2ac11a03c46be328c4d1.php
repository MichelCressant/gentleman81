<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8bd25eedff175bc50354a487be032a136e202089b1a028f6ac280badff596cb5 extends Twig_Template
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
        $__internal_f4d54094bcc513f33a760d0b482023eece5f438a27f8d8094d4ecc17ef4ffdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d54094bcc513f33a760d0b482023eece5f438a27f8d8094d4ecc17ef4ffdcc->enter($__internal_f4d54094bcc513f33a760d0b482023eece5f438a27f8d8094d4ecc17ef4ffdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2ecf54b62e542d0b610841f651aba1bc544125673b29956b1d86b889009cb6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecf54b62e542d0b610841f651aba1bc544125673b29956b1d86b889009cb6d0->enter($__internal_2ecf54b62e542d0b610841f651aba1bc544125673b29956b1d86b889009cb6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f4d54094bcc513f33a760d0b482023eece5f438a27f8d8094d4ecc17ef4ffdcc->leave($__internal_f4d54094bcc513f33a760d0b482023eece5f438a27f8d8094d4ecc17ef4ffdcc_prof);

        
        $__internal_2ecf54b62e542d0b610841f651aba1bc544125673b29956b1d86b889009cb6d0->leave($__internal_2ecf54b62e542d0b610841f651aba1bc544125673b29956b1d86b889009cb6d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
