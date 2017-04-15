<?php

/* base.html.twig */
class __TwigTemplate_3021766ed2225e3a68d444af94728eab5a7906b86a804f921320b2491d192a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3873cc1d9a72beb4c53d2f6edcf1421bf63d5a8d28c0b98f8c9453b89bcdc89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3873cc1d9a72beb4c53d2f6edcf1421bf63d5a8d28c0b98f8c9453b89bcdc89->enter($__internal_b3873cc1d9a72beb4c53d2f6edcf1421bf63d5a8d28c0b98f8c9453b89bcdc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_94f6dbbc848bbf799c29b1725bd238c2fbe9f6c17109232ed60e4e6efad27b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f6dbbc848bbf799c29b1725bd238c2fbe9f6c17109232ed60e4e6efad27b87->enter($__internal_94f6dbbc848bbf799c29b1725bd238c2fbe9f6c17109232ed60e4e6efad27b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b3873cc1d9a72beb4c53d2f6edcf1421bf63d5a8d28c0b98f8c9453b89bcdc89->leave($__internal_b3873cc1d9a72beb4c53d2f6edcf1421bf63d5a8d28c0b98f8c9453b89bcdc89_prof);

        
        $__internal_94f6dbbc848bbf799c29b1725bd238c2fbe9f6c17109232ed60e4e6efad27b87->leave($__internal_94f6dbbc848bbf799c29b1725bd238c2fbe9f6c17109232ed60e4e6efad27b87_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc29b81c374670ab3c423cf50ece4b69ef0c0c0b453137896a053efedb68e46a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc29b81c374670ab3c423cf50ece4b69ef0c0c0b453137896a053efedb68e46a->enter($__internal_cc29b81c374670ab3c423cf50ece4b69ef0c0c0b453137896a053efedb68e46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_120259a9257a4bc0608f6e1755adc474835a06d592879d8887b6647ce30dc2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120259a9257a4bc0608f6e1755adc474835a06d592879d8887b6647ce30dc2a6->enter($__internal_120259a9257a4bc0608f6e1755adc474835a06d592879d8887b6647ce30dc2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_120259a9257a4bc0608f6e1755adc474835a06d592879d8887b6647ce30dc2a6->leave($__internal_120259a9257a4bc0608f6e1755adc474835a06d592879d8887b6647ce30dc2a6_prof);

        
        $__internal_cc29b81c374670ab3c423cf50ece4b69ef0c0c0b453137896a053efedb68e46a->leave($__internal_cc29b81c374670ab3c423cf50ece4b69ef0c0c0b453137896a053efedb68e46a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f34d977e1cc10dcb939d41f25a64e3b64741ee70b6b7afbd3b29b8dce5f3206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f34d977e1cc10dcb939d41f25a64e3b64741ee70b6b7afbd3b29b8dce5f3206->enter($__internal_7f34d977e1cc10dcb939d41f25a64e3b64741ee70b6b7afbd3b29b8dce5f3206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f5eefb23955d1a9a3cc5de7a92f0dc3d06f318654f066158ab5d482a04c9c218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5eefb23955d1a9a3cc5de7a92f0dc3d06f318654f066158ab5d482a04c9c218->enter($__internal_f5eefb23955d1a9a3cc5de7a92f0dc3d06f318654f066158ab5d482a04c9c218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f5eefb23955d1a9a3cc5de7a92f0dc3d06f318654f066158ab5d482a04c9c218->leave($__internal_f5eefb23955d1a9a3cc5de7a92f0dc3d06f318654f066158ab5d482a04c9c218_prof);

        
        $__internal_7f34d977e1cc10dcb939d41f25a64e3b64741ee70b6b7afbd3b29b8dce5f3206->leave($__internal_7f34d977e1cc10dcb939d41f25a64e3b64741ee70b6b7afbd3b29b8dce5f3206_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f3865b1a83b9426ab3da13ac067c353aacc7fbe175621e3644befa2ada52055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3865b1a83b9426ab3da13ac067c353aacc7fbe175621e3644befa2ada52055->enter($__internal_5f3865b1a83b9426ab3da13ac067c353aacc7fbe175621e3644befa2ada52055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ec95df0aaa8362d39116e59f04555d12a224dfc4fa984f9f7cd00c86d2a1eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec95df0aaa8362d39116e59f04555d12a224dfc4fa984f9f7cd00c86d2a1eef->enter($__internal_6ec95df0aaa8362d39116e59f04555d12a224dfc4fa984f9f7cd00c86d2a1eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ec95df0aaa8362d39116e59f04555d12a224dfc4fa984f9f7cd00c86d2a1eef->leave($__internal_6ec95df0aaa8362d39116e59f04555d12a224dfc4fa984f9f7cd00c86d2a1eef_prof);

        
        $__internal_5f3865b1a83b9426ab3da13ac067c353aacc7fbe175621e3644befa2ada52055->leave($__internal_5f3865b1a83b9426ab3da13ac067c353aacc7fbe175621e3644befa2ada52055_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3775bc29713f239b4b04e0d56ea4701c129ba1a8ee35454ca19e4f36a0d8a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3775bc29713f239b4b04e0d56ea4701c129ba1a8ee35454ca19e4f36a0d8a75->enter($__internal_e3775bc29713f239b4b04e0d56ea4701c129ba1a8ee35454ca19e4f36a0d8a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_09b33b56ca3ab7abfd26859114e62053e04c8714dea92b397d6bb331df595849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b33b56ca3ab7abfd26859114e62053e04c8714dea92b397d6bb331df595849->enter($__internal_09b33b56ca3ab7abfd26859114e62053e04c8714dea92b397d6bb331df595849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_09b33b56ca3ab7abfd26859114e62053e04c8714dea92b397d6bb331df595849->leave($__internal_09b33b56ca3ab7abfd26859114e62053e04c8714dea92b397d6bb331df595849_prof);

        
        $__internal_e3775bc29713f239b4b04e0d56ea4701c129ba1a8ee35454ca19e4f36a0d8a75->leave($__internal_e3775bc29713f239b4b04e0d56ea4701c129ba1a8ee35454ca19e4f36a0d8a75_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/mcressant/Bureau/something/app/Resources/views/base.html.twig");
    }
}
