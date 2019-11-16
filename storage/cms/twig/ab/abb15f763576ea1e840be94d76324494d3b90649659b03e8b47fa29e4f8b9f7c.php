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

/* G:\wamp64\www\sharthi/themes/sharthi/partials/call_to_action.htm */
class __TwigTemplate_10773652719e350a67be342e3f2635d9395e7f4fbd1bfdcc80329cc773cc3d6b extends \Twig\Template
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
        echo "<!-- ##### Call To Action Start ###### -->
 <section class=\"cta-area d-flex flex-wrap\">
    <!-- Cta Thumbnail -->
    <div class=\"cta-thumbnail bg-img jarallax\" style=\"background-image: url(";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/5.jpg");
        echo ");\"></div>

    <!-- Cta Content -->
    <div class=\"cta-content\">
        <!-- Section Heading -->
        <div class=\"section-heading white\">
            <div class=\"line\"></div>
            <p>Bold desing and beyound</p>
            <h2>Helping small businesses like yours</h2>
        </div>
        <h6>We help Small businesses to dream big and get the best out of their business.</h6>
        <div class=\"d-flex flex-wrap mt-50\">
            <!-- Single Skills Area -->
            <div class=\"single-skils-area mb-70 mr-5\">
                <div id=\"circle\" class=\"circle\" data-value=\"0.90\">
                    <div class=\"skills-text\">
                        <span>90%</span>
                    </div>
                </div>
                <p>Energy</p>
            </div>

            <!-- Single Skills Area -->
            <div class=\"single-skils-area mb-70 mr-5\">
                <div id=\"circle2\" class=\"circle\" data-value=\"0.75\">
                    <div class=\"skills-text\">
                        <span>75%</span>
                    </div>
                </div>
                <p>power</p>
            </div>

            <!-- Single Skills Area -->
            <div class=\"single-skils-area mb-70\">
                <div id=\"circle3\" class=\"circle\" data-value=\"0.97\">
                    <div class=\"skills-text\">
                        <span>97%</span>
                    </div>
                </div>
                <p>resource</p>
            </div>
        </div>
        <a href=\"#\" class=\"btn credit-btn box-shadow btn-2\">Read More</a>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/call_to_action.htm";
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
        return new Source("<!-- ##### Call To Action Start ###### -->
 <section class=\"cta-area d-flex flex-wrap\">
    <!-- Cta Thumbnail -->
    <div class=\"cta-thumbnail bg-img jarallax\" style=\"background-image: url({{'assets/img/bg-img/5.jpg'|theme}});\"></div>

    <!-- Cta Content -->
    <div class=\"cta-content\">
        <!-- Section Heading -->
        <div class=\"section-heading white\">
            <div class=\"line\"></div>
            <p>Bold desing and beyound</p>
            <h2>Helping small businesses like yours</h2>
        </div>
        <h6>We help Small businesses to dream big and get the best out of their business.</h6>
        <div class=\"d-flex flex-wrap mt-50\">
            <!-- Single Skills Area -->
            <div class=\"single-skils-area mb-70 mr-5\">
                <div id=\"circle\" class=\"circle\" data-value=\"0.90\">
                    <div class=\"skills-text\">
                        <span>90%</span>
                    </div>
                </div>
                <p>Energy</p>
            </div>

            <!-- Single Skills Area -->
            <div class=\"single-skils-area mb-70 mr-5\">
                <div id=\"circle2\" class=\"circle\" data-value=\"0.75\">
                    <div class=\"skills-text\">
                        <span>75%</span>
                    </div>
                </div>
                <p>power</p>
            </div>

            <!-- Single Skills Area -->
            <div class=\"single-skils-area mb-70\">
                <div id=\"circle3\" class=\"circle\" data-value=\"0.97\">
                    <div class=\"skills-text\">
                        <span>97%</span>
                    </div>
                </div>
                <p>resource</p>
            </div>
        </div>
        <a href=\"#\" class=\"btn credit-btn box-shadow btn-2\">Read More</a>
    </div>
</section>", "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/call_to_action.htm", "");
    }
}
