<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8238ac325046537a8ac8a7125bd4817f9f6724491a425107a485299d48e0cf60 extends Twig_Template
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
        $__internal_d561ee664496bc9e768833f7c43b75ff612f502f27e5d15805e46c0c5e907f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d561ee664496bc9e768833f7c43b75ff612f502f27e5d15805e46c0c5e907f2d->enter($__internal_d561ee664496bc9e768833f7c43b75ff612f502f27e5d15805e46c0c5e907f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9e52f8fb1d8b8a2068ff7f7236c57dac6e6e38508fab08fa9ec781b404c7971a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e52f8fb1d8b8a2068ff7f7236c57dac6e6e38508fab08fa9ec781b404c7971a->enter($__internal_9e52f8fb1d8b8a2068ff7f7236c57dac6e6e38508fab08fa9ec781b404c7971a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d561ee664496bc9e768833f7c43b75ff612f502f27e5d15805e46c0c5e907f2d->leave($__internal_d561ee664496bc9e768833f7c43b75ff612f502f27e5d15805e46c0c5e907f2d_prof);

        
        $__internal_9e52f8fb1d8b8a2068ff7f7236c57dac6e6e38508fab08fa9ec781b404c7971a->leave($__internal_9e52f8fb1d8b8a2068ff7f7236c57dac6e6e38508fab08fa9ec781b404c7971a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
