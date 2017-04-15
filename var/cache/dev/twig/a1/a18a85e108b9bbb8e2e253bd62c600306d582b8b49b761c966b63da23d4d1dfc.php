<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_aeec6f8bd4b5ec70df5101ef6dcca1f353f97f5f621f14d64af8d9d70298a9a6 extends Twig_Template
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
        $__internal_0c7939ce3224ad0038f38d5f0b770d81926961a4a628d4a3fe182408cd0ea674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7939ce3224ad0038f38d5f0b770d81926961a4a628d4a3fe182408cd0ea674->enter($__internal_0c7939ce3224ad0038f38d5f0b770d81926961a4a628d4a3fe182408cd0ea674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d444271f1556304aff3639c34225dadc1650b889353c928620ec71f07e1f1a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d444271f1556304aff3639c34225dadc1650b889353c928620ec71f07e1f1a13->enter($__internal_d444271f1556304aff3639c34225dadc1650b889353c928620ec71f07e1f1a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0c7939ce3224ad0038f38d5f0b770d81926961a4a628d4a3fe182408cd0ea674->leave($__internal_0c7939ce3224ad0038f38d5f0b770d81926961a4a628d4a3fe182408cd0ea674_prof);

        
        $__internal_d444271f1556304aff3639c34225dadc1650b889353c928620ec71f07e1f1a13->leave($__internal_d444271f1556304aff3639c34225dadc1650b889353c928620ec71f07e1f1a13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
