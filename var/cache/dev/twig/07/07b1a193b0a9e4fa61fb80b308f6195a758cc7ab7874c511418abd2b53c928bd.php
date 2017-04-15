<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3bc0cf96bdaa9c8c8e443f61cdc31e16e5063f50479053e8940558d236fe6eb3 extends Twig_Template
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
        $__internal_10dd901ad6094aa20e549c77150726bdbcbd9a875e7cea49ee7bf20aeba1d756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dd901ad6094aa20e549c77150726bdbcbd9a875e7cea49ee7bf20aeba1d756->enter($__internal_10dd901ad6094aa20e549c77150726bdbcbd9a875e7cea49ee7bf20aeba1d756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_03bb6122a5efd42ee7740bef72bb5940176d6e010ee76c342312a03ddc6f4c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bb6122a5efd42ee7740bef72bb5940176d6e010ee76c342312a03ddc6f4c5c->enter($__internal_03bb6122a5efd42ee7740bef72bb5940176d6e010ee76c342312a03ddc6f4c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_10dd901ad6094aa20e549c77150726bdbcbd9a875e7cea49ee7bf20aeba1d756->leave($__internal_10dd901ad6094aa20e549c77150726bdbcbd9a875e7cea49ee7bf20aeba1d756_prof);

        
        $__internal_03bb6122a5efd42ee7740bef72bb5940176d6e010ee76c342312a03ddc6f4c5c->leave($__internal_03bb6122a5efd42ee7740bef72bb5940176d6e010ee76c342312a03ddc6f4c5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
