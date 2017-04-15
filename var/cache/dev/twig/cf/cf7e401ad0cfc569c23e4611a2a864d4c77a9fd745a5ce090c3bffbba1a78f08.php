<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_420de03123a13130f8eb8384b0c4179b4831eaa7e9d5a943c4367a446e1dd4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78f5658de104a9734c10f7e92d64fdbd74541ef2df7b2921f1dd7dace1423a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f5658de104a9734c10f7e92d64fdbd74541ef2df7b2921f1dd7dace1423a12->enter($__internal_78f5658de104a9734c10f7e92d64fdbd74541ef2df7b2921f1dd7dace1423a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b2083c70676915449e7e0c348a76a6313c297679cf994e5b764792c1d200c3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2083c70676915449e7e0c348a76a6313c297679cf994e5b764792c1d200c3e6->enter($__internal_b2083c70676915449e7e0c348a76a6313c297679cf994e5b764792c1d200c3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f5658de104a9734c10f7e92d64fdbd74541ef2df7b2921f1dd7dace1423a12->leave($__internal_78f5658de104a9734c10f7e92d64fdbd74541ef2df7b2921f1dd7dace1423a12_prof);

        
        $__internal_b2083c70676915449e7e0c348a76a6313c297679cf994e5b764792c1d200c3e6->leave($__internal_b2083c70676915449e7e0c348a76a6313c297679cf994e5b764792c1d200c3e6_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cdc7187d199cf550f1e0550a4310d2af4132ff2d92427cd2d56a339adaee9a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc7187d199cf550f1e0550a4310d2af4132ff2d92427cd2d56a339adaee9a0c->enter($__internal_cdc7187d199cf550f1e0550a4310d2af4132ff2d92427cd2d56a339adaee9a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_eaeb7c7cf52fd0fac3307c1630883edd81d3ea8a7a898c9bf89ea7bf2a4a14ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaeb7c7cf52fd0fac3307c1630883edd81d3ea8a7a898c9bf89ea7bf2a4a14ce->enter($__internal_eaeb7c7cf52fd0fac3307c1630883edd81d3ea8a7a898c9bf89ea7bf2a4a14ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_eaeb7c7cf52fd0fac3307c1630883edd81d3ea8a7a898c9bf89ea7bf2a4a14ce->leave($__internal_eaeb7c7cf52fd0fac3307c1630883edd81d3ea8a7a898c9bf89ea7bf2a4a14ce_prof);

        
        $__internal_cdc7187d199cf550f1e0550a4310d2af4132ff2d92427cd2d56a339adaee9a0c->leave($__internal_cdc7187d199cf550f1e0550a4310d2af4132ff2d92427cd2d56a339adaee9a0c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38b61440139a19c0d8c8a0e4b6f90b361e915f3d1be3e78c60fae3d93569e053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b61440139a19c0d8c8a0e4b6f90b361e915f3d1be3e78c60fae3d93569e053->enter($__internal_38b61440139a19c0d8c8a0e4b6f90b361e915f3d1be3e78c60fae3d93569e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c7b6fd4760e8e8495f249d08f034687411ec3fa20482eed0a453165868cf6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7b6fd4760e8e8495f249d08f034687411ec3fa20482eed0a453165868cf6ca->enter($__internal_6c7b6fd4760e8e8495f249d08f034687411ec3fa20482eed0a453165868cf6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6c7b6fd4760e8e8495f249d08f034687411ec3fa20482eed0a453165868cf6ca->leave($__internal_6c7b6fd4760e8e8495f249d08f034687411ec3fa20482eed0a453165868cf6ca_prof);

        
        $__internal_38b61440139a19c0d8c8a0e4b6f90b361e915f3d1be3e78c60fae3d93569e053->leave($__internal_38b61440139a19c0d8c8a0e4b6f90b361e915f3d1be3e78c60fae3d93569e053_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
