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

/* ticket/affiche.html.twig */
class __TwigTemplate_7e4452ba0932baad5d609774432c35f59794bc5037c299ffbc46a755c9339986 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/affiche.html.twig"));

        $this->parent = $this->loadTemplate("base-back/admin.html.twig", "ticket/affiche.html.twig", 1);
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

                            <h5>la liste des ticket</h5>
                            <div>
                                <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addticket");
        echo "\"> <button type=\"button\" class=\"btn btn-outline-danger\"
                                    ><font size=\"3pt\" >";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajout", [], "messages");
        echo "</font></button></a>

                            </div>
             ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "                 <div class=\"alert alert-success\">
                     ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

                 </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "             ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [0 => "info1"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "                 <div class=\"alert alert-warning\">
                     ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

                 </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "             ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [0 => "info2"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "                 <div class=\"alert alert-danger\">
                     ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

                 </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            <table   border=\"1\" class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>type</th>
                                    <th>description</th>
                                    <th>prix</th>
                                    <th>Idevent</th>
                                    <th>image</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 42
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "idticket", [], "any", false, false, false, 44), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "typeticket", [], "any", false, false, false, 47), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "prix", [], "any", false, false, false, 50), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "description", [], "any", false, false, false, 53), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "idevent", [], "any", false, false, false, 56), "html", null, true);
            echo "
                                        </td>

                                        <td>

                                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticketAdmin", ["idticket" => twig_get_attribute($this->env, $this->source, $context["t"], "idticket", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["t"], "image", [], "any", false, false, false, 62))), "html", null, true);
            echo "\" alt=\"  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "image", [], "any", false, false, false, 62), "html", null, true);
            echo "\" width=\"80\" height=\"80\"></a></td>
                                        <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modt", ["idticket" => twig_get_attribute($this->env, $this->source, $context["t"], "idticket", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn btn-outline-warning\"><font size=\"3pt\">";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "messages");
            echo "</font></button></a></td>
                                        <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerticket", ["idticket" => twig_get_attribute($this->env, $this->source, $context["t"], "idticket", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn btn-outline-danger\"><font size=\"3pt\">";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete", [], "messages");
            echo "</font></button></a></td>

                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                </tbody>
                            </table>


                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ticket/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 71,  213 => 66,  209 => 65,  205 => 64,  201 => 63,  195 => 62,  191 => 61,  183 => 56,  177 => 53,  171 => 50,  165 => 47,  159 => 44,  155 => 42,  151 => 41,  137 => 29,  127 => 25,  124 => 24,  119 => 23,  109 => 19,  106 => 18,  101 => 17,  91 => 13,  88 => 12,  84 => 11,  78 => 8,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back/admin.html.twig' %}
         {% block body %}


                            <h5>la liste des ticket</h5>
                            <div>
                                <a href=\"{{ path('addticket') }}\"> <button type=\"button\" class=\"btn btn-outline-danger\"
                                    ><font size=\"3pt\" >{% trans %}Ajout{% endtrans %}</font></button></a>

                            </div>
             {%  for message in app.flashes ('info') %}
                 <div class=\"alert alert-success\">
                     {{ message }}

                 </div>
             {% endfor %}
             {%  for message in app.flashes ('info1') %}
                 <div class=\"alert alert-warning\">
                     {{ message }}

                 </div>
             {% endfor %}
             {%  for message in app.flashes ('info2') %}
                 <div class=\"alert alert-danger\">
                     {{ message }}

                 </div>
             {% endfor %}
                            <table   border=\"1\" class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>type</th>
                                    <th>description</th>
                                    <th>prix</th>
                                    <th>Idevent</th>
                                    <th>image</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for t in ticket %}
                                    <tr>
                                        <td>
                                            {{ t.idticket }}
                                        </td>
                                        <td>
                                            {{ t.typeticket }}
                                        </td>
                                        <td>
                                            {{ t.prix }}
                                        </td>
                                        <td>
                                            {{ t.description}}
                                        </td>
                                        <td>
                                            {{ t.idevent }}
                                        </td>

                                        <td>

                                            <a href=\"{{ path('ticketAdmin',{'idticket': t.idticket}) }}\">
                                                <img src=\"{{ asset('images/'~t.image) }}\" alt=\"  {{ t.image }}\" width=\"80\" height=\"80\"></a></td>
                                        <td><a href=\"{{ path('modt',{'idticket': t.idticket}) }}\">
                                                <button type=\"button\" class=\"btn btn-outline-warning\"><font size=\"3pt\">{% trans %}Update{% endtrans %}</font></button></a></td>
                                        <td><a href=\"{{ path('supprimerticket',{'idticket': t.idticket}) }}\">
                                                <button type=\"button\" class=\"btn btn-outline-danger\"><font size=\"3pt\">{% trans %}delete{% endtrans %}</font></button></a></td>

                                    </tr>

                                {%endfor%}
                                </tbody>
                            </table>


                        </div>
                    {% endblock %}



", "ticket/affiche.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\ticket\\affiche.html.twig");
    }
}
