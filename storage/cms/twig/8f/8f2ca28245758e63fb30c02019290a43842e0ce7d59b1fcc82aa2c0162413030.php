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

/* G:\wamp64\www\sharthi/themes/sharthi/pages/home.htm */
class __TwigTemplate_37db80cf8a3ab7d0d4c1c5bbaceef515c6208adaf1947ed411922aa287821000 extends \Twig\Template
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
        echo "<h1>Durgesh</h1>";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Durgesh</h1>", "G:\\wamp64\\www\\sharthi/themes/sharthi/pages/home.htm", "");
    }
}
