<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8498a6b3710d7e60d98772c43147217e818176d27199eba45e23c7e8a702ce94 extends Twig_Template
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
        $__internal_48f249df6f92af97d98cd70e46ca9617c82b92c12150477cce1acf949ab5e2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f249df6f92af97d98cd70e46ca9617c82b92c12150477cce1acf949ab5e2d4->enter($__internal_48f249df6f92af97d98cd70e46ca9617c82b92c12150477cce1acf949ab5e2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_54cf7c6225abf258759866bd08338717b51a2a6a51a07992b818f1fb3730afb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cf7c6225abf258759866bd08338717b51a2a6a51a07992b818f1fb3730afb5->enter($__internal_54cf7c6225abf258759866bd08338717b51a2a6a51a07992b818f1fb3730afb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_48f249df6f92af97d98cd70e46ca9617c82b92c12150477cce1acf949ab5e2d4->leave($__internal_48f249df6f92af97d98cd70e46ca9617c82b92c12150477cce1acf949ab5e2d4_prof);

        
        $__internal_54cf7c6225abf258759866bd08338717b51a2a6a51a07992b818f1fb3730afb5->leave($__internal_54cf7c6225abf258759866bd08338717b51a2a6a51a07992b818f1fb3730afb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
