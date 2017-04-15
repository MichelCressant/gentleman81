<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_594af8eab9db300ad27878a74ed193c3daa2ee806a0e489a0af0791e79965a2f extends Twig_Template
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
        $__internal_a5d0b2214e58620385e9745396beef20467bedc4bf54949d1dd97834b106cb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d0b2214e58620385e9745396beef20467bedc4bf54949d1dd97834b106cb6c->enter($__internal_a5d0b2214e58620385e9745396beef20467bedc4bf54949d1dd97834b106cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8567940948e04b971c5a42929b24f36ba9c67a688abd9087da13f5c57c261fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8567940948e04b971c5a42929b24f36ba9c67a688abd9087da13f5c57c261fe0->enter($__internal_8567940948e04b971c5a42929b24f36ba9c67a688abd9087da13f5c57c261fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a5d0b2214e58620385e9745396beef20467bedc4bf54949d1dd97834b106cb6c->leave($__internal_a5d0b2214e58620385e9745396beef20467bedc4bf54949d1dd97834b106cb6c_prof);

        
        $__internal_8567940948e04b971c5a42929b24f36ba9c67a688abd9087da13f5c57c261fe0->leave($__internal_8567940948e04b971c5a42929b24f36ba9c67a688abd9087da13f5c57c261fe0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
