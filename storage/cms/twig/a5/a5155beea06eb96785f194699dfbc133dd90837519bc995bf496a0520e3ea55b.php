<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* G:\wamp64\www\sharthi/themes/sharthi/pages/contact.htm */
class __TwigTemplate_230a84481995f559f07fb9fb35fc24bbf9ef0fe7e705d42d4bceaca3466dd7db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"confirm-container\"> <!--This will contain the confirmation when the email is successfully sent--> 
</div> 

<form class=\"flexiContactForm\" role=\"form\" data-request=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["SELF"] ?? null), "html", null, true);
        echo "::onMailSent\" data-request-update=\"'";
        echo twig_escape_filter($this->env, ($context["SELF"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

<div class=\"form-groups\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Enter name\">
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"Enter Email\">
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Enter Subject\">
    </div>
    <div class=\"form-group\">
        <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Enter Message\" cols=\"30\" rows=\"10\"></textarea>
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Send</button>
</div>
</form>";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"confirm-container\"> <!--This will contain the confirmation when the email is successfully sent--> 
</div> 

<form class=\"flexiContactForm\" role=\"form\" data-request=\"{{ SELF }}::onMailSent\" data-request-update=\"'{{ SELF }}::confirm': '.confirm-container'\">

<div class=\"form-groups\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Enter name\">
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"Enter Email\">
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Enter Subject\">
    </div>
    <div class=\"form-group\">
        <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Enter Message\" cols=\"30\" rows=\"10\"></textarea>
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Send</button>
</div>
</form>", "G:\\wamp64\\www\\sharthi/themes/sharthi/pages/contact.htm", "");
    }
}
