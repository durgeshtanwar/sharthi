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

/* G:\wamp64\www\sharthi/themes/sharthi/partials/call_2.htm */
class __TwigTemplate_eaadecd5b6b863ae43445c134b565da3feb57e3ef4a574b38df00dc1df36136d extends \Twig\Template
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
 <section class=\"cta-2-area wow fadeInUp\" data-wow-delay=\"100ms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content d-flex flex-wrap align-items-center justify-content-between\">
                    <div class=\"cta-text\">
                        <h4>Are you in need for a load? Get in touch with us.</h4>
                    </div>
                    <div class=\"cta-btn\">
                        <a href=\"#\" class=\"btn credit-btn box-shadow\">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Call To Action End ###### -->";
    }

    public function getTemplateName()
    {
        return "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/call_2.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ##### Call To Action Start ###### -->
 <section class=\"cta-2-area wow fadeInUp\" data-wow-delay=\"100ms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content d-flex flex-wrap align-items-center justify-content-between\">
                    <div class=\"cta-text\">
                        <h4>Are you in need for a load? Get in touch with us.</h4>
                    </div>
                    <div class=\"cta-btn\">
                        <a href=\"#\" class=\"btn credit-btn box-shadow\">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Call To Action End ###### -->", "G:\\wamp64\\www\\sharthi/themes/sharthi/partials/call_2.htm", "");
    }
}
