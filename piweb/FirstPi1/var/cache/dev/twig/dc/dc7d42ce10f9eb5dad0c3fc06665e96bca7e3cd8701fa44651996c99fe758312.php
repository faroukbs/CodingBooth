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

/* participation/afficheParticipation.html.twig */
class __TwigTemplate_9fbb2c368175a5521892c2509dfb5508be4bb71f6dc164ccf0ea964545b2d9e5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/afficheParticipation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/afficheParticipation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig ", "participation/afficheParticipation.html.twig", 1);
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
        <div class=\"top-header d-none d-md-block\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <ul class=\"text-center text-md-left top-message\">
                            <li> <i class=\"icofont-headphone-alt\"></i>Infoline</li>
                            <li><a href=\"mailto:info@emigrar.com \"><i class=\"icofont-email\"></i>info@emigrar.com</a></li>
                        </ul>
                    </div><!-- end top header single -->
                    <div class=\"col-md-6\">
                        <ul class=\"text-center text-md-right top-social\">

                            <li><a href=\" ";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\"><i class=\"fas fa-home\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hote Mode", [], "messages");
        echo "</a></li>
                            <li><a href=\"#\" data-target=\"#rtmodal-1\" data-toggle=\"modal\"><i class=\"far fa-user-circle\"></i>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subscribe | Sign in", [], "messages");
        echo "</a></li>
                        </ul>
                    </div><!-- end top header single -->
                </div>
            </div>
        </div> <!-- end top header -->






                                <li class=\"current-menu-item\"><a href=\" ";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_list");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>




                                    <ul class=\"sub-menu\">
                                        <li><a href=\"#\">";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rbnb", [], "messages");
        echo "</a></li>
                                        <li><a href=\" ";
        // line 36
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

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "


    <div class=\"rt-breadcump rt-breadcump-height\">
        <div class=\"rt-page-bg rtbgprefix-cover\" style=\"\">
        </div><!-- /.rt-page-bg -->
        <div class=\"container\">
            <div class=\"row rt-breadcump-height\">
                <div class=\"col-12\">
                    <div class=\"breadcrumbs-content\">
                        <h3>";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events", [], "messages");
        echo "</h3>
                        <div class=\"breadcrumbs\">
                            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                            <a href=\"#\" title=\"Home\">";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a>
                            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                            <a href=\"#\" title=\"Home\">";
        // line 62
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
        </div> /.rt-page-bg -->

    </form>
    <section class=\"content-area\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"card-description\">


                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 85
            echo "                            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "

                        <div class=\"table-responsive\" width=\"10%\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>

                                    <th>Identifiant de la participation</th>
                                    <th>Identifiant de l'événement</th>
                                    <th>Identifiant du participant</th>

                                    <th>";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "messages");
        echo "</th>
                                    <th>";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "messages");
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo ">
                                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idparticipation", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                                    <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idEvent", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                                    <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "iduser", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierP", ["idparticipation" => twig_get_attribute($this->env, $this->source, $context["p"], "idparticipation", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\">
                                            <button type=\"button\" class=\"btn btn-outline-warning\"><font size=\"3pt\">";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "messages");
            echo "</font></button></a></td>
                                    <td><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerP", ["idparticipation" => twig_get_attribute($this->env, $this->source, $context["p"], "idparticipation", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\">
                                            <button type=\"button\" class=\"btn btn-outline-danger\"><font size=\"3pt\">";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "messages");
            echo "</font></button></a></td>
                                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo ">

                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div></section>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "participation/afficheParticipation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 111,  267 => 110,  263 => 109,  259 => 108,  255 => 107,  251 => 106,  247 => 105,  243 => 104,  237 => 103,  230 => 99,  226 => 98,  213 => 87,  204 => 85,  200 => 84,  175 => 62,  170 => 60,  164 => 57,  152 => 47,  142 => 46,  120 => 36,  116 => 35,  105 => 29,  90 => 17,  84 => 16,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig '%}
{% block head %}
    <header class=\"rt-site-header  rt-fixed-top white-menu\">
        <div class=\"top-header d-none d-md-block\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <ul class=\"text-center text-md-left top-message\">
                            <li> <i class=\"icofont-headphone-alt\"></i>Infoline</li>
                            <li><a href=\"mailto:info@emigrar.com \"><i class=\"icofont-email\"></i>info@emigrar.com</a></li>
                        </ul>
                    </div><!-- end top header single -->
                    <div class=\"col-md-6\">
                        <ul class=\"text-center text-md-right top-social\">

                            <li><a href=\" {{ path('AfficheEvenementsPublic') }}\"><i class=\"fas fa-home\"></i>{% trans %}Hote Mode{% endtrans %}</a></li>
                            <li><a href=\"#\" data-target=\"#rtmodal-1\" data-toggle=\"modal\"><i class=\"far fa-user-circle\"></i>{% trans %}Subscribe | Sign in {% endtrans %}</a></li>
                        </ul>
                    </div><!-- end top header single -->
                </div>
            </div>
        </div> <!-- end top header -->






                                <li class=\"current-menu-item\"><a href=\" {{ path('event_list') }}\">{% trans %}Home{% endtrans %}</a></li>




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
        </div> /.rt-page-bg -->

    </form>
    <section class=\"content-area\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"card-description\">


                        {% for message in app.flashes('info') %}
                            <div class=\"alert alert-success\">{{ message }}</div>
                        {% endfor %}


                        <div class=\"table-responsive\" width=\"10%\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>

                                    <th>Identifiant de la participation</th>
                                    <th>Identifiant de l'événement</th>
                                    <th>Identifiant du participant</th>

                                    <th>{% trans %}Update{% endtrans %}</th>
                                    <th>{% trans %}Delete{% endtrans %}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr {% for p in participation %}>
                                    <td>{{ p.idparticipation }}</td>
                                    <td>{{ p.idEvent }}</td>
                                    <td>{{ p.iduser }}</td>
                                    <td><a href=\"{{ path('modifierP',{'idparticipation': p.idparticipation}) }}\">
                                            <button type=\"button\" class=\"btn btn-outline-warning\"><font size=\"3pt\">{% trans %}Update{% endtrans %}</font></button></a></td>
                                    <td><a href=\"{{ path('supprimerP',{'idparticipation': p.idparticipation}) }}\">
                                            <button type=\"button\" class=\"btn btn-outline-danger\"><font size=\"3pt\">{% trans %}Delete{% endtrans %}</font></button></a></td>
                                </tr {% endfor %}>

                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div></section>






{% endblock %}", "participation/afficheParticipation.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\participation\\afficheParticipation.html.twig");
    }
}
