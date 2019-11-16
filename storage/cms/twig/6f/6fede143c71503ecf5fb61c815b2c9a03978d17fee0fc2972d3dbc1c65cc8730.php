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

/* G:\wamp64\www\sharthi/themes/sharthi/partials/misc.htm */
class __TwigTemplate_390d678dfcf88b3f190e4a1fd3f7b7a8ec2b4c7eee05cc568f81c87eea3bf5e0 extends \Twig\Template
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
        echo "<!-- ##### Miscellaneous Area Start ###### -->
 <section class=\"miscellaneous-area bg-gray section-padding-100-0\">
    <div class=\"container\">
        <div class=\"row align-items-end justify-content-center\">
            <!-- Add Area -->
            <div class=\"col-12 col-md-6 col-lg-6\">
                <div class=\"add-area mb-100 wow fadeInUp\" data-wow-delay=\"100ms\">
                    <a href=\"#\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/add.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>

            <!-- Contact Area -->
            <div class=\"col-12 col-md-6 col-lg-6\">
                <div class=\"contact--area mb-100 wow fadeInUp\" data-wow-delay=\"300ms\">
                    <!-- Section Heading -->
                    <div class=\"section-heading mb-50\">
                        <div class=\"line\"></div>
                        <h2>Get in touch</h2>
                    </div>
                    <!-- Contact Content -->
                    <div class=\"contact-content\">
                        <!-- Single Contact Content -->
                        <div class=\"single-contact-content d-flex align-items-center\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/location.png");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"text\">
                                <p>Registered Address: 29, 2nd floor, Block E-1, Pocket-2 Sector G-2, Narela, Delhi 110040 </p>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class=\"single-contact-content d-flex align-items-center\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/location.png");
        echo "\" alt=\"\">
                                </div>
                                <div class=\"text\">
                                    <p>Local Address: Civil Line Road, 
                                        Robertsganj, Sonebhadra </p>
                                </div>
                            </div>
                        <!-- Single Contact Content -->
                        <div class=\"single-contact-content d-flex align-items-center\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/call.png");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"text\">
                                <p>8736871873 / 8545077721</p>
                                <span>mon-fri , 08.am - 17.pm</span>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class=\"single-contact-content d-flex align-items-center\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/message2.png");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"text\">
                                <p>contact@yourbusiness.com</p>
                                <span>we reply in 24 hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Area -->
           </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/misc.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 54,  91 => 44,  78 => 34,  66 => 25,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ##### Miscellaneous Area Start ###### -->
 <section class=\"miscellaneous-area bg-gray section-padding-100-0\">
    <div class=\"container\">
        <div class=\"row align-items-end justify-content-center\">
            <!-- Add Area -->
            <div class=\"col-12 col-md-6 col-lg-6\">
                <div class=\"add-area mb-100 wow fadeInUp\" data-wow-delay=\"100ms\">
                    <a href=\"#\"><img src=\"{{'assets/img/bg-img/add.png'|theme}}\" alt=\"\"></a>
                </div>
            </div>

            <!-- Contact Area -->
            <div class=\"col-12 col-md-6 col-lg-6\">
                <div class=\"contact--area mb-100 wow fadeInUp\" data-wow-delay=\"300ms\">
                    <!-- Section Heading -->
                    <div class=\"section-heading mb-50\">
                        <div class=\"line\"></div>
                        <h2>Get in touch</h2>
                    </div>
                    <!-- Contact Content -->
                    <div class=\"contact-content\">
                        <!-- Single Contact Content -->
                        <div class=\"single-contact-content d-flex align-items-center\">
                            <div class=\"icon\">
                                <img src=\"{{'assets/img/core-img/location.png'|theme}}\" alt=\"\">
                            </div>
                            <div class=\"text\">
                                <p>Registered Address: 29, 2nd floor, Block E-1, Pocket-2 Sector G-2, Narela, Delhi 110040 </p>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class=\"single-contact-content d-flex align-items-center\">
                                <div class=\"icon\">
                                    <img src=\"{{'assets/img/core-img/location.png'|theme}}\" alt=\"\">
                                </div>
                                <div class=\"text\">
                                    <p>Local Address: Civil Line Road, 
                                        Robertsganj, Sonebhadra </p>
                                </div>
                            </div>
                        <!-- Single Contact Content -->
                        <div class=\"single-contact-content d-flex align-items-center\">
                            <div class=\"icon\">
                                <img src=\"{{'assets/img/core-img/call.png'|theme}}\" alt=\"\">
                            </div>
                            <div class=\"text\">
                                <p>8736871873 / 8545077721</p>
                                <span>mon-fri , 08.am - 17.pm</span>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class=\"single-contact-content d-flex align-items-center\">
                            <div class=\"icon\">
                                <img src=\"{{'assets/img/core-img/message2.png'|theme}}\" alt=\"\">
                            </div>
                            <div class=\"text\">
                                <p>contact@yourbusiness.com</p>
                                <span>we reply in 24 hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Area -->
           </div>
        </div>
    </div>
</section>", "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/misc.htm", "");
    }
}
