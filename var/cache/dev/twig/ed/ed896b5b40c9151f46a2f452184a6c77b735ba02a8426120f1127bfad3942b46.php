<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d096747f5565bab6ea01667e6269355b223688246d0d30d024384d1793a67b99 extends Twig_Template
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
        $__internal_7d0642d642dad5d4b5ff89d9fc439686cf8e3a61b4f4b0e12ab38e76eb0a055c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0642d642dad5d4b5ff89d9fc439686cf8e3a61b4f4b0e12ab38e76eb0a055c->enter($__internal_7d0642d642dad5d4b5ff89d9fc439686cf8e3a61b4f4b0e12ab38e76eb0a055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_acf8b286938a15680d0ea69e1a420d5a6457327fe32b6d02d7531fb906253a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf8b286938a15680d0ea69e1a420d5a6457327fe32b6d02d7531fb906253a5c->enter($__internal_acf8b286938a15680d0ea69e1a420d5a6457327fe32b6d02d7531fb906253a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7d0642d642dad5d4b5ff89d9fc439686cf8e3a61b4f4b0e12ab38e76eb0a055c->leave($__internal_7d0642d642dad5d4b5ff89d9fc439686cf8e3a61b4f4b0e12ab38e76eb0a055c_prof);

        
        $__internal_acf8b286938a15680d0ea69e1a420d5a6457327fe32b6d02d7531fb906253a5c->leave($__internal_acf8b286938a15680d0ea69e1a420d5a6457327fe32b6d02d7531fb906253a5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
