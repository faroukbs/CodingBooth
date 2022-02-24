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

/* eventl/Affiche.html.twig */
class __TwigTemplate_e741d06eb6e8926fc459f2160b7c6ebee0778d2335ac8fbc5ac9aad2fd5d0c0b extends Template
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
        return "base-back/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventl/Affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventl/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("base-back/admin.html.twig", "eventl/Affiche.html.twig", 1);
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
        echo "<div class=\"container\">
    <h5>list event</h5>
    <div>
        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("r_add");
        echo "\"> <button type=\"button\" class=\"btn btn-outline-danger\"
            ><font size=\"3pt\" >";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajout", [], "messages");
        echo "</font></button></a>

    </div>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "info7"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"alert alert-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "info6"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", [0 => "info5"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    <table   border=\"1\" class=\"table table-hover\">
        <thead>
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>description</th>
            <th>ville</th>
            <th>adresse</th>
            <th>datedebut</th>

            <th>datefin</th>
            <th>heure</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 45
            echo "            <tr>
                <td>
                    ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "idevent", [], "any", false, false, false, 47), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 50), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 53), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "ville", [], "any", false, false, false, 56), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "adresse", [], "any", false, false, false, 59), "html", null, true);
            echo "
                </td>

                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "datedebut", [], "any", false, false, false, 62), "m/d/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "datefin", [], "any", false, false, false, 63), "m/d/Y"), "html", null, true);
            echo "</td>




                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "heure", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>

                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_list", ["idevent" => twig_get_attribute($this->env, $this->source, $context["e"], "idevent", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["e"], "photo", [], "any", false, false, false, 72))), "html", null, true);
            echo "\" alt=\"  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "photo", [], "any", false, false, false, 72), "html", null, true);
            echo "\" width=\"80\" height=\"80\"></a></td>
                <td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del", ["idevent" => twig_get_attribute($this->env, $this->source, $context["e"], "idevent", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\"> <button type=\"button\" class=\"btn btn-outline-danger\"><font size=\"3pt\" >";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "messages");
            echo "</font></button></a>
                </td>
                <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mod", ["idevent" => twig_get_attribute($this->env, $this->source, $context["e"], "idevent", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\"> <button type=\"button\" class=\"btn btn-outline-warning\" ><font size=\"3pt\" >";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "messages");
            echo "</font></button></a>
                </td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </tbody>
    </table>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "eventl/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 80,  227 => 75,  220 => 73,  214 => 72,  210 => 71,  204 => 68,  196 => 63,  192 => 62,  186 => 59,  180 => 56,  174 => 53,  168 => 50,  162 => 47,  158 => 45,  154 => 44,  136 => 28,  126 => 24,  123 => 23,  118 => 22,  108 => 18,  105 => 17,  100 => 16,  90 => 12,  87 => 11,  83 => 10,  77 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back/admin.html.twig' %}
{% block body %}
<div class=\"container\">
    <h5>list event</h5>
    <div>
        <a href=\"{{ path('r_add') }}\"> <button type=\"button\" class=\"btn btn-outline-danger\"
            ><font size=\"3pt\" >{% trans %}Ajout{% endtrans %}</font></button></a>

    </div>
    {%  for message in app.flashes ('info7') %}
        <div class=\"alert alert-success\">
            {{ message }}

        </div>
    {% endfor %}
    {%  for message in app.flashes ('info6') %}
        <div class=\"alert alert-warning\">
            {{ message }}

        </div>
    {% endfor %}
    {%  for message in app.flashes ('info5') %}
        <div class=\"alert alert-danger\">
            {{ message }}

        </div>
    {% endfor %}
    <table   border=\"1\" class=\"table table-hover\">
        <thead>
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>description</th>
            <th>ville</th>
            <th>adresse</th>
            <th>datedebut</th>

            <th>datefin</th>
            <th>heure</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        {% for e in eventl  %}
            <tr>
                <td>
                    {{ e.idevent }}
                </td>
                <td>
                    {{ e.titre }}
                </td>
                <td>
                    {{ e.description }}
                </td>
                <td>
                    {{ e.ville }}
                </td>
                <td>
                    {{ e.adresse }}
                </td>

                <td>{{ e.datedebut |date (\"m/d/Y\")}}</td>
                <td>{{ e.datefin |date (\"m/d/Y\")}}</td>




                <td>{{ e.heure}}</td>
                <td>

                    <a href=\"{{ path('event_list',{'idevent': e.idevent}) }}\">
                        <img src=\"{{ asset('images/'~e.photo) }}\" alt=\"  {{ e.photo }}\" width=\"80\" height=\"80\"></a></td>
                <td><a href=\"{{ path('del',{'idevent': e.idevent}) }}\"> <button type=\"button\" class=\"btn btn-outline-danger\"><font size=\"3pt\" >{% trans %}Delete{% endtrans %}</font></button></a>
                </td>
                <td><a href=\"{{ path('mod',{'idevent': e.idevent}) }}\"> <button type=\"button\" class=\"btn btn-outline-warning\" ><font size=\"3pt\" >{% trans %}Update{% endtrans %}</font></button></a>
                </td>
            </tr>

        {%endfor%}
        </tbody>
    </table>


</div>
{% endblock %}



", "eventl/Affiche.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\eventl\\Affiche.html.twig");
    }
}
