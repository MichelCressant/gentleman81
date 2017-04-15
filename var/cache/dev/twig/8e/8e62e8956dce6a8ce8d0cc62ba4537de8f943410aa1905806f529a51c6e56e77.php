<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_597324a344f7ca1663288cf0c5c4837fe5a7ec21f1367765570978daaea5642a extends Twig_Template
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
        $__internal_312f2fe572caa0fec0e3c97c4186c393601873ca533aeeb57891c467b4aafab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312f2fe572caa0fec0e3c97c4186c393601873ca533aeeb57891c467b4aafab8->enter($__internal_312f2fe572caa0fec0e3c97c4186c393601873ca533aeeb57891c467b4aafab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_009e433785a46e79929bad299d01d18cd5f27efa0aeef2a06faa38626bd4b979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009e433785a46e79929bad299d01d18cd5f27efa0aeef2a06faa38626bd4b979->enter($__internal_009e433785a46e79929bad299d01d18cd5f27efa0aeef2a06faa38626bd4b979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_312f2fe572caa0fec0e3c97c4186c393601873ca533aeeb57891c467b4aafab8->leave($__internal_312f2fe572caa0fec0e3c97c4186c393601873ca533aeeb57891c467b4aafab8_prof);

        
        $__internal_009e433785a46e79929bad299d01d18cd5f27efa0aeef2a06faa38626bd4b979->leave($__internal_009e433785a46e79929bad299d01d18cd5f27efa0aeef2a06faa38626bd4b979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
