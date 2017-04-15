<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a294ae882bd7a59df3f224c7568dfc21b4f457f0410158a8b40081eb28f21e26 extends Twig_Template
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
        $__internal_2afba5d3b9f3fcb9a2cbbf4efd51ed7e81611977e24cab10ece4160356af24f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afba5d3b9f3fcb9a2cbbf4efd51ed7e81611977e24cab10ece4160356af24f0->enter($__internal_2afba5d3b9f3fcb9a2cbbf4efd51ed7e81611977e24cab10ece4160356af24f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_da867a9adf63adf365dcbc19170ec882e8dd7e7898faec1ae60994f8a1b4abc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da867a9adf63adf365dcbc19170ec882e8dd7e7898faec1ae60994f8a1b4abc0->enter($__internal_da867a9adf63adf365dcbc19170ec882e8dd7e7898faec1ae60994f8a1b4abc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2afba5d3b9f3fcb9a2cbbf4efd51ed7e81611977e24cab10ece4160356af24f0->leave($__internal_2afba5d3b9f3fcb9a2cbbf4efd51ed7e81611977e24cab10ece4160356af24f0_prof);

        
        $__internal_da867a9adf63adf365dcbc19170ec882e8dd7e7898faec1ae60994f8a1b4abc0->leave($__internal_da867a9adf63adf365dcbc19170ec882e8dd7e7898faec1ae60994f8a1b4abc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
