<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ecc7744c98b5237cdc12fe5b944d57d02363bb1bdacb8e49b043c21201e3e96f extends Twig_Template
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
        $__internal_46af8b14915bd7a7ce56de477897dabba61f2751f01be876c4843f3271f088b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46af8b14915bd7a7ce56de477897dabba61f2751f01be876c4843f3271f088b7->enter($__internal_46af8b14915bd7a7ce56de477897dabba61f2751f01be876c4843f3271f088b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_260f969cb2f28bf0ff8fb83e65c9c5f3612c1f71b2c9a57b36298815ffafc6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260f969cb2f28bf0ff8fb83e65c9c5f3612c1f71b2c9a57b36298815ffafc6bf->enter($__internal_260f969cb2f28bf0ff8fb83e65c9c5f3612c1f71b2c9a57b36298815ffafc6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_46af8b14915bd7a7ce56de477897dabba61f2751f01be876c4843f3271f088b7->leave($__internal_46af8b14915bd7a7ce56de477897dabba61f2751f01be876c4843f3271f088b7_prof);

        
        $__internal_260f969cb2f28bf0ff8fb83e65c9c5f3612c1f71b2c9a57b36298815ffafc6bf->leave($__internal_260f969cb2f28bf0ff8fb83e65c9c5f3612c1f71b2c9a57b36298815ffafc6bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
