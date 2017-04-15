<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_eff53437209e532b1ff6797c9a97f69a6594f1e7562e6a05f9e0e43cc54d8a7d extends Twig_Template
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
        $__internal_65d550b225dff3e43c045375d236076773f53fd77e5f21b199ae94629f448d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d550b225dff3e43c045375d236076773f53fd77e5f21b199ae94629f448d0b->enter($__internal_65d550b225dff3e43c045375d236076773f53fd77e5f21b199ae94629f448d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_bde2365af6ef8b11b03b9b77a8ce29cd9856fa8836ebbbed68c43acf5805119e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde2365af6ef8b11b03b9b77a8ce29cd9856fa8836ebbbed68c43acf5805119e->enter($__internal_bde2365af6ef8b11b03b9b77a8ce29cd9856fa8836ebbbed68c43acf5805119e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_65d550b225dff3e43c045375d236076773f53fd77e5f21b199ae94629f448d0b->leave($__internal_65d550b225dff3e43c045375d236076773f53fd77e5f21b199ae94629f448d0b_prof);

        
        $__internal_bde2365af6ef8b11b03b9b77a8ce29cd9856fa8836ebbbed68c43acf5805119e->leave($__internal_bde2365af6ef8b11b03b9b77a8ce29cd9856fa8836ebbbed68c43acf5805119e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
