<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b88afbe5ac8819732840aa77d3d8418e6176402cc5a4bb74344c2caf3da6b863 extends Twig_Template
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
        $__internal_f976f4543c9b87ebf96bdf05e00687b8ddee381c1e83864e7060a444842e32dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f976f4543c9b87ebf96bdf05e00687b8ddee381c1e83864e7060a444842e32dd->enter($__internal_f976f4543c9b87ebf96bdf05e00687b8ddee381c1e83864e7060a444842e32dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2114494bce83dafbe95c394cfe37fa153130b22789e520ef517e98fbdaa86fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2114494bce83dafbe95c394cfe37fa153130b22789e520ef517e98fbdaa86fcf->enter($__internal_2114494bce83dafbe95c394cfe37fa153130b22789e520ef517e98fbdaa86fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f976f4543c9b87ebf96bdf05e00687b8ddee381c1e83864e7060a444842e32dd->leave($__internal_f976f4543c9b87ebf96bdf05e00687b8ddee381c1e83864e7060a444842e32dd_prof);

        
        $__internal_2114494bce83dafbe95c394cfe37fa153130b22789e520ef517e98fbdaa86fcf->leave($__internal_2114494bce83dafbe95c394cfe37fa153130b22789e520ef517e98fbdaa86fcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
