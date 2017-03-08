<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_716727a3250a15133e27c846ece577b43ac8e68bd80c182a706fa7908e26e9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716727a3250a15133e27c846ece577b43ac8e68bd80c182a706fa7908e26e9b8->enter($__internal_716727a3250a15133e27c846ece577b43ac8e68bd80c182a706fa7908e26e9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_02ba82e407a8e792f07d4b32760455b756f0b41483d34e21dbc8cf91b32c82f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ba82e407a8e792f07d4b32760455b756f0b41483d34e21dbc8cf91b32c82f2->enter($__internal_02ba82e407a8e792f07d4b32760455b756f0b41483d34e21dbc8cf91b32c82f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716727a3250a15133e27c846ece577b43ac8e68bd80c182a706fa7908e26e9b8->leave($__internal_716727a3250a15133e27c846ece577b43ac8e68bd80c182a706fa7908e26e9b8_prof);

        
        $__internal_02ba82e407a8e792f07d4b32760455b756f0b41483d34e21dbc8cf91b32c82f2->leave($__internal_02ba82e407a8e792f07d4b32760455b756f0b41483d34e21dbc8cf91b32c82f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7513c76a206f24af7d8a04e3d65d9f6b2177fa46f890c2f3e0c39b7d4fe2f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7513c76a206f24af7d8a04e3d65d9f6b2177fa46f890c2f3e0c39b7d4fe2f54->enter($__internal_d7513c76a206f24af7d8a04e3d65d9f6b2177fa46f890c2f3e0c39b7d4fe2f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_82d607a3a5b6178720842af27a73810f44d6302ef5dcad89495fffc1c9ea2f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d607a3a5b6178720842af27a73810f44d6302ef5dcad89495fffc1c9ea2f96->enter($__internal_82d607a3a5b6178720842af27a73810f44d6302ef5dcad89495fffc1c9ea2f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_82d607a3a5b6178720842af27a73810f44d6302ef5dcad89495fffc1c9ea2f96->leave($__internal_82d607a3a5b6178720842af27a73810f44d6302ef5dcad89495fffc1c9ea2f96_prof);

        
        $__internal_d7513c76a206f24af7d8a04e3d65d9f6b2177fa46f890c2f3e0c39b7d4fe2f54->leave($__internal_d7513c76a206f24af7d8a04e3d65d9f6b2177fa46f890c2f3e0c39b7d4fe2f54_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac364034474b887957f0a22ccc84c362cee82754f730f2b12f966b5ec8131611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac364034474b887957f0a22ccc84c362cee82754f730f2b12f966b5ec8131611->enter($__internal_ac364034474b887957f0a22ccc84c362cee82754f730f2b12f966b5ec8131611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e408a85b225ebde6e90bf66e86aff7ee61b68cd9deb9261b141bfbc50f9a7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e408a85b225ebde6e90bf66e86aff7ee61b68cd9deb9261b141bfbc50f9a7f2->enter($__internal_3e408a85b225ebde6e90bf66e86aff7ee61b68cd9deb9261b141bfbc50f9a7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3e408a85b225ebde6e90bf66e86aff7ee61b68cd9deb9261b141bfbc50f9a7f2->leave($__internal_3e408a85b225ebde6e90bf66e86aff7ee61b68cd9deb9261b141bfbc50f9a7f2_prof);

        
        $__internal_ac364034474b887957f0a22ccc84c362cee82754f730f2b12f966b5ec8131611->leave($__internal_ac364034474b887957f0a22ccc84c362cee82754f730f2b12f966b5ec8131611_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_debd63b07706af7b72eb71e55f92a01e8f20914954466705a7dc0bcb31e9e867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_debd63b07706af7b72eb71e55f92a01e8f20914954466705a7dc0bcb31e9e867->enter($__internal_debd63b07706af7b72eb71e55f92a01e8f20914954466705a7dc0bcb31e9e867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba58b0e203f9e1e73ebeb850fca5c9302ffca0bb90dde98315239354a406b656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba58b0e203f9e1e73ebeb850fca5c9302ffca0bb90dde98315239354a406b656->enter($__internal_ba58b0e203f9e1e73ebeb850fca5c9302ffca0bb90dde98315239354a406b656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ba58b0e203f9e1e73ebeb850fca5c9302ffca0bb90dde98315239354a406b656->leave($__internal_ba58b0e203f9e1e73ebeb850fca5c9302ffca0bb90dde98315239354a406b656_prof);

        
        $__internal_debd63b07706af7b72eb71e55f92a01e8f20914954466705a7dc0bcb31e9e867->leave($__internal_debd63b07706af7b72eb71e55f92a01e8f20914954466705a7dc0bcb31e9e867_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/mcressant/Bureau/gentleman81/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
