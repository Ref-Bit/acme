<?php

/* D:\laragon\www\Acme/themes/acme/pages/about.htm */
class __TwigTemplate_099aeed04697db75063e40a33fb07fef80b51684db6944b6b153a404497a2d9f extends Twig_Template
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
        echo "<h1>About us</h1>
<p>This is a short introduction of who we are</p>
<hr>

";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\Acme/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About us</h1>
<p>This is a short introduction of who we are</p>
<hr>

{% component 'resourcesLinks' %}", "D:\\laragon\\www\\Acme/themes/acme/pages/about.htm", "");
    }
}
