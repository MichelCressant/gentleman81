<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_91e040af0420d93321c06321941f9812f86d48de80a416169b577cd61c38ba72 extends Twig_Template
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
        $__internal_365357e3d6da682d399d73992bc0f0853e6b21d37f24bb71f6272d6c9301d422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365357e3d6da682d399d73992bc0f0853e6b21d37f24bb71f6272d6c9301d422->enter($__internal_365357e3d6da682d399d73992bc0f0853e6b21d37f24bb71f6272d6c9301d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_36febcaf2a202962c224f3871fba78ce343ed1e31d8f899e38048110e00ef40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36febcaf2a202962c224f3871fba78ce343ed1e31d8f899e38048110e00ef40f->enter($__internal_36febcaf2a202962c224f3871fba78ce343ed1e31d8f899e38048110e00ef40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_365357e3d6da682d399d73992bc0f0853e6b21d37f24bb71f6272d6c9301d422->leave($__internal_365357e3d6da682d399d73992bc0f0853e6b21d37f24bb71f6272d6c9301d422_prof);

        
        $__internal_36febcaf2a202962c224f3871fba78ce343ed1e31d8f899e38048110e00ef40f->leave($__internal_36febcaf2a202962c224f3871fba78ce343ed1e31d8f899e38048110e00ef40f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
