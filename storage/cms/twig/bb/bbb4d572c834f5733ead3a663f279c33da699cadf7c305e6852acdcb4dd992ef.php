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

/* G:\wamp64\www\sharthi/themes/sharthi/partials/hero.htm */
class __TwigTemplate_b574a0aa61c4d047b9f7e794f42720cf65dfe17423f13662e3dc926327c82e24 extends \Twig\Template
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
        echo "<div class=\"hero-area\">
    <div class=\"hero-slideshow owl-carousel\">

        <!-- Single Slide -->
        <div class=\"single-slide bg-img\">
            <!-- Background Image-->
            <div class=\"slide-bg-img bg-img bg-overlay\" style=\"background-image: url('";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/1.jpg");
        echo "');\"></div>
            <!-- Welcome Text -->
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-center\">
                    <div class=\"col-12 col-lg-9\">
                        <div class=\"welcome-text text-center\">
                            <h6 data-animation=\"fadeInUp\" data-delay=\"100ms\">2 years interest</h6>
                            <h2 data-animation=\"fadeInUp\" data-delay=\"300ms\">get your <span>loan</span> now</h2>
                            <p data-animation=\"fadeInUp\" data-delay=\"500ms\">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                            <a href=\"#\" class=\"btn credit-btn mt-50\" data-animation=\"fadeInUp\" data-delay=\"700ms\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class=\"slide-du-indicator\"></div>
        </div>

        <!-- Single Slide -->
        <div class=\"single-slide bg-img\">
            <!-- Background Image-->
            <div class=\"slide-bg-img bg-img bg-overlay\" style=\"background-image: url('";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/5.jpg");
        echo "');\"></div>
            <!-- Welcome Text -->
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-center\">
                    <div class=\"col-12 col-lg-9\">
                        <div class=\"welcome-text text-center\">
                            <h6 data-animation=\"fadeInDown\" data-delay=\"100ms\">2 years interest</h6>
                            <h2 data-animation=\"fadeInDown\" data-delay=\"300ms\">get your <span>loan</span> now</h2>
                            <p data-animation=\"fadeInDown\" data-delay=\"500ms\">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                            <a href=\"#\" class=\"btn credit-btn mt-50\" data-animation=\"fadeInDown\" data-delay=\"700ms\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class=\"slide-du-indicator\"></div>
        </div>

       
       
        <!-- Single Slide -->
        <div class=\"single-slide bg-img\">
            <!-- Background Image-->
            <div class=\"slide-bg-img bg-img bg-overlay\" style=\"background-image: url('";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/4.jpg");
        echo "');\"></div>
            <!-- Welcome Text -->
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-center\">
                    <div class=\"col-12 col-lg-9\">
                        <div class=\"welcome-text text-center\">
                            <h6 data-animation=\"fadeInDown\" data-delay=\"100ms\">2 years interest</h6>
                            <h2 data-animation=\"fadeInDown\" data-delay=\"300ms\">get your <span>loan</span> now</h2>
                            <p data-animation=\"fadeInDown\" data-delay=\"500ms\">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                            <a href=\"#\" class=\"btn credit-btn mt-50\" data-animation=\"fadeInDown\" data-delay=\"700ms\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class=\"slide-du-indicator\"></div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 51,  69 => 28,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero-area\">
    <div class=\"hero-slideshow owl-carousel\">

        <!-- Single Slide -->
        <div class=\"single-slide bg-img\">
            <!-- Background Image-->
            <div class=\"slide-bg-img bg-img bg-overlay\" style=\"background-image: url('{{'assets/img/bg-img/1.jpg' |theme}}');\"></div>
            <!-- Welcome Text -->
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-center\">
                    <div class=\"col-12 col-lg-9\">
                        <div class=\"welcome-text text-center\">
                            <h6 data-animation=\"fadeInUp\" data-delay=\"100ms\">2 years interest</h6>
                            <h2 data-animation=\"fadeInUp\" data-delay=\"300ms\">get your <span>loan</span> now</h2>
                            <p data-animation=\"fadeInUp\" data-delay=\"500ms\">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                            <a href=\"#\" class=\"btn credit-btn mt-50\" data-animation=\"fadeInUp\" data-delay=\"700ms\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class=\"slide-du-indicator\"></div>
        </div>

        <!-- Single Slide -->
        <div class=\"single-slide bg-img\">
            <!-- Background Image-->
            <div class=\"slide-bg-img bg-img bg-overlay\" style=\"background-image: url('{{'assets/img/bg-img/5.jpg' |theme}}');\"></div>
            <!-- Welcome Text -->
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-center\">
                    <div class=\"col-12 col-lg-9\">
                        <div class=\"welcome-text text-center\">
                            <h6 data-animation=\"fadeInDown\" data-delay=\"100ms\">2 years interest</h6>
                            <h2 data-animation=\"fadeInDown\" data-delay=\"300ms\">get your <span>loan</span> now</h2>
                            <p data-animation=\"fadeInDown\" data-delay=\"500ms\">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                            <a href=\"#\" class=\"btn credit-btn mt-50\" data-animation=\"fadeInDown\" data-delay=\"700ms\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class=\"slide-du-indicator\"></div>
        </div>

       
       
        <!-- Single Slide -->
        <div class=\"single-slide bg-img\">
            <!-- Background Image-->
            <div class=\"slide-bg-img bg-img bg-overlay\" style=\"background-image: url('{{'assets/img/bg-img/4.jpg' |theme}}');\"></div>
            <!-- Welcome Text -->
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-center\">
                    <div class=\"col-12 col-lg-9\">
                        <div class=\"welcome-text text-center\">
                            <h6 data-animation=\"fadeInDown\" data-delay=\"100ms\">2 years interest</h6>
                            <h2 data-animation=\"fadeInDown\" data-delay=\"300ms\">get your <span>loan</span> now</h2>
                            <p data-animation=\"fadeInDown\" data-delay=\"500ms\">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                            <a href=\"#\" class=\"btn credit-btn mt-50\" data-animation=\"fadeInDown\" data-delay=\"700ms\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class=\"slide-du-indicator\"></div>
        </div>

    </div>
</div>", "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/hero.htm", "");
    }
}
