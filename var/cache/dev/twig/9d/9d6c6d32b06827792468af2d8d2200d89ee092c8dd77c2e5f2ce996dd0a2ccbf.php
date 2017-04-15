<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a739ed59a49b8145e5a2e5a134c716310c62da81119a893674c6a32fad88f560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1c10fff342b13e21522411d21d89f3e9fbfa1b901f985bde11d69626cbd362a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c10fff342b13e21522411d21d89f3e9fbfa1b901f985bde11d69626cbd362a->enter($__internal_a1c10fff342b13e21522411d21d89f3e9fbfa1b901f985bde11d69626cbd362a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5df4c75da8253e7480f9655f2ba3f353fee40dadb326f0f86f8311b474fb267d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df4c75da8253e7480f9655f2ba3f353fee40dadb326f0f86f8311b474fb267d->enter($__internal_5df4c75da8253e7480f9655f2ba3f353fee40dadb326f0f86f8311b474fb267d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a1c10fff342b13e21522411d21d89f3e9fbfa1b901f985bde11d69626cbd362a->leave($__internal_a1c10fff342b13e21522411d21d89f3e9fbfa1b901f985bde11d69626cbd362a_prof);

        
        $__internal_5df4c75da8253e7480f9655f2ba3f353fee40dadb326f0f86f8311b474fb267d->leave($__internal_5df4c75da8253e7480f9655f2ba3f353fee40dadb326f0f86f8311b474fb267d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_089ea9f6d4aacccd6fca99dac6719ab6c35446a8b974c03314ffe6c43f79a6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089ea9f6d4aacccd6fca99dac6719ab6c35446a8b974c03314ffe6c43f79a6d0->enter($__internal_089ea9f6d4aacccd6fca99dac6719ab6c35446a8b974c03314ffe6c43f79a6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f12af51f3e94f1e674e9c3bc8591735999d3d5d06774f0a280ed755cf3fdb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f12af51f3e94f1e674e9c3bc8591735999d3d5d06774f0a280ed755cf3fdb87->enter($__internal_8f12af51f3e94f1e674e9c3bc8591735999d3d5d06774f0a280ed755cf3fdb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8f12af51f3e94f1e674e9c3bc8591735999d3d5d06774f0a280ed755cf3fdb87->leave($__internal_8f12af51f3e94f1e674e9c3bc8591735999d3d5d06774f0a280ed755cf3fdb87_prof);

        
        $__internal_089ea9f6d4aacccd6fca99dac6719ab6c35446a8b974c03314ffe6c43f79a6d0->leave($__internal_089ea9f6d4aacccd6fca99dac6719ab6c35446a8b974c03314ffe6c43f79a6d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
