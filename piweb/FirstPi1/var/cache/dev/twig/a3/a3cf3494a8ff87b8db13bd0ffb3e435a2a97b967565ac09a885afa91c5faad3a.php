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

/* eventl/Affichepublic.html.twig */
class __TwigTemplate_7fc2b8dd39a61387d7bcbc55200642f1435cec93a29eb6533e9f41ab23657d35 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventl/Affichepublic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventl/Affichepublic.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig ", "eventl/Affichepublic.html.twig", 1);
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
    <div class=\"container p-3 my-3 border\">

        <div id=\"tmpmodal\"></div>
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 9
            echo "
                <div class=\"col-md-3\">
                    <div class=\"border border\">

                        <div  ><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_list", ["idevent" => twig_get_attribute($this->env, $this->source, $context["e"], "idevent", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["e"], "photo", [], "any", false, false, false, 14))), "html", null, true);
            echo "\" alt=\"  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "photo", [], "any", false, false, false, 14), "html", null, true);
            echo "\" style=\"height: 250px;width: 270px;margin-bottom: +10%\" class=\"rounded\" alt=\"Cinque Terre\" ></a></div>
                        <div class=\"card-footer\" style=\"margin-top: -10%\">
                            <h3 class=\"text-black\" id=\"exampleModalCenterTitle\">Nom: ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 16), "html", null, true);
            echo "</h3>

<div>

    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailEvent", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "idevent", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-danger\" ><font size=\"3pt\" >";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View details", [], "messages");
            echo "</font></button></a>
</div>
                        </div>        <!-- Modal -->
                    </div>
                    <div class=\"modal fade\" id=\"myModalchoose\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">


                                <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["e"], "photo", [], "any", false, false, false, 29))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "eventl/Affichepublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  117 => 29,  103 => 20,  96 => 16,  89 => 14,  85 => 13,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig '%}
{% block body %}

    <div class=\"container p-3 my-3 border\">

        <div id=\"tmpmodal\"></div>
        <div class=\"row\">
            {% for e in eventl %}

                <div class=\"col-md-3\">
                    <div class=\"border border\">

                        <div  ><a href=\"{{ path('event_list',{'idevent': e.idevent}) }}\">
                                <img src=\"{{ asset('images/'~e.photo) }}\" alt=\"  {{ e.photo }}\" style=\"height: 250px;width: 270px;margin-bottom: +10%\" class=\"rounded\" alt=\"Cinque Terre\" ></a></div>
                        <div class=\"card-footer\" style=\"margin-top: -10%\">
                            <h3 class=\"text-black\" id=\"exampleModalCenterTitle\">Nom: {{ e.titre }}</h3>

<div>

    <a href=\"{{ path('detailEvent',{'id': e.idevent }) }}\"><button type=\"button\" class=\"btn btn-outline-danger\" ><font size=\"3pt\" >{% trans %}View details{% endtrans %}</font></button></a>
</div>
                        </div>        <!-- Modal -->
                    </div>
                    <div class=\"modal fade\" id=\"myModalchoose\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">


                                <img src=\"{{ asset('images/'~e.photo) }}\"style=\"height: 5px;width: 5px;margin-bottom: +10%\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">

                                <p>descriptio</p>


                            </div>

                        </div>
                    </div>
                </div>        <div class=\"modal-header\">


                </div>

            {% endfor %}
        </div>
    </div>

{% endblock %}", "eventl/Affichepublic.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\eventl\\Affichepublic.html.twig");
    }
}
