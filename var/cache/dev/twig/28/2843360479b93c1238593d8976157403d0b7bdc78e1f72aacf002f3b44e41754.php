<?php

/* TestBundle:Default:index.html.twig */
class __TwigTemplate_f667b9ca7576538cf8a1af1e1cfe9b4ce626547260e2bbdc37f2fe27798a04f4 extends Twig_Template
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
        $__internal_8c7c4344a5d979171efc5b99c4856bcce876fd0e4a73b1110688e16f105e0f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7c4344a5d979171efc5b99c4856bcce876fd0e4a73b1110688e16f105e0f63->enter($__internal_8c7c4344a5d979171efc5b99c4856bcce876fd0e4a73b1110688e16f105e0f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:index.html.twig"));

        $__internal_9ca90909f5d8b4510ccd19b72dce6936e68b0fde30dd11a17baab5672b78982a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca90909f5d8b4510ccd19b72dce6936e68b0fde30dd11a17baab5672b78982a->enter($__internal_9ca90909f5d8b4510ccd19b72dce6936e68b0fde30dd11a17baab5672b78982a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Hello world bra' !!</h1>
";
        
        $__internal_8c7c4344a5d979171efc5b99c4856bcce876fd0e4a73b1110688e16f105e0f63->leave($__internal_8c7c4344a5d979171efc5b99c4856bcce876fd0e4a73b1110688e16f105e0f63_prof);

        
        $__internal_9ca90909f5d8b4510ccd19b72dce6936e68b0fde30dd11a17baab5672b78982a->leave($__internal_9ca90909f5d8b4510ccd19b72dce6936e68b0fde30dd11a17baab5672b78982a_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:index.html.twig";
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
        return new Twig_Source("<h1>Hello world bra' !!</h1>
", "TestBundle:Default:index.html.twig", "/home/mcressant/Bureau/something/src/TestBundle/Resources/views/Default/index.html.twig");
    }
}
