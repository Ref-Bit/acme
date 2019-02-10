<?php

/* D:\laragon\www\Acme/themes/acme/layouts/default.htm */
class __TwigTemplate_2af3cd0d77581f40b06242b01d99c867261239974cd7172f15bc5bedad9ad23a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Acme - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/darkly/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
    ";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 10
        echo "</head>
<body>
    <header>
        ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    </header>

    <div class=\"container\">
        ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "    </div>

    <footer>
        ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "    </footer>

    <script src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\Acme/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  78 => 25,  74 => 24,  70 => 22,  66 => 21,  61 => 18,  59 => 17,  54 => 14,  50 => 13,  45 => 10,  42 => 9,  38 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Acme - {{this.page.title}}</title>
    <meta name=\"description\" content=\"{{this.page.meta_description}}\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/darkly/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/theme.css'|theme}}\">
    {% styles %}
</head>
<body>
    <header>
        {% partial 'header' %}
    </header>

    <div class=\"container\">
        {% page %}
    </div>

    <footer>
        {% partial 'footer' %}
    </footer>

    <script src=\"{{'assets/vendor/jquery.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"></script>
    <script src=\"{{'assets/javascript/app.js'|theme}}\"></script>

</body>
</html>", "D:\\laragon\\www\\Acme/themes/acme/layouts/default.htm", "");
    }
}
