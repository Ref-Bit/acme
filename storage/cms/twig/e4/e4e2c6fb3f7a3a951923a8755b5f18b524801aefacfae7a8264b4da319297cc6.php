<?php

/* D:\laragon\www\Acme/themes/acme/pages/home.htm */
class __TwigTemplate_c4813bc290a8a837b5a5e2fd9269c01248f7cdc47e0cf9a4e7effa7c1ce24282 extends Twig_Template
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
        echo "<div class=\"jumbotron text-center\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
    <p>
        <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\" class=\"btn btn-outline-primary\">Read More</a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\Acme/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron text-center\">
    <h1>{{this.theme.site_name}}</h1>
    <p>{{this.theme.site_description}}</p>
    <p>
        <a href=\"{{'about'|page}}\" class=\"btn btn-outline-primary\">Read More</a>
    </p>
</div>", "D:\\laragon\\www\\Acme/themes/acme/pages/home.htm", "");
    }
}
