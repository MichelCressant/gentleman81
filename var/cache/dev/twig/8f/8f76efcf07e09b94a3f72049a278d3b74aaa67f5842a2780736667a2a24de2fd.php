<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7a425ba5388fe4406214097b75afb0faeeb4be3767c9a03b90e453885b090b26 extends Twig_Template
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
        $__internal_764a579bcf52a4ddbcce687b173cde21e5c12bfb9e266a7ef45b27d2c96478a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764a579bcf52a4ddbcce687b173cde21e5c12bfb9e266a7ef45b27d2c96478a6->enter($__internal_764a579bcf52a4ddbcce687b173cde21e5c12bfb9e266a7ef45b27d2c96478a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_793b708b472c06f90cc81dc9aedac9390a0a8b6af55dfc5bf2a01b0dbb961be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793b708b472c06f90cc81dc9aedac9390a0a8b6af55dfc5bf2a01b0dbb961be8->enter($__internal_793b708b472c06f90cc81dc9aedac9390a0a8b6af55dfc5bf2a01b0dbb961be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_764a579bcf52a4ddbcce687b173cde21e5c12bfb9e266a7ef45b27d2c96478a6->leave($__internal_764a579bcf52a4ddbcce687b173cde21e5c12bfb9e266a7ef45b27d2c96478a6_prof);

        
        $__internal_793b708b472c06f90cc81dc9aedac9390a0a8b6af55dfc5bf2a01b0dbb961be8->leave($__internal_793b708b472c06f90cc81dc9aedac9390a0a8b6af55dfc5bf2a01b0dbb961be8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
