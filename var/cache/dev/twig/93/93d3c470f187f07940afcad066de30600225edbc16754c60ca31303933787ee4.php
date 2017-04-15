<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_54a49bd882fd89318ed8e9ed6e45ad27c0eefea373a657282027ca351c71c3a2 extends Twig_Template
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
        $__internal_dc307e4b448fc4bf9595010ed1693b96c0c401b7e077c6ed5aab3f591527c9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc307e4b448fc4bf9595010ed1693b96c0c401b7e077c6ed5aab3f591527c9ec->enter($__internal_dc307e4b448fc4bf9595010ed1693b96c0c401b7e077c6ed5aab3f591527c9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_660fd99aad3860497f3777b4f8990d4a1ec07d55bef17f611719878a31f10b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660fd99aad3860497f3777b4f8990d4a1ec07d55bef17f611719878a31f10b12->enter($__internal_660fd99aad3860497f3777b4f8990d4a1ec07d55bef17f611719878a31f10b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_dc307e4b448fc4bf9595010ed1693b96c0c401b7e077c6ed5aab3f591527c9ec->leave($__internal_dc307e4b448fc4bf9595010ed1693b96c0c401b7e077c6ed5aab3f591527c9ec_prof);

        
        $__internal_660fd99aad3860497f3777b4f8990d4a1ec07d55bef17f611719878a31f10b12->leave($__internal_660fd99aad3860497f3777b4f8990d4a1ec07d55bef17f611719878a31f10b12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
