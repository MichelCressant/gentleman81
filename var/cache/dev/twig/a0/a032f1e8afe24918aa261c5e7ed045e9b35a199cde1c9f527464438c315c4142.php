<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_795c9c705c1870f4342472e991d300c6bf67720ee2cb586fe1efedbd4df232ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f6a580eb8d9c7ed4d6d4c242f4e1f20a03755bae568757ccb484cebbc89873a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6a580eb8d9c7ed4d6d4c242f4e1f20a03755bae568757ccb484cebbc89873a->enter($__internal_7f6a580eb8d9c7ed4d6d4c242f4e1f20a03755bae568757ccb484cebbc89873a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f4b4dc926f201bc42414b703c813acbc438d2f17a051b8e0ec8b49e793b70f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b4dc926f201bc42414b703c813acbc438d2f17a051b8e0ec8b49e793b70f40->enter($__internal_f4b4dc926f201bc42414b703c813acbc438d2f17a051b8e0ec8b49e793b70f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f6a580eb8d9c7ed4d6d4c242f4e1f20a03755bae568757ccb484cebbc89873a->leave($__internal_7f6a580eb8d9c7ed4d6d4c242f4e1f20a03755bae568757ccb484cebbc89873a_prof);

        
        $__internal_f4b4dc926f201bc42414b703c813acbc438d2f17a051b8e0ec8b49e793b70f40->leave($__internal_f4b4dc926f201bc42414b703c813acbc438d2f17a051b8e0ec8b49e793b70f40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7dbff0e1ac93c59def17b2bfeedcef32584508054469bd38d3ea5b4e7f9c1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dbff0e1ac93c59def17b2bfeedcef32584508054469bd38d3ea5b4e7f9c1a4->enter($__internal_d7dbff0e1ac93c59def17b2bfeedcef32584508054469bd38d3ea5b4e7f9c1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae1053cb4c0002f2ee8f019aebf193bd12ff75f3d1fd6604f537f14907424d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1053cb4c0002f2ee8f019aebf193bd12ff75f3d1fd6604f537f14907424d31->enter($__internal_ae1053cb4c0002f2ee8f019aebf193bd12ff75f3d1fd6604f537f14907424d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ae1053cb4c0002f2ee8f019aebf193bd12ff75f3d1fd6604f537f14907424d31->leave($__internal_ae1053cb4c0002f2ee8f019aebf193bd12ff75f3d1fd6604f537f14907424d31_prof);

        
        $__internal_d7dbff0e1ac93c59def17b2bfeedcef32584508054469bd38d3ea5b4e7f9c1a4->leave($__internal_d7dbff0e1ac93c59def17b2bfeedcef32584508054469bd38d3ea5b4e7f9c1a4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c03a51ffcb4b3f5d9cd26aa859e9ebfefb69b5fef7f7844f4e752a5aabc2ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c03a51ffcb4b3f5d9cd26aa859e9ebfefb69b5fef7f7844f4e752a5aabc2ea3->enter($__internal_3c03a51ffcb4b3f5d9cd26aa859e9ebfefb69b5fef7f7844f4e752a5aabc2ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8182451708879adbbf36757a3ab40b94394dd53df7e0b1490b2e17674db478fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8182451708879adbbf36757a3ab40b94394dd53df7e0b1490b2e17674db478fd->enter($__internal_8182451708879adbbf36757a3ab40b94394dd53df7e0b1490b2e17674db478fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8182451708879adbbf36757a3ab40b94394dd53df7e0b1490b2e17674db478fd->leave($__internal_8182451708879adbbf36757a3ab40b94394dd53df7e0b1490b2e17674db478fd_prof);

        
        $__internal_3c03a51ffcb4b3f5d9cd26aa859e9ebfefb69b5fef7f7844f4e752a5aabc2ea3->leave($__internal_3c03a51ffcb4b3f5d9cd26aa859e9ebfefb69b5fef7f7844f4e752a5aabc2ea3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
