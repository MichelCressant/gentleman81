<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_eaf2528a88f9132f0d13fab3b1cdd16902b892dc97c17b755dc0a511b5392246 extends Twig_Template
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
        $__internal_88deb0b411dba814b47b365cf2694ff7dbb670b24ea87f34ca88c27b1b30385c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88deb0b411dba814b47b365cf2694ff7dbb670b24ea87f34ca88c27b1b30385c->enter($__internal_88deb0b411dba814b47b365cf2694ff7dbb670b24ea87f34ca88c27b1b30385c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_404662e7955bc0cdfffd932da38f432df60dae44a9c35610f88db1fe96f8f632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404662e7955bc0cdfffd932da38f432df60dae44a9c35610f88db1fe96f8f632->enter($__internal_404662e7955bc0cdfffd932da38f432df60dae44a9c35610f88db1fe96f8f632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_88deb0b411dba814b47b365cf2694ff7dbb670b24ea87f34ca88c27b1b30385c->leave($__internal_88deb0b411dba814b47b365cf2694ff7dbb670b24ea87f34ca88c27b1b30385c_prof);

        
        $__internal_404662e7955bc0cdfffd932da38f432df60dae44a9c35610f88db1fe96f8f632->leave($__internal_404662e7955bc0cdfffd932da38f432df60dae44a9c35610f88db1fe96f8f632_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
