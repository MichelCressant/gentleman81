<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9298f5e8bac56488b1075191fd0176d47ac92a7c8ae5a390e2f3103862604e95 extends Twig_Template
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
        $__internal_3193a7caf9c048c69bba26f2a71a6feb14faae80ca24ee8560f1d190a6459a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3193a7caf9c048c69bba26f2a71a6feb14faae80ca24ee8560f1d190a6459a70->enter($__internal_3193a7caf9c048c69bba26f2a71a6feb14faae80ca24ee8560f1d190a6459a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_440e753855a4dee48a52c0217904bb52ee3fba84b4553526f91173babfd2a5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440e753855a4dee48a52c0217904bb52ee3fba84b4553526f91173babfd2a5c3->enter($__internal_440e753855a4dee48a52c0217904bb52ee3fba84b4553526f91173babfd2a5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3193a7caf9c048c69bba26f2a71a6feb14faae80ca24ee8560f1d190a6459a70->leave($__internal_3193a7caf9c048c69bba26f2a71a6feb14faae80ca24ee8560f1d190a6459a70_prof);

        
        $__internal_440e753855a4dee48a52c0217904bb52ee3fba84b4553526f91173babfd2a5c3->leave($__internal_440e753855a4dee48a52c0217904bb52ee3fba84b4553526f91173babfd2a5c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
