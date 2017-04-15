<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_08e0eff8729188651c2d6f7b322706a4f7064819e2470e93bb1c486a40c2b451 extends Twig_Template
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
        $__internal_a5117b0a203ea286d044003313b70ccc9a5ac65addcfb63dd3457ae621b7f8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5117b0a203ea286d044003313b70ccc9a5ac65addcfb63dd3457ae621b7f8b1->enter($__internal_a5117b0a203ea286d044003313b70ccc9a5ac65addcfb63dd3457ae621b7f8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_aea265ec9fee25f1cf781175643d9706998e19b17d645a6cf28d162cbfc3c5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea265ec9fee25f1cf781175643d9706998e19b17d645a6cf28d162cbfc3c5db->enter($__internal_aea265ec9fee25f1cf781175643d9706998e19b17d645a6cf28d162cbfc3c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a5117b0a203ea286d044003313b70ccc9a5ac65addcfb63dd3457ae621b7f8b1->leave($__internal_a5117b0a203ea286d044003313b70ccc9a5ac65addcfb63dd3457ae621b7f8b1_prof);

        
        $__internal_aea265ec9fee25f1cf781175643d9706998e19b17d645a6cf28d162cbfc3c5db->leave($__internal_aea265ec9fee25f1cf781175643d9706998e19b17d645a6cf28d162cbfc3c5db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
