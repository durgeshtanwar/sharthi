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

/* G:\wamp64\www\sharthi/themes/sharthi/layouts/contact.htm */
class __TwigTemplate_d827ca32a7a58ba7d645cf00500d6ad3b6fe9096e8f62e14e15e5972f6796af4 extends \Twig\Template
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

";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header_navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "
  <!-- ##### Breadcrumb Area Start ##### -->
  <section class=\"breadcrumb-area bg-img bg-overlay jarallax\" style=\"background-image: url(";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/13.jpg");
        echo ");\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"breadcrumb-content\">
                    <h2>Contact</h2>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class=\"contact-area section-padding-100-0\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Single Contact Area -->
            <div class=\"col-12 col-lg-4\">
                <div class=\"single-contact-area mb-100\">
                    <!-- Logo -->
                    <a href=\"#\" class=\"d-block mb-50\">Sharthi Microfinance</a>
                    <p>आपकी जरूरतों में भागीदार </p>
                </div>
            </div>

            <!-- Single Contact Area -->
            <div class=\"col-12 col-lg-4\">
                <div class=\"single-contact-area mb-100\">
                    <div class=\"contact-advisor\">
                        <h5>Contact an advisor</h5>
                        <!-- Single Advisor -->
                        <div class=\"single-advisor d-flex align-items-center\">
                            <div class=\"advisor-img\">
                                <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/25.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"advisor-info\">
                                <h6>Rampoojan Kushwaha</h6>
                                <span>Advisor</span>
                                <p>9602036120</p>
                            </div>
                        </div>
                        <!-- Single Advisor -->
                        <div class=\"single-advisor d-flex align-items-center\">
                            <div class=\"advisor-img\">
                                <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/26.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"advisor-info\">
                                <h6>Michael Williams</h6>
                                <span>Advisor</span>
                                <p>9602036120</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Contact Area -->
            <div class=\"col-12 col-lg-4\">
                <div class=\"single-contact-area mb-100\">
                    <div class=\"contact--area contact-page\">
                        <!-- Contact Content -->
                        <div class=\"contact-content\">
                            <h5>Get in touch</h5>

                            <!-- Single Contact Content -->
                            <div class=\"single-contact-content d-flex align-items-center\">
                                <div class=\"icon\">
                                    <img src=\"img/core-img/location.png\" alt=\"\">
                                </div>
                                <div class=\"text\">
                                    <p>3007 Sarah Drive <br> Franklin, LA 70538</p>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class=\"single-contact-content d-flex align-items-center\">
                                <div class=\"icon\">
                                    <img src=\"img/core-img/call.png\" alt=\"\">
                                </div>
                                <div class=\"text\">
                                    <p>337-413-9538</p>
                                    <span>mon-fri , 08.am - 17.pm</span>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class=\"single-contact-content d-flex align-items-center\">
                                <div class=\"icon\">
                                    <img src=\"img/core-img/message2.png\" alt=\"\">
                                </div>
                                <div class=\"text\">
                                    <p>contact@yourbusiness.com</p>
                                    <span>we reply in 24 hrs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### Google Maps ##### -->
    <div class=\"map-area\">
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.97162301475!2d77.06889914081368!3d28.527519804658446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2z4KSo4KSIIOCkpuCkv-CksuCljeCksuClgCwg4KSm4KS_4KSy4KWN4KSy4KWA!5e0!3m2!1shi!2sin!4v1573742386730!5m2!1shi!2sin\" allowfullscreen></iframe>

       
        <!-- Contact Area -->
        <div class=\"contact---area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-8\">
                        <!-- Contact Area -->
                        <div class=\"contact-form-area contact-page\">
                            <h4 class=\"mb-50\">Send a message</h4>

                            <div class=\"confirm-container\"> <!--This will contain the confirmation when the email is successfully sent--> </div> <form class=\"flexiContactForm\" role=\"form\" data-request=\"";
        // line 151
        echo twig_escape_filter($this->env, ($context["SELF"] ?? null), "html", null, true);
        echo "::onMailSent\" data-request-update=\"'";
        echo twig_escape_filter($this->env, ($context["SELF"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-container'\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" name=\"name\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Your E-mail\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"Your Subject\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <textarea name=\"message\" class=\"form-control\" id=\"message\" cols=\"30\" rows=\"10\" placeholder=\"Your Message\" name=\"body\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <button class=\"btn credit-btn mt-30\" type=\"submit\">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
";
        // line 186
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 187
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery/jquery-2.2.4.min.js", 1 => "assets/js/bootstrap/popper.min.js", 2 => "assets/js/bootstrap/bootstrap.min.js", 3 => "assets/js/plugins/plugins.js", 4 => "assets/js/active.js"]);
        // line 194
        echo "\"></script>
  ";
        // line 195
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
        // line 196
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 197
        echo "
</body>";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/layouts/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 197,  270 => 196,  259 => 195,  256 => 194,  253 => 187,  249 => 186,  209 => 151,  135 => 80,  121 => 69,  78 => 29,  74 => 27,  70 => 26,  64 => 22,  61 => 21,  58 => 20,  56 => 18,  37 => 1,);
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

{%partial 'header_navigation'%}

  <!-- ##### Breadcrumb Area Start ##### -->
  <section class=\"breadcrumb-area bg-img bg-overlay jarallax\" style=\"background-image: url({{'assets/img/bg-img/13.jpg'|theme}});\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"breadcrumb-content\">
                    <h2>Contact</h2>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class=\"contact-area section-padding-100-0\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Single Contact Area -->
            <div class=\"col-12 col-lg-4\">
                <div class=\"single-contact-area mb-100\">
                    <!-- Logo -->
                    <a href=\"#\" class=\"d-block mb-50\">Sharthi Microfinance</a>
                    <p>आपकी जरूरतों में भागीदार </p>
                </div>
            </div>

            <!-- Single Contact Area -->
            <div class=\"col-12 col-lg-4\">
                <div class=\"single-contact-area mb-100\">
                    <div class=\"contact-advisor\">
                        <h5>Contact an advisor</h5>
                        <!-- Single Advisor -->
                        <div class=\"single-advisor d-flex align-items-center\">
                            <div class=\"advisor-img\">
                                <img src=\"{{'assets/img/bg-img/25.jpg' |theme}}\" alt=\"\">
                            </div>
                            <div class=\"advisor-info\">
                                <h6>Rampoojan Kushwaha</h6>
                                <span>Advisor</span>
                                <p>9602036120</p>
                            </div>
                        </div>
                        <!-- Single Advisor -->
                        <div class=\"single-advisor d-flex align-items-center\">
                            <div class=\"advisor-img\">
                                <img src=\"{{'assets/img/bg-img/26.jpg'|theme}}\" alt=\"\">
                            </div>
                            <div class=\"advisor-info\">
                                <h6>Michael Williams</h6>
                                <span>Advisor</span>
                                <p>9602036120</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Contact Area -->
            <div class=\"col-12 col-lg-4\">
                <div class=\"single-contact-area mb-100\">
                    <div class=\"contact--area contact-page\">
                        <!-- Contact Content -->
                        <div class=\"contact-content\">
                            <h5>Get in touch</h5>

                            <!-- Single Contact Content -->
                            <div class=\"single-contact-content d-flex align-items-center\">
                                <div class=\"icon\">
                                    <img src=\"img/core-img/location.png\" alt=\"\">
                                </div>
                                <div class=\"text\">
                                    <p>3007 Sarah Drive <br> Franklin, LA 70538</p>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class=\"single-contact-content d-flex align-items-center\">
                                <div class=\"icon\">
                                    <img src=\"img/core-img/call.png\" alt=\"\">
                                </div>
                                <div class=\"text\">
                                    <p>337-413-9538</p>
                                    <span>mon-fri , 08.am - 17.pm</span>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class=\"single-contact-content d-flex align-items-center\">
                                <div class=\"icon\">
                                    <img src=\"img/core-img/message2.png\" alt=\"\">
                                </div>
                                <div class=\"text\">
                                    <p>contact@yourbusiness.com</p>
                                    <span>we reply in 24 hrs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### Google Maps ##### -->
    <div class=\"map-area\">
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.97162301475!2d77.06889914081368!3d28.527519804658446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2z4KSo4KSIIOCkpuCkv-CksuCljeCksuClgCwg4KSm4KS_4KSy4KWN4KSy4KWA!5e0!3m2!1shi!2sin!4v1573742386730!5m2!1shi!2sin\" allowfullscreen></iframe>

       
        <!-- Contact Area -->
        <div class=\"contact---area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-8\">
                        <!-- Contact Area -->
                        <div class=\"contact-form-area contact-page\">
                            <h4 class=\"mb-50\">Send a message</h4>

                            <div class=\"confirm-container\"> <!--This will contain the confirmation when the email is successfully sent--> </div> <form class=\"flexiContactForm\" role=\"form\" data-request=\"{{ SELF }}::onMailSent\" data-request-update=\"'{{ SELF }}::confirm': '.confirm-container'\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" name=\"name\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Your E-mail\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"Your Subject\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <textarea name=\"message\" class=\"form-control\" id=\"message\" cols=\"30\" rows=\"10\" placeholder=\"Your Message\" name=\"body\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <button class=\"btn credit-btn mt-30\" type=\"submit\">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
{% partial 'footer' %}
<script src=\"{{ [
    'assets/js/jquery/jquery-2.2.4.min.js',
    'assets/js/bootstrap/popper.min.js',
    'assets/js/bootstrap/bootstrap.min.js',
    'assets/js/plugins/plugins.js',
    'assets/js/active.js',
    
  ]|theme }}\"></script>
  {% framework extras %}
  {% scripts %}

</body>", "G:\\wamp64\\www\\sharthi/themes/sharthi/layouts/contact.htm", "");
    }
}
