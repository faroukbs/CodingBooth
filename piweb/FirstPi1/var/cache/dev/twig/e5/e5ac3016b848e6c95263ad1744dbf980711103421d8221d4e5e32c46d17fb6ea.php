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

/* ticket/ticket.html.twig */
class __TwigTemplate_885dd495951f2410a62c896cedaf5b6db522ccb60fdf316c697ab3c588149b96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/ticket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/ticket.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig ", "ticket/ticket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container p-3 my-4 border\">

        <div id=\"tmpmodal\"></div>
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 9
            echo "
                <div class=\"col-md-3\">
                    <div class=\"border border\">

                        <div  ><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "idticket", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["t"], "image", [], "any", false, false, false, 14))), "html", null, true);
            echo "\" alt=\"  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "image", [], "any", false, false, false, 14), "html", null, true);
            echo "\" style=\"height: 250px;width: 270px;margin-bottom: +10%\" class=\"rounded\" alt=\"Cinque Terre\" ></a></div>
                        <div class=\"card-footer\" style=\"margin-top: -10%\">
                            <h3 class=\"text-danger\" id=\"exampleModalCenterTitle\">Nom: ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "description", [], "any", false, false, false, 16), "html", null, true);
            echo "</h3>
                            <h4 class=\"text-black\" id=\"exampleModalCenterTitle\">Description:";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "typeticket", [], "any", false, false, false, 17), "html", null, true);
            echo "</h4>
                            <h4 class=\"text-black\" id=\"exampleModalCenterTitle\">Prix:";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "prix", [], "any", false, false, false, 18), "html", null, true);
            echo "</h4>
                            <a href=\"#\"> <button type=\"button\" class=\"btn btn-outline-danger\" ><font size=\"3pt\" >";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add TO CART", [], "messages");
            echo "</font></button></a>
                        </div>        <!-- Modal -->
                    </div>
                    <div class=\"modal fade\" id=\"myModalchoose\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">


                                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["t"], "image", [], "any", false, false, false, 27))), "html", null, true);
            echo "\"style=\"height: 5px;width: 5px;margin-bottom: +10%\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">

                                <p>descriptio</p>


                            </div>

                        </div>
                    </div>
                </div>        <div class=\"modal-header\">


            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ticket/ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  119 => 27,  108 => 19,  104 => 18,  100 => 17,  96 => 16,  89 => 14,  85 => 13,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig '%}
{% block body %}

    <div class=\"container p-3 my-4 border\">

        <div id=\"tmpmodal\"></div>
        <div class=\"row\">
            {% for t in ticket %}

                <div class=\"col-md-3\">
                    <div class=\"border border\">

                        <div  ><a href=\"{{ path('ticket',{'id': t.idticket}) }}\">
                                <img src=\"{{ asset('images/'~t.image) }}\" alt=\"  {{ t.image }}\" style=\"height: 250px;width: 270px;margin-bottom: +10%\" class=\"rounded\" alt=\"Cinque Terre\" ></a></div>
                        <div class=\"card-footer\" style=\"margin-top: -10%\">
                            <h3 class=\"text-danger\" id=\"exampleModalCenterTitle\">Nom: {{ t.description }}</h3>
                            <h4 class=\"text-black\" id=\"exampleModalCenterTitle\">Description:{{ t.typeticket }}</h4>
                            <h4 class=\"text-black\" id=\"exampleModalCenterTitle\">Prix:{{ t.prix }}</h4>
                            <a href=\"#\"> <button type=\"button\" class=\"btn btn-outline-danger\" ><font size=\"3pt\" >{% trans %}Add TO CART{% endtrans %}</font></button></a>
                        </div>        <!-- Modal -->
                    </div>
                    <div class=\"modal fade\" id=\"myModalchoose\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">


                                <img src=\"{{ asset('images/'~t.image) }}\"style=\"height: 5px;width: 5px;margin-bottom: +10%\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">

                                <p>descriptio</p>


                            </div>

                        </div>
                    </div>
                </div>        <div class=\"modal-header\">


            </div>

            {% endfor %}
        </div>
    </div>

{% endblock %}", "ticket/ticket.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\ticket\\ticket.html.twig");
    }
}
