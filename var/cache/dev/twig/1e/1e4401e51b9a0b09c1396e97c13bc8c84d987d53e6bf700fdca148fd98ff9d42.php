<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3dd00a1fe87a47d4958217ca7322d8333c38e7b8142eb035fa11147328d809a9 extends Twig_Template
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
        $__internal_e4411bc420f468e6a479414a77f790596594b9e6f4483f2fd2eede5afbd32e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4411bc420f468e6a479414a77f790596594b9e6f4483f2fd2eede5afbd32e7e->enter($__internal_e4411bc420f468e6a479414a77f790596594b9e6f4483f2fd2eede5afbd32e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f1a47a413b5af0e9e545b88a7842c8451004e3cda1e647d2518417eb3035ab6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a47a413b5af0e9e545b88a7842c8451004e3cda1e647d2518417eb3035ab6d->enter($__internal_f1a47a413b5af0e9e545b88a7842c8451004e3cda1e647d2518417eb3035ab6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e4411bc420f468e6a479414a77f790596594b9e6f4483f2fd2eede5afbd32e7e->leave($__internal_e4411bc420f468e6a479414a77f790596594b9e6f4483f2fd2eede5afbd32e7e_prof);

        
        $__internal_f1a47a413b5af0e9e545b88a7842c8451004e3cda1e647d2518417eb3035ab6d->leave($__internal_f1a47a413b5af0e9e545b88a7842c8451004e3cda1e647d2518417eb3035ab6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
