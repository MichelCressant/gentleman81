<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0a6ad8bcc82560001bb4ad2272a340ee3229f2e39daf065a6809fa2bc349186e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72ce93e98a25ce9e397201b1d57794700367adafc278c37e5a2134a0c5520592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ce93e98a25ce9e397201b1d57794700367adafc278c37e5a2134a0c5520592->enter($__internal_72ce93e98a25ce9e397201b1d57794700367adafc278c37e5a2134a0c5520592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_57affbcea0b0750f5f581ca329c39dc4c7530d028ea09d40edf0242fe8fe0947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57affbcea0b0750f5f581ca329c39dc4c7530d028ea09d40edf0242fe8fe0947->enter($__internal_57affbcea0b0750f5f581ca329c39dc4c7530d028ea09d40edf0242fe8fe0947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ce93e98a25ce9e397201b1d57794700367adafc278c37e5a2134a0c5520592->leave($__internal_72ce93e98a25ce9e397201b1d57794700367adafc278c37e5a2134a0c5520592_prof);

        
        $__internal_57affbcea0b0750f5f581ca329c39dc4c7530d028ea09d40edf0242fe8fe0947->leave($__internal_57affbcea0b0750f5f581ca329c39dc4c7530d028ea09d40edf0242fe8fe0947_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52abe041b7491c63280c8197169c711e096beb6d621c1b9677ad2fe2b062b64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52abe041b7491c63280c8197169c711e096beb6d621c1b9677ad2fe2b062b64c->enter($__internal_52abe041b7491c63280c8197169c711e096beb6d621c1b9677ad2fe2b062b64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2ca9a1a5fcf4547fdaaad6f05fcd5852bff7ec12b7d013e813d4ef745b9f2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ca9a1a5fcf4547fdaaad6f05fcd5852bff7ec12b7d013e813d4ef745b9f2d8->enter($__internal_f2ca9a1a5fcf4547fdaaad6f05fcd5852bff7ec12b7d013e813d4ef745b9f2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f2ca9a1a5fcf4547fdaaad6f05fcd5852bff7ec12b7d013e813d4ef745b9f2d8->leave($__internal_f2ca9a1a5fcf4547fdaaad6f05fcd5852bff7ec12b7d013e813d4ef745b9f2d8_prof);

        
        $__internal_52abe041b7491c63280c8197169c711e096beb6d621c1b9677ad2fe2b062b64c->leave($__internal_52abe041b7491c63280c8197169c711e096beb6d621c1b9677ad2fe2b062b64c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_67adcc7da3ccf221d85644e0faa260ff44a52a95b4f70724de196bc33270dcde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67adcc7da3ccf221d85644e0faa260ff44a52a95b4f70724de196bc33270dcde->enter($__internal_67adcc7da3ccf221d85644e0faa260ff44a52a95b4f70724de196bc33270dcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9bd8405bed7b769807b3c0fc982a7421439e5f7c9a276e94ca4271ae073410b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bd8405bed7b769807b3c0fc982a7421439e5f7c9a276e94ca4271ae073410b->enter($__internal_e9bd8405bed7b769807b3c0fc982a7421439e5f7c9a276e94ca4271ae073410b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_e9bd8405bed7b769807b3c0fc982a7421439e5f7c9a276e94ca4271ae073410b->leave($__internal_e9bd8405bed7b769807b3c0fc982a7421439e5f7c9a276e94ca4271ae073410b_prof);

        
        $__internal_67adcc7da3ccf221d85644e0faa260ff44a52a95b4f70724de196bc33270dcde->leave($__internal_67adcc7da3ccf221d85644e0faa260ff44a52a95b4f70724de196bc33270dcde_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
