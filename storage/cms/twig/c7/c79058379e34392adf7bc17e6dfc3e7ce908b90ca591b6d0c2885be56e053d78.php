<?php

/* D:\laragon\www\Acme/themes/acme/partials/header.htm */
class __TwigTemplate_be3ddf2f23df2b26f22bc9f96eb438f1ff61f01b8170bb1a4f35875ced0413f2 extends Twig_Template
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
        echo "<!-- Custom styles for this template -->
<link href=\"https://getbootstrap.com/docs/4.2/examples/navbars/navbar.css\" rel=\"stylesheet\">

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample08\" aria-controls=\"navbarsExample08\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse justify-content-md-center\" id=\"navbarsExample08\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
            </li>

            <li class=\"nav-item ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
            </li>

            <li class=\"nav-item ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
            </li>

            <li class=\"nav-item ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
            </li>

            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\"  href=\"#\" id=\"d\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">What's More</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"d\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\Acme/themes/acme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  73 => 23,  67 => 20,  61 => 19,  55 => 16,  49 => 15,  41 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Custom styles for this template -->
<link href=\"https://getbootstrap.com/docs/4.2/examples/navbars/navbar.css\" rel=\"stylesheet\">

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample08\" aria-controls=\"navbarsExample08\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse justify-content-md-center\" id=\"navbarsExample08\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item {% if this.page.id=='home' %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{'home'|page}}\">{{this.theme.site_name}}</a>
            </li>

            <li class=\"nav-item {% if this.page.id=='blog' %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{'blog'|page}}\">Blog</a>
            </li>

            <li class=\"nav-item {% if this.page.id=='about' %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{'about'|page}}\">About</a>
            </li>

            <li class=\"nav-item {% if this.page.id=='contact' %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{'contact'|page}}\">Contact</a>
            </li>

            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\"  href=\"#\" id=\"d\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">What's More</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"d\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>", "D:\\laragon\\www\\Acme/themes/acme/partials/header.htm", "");
    }
}
