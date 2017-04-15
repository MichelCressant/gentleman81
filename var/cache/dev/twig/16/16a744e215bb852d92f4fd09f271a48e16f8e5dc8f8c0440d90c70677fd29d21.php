<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b96aff5371ed18be00f3b7a7b42f24e4ff1ffc0e831ab1a3d9f1b5cf079399db extends Twig_Template
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
        $__internal_c9f41750459afe4438a01f0255dc084b7eb6f0bf67e745365201fa388dfe5b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f41750459afe4438a01f0255dc084b7eb6f0bf67e745365201fa388dfe5b80->enter($__internal_c9f41750459afe4438a01f0255dc084b7eb6f0bf67e745365201fa388dfe5b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_8f6695ab8ee57c745210ae386d2bd22f642899b5e6279581a22dae29736d4b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6695ab8ee57c745210ae386d2bd22f642899b5e6279581a22dae29736d4b58->enter($__internal_8f6695ab8ee57c745210ae386d2bd22f642899b5e6279581a22dae29736d4b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c9f41750459afe4438a01f0255dc084b7eb6f0bf67e745365201fa388dfe5b80->leave($__internal_c9f41750459afe4438a01f0255dc084b7eb6f0bf67e745365201fa388dfe5b80_prof);

        
        $__internal_8f6695ab8ee57c745210ae386d2bd22f642899b5e6279581a22dae29736d4b58->leave($__internal_8f6695ab8ee57c745210ae386d2bd22f642899b5e6279581a22dae29736d4b58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
