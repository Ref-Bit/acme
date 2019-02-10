<?php

/* D:\laragon\www\Acme/themes/acme/pages/contact.htm */
class __TwigTemplate_39c48a0d0786721ad311c69364f337c6abcd5fc861fa59e673f3d4e007d589cd extends Twig_Template
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
        echo "<h1>Contact us</h1>
<form>
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input type=\"text\" id=\"name\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label for=\"email\">E-mail</label>
        <input type=\"email\" id=\"email\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label for=\"message\">message</label>
        <input type=\"text\" id=\"message\" class=\"form-control\">
    </div>
    
    <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\Acme/themes/acme/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact us</h1>
<form>
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input type=\"text\" id=\"name\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label for=\"email\">E-mail</label>
        <input type=\"email\" id=\"email\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label for=\"message\">message</label>
        <input type=\"text\" id=\"message\" class=\"form-control\">
    </div>
    
    <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
</form>", "D:\\laragon\\www\\Acme/themes/acme/pages/contact.htm", "");
    }
}
