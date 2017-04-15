<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_873a968dd5199e9135921159b6258678948c5ec655c67f9d5d58381bbf075786 extends Twig_Template
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
        $__internal_9469264c9747f4cba3648be1810065c067500ced68958e13dcea885f3593a13f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9469264c9747f4cba3648be1810065c067500ced68958e13dcea885f3593a13f->enter($__internal_9469264c9747f4cba3648be1810065c067500ced68958e13dcea885f3593a13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ee44f41930f38248838c58f5f25e2ebf37538e87cc1c4e78bd9788fa1f0fa0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee44f41930f38248838c58f5f25e2ebf37538e87cc1c4e78bd9788fa1f0fa0a3->enter($__internal_ee44f41930f38248838c58f5f25e2ebf37538e87cc1c4e78bd9788fa1f0fa0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9469264c9747f4cba3648be1810065c067500ced68958e13dcea885f3593a13f->leave($__internal_9469264c9747f4cba3648be1810065c067500ced68958e13dcea885f3593a13f_prof);

        
        $__internal_ee44f41930f38248838c58f5f25e2ebf37538e87cc1c4e78bd9788fa1f0fa0a3->leave($__internal_ee44f41930f38248838c58f5f25e2ebf37538e87cc1c4e78bd9788fa1f0fa0a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
