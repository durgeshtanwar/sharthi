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

/* G:\wamp64\www\sharthi/themes/sharthi/partials/header_navigation.htm */
class __TwigTemplate_9aacb9bbf5823453e00d78a0d2694b8dac4f398499d7fadb10801df9a233f9fe extends \Twig\Template
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
        echo "<!-- Preloader -->
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"lds-ellipsis\">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class=\"header-area\">
        <!-- Top Header Area -->
        <div class=\"top-header-area\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12 d-flex justify-content-between\">
                        <!-- Logo Area -->
                        <div class=\"logo\">
                           <a href=\"/\" class=\"mt-2\" style=\"margin-top:20px\"> Sharthi Microfinance</a>
                           

                        </div>

                        <!-- Top Contact Info -->
                        <div class=\"top-contact-info d-flex align-items-center\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"29, 2nd block E-1, Pocket-2 Sector G-2, Narela, Delhi 110040\" class=\"text-primary\"><img src=\" ";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/placeholder.png");
        echo "\" alt=\"\"> <span>29, 2nd block E-1, Pocket-2 Sector G-2, Narela, Delhi 110040</span></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"office@yourfirm.com\"><img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/message.png");
        echo "\" alt=\"\"> <span>office@yourfirm.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class=\"credit-main-menu\" id=\"sticker\">
            <div class=\"classy-nav-container breakpoint-off\">
                <div class=\"container\">
                    <!-- Menu -->
                    <nav class=\"classy-navbar justify-content-between\" id=\"creditNav\">

                        <!-- Navbar Toggler -->
                        <div class=\"classy-navbar-toggler\">
                            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class=\"classy-menu\">

                            <!-- Close Button -->
                            <div class=\"classycloseIcon\">
                                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class=\"classynav\">
                                <ul>
                                    <li><a href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                                    <li><a href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About Us</a></li>
                                    <li><a href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>
                                                                  
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class=\"contact\">
                            <a href=\"#\"><img src =\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/call2.png");
        echo "\"> 9602036120</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/header_navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 69,  110 => 60,  106 => 59,  102 => 58,  69 => 28,  65 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Preloader -->
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"lds-ellipsis\">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class=\"header-area\">
        <!-- Top Header Area -->
        <div class=\"top-header-area\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12 d-flex justify-content-between\">
                        <!-- Logo Area -->
                        <div class=\"logo\">
                           <a href=\"/\" class=\"mt-2\" style=\"margin-top:20px\"> Sharthi Microfinance</a>
                           

                        </div>

                        <!-- Top Contact Info -->
                        <div class=\"top-contact-info d-flex align-items-center\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"29, 2nd block E-1, Pocket-2 Sector G-2, Narela, Delhi 110040\" class=\"text-primary\"><img src=\" {{'assets/img/core-img/placeholder.png'|theme}}\" alt=\"\"> <span>29, 2nd block E-1, Pocket-2 Sector G-2, Narela, Delhi 110040</span></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"office@yourfirm.com\"><img src=\"{{'assets/img/core-img/message.png'|theme}}\" alt=\"\"> <span>office@yourfirm.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class=\"credit-main-menu\" id=\"sticker\">
            <div class=\"classy-nav-container breakpoint-off\">
                <div class=\"container\">
                    <!-- Menu -->
                    <nav class=\"classy-navbar justify-content-between\" id=\"creditNav\">

                        <!-- Navbar Toggler -->
                        <div class=\"classy-navbar-toggler\">
                            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class=\"classy-menu\">

                            <!-- Close Button -->
                            <div class=\"classycloseIcon\">
                                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class=\"classynav\">
                                <ul>
                                    <li><a href=\"{{'home'| page}}\">Home</a></li>
                                    <li><a href=\"{{'about'|page}}\">About Us</a></li>
                                    <li><a href=\"{{'contact'|page}}\">Contact</a></li>
                                                                  
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class=\"contact\">
                            <a href=\"#\"><img src =\"{{'assets/img/core-img/call2.png'|theme}}\"> 9602036120</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>", "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/header_navigation.htm", "");
    }
}
