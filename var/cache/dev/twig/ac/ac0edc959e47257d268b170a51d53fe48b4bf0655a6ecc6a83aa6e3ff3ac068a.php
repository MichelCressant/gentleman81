<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3bc1499e5865c8ec4a05c7d6b12879a934adcede952a863367c96e6e15e0bdcf extends Twig_Template
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
        $__internal_263ebf1cf637f2d719933c36b94d3ac53bc5ac9727448b455a22c916504f2838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263ebf1cf637f2d719933c36b94d3ac53bc5ac9727448b455a22c916504f2838->enter($__internal_263ebf1cf637f2d719933c36b94d3ac53bc5ac9727448b455a22c916504f2838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e0177626b34a5b4f312a52643f8398ec92f03868eb5468f868eed66f66de37fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0177626b34a5b4f312a52643f8398ec92f03868eb5468f868eed66f66de37fb->enter($__internal_e0177626b34a5b4f312a52643f8398ec92f03868eb5468f868eed66f66de37fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_263ebf1cf637f2d719933c36b94d3ac53bc5ac9727448b455a22c916504f2838->leave($__internal_263ebf1cf637f2d719933c36b94d3ac53bc5ac9727448b455a22c916504f2838_prof);

        
        $__internal_e0177626b34a5b4f312a52643f8398ec92f03868eb5468f868eed66f66de37fb->leave($__internal_e0177626b34a5b4f312a52643f8398ec92f03868eb5468f868eed66f66de37fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
