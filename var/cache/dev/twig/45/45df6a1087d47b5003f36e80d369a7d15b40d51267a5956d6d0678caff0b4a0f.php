<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e8a9871f7ff9bebc2339fb3b3c06b8aa0a8203a459b4be56c25abcd905882efd extends Twig_Template
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
        $__internal_551c82082c0ffff960ba01bb5d53a9c1d2f0abf4250f019d70750cc65e3e0853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551c82082c0ffff960ba01bb5d53a9c1d2f0abf4250f019d70750cc65e3e0853->enter($__internal_551c82082c0ffff960ba01bb5d53a9c1d2f0abf4250f019d70750cc65e3e0853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_71594971b0a498aeaa44c85e7b759e13778591c61fc75e474934a7544685d32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71594971b0a498aeaa44c85e7b759e13778591c61fc75e474934a7544685d32f->enter($__internal_71594971b0a498aeaa44c85e7b759e13778591c61fc75e474934a7544685d32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_551c82082c0ffff960ba01bb5d53a9c1d2f0abf4250f019d70750cc65e3e0853->leave($__internal_551c82082c0ffff960ba01bb5d53a9c1d2f0abf4250f019d70750cc65e3e0853_prof);

        
        $__internal_71594971b0a498aeaa44c85e7b759e13778591c61fc75e474934a7544685d32f->leave($__internal_71594971b0a498aeaa44c85e7b759e13778591c61fc75e474934a7544685d32f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
