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

/* participation/ajoutParticipation.html.twig */
class __TwigTemplate_6d6f8c094cef3645f0d6461d97486f5c4015041dab700b30bf0aa423bae072bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/ajoutParticipation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/ajoutParticipation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig ", "participation/ajoutParticipation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <header class=\"rt-site-header  rt-fixed-top white-menu\">

                    <div class=\"col-md-6\">
                        <ul class=\"text-center text-md-right top-social\">

                            <li><a href=\" ";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_list");
        echo "\"><i class=\"fas fa-home\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hote Mode", [], "messages");
        echo "</a></li>
                            <li><a href=\"#\" data-target=\"#rtmodal-1\" data-toggle=\"modal\"><i class=\"far fa-user-circle\"></i>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subscribe | Sign in", [], "messages");
        echo "</a></li>
                        </ul>
                    </div><!-- end top header single -->
                </div>
            </div>
        </div> <!-- end top header -->




                            <ul>
                                <li class=\"current-menu-item\"><a href=\" ";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_list");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>


                                <li class=\"menu-item-has-children\"><a href=\"#\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Services", [], "messages");
        echo "</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"#\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rbnb", [], "messages");
        echo "</a></li>
                                        <li><a href=\" ";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events", [], "messages");
        echo "</a></li>


                                    </ul>




    </header>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "


    <div class=\"rt-breadcump rt-breadcump-height\">
        <div class=\"rt-page-bg rtbgprefix-cover\" style=\"\">
        </div><!-- /.rt-page-bg -->
        <div class=\"container\">
            <div class=\"row rt-breadcump-height\">
                <div class=\"col-12\">
                    <div class=\"breadcrumbs-content\">
                        <h3>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events", [], "messages");
        echo "</h3>
                        <div class=\"breadcrumbs\">
                            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                            <a href=\"#\" title=\"Home\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a>
                            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                            <a href=\"#\" title=\"Home\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events", [], "messages");
        echo "</a>


                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.breadcrumbs-content -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.rt-
    <div class=\"rt-breadcump rt-breadcump-height\">
        <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url(assets/images/backgrounds/bredcump.png)\">
        </div>/.rt-page-bg -->

    </form>
    <section class=\"content-area\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"card-description\">


                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 76
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "


                    ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form');
        echo "
                </div>
            </div>
        </div></section>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "participation/ajoutParticipation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 81,  207 => 78,  198 => 76,  194 => 75,  169 => 53,  164 => 51,  158 => 48,  146 => 38,  136 => 37,  113 => 26,  109 => 25,  104 => 23,  96 => 20,  82 => 9,  76 => 8,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig '%}
{% block head %}
    <header class=\"rt-site-header  rt-fixed-top white-menu\">

                    <div class=\"col-md-6\">
                        <ul class=\"text-center text-md-right top-social\">

                            <li><a href=\" {{ path('event_list') }}\"><i class=\"fas fa-home\"></i>{% trans %}Hote Mode{% endtrans %}</a></li>
                            <li><a href=\"#\" data-target=\"#rtmodal-1\" data-toggle=\"modal\"><i class=\"far fa-user-circle\"></i>{% trans %}Subscribe | Sign in {% endtrans %}</a></li>
                        </ul>
                    </div><!-- end top header single -->
                </div>
            </div>
        </div> <!-- end top header -->




                            <ul>
                                <li class=\"current-menu-item\"><a href=\" {{ path('event_list') }}\">{% trans %}Home{% endtrans %}</a></li>


                                <li class=\"menu-item-has-children\"><a href=\"#\">{% trans %}Services{% endtrans %}</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"#\">{% trans %}Rbnb{% endtrans %}</a></li>
                                        <li><a href=\" {{ path('AfficheEvenementsPublic') }}\">{% trans %}Events{% endtrans %}</a></li>


                                    </ul>




    </header>

{% endblock %}
{% block body %}



    <div class=\"rt-breadcump rt-breadcump-height\">
        <div class=\"rt-page-bg rtbgprefix-cover\" style=\"\">
        </div><!-- /.rt-page-bg -->
        <div class=\"container\">
            <div class=\"row rt-breadcump-height\">
                <div class=\"col-12\">
                    <div class=\"breadcrumbs-content\">
                        <h3>{% trans %}Events{% endtrans %}</h3>
                        <div class=\"breadcrumbs\">
                            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                            <a href=\"#\" title=\"Home\">{% trans %}Home{% endtrans %}</a>
                            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                            <a href=\"#\" title=\"Home\">{% trans %}Events{% endtrans %}</a>


                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.breadcrumbs-content -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.rt-
    <div class=\"rt-breadcump rt-breadcump-height\">
        <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url(assets/images/backgrounds/bredcump.png)\">
        </div>/.rt-page-bg -->

    </form>
    <section class=\"content-area\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"card-description\">


                        {% for message in app.flashes('info') %}
                    <div class=\"alert alert-success\">{{ message }}</div>
                    {% endfor %}



                    {{ form(form) }}
                </div>
            </div>
        </div></section>






{% endblock %}
", "participation/ajoutParticipation.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\participation\\ajoutParticipation.html.twig");
    }
}
