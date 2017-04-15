<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2075be373b54ace421faf0284d3d48988b8a99c22724cda39017aa3d2132ffc5 extends Twig_Template
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
        $__internal_08096984810aba2e24db4f6f9d978cf8c20e83b9bf0924e4d677137e2fb970a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08096984810aba2e24db4f6f9d978cf8c20e83b9bf0924e4d677137e2fb970a1->enter($__internal_08096984810aba2e24db4f6f9d978cf8c20e83b9bf0924e4d677137e2fb970a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8836b73ca0fabff2d3d5ca2020c2b7f1dd99fdaf757b516249bd2a04efde9ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8836b73ca0fabff2d3d5ca2020c2b7f1dd99fdaf757b516249bd2a04efde9ab7->enter($__internal_8836b73ca0fabff2d3d5ca2020c2b7f1dd99fdaf757b516249bd2a04efde9ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_08096984810aba2e24db4f6f9d978cf8c20e83b9bf0924e4d677137e2fb970a1->leave($__internal_08096984810aba2e24db4f6f9d978cf8c20e83b9bf0924e4d677137e2fb970a1_prof);

        
        $__internal_8836b73ca0fabff2d3d5ca2020c2b7f1dd99fdaf757b516249bd2a04efde9ab7->leave($__internal_8836b73ca0fabff2d3d5ca2020c2b7f1dd99fdaf757b516249bd2a04efde9ab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
