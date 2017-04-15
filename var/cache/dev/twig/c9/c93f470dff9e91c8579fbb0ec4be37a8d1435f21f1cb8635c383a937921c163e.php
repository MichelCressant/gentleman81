<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_da15a56bdd00dbe6db43a0fef215a7c585dbc8762353c937aeeae5705d8ed832 extends Twig_Template
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
        $__internal_8c00a6af5e35c0e3f66ff8bda6b03b054445cfd4c332ae1f8d0eb83a7f05f2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c00a6af5e35c0e3f66ff8bda6b03b054445cfd4c332ae1f8d0eb83a7f05f2a2->enter($__internal_8c00a6af5e35c0e3f66ff8bda6b03b054445cfd4c332ae1f8d0eb83a7f05f2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_31b98489e0a03c6f3bfa7ba30dfed9c39fd2fbf6ee1996fe33a05655128ed0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b98489e0a03c6f3bfa7ba30dfed9c39fd2fbf6ee1996fe33a05655128ed0dc->enter($__internal_31b98489e0a03c6f3bfa7ba30dfed9c39fd2fbf6ee1996fe33a05655128ed0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8c00a6af5e35c0e3f66ff8bda6b03b054445cfd4c332ae1f8d0eb83a7f05f2a2->leave($__internal_8c00a6af5e35c0e3f66ff8bda6b03b054445cfd4c332ae1f8d0eb83a7f05f2a2_prof);

        
        $__internal_31b98489e0a03c6f3bfa7ba30dfed9c39fd2fbf6ee1996fe33a05655128ed0dc->leave($__internal_31b98489e0a03c6f3bfa7ba30dfed9c39fd2fbf6ee1996fe33a05655128ed0dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
