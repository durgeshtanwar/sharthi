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

/* G:\wamp64\www\sharthi/themes/sharthi/partials/features_area.htm */
class __TwigTemplate_1560d73902291eff60b8ba41f660faa1635591d4406cf06721571381700ce74b extends \Twig\Template
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
        echo "<section class=\"features-area section-padding-100-0\">
        <div class=\"container\">
            <div class=\"row align-items-end\">
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-features-area mb-100 wow fadeInUp\" data-wow-delay=\"100ms\">
                        <!-- Section Heading -->
                        <div class=\"section-heading\">
                            <div class=\"line\"></div>
                            <p>Take look at our</p>
                            <h2>Our Loans</h2>
                        </div>
                        <h6>We provide loans as you have require. Come to us to get hassel free loans</h6>
                        <a href=\"#\" class=\"btn credit-btn mt-50\">Discover</a>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-features-area mb-100 wow fadeInUp\" data-wow-delay=\"300ms\">
                        <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/2.jpg");
        echo "\" alt=\"\">
                        <h5>We take care of you</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-features-area mb-100 wow fadeInUp\" data-wow-delay=\"500ms\">
                        <img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/3.jpg");
        echo "\" alt=\"\">
                        <h5>No documents needed</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-features-area mb-100 wow fadeInUp\" data-wow-delay=\"700ms\">
                        <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/4.jpg");
        echo "\" alt=\"\">
                        <h5>Fast &amp; easy loans</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/features_area.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  65 => 24,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"features-area section-padding-100-0\">
        <div class=\"container\">
            <div class=\"row align-items-end\">
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-features-area mb-100 wow fadeInUp\" data-wow-delay=\"100ms\">
                        <!-- Section Heading -->
                        <div class=\"section-heading\">
                            <div class=\"line\"></div>
                            <p>Take look at our</p>
                            <h2>Our Loans</h2>
                        </div>
                        <h6>We provide loans as you have require. Come to us to get hassel free loans</h6>
                        <a href=\"#\" class=\"btn credit-btn mt-50\">Discover</a>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-features-area mb-100 wow fadeInUp\" data-wow-delay=\"300ms\">
                        <img src=\"{{'assets/img/bg-img/2.jpg'|theme}}\" alt=\"\">
                        <h5>We take care of you</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-features-area mb-100 wow fadeInUp\" data-wow-delay=\"500ms\">
                        <img src=\"{{'assets/img/bg-img/3.jpg'|theme}}\" alt=\"\">
                        <h5>No documents needed</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-features-area mb-100 wow fadeInUp\" data-wow-delay=\"700ms\">
                        <img src=\"{{'assets/img/bg-img/4.jpg'|theme}}\" alt=\"\">
                        <h5>Fast &amp; easy loans</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>", "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/features_area.htm", "");
    }
}
