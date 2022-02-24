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

/* eventl/det.html.twig */
class __TwigTemplate_1b730aacad3f97923c3737e0696fa23fd4c747c46839cfba11a0ffca93333624 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventl/det.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventl/det.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig ", "eventl/det.html.twig", 1);
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
        echo "    <style>
        form{
            margin-top: 60px;
            margin-right: 100px;

        }

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }
        body{
            background-color: rgb(219,226,226);
            border-radius: 30px;
background-color: white;
        }
        .row{


        }
        .button{
            margin-left: 350px;
            margin-top: 60px;
            margin-bottom: 50px;
        }
        .rounded{
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 1000px;
            margin-left: 180px;
            margin-top: 60px;
        }


        .rounded:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);

        }
       photo{
            border-top-left-radius:30px;
            border-bottom: 30px;
            width: 1200px;
            height: 2000px;
        }
       .classform{
           padding: 80px;
           border: 1px solid black;

       }


    </style>

<body >
<div >
<section class=\"form my-4 mx-5\">
    <div class=\"container\">

        <div  class=\"row no-gutters\">
            <div class=\"col-lg-5\">

                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 67, $this->source); })()), "photo", [], "any", false, false, false, 67))), "html", null, true);
        echo "\" alt=\"  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 67, $this->source); })()), "photo", [], "any", false, false, false, 67), "html", null, true);
        echo "\" style=\"height: 250px;width: 270px;margin-bottom: +10%\" class=\"rounded\" alt=\"Cinque Terre\" >

            </div>

            <div class=\"col-lg-7\" >

<form class=\"classform\">
    <div class=\"col-lg-7\">
        <h2 >Nom :  ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 75, $this->source); })()), "titre", [], "any", false, false, false, 75), "html", null, true);
        echo "</h2>
    </div>

        <div class=\"col-lg-7\">
        <h3>  Adresse : ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 79, $this->source); })()), "adresse", [], "any", false, false, false, 79), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"col-lg-7\">
            <h3 class=\"text-danger\" id=\"exampleModalCenterTitle\">Description:";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 83, $this->source); })()), "Description", [], "any", false, false, false, 83), "html", null, true);
        echo "</h3>



        </div>


        <div class=\"col-lg-7\">
            <h3  id=\"exampleModalCenterTitle\" class=\"text-black\">Date : ";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 91, $this->source); })()), "dateDebut", [], "any", false, false, false, 91), "m/d/Y"), "html", null, true);
        echo "</h3>

        </div>
    <div class=\"col-lg-7\">
        <h3  id=\"exampleModalCenterTitle\" class=\"text-black\">Date : ";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 95, $this->source); })()), "datefin", [], "any", false, false, false, 95), "m/d/Y"), "html", null, true);
        echo "</h3>

    </div>
    <div class=\"col-lg-7\">
        <h3 class=\"text-danger\" id=\"exampleModalCenterTitle\">adresse: ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 99, $this->source); })()), "adresse", [], "any", false, false, false, 99), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"col-lg-7\">
        <h3 class=\"text-danger\" id=\"exampleModalCenterTitle\">ville: ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 102, $this->source); })()), "ville", [], "any", false, false, false, 102), "html", null, true);
        echo "</h3>
            </div>
    <div class=\"col-lg-7\">
        <h3 class=\"text-black\" id=\"exampleModalCenterTitle\">Heure: ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 105, $this->source); })()), "heure", [], "any", false, false, false, 105), "html", null, true);
        echo "</h3>
    </div>
</form>

                <div class=\"button\">

                    <a href =\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eventl"]) || array_key_exists("eventl", $context) ? $context["eventl"] : (function () { throw new RuntimeError('Variable "eventl" does not exist.', 111, $this->source); })()), "idevent", [], "any", false, false, false, 111)]), "html", null, true);
        echo "\"> <button type=\"button\" class=\"btn btn-outline-danger\" ><font size=\"3pt\" >";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reserver Ticket", [], "messages");
        echo "</font></button></a>
                </div>

            </div>

        </div>
    </div>


</section>

</div>
</body>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "eventl/det.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 111,  198 => 105,  192 => 102,  186 => 99,  179 => 95,  172 => 91,  161 => 83,  154 => 79,  147 => 75,  134 => 67,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig '%}
{% block body %}
    <style>
        form{
            margin-top: 60px;
            margin-right: 100px;

        }

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }
        body{
            background-color: rgb(219,226,226);
            border-radius: 30px;
background-color: white;
        }
        .row{


        }
        .button{
            margin-left: 350px;
            margin-top: 60px;
            margin-bottom: 50px;
        }
        .rounded{
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 1000px;
            margin-left: 180px;
            margin-top: 60px;
        }


        .rounded:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);

        }
       photo{
            border-top-left-radius:30px;
            border-bottom: 30px;
            width: 1200px;
            height: 2000px;
        }
       .classform{
           padding: 80px;
           border: 1px solid black;

       }


    </style>

<body >
<div >
<section class=\"form my-4 mx-5\">
    <div class=\"container\">

        <div  class=\"row no-gutters\">
            <div class=\"col-lg-5\">

                        <img src=\"{{ asset('images/'~eventl.photo) }}\" alt=\"  {{ eventl.photo }}\" style=\"height: 250px;width: 270px;margin-bottom: +10%\" class=\"rounded\" alt=\"Cinque Terre\" >

            </div>

            <div class=\"col-lg-7\" >

<form class=\"classform\">
    <div class=\"col-lg-7\">
        <h2 >Nom :  {{ eventl.titre }}</h2>
    </div>

        <div class=\"col-lg-7\">
        <h3>  Adresse : {{ eventl.adresse }}</h3>
        </div>

        <div class=\"col-lg-7\">
            <h3 class=\"text-danger\" id=\"exampleModalCenterTitle\">Description:{{ eventl.Description }}</h3>



        </div>


        <div class=\"col-lg-7\">
            <h3  id=\"exampleModalCenterTitle\" class=\"text-black\">Date : {{ eventl.dateDebut | date (\"m/d/Y\")}}</h3>

        </div>
    <div class=\"col-lg-7\">
        <h3  id=\"exampleModalCenterTitle\" class=\"text-black\">Date : {{ eventl.datefin | date (\"m/d/Y\")}}</h3>

    </div>
    <div class=\"col-lg-7\">
        <h3 class=\"text-danger\" id=\"exampleModalCenterTitle\">adresse: {{ eventl.adresse}}</h3>
    </div>
    <div class=\"col-lg-7\">
        <h3 class=\"text-danger\" id=\"exampleModalCenterTitle\">ville: {{ eventl.ville}}</h3>
            </div>
    <div class=\"col-lg-7\">
        <h3 class=\"text-black\" id=\"exampleModalCenterTitle\">Heure: {{ eventl.heure}}</h3>
    </div>
</form>

                <div class=\"button\">

                    <a href =\"{{ path('ticket',{'id': eventl.idevent }) }}\"> <button type=\"button\" class=\"btn btn-outline-danger\" ><font size=\"3pt\" >{% trans %}Reserver Ticket{% endtrans %}</font></button></a>
                </div>

            </div>

        </div>
    </div>


</section>

</div>
</body>


{%endblock%}", "eventl/det.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\eventl\\det.html.twig");
    }
}
