<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1a53130a05d3060f631f3ed28c533733cf26e7c30c2320c73b45076c72161116 extends Twig_Template
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
        $__internal_c2758b6a5518ec94c2d82672979ab4ddb7646257919d6a14deafee25b2e34372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2758b6a5518ec94c2d82672979ab4ddb7646257919d6a14deafee25b2e34372->enter($__internal_c2758b6a5518ec94c2d82672979ab4ddb7646257919d6a14deafee25b2e34372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f23148f1e0a42857a81d75889a72a60375fdd99146f097674c8ad0c9e816b254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23148f1e0a42857a81d75889a72a60375fdd99146f097674c8ad0c9e816b254->enter($__internal_f23148f1e0a42857a81d75889a72a60375fdd99146f097674c8ad0c9e816b254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c2758b6a5518ec94c2d82672979ab4ddb7646257919d6a14deafee25b2e34372->leave($__internal_c2758b6a5518ec94c2d82672979ab4ddb7646257919d6a14deafee25b2e34372_prof);

        
        $__internal_f23148f1e0a42857a81d75889a72a60375fdd99146f097674c8ad0c9e816b254->leave($__internal_f23148f1e0a42857a81d75889a72a60375fdd99146f097674c8ad0c9e816b254_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
