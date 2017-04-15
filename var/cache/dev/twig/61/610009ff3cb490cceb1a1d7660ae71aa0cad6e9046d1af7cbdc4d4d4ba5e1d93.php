<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_46825976ab9b566af19200ed2a87d5ed1975be5b85b00af70ccfed000365fa01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e08dd6f5be6d51e6c200aabdb0c64482488c821c91abd2eff541826d7055691e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08dd6f5be6d51e6c200aabdb0c64482488c821c91abd2eff541826d7055691e->enter($__internal_e08dd6f5be6d51e6c200aabdb0c64482488c821c91abd2eff541826d7055691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_051c7111ae9c06edbc7ff6352e5e3c0915f36d8c50da3c0a72c6f80a224a5d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051c7111ae9c06edbc7ff6352e5e3c0915f36d8c50da3c0a72c6f80a224a5d25->enter($__internal_051c7111ae9c06edbc7ff6352e5e3c0915f36d8c50da3c0a72c6f80a224a5d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e08dd6f5be6d51e6c200aabdb0c64482488c821c91abd2eff541826d7055691e->leave($__internal_e08dd6f5be6d51e6c200aabdb0c64482488c821c91abd2eff541826d7055691e_prof);

        
        $__internal_051c7111ae9c06edbc7ff6352e5e3c0915f36d8c50da3c0a72c6f80a224a5d25->leave($__internal_051c7111ae9c06edbc7ff6352e5e3c0915f36d8c50da3c0a72c6f80a224a5d25_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a59897b36dcf9a4d062686c6521814989323d308d6fb2ec3e4b01a93519df30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59897b36dcf9a4d062686c6521814989323d308d6fb2ec3e4b01a93519df30b->enter($__internal_a59897b36dcf9a4d062686c6521814989323d308d6fb2ec3e4b01a93519df30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9cc164fa30515be8f5932606bcc204f92b124a27841107d45ec76a4f0555d2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc164fa30515be8f5932606bcc204f92b124a27841107d45ec76a4f0555d2b4->enter($__internal_9cc164fa30515be8f5932606bcc204f92b124a27841107d45ec76a4f0555d2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9cc164fa30515be8f5932606bcc204f92b124a27841107d45ec76a4f0555d2b4->leave($__internal_9cc164fa30515be8f5932606bcc204f92b124a27841107d45ec76a4f0555d2b4_prof);

        
        $__internal_a59897b36dcf9a4d062686c6521814989323d308d6fb2ec3e4b01a93519df30b->leave($__internal_a59897b36dcf9a4d062686c6521814989323d308d6fb2ec3e4b01a93519df30b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_afaf7622a112714b675c29cb65db719810d542e8d313636ee63123df759497e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afaf7622a112714b675c29cb65db719810d542e8d313636ee63123df759497e4->enter($__internal_afaf7622a112714b675c29cb65db719810d542e8d313636ee63123df759497e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58ed4c22e53ae3498b365f527634c0284c5509afd4908ceab08c0345f4f275d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ed4c22e53ae3498b365f527634c0284c5509afd4908ceab08c0345f4f275d4->enter($__internal_58ed4c22e53ae3498b365f527634c0284c5509afd4908ceab08c0345f4f275d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_58ed4c22e53ae3498b365f527634c0284c5509afd4908ceab08c0345f4f275d4->leave($__internal_58ed4c22e53ae3498b365f527634c0284c5509afd4908ceab08c0345f4f275d4_prof);

        
        $__internal_afaf7622a112714b675c29cb65db719810d542e8d313636ee63123df759497e4->leave($__internal_afaf7622a112714b675c29cb65db719810d542e8d313636ee63123df759497e4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a87336f4e41213f1a7e2e904fed809581dd7963dafd88383c4269b74f2526b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87336f4e41213f1a7e2e904fed809581dd7963dafd88383c4269b74f2526b07->enter($__internal_a87336f4e41213f1a7e2e904fed809581dd7963dafd88383c4269b74f2526b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5042f5930b44f7cb3336a1bfb6123c83b1776e004727132e9ce465cbefe4bb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5042f5930b44f7cb3336a1bfb6123c83b1776e004727132e9ce465cbefe4bb96->enter($__internal_5042f5930b44f7cb3336a1bfb6123c83b1776e004727132e9ce465cbefe4bb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_5042f5930b44f7cb3336a1bfb6123c83b1776e004727132e9ce465cbefe4bb96->leave($__internal_5042f5930b44f7cb3336a1bfb6123c83b1776e004727132e9ce465cbefe4bb96_prof);

        
        $__internal_a87336f4e41213f1a7e2e904fed809581dd7963dafd88383c4269b74f2526b07->leave($__internal_a87336f4e41213f1a7e2e904fed809581dd7963dafd88383c4269b74f2526b07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
