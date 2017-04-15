<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0adc651a122259162d9c9952e4e54c95b27fc08ca5c9a6d3f319acc7b990e919 extends Twig_Template
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
        $__internal_5769cb6d4cf794844713949a89c90d6bec417179f1672e002122adc6676d0c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5769cb6d4cf794844713949a89c90d6bec417179f1672e002122adc6676d0c6c->enter($__internal_5769cb6d4cf794844713949a89c90d6bec417179f1672e002122adc6676d0c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7813c3aea2a7b4a7c51cb3ea81ef6d25e8fa88802b464fbcf14631984e9fb83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7813c3aea2a7b4a7c51cb3ea81ef6d25e8fa88802b464fbcf14631984e9fb83b->enter($__internal_7813c3aea2a7b4a7c51cb3ea81ef6d25e8fa88802b464fbcf14631984e9fb83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5769cb6d4cf794844713949a89c90d6bec417179f1672e002122adc6676d0c6c->leave($__internal_5769cb6d4cf794844713949a89c90d6bec417179f1672e002122adc6676d0c6c_prof);

        
        $__internal_7813c3aea2a7b4a7c51cb3ea81ef6d25e8fa88802b464fbcf14631984e9fb83b->leave($__internal_7813c3aea2a7b4a7c51cb3ea81ef6d25e8fa88802b464fbcf14631984e9fb83b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
