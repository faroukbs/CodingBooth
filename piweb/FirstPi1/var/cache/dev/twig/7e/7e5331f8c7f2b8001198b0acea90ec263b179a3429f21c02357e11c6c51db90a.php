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

/* participation/Mesparticipation.html.twig */
class __TwigTemplate_7f86c06f855ca62b0a6535f1410ce5f6fff4695aef8703919ac85e64e644c9fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/Mesparticipation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/Mesparticipation.html.twig"));

        // line 1
        echo "<div class=\"col-xl-9 col-lg-10 mx-auto mt-5 mt-xl-0\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 3
            echo "    <div class=\"row\">


        <div class=\"col-lg-12 col-md-6\">
            <div class=\"flight-list-box rt-mb-30\">
                <div
                        class=\"top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between\">


                    <div class=\"trip\">
                        <label>Idevent : </label>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idevent", [], "any", false, false, false, 13), "html", null, true);
            echo "


                    <div class=\"trip\">
                        <label>Date Participation : </label>
                        ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "dateparticipation", [], "any", false, false, false, 18)), "html", null, true);
            echo "
                    </div><!-- /.col-lg-3 -->




                </div><!-- /.top-content -->
                <div class=\"collapse bottom-content\" id=\"collapseExample\">
                    <p><span>Composition</span></p>

                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "participation/Mesparticipation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  62 => 13,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xl-9 col-lg-10 mx-auto mt-5 mt-xl-0\">
    {% for p in participation %}
    <div class=\"row\">


        <div class=\"col-lg-12 col-md-6\">
            <div class=\"flight-list-box rt-mb-30\">
                <div
                        class=\"top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between\">


                    <div class=\"trip\">
                        <label>Idevent : </label>{{ p.idevent}}


                    <div class=\"trip\">
                        <label>Date Participation : </label>
                        {{p.dateparticipation|date }}
                    </div><!-- /.col-lg-3 -->




                </div><!-- /.top-content -->
                <div class=\"collapse bottom-content\" id=\"collapseExample\">
                    <p><span>Composition</span></p>

                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->

{% endfor %}", "participation/Mesparticipation.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\participation\\Mesparticipation.html.twig");
    }
}
