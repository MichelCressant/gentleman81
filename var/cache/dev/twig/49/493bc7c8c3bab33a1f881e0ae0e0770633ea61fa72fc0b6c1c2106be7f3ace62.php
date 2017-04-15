<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_df9477f5dc376f0c7f959801254f3f4e66845a6bd5e7784b42abb46496301720 extends Twig_Template
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
        $__internal_1a4818a251c0b14b56a3d0fde93bd2ecb9c6863fe7713c0e7749bd45a77c28f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4818a251c0b14b56a3d0fde93bd2ecb9c6863fe7713c0e7749bd45a77c28f9->enter($__internal_1a4818a251c0b14b56a3d0fde93bd2ecb9c6863fe7713c0e7749bd45a77c28f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_f6a854f4caa1c07448d16294a6b2aae3eab16129bb73dc721df691e9ac452b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a854f4caa1c07448d16294a6b2aae3eab16129bb73dc721df691e9ac452b60->enter($__internal_f6a854f4caa1c07448d16294a6b2aae3eab16129bb73dc721df691e9ac452b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1a4818a251c0b14b56a3d0fde93bd2ecb9c6863fe7713c0e7749bd45a77c28f9->leave($__internal_1a4818a251c0b14b56a3d0fde93bd2ecb9c6863fe7713c0e7749bd45a77c28f9_prof);

        
        $__internal_f6a854f4caa1c07448d16294a6b2aae3eab16129bb73dc721df691e9ac452b60->leave($__internal_f6a854f4caa1c07448d16294a6b2aae3eab16129bb73dc721df691e9ac452b60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
