<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b6beaf9787e5ce0fcd282433f12571fd3184cd40579d035db41bf67a73e2f1ef extends Twig_Template
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
        $__internal_3ff59657fe950bbbd29e9fbb3bc7520fd65fc278355896fec3e0978484343c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff59657fe950bbbd29e9fbb3bc7520fd65fc278355896fec3e0978484343c74->enter($__internal_3ff59657fe950bbbd29e9fbb3bc7520fd65fc278355896fec3e0978484343c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5eb2b64974a31d7ade810a9438d953c3483fb2c9b097f3d482e987808825caac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb2b64974a31d7ade810a9438d953c3483fb2c9b097f3d482e987808825caac->enter($__internal_5eb2b64974a31d7ade810a9438d953c3483fb2c9b097f3d482e987808825caac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3ff59657fe950bbbd29e9fbb3bc7520fd65fc278355896fec3e0978484343c74->leave($__internal_3ff59657fe950bbbd29e9fbb3bc7520fd65fc278355896fec3e0978484343c74_prof);

        
        $__internal_5eb2b64974a31d7ade810a9438d953c3483fb2c9b097f3d482e987808825caac->leave($__internal_5eb2b64974a31d7ade810a9438d953c3483fb2c9b097f3d482e987808825caac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
