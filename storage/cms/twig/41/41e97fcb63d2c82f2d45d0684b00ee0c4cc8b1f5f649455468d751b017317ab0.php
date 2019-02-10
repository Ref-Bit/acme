<?php

/* D:\laragon\www\Acme/themes/acme/layouts/fallback.htm */
class __TwigTemplate_5a402334d48e8a79d468ae11155b17b438f04d93a82f281bafd58e48d122ff7f extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\Acme/themes/acme/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "D:\\laragon\\www\\Acme/themes/acme/layouts/fallback.htm", "");
    }
}
