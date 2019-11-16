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

/* G:\wamp64\www\sharthi/themes/sharthi/layouts/homepage.htm */
class __TwigTemplate_228ed540109d0ef183c50f72fe391a70b67a02ea882f79f9e794f7311bfb4d8c extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sharthi Microfinance Company</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"img/core-img/favicon.ico\">

    <!-- Stylesheet -->
     <link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/style.css"]);
        // line 20
        echo "\" rel=\"stylesheet\">
    ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 22
        echo "   

</head>
<body>
";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header_navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "
";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("hero"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "
";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features_area"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("call_to_action"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "
";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("call_2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "  
";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("misc"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "
";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "
   <script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery/jquery-2.2.4.min.js", 1 => "assets/js/bootstrap/popper.min.js", 2 => "assets/js/bootstrap/bootstrap.min.js", 3 => "assets/js/plugins/plugins.js", 4 => "assets/js/active.js"]);
        // line 47
        echo "\"></script>
    ";
        // line 48
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 49
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 50
        echo "
</body>";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/layouts/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 50,  135 => 49,  124 => 48,  121 => 47,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  105 => 36,  102 => 35,  98 => 34,  95 => 33,  91 => 32,  88 => 31,  84 => 30,  81 => 29,  77 => 28,  74 => 27,  70 => 26,  64 => 22,  61 => 21,  58 => 20,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sharthi Microfinance Company</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"img/core-img/favicon.ico\">

    <!-- Stylesheet -->
     <link href=\"{{ [
            'assets/css/style.css'
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}
   

</head>
<body>
{%partial 'header_navigation'%}

{%partial 'hero'%}

{%partial 'features_area'%}

{%partial 'call_to_action'%}

{%partial 'call_2' %}
  
{%partial 'misc' %}

{%partial 'footer' %}

   <script src=\"{{ [
      'assets/js/jquery/jquery-2.2.4.min.js',
      'assets/js/bootstrap/popper.min.js',
      'assets/js/bootstrap/bootstrap.min.js',
      'assets/js/plugins/plugins.js',
      'assets/js/active.js',
      
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}

</body>", "G:\\wamp64\\www\\sharthi/themes/sharthi/layouts/homepage.htm", "");
    }
}
