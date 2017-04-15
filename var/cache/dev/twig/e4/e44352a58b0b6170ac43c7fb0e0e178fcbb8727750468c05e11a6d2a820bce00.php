<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ca6cf62cfdc05f71274b2b78b76e7b9c15449f8a2cba8dbc6cb0a26a682f7ba6 extends Twig_Template
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
        $__internal_414eda9b3e02a5872cf00b3086badfb84e4c32793606987a65d46dbc9d8557da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414eda9b3e02a5872cf00b3086badfb84e4c32793606987a65d46dbc9d8557da->enter($__internal_414eda9b3e02a5872cf00b3086badfb84e4c32793606987a65d46dbc9d8557da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1f1c592f3f1901449a4b7c3dc0d1322aebd9d49e465bb50428d817c4977f2cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1c592f3f1901449a4b7c3dc0d1322aebd9d49e465bb50428d817c4977f2cff->enter($__internal_1f1c592f3f1901449a4b7c3dc0d1322aebd9d49e465bb50428d817c4977f2cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_414eda9b3e02a5872cf00b3086badfb84e4c32793606987a65d46dbc9d8557da->leave($__internal_414eda9b3e02a5872cf00b3086badfb84e4c32793606987a65d46dbc9d8557da_prof);

        
        $__internal_1f1c592f3f1901449a4b7c3dc0d1322aebd9d49e465bb50428d817c4977f2cff->leave($__internal_1f1c592f3f1901449a4b7c3dc0d1322aebd9d49e465bb50428d817c4977f2cff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
