<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a217ad47628e95383d6c1b49707d8a46c884495be6a9972b8485d066c58013cd extends Twig_Template
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
        $__internal_c195211d3bc25a2ee813babb630d0a5c2eee8ed19c3be90ee59a0095f613915d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c195211d3bc25a2ee813babb630d0a5c2eee8ed19c3be90ee59a0095f613915d->enter($__internal_c195211d3bc25a2ee813babb630d0a5c2eee8ed19c3be90ee59a0095f613915d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_fa516ab09cfe57b1168ede7e3e198a6e2676cf416a34584d956f92d9b54b23a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa516ab09cfe57b1168ede7e3e198a6e2676cf416a34584d956f92d9b54b23a6->enter($__internal_fa516ab09cfe57b1168ede7e3e198a6e2676cf416a34584d956f92d9b54b23a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c195211d3bc25a2ee813babb630d0a5c2eee8ed19c3be90ee59a0095f613915d->leave($__internal_c195211d3bc25a2ee813babb630d0a5c2eee8ed19c3be90ee59a0095f613915d_prof);

        
        $__internal_fa516ab09cfe57b1168ede7e3e198a6e2676cf416a34584d956f92d9b54b23a6->leave($__internal_fa516ab09cfe57b1168ede7e3e198a6e2676cf416a34584d956f92d9b54b23a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
