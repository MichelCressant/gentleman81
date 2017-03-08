<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f2487f9c3cf1c363f6e1cf9a845ec404913419040b3e8c8b31b85785ee65b26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2487f9c3cf1c363f6e1cf9a845ec404913419040b3e8c8b31b85785ee65b26e->enter($__internal_f2487f9c3cf1c363f6e1cf9a845ec404913419040b3e8c8b31b85785ee65b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_088f6f35672ad63200ebd7950117cb1d2a0eec2840aa6cb9dac5dcbed92eef35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088f6f35672ad63200ebd7950117cb1d2a0eec2840aa6cb9dac5dcbed92eef35->enter($__internal_088f6f35672ad63200ebd7950117cb1d2a0eec2840aa6cb9dac5dcbed92eef35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2487f9c3cf1c363f6e1cf9a845ec404913419040b3e8c8b31b85785ee65b26e->leave($__internal_f2487f9c3cf1c363f6e1cf9a845ec404913419040b3e8c8b31b85785ee65b26e_prof);

        
        $__internal_088f6f35672ad63200ebd7950117cb1d2a0eec2840aa6cb9dac5dcbed92eef35->leave($__internal_088f6f35672ad63200ebd7950117cb1d2a0eec2840aa6cb9dac5dcbed92eef35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39f0a3ebec29657cc88e5f5c1041e3f8f5a5da0e694d8e135da51c6d488fa4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f0a3ebec29657cc88e5f5c1041e3f8f5a5da0e694d8e135da51c6d488fa4de->enter($__internal_39f0a3ebec29657cc88e5f5c1041e3f8f5a5da0e694d8e135da51c6d488fa4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0ff79e6fc9e0b3f3685021778bb1e20a65a673a8a2f5af739bbb0d24c3a1baea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff79e6fc9e0b3f3685021778bb1e20a65a673a8a2f5af739bbb0d24c3a1baea->enter($__internal_0ff79e6fc9e0b3f3685021778bb1e20a65a673a8a2f5af739bbb0d24c3a1baea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ff79e6fc9e0b3f3685021778bb1e20a65a673a8a2f5af739bbb0d24c3a1baea->leave($__internal_0ff79e6fc9e0b3f3685021778bb1e20a65a673a8a2f5af739bbb0d24c3a1baea_prof);

        
        $__internal_39f0a3ebec29657cc88e5f5c1041e3f8f5a5da0e694d8e135da51c6d488fa4de->leave($__internal_39f0a3ebec29657cc88e5f5c1041e3f8f5a5da0e694d8e135da51c6d488fa4de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95dabf7604eaad43575286fa586582cd1845c81deb9a593ad5c368553f1da63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95dabf7604eaad43575286fa586582cd1845c81deb9a593ad5c368553f1da63f->enter($__internal_95dabf7604eaad43575286fa586582cd1845c81deb9a593ad5c368553f1da63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c59c21a920637d8022bd01bd50d6b0483d60c6d05a672017a3e4d73f39a722b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c59c21a920637d8022bd01bd50d6b0483d60c6d05a672017a3e4d73f39a722b->enter($__internal_5c59c21a920637d8022bd01bd50d6b0483d60c6d05a672017a3e4d73f39a722b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c59c21a920637d8022bd01bd50d6b0483d60c6d05a672017a3e4d73f39a722b->leave($__internal_5c59c21a920637d8022bd01bd50d6b0483d60c6d05a672017a3e4d73f39a722b_prof);

        
        $__internal_95dabf7604eaad43575286fa586582cd1845c81deb9a593ad5c368553f1da63f->leave($__internal_95dabf7604eaad43575286fa586582cd1845c81deb9a593ad5c368553f1da63f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_353e650cec3ab8baf43091b1838b75e5578995fd9efe253c788ec9801a3dd212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353e650cec3ab8baf43091b1838b75e5578995fd9efe253c788ec9801a3dd212->enter($__internal_353e650cec3ab8baf43091b1838b75e5578995fd9efe253c788ec9801a3dd212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c143d7a025bba168e6f159e6960a374569a7c1e935217bb4f724c4cfb85fb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c143d7a025bba168e6f159e6960a374569a7c1e935217bb4f724c4cfb85fb90->enter($__internal_4c143d7a025bba168e6f159e6960a374569a7c1e935217bb4f724c4cfb85fb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c143d7a025bba168e6f159e6960a374569a7c1e935217bb4f724c4cfb85fb90->leave($__internal_4c143d7a025bba168e6f159e6960a374569a7c1e935217bb4f724c4cfb85fb90_prof);

        
        $__internal_353e650cec3ab8baf43091b1838b75e5578995fd9efe253c788ec9801a3dd212->leave($__internal_353e650cec3ab8baf43091b1838b75e5578995fd9efe253c788ec9801a3dd212_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/mcressant/Bureau/gentleman81/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
