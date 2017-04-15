<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_29ddc1eca04b767cf92df40577bece6f77c2001c1a299cf5d954f332635d2621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1d61dee586f113c66573edae3d11a96a1159078b04b4a3b50cc5f86ea7a6eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d61dee586f113c66573edae3d11a96a1159078b04b4a3b50cc5f86ea7a6eed->enter($__internal_e1d61dee586f113c66573edae3d11a96a1159078b04b4a3b50cc5f86ea7a6eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7c7f6efcdd4a8987e60e1e7309f3bdea845cf151819fe6115d035eb58cb171f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7f6efcdd4a8987e60e1e7309f3bdea845cf151819fe6115d035eb58cb171f0->enter($__internal_7c7f6efcdd4a8987e60e1e7309f3bdea845cf151819fe6115d035eb58cb171f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d61dee586f113c66573edae3d11a96a1159078b04b4a3b50cc5f86ea7a6eed->leave($__internal_e1d61dee586f113c66573edae3d11a96a1159078b04b4a3b50cc5f86ea7a6eed_prof);

        
        $__internal_7c7f6efcdd4a8987e60e1e7309f3bdea845cf151819fe6115d035eb58cb171f0->leave($__internal_7c7f6efcdd4a8987e60e1e7309f3bdea845cf151819fe6115d035eb58cb171f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c976dd386f0faf8f799ba68ead314b92d656c94a4e339e8859dd1f9056210b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c976dd386f0faf8f799ba68ead314b92d656c94a4e339e8859dd1f9056210b20->enter($__internal_c976dd386f0faf8f799ba68ead314b92d656c94a4e339e8859dd1f9056210b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a20f7e0fc4c683101c07d4a4070f409ab0fee6628050a7d3ba4c59f0a2c379da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20f7e0fc4c683101c07d4a4070f409ab0fee6628050a7d3ba4c59f0a2c379da->enter($__internal_a20f7e0fc4c683101c07d4a4070f409ab0fee6628050a7d3ba4c59f0a2c379da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a20f7e0fc4c683101c07d4a4070f409ab0fee6628050a7d3ba4c59f0a2c379da->leave($__internal_a20f7e0fc4c683101c07d4a4070f409ab0fee6628050a7d3ba4c59f0a2c379da_prof);

        
        $__internal_c976dd386f0faf8f799ba68ead314b92d656c94a4e339e8859dd1f9056210b20->leave($__internal_c976dd386f0faf8f799ba68ead314b92d656c94a4e339e8859dd1f9056210b20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d62932efd0341ae206b8b878239b7367fbcdddd71ad95b51990d3df7e3701e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62932efd0341ae206b8b878239b7367fbcdddd71ad95b51990d3df7e3701e02->enter($__internal_d62932efd0341ae206b8b878239b7367fbcdddd71ad95b51990d3df7e3701e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_555ccb93826c9c4143240fa011463e7a90fe0e2735e8b7e7895657894d60ea12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555ccb93826c9c4143240fa011463e7a90fe0e2735e8b7e7895657894d60ea12->enter($__internal_555ccb93826c9c4143240fa011463e7a90fe0e2735e8b7e7895657894d60ea12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_555ccb93826c9c4143240fa011463e7a90fe0e2735e8b7e7895657894d60ea12->leave($__internal_555ccb93826c9c4143240fa011463e7a90fe0e2735e8b7e7895657894d60ea12_prof);

        
        $__internal_d62932efd0341ae206b8b878239b7367fbcdddd71ad95b51990d3df7e3701e02->leave($__internal_d62932efd0341ae206b8b878239b7367fbcdddd71ad95b51990d3df7e3701e02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8bf735014ecf96de44145e3aca7a57d0aedd6ca6bac2c27276e6dc1d58d26125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf735014ecf96de44145e3aca7a57d0aedd6ca6bac2c27276e6dc1d58d26125->enter($__internal_8bf735014ecf96de44145e3aca7a57d0aedd6ca6bac2c27276e6dc1d58d26125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_587da657b7d181fd252eba2dc8baefba596887c7a90729377c25adfe90b83063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587da657b7d181fd252eba2dc8baefba596887c7a90729377c25adfe90b83063->enter($__internal_587da657b7d181fd252eba2dc8baefba596887c7a90729377c25adfe90b83063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_587da657b7d181fd252eba2dc8baefba596887c7a90729377c25adfe90b83063->leave($__internal_587da657b7d181fd252eba2dc8baefba596887c7a90729377c25adfe90b83063_prof);

        
        $__internal_8bf735014ecf96de44145e3aca7a57d0aedd6ca6bac2c27276e6dc1d58d26125->leave($__internal_8bf735014ecf96de44145e3aca7a57d0aedd6ca6bac2c27276e6dc1d58d26125_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
