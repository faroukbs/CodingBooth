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

/* base.html.twig */
class __TwigTemplate_d9877dd0e39f1521ed25d99cd653a789ad8ce762d5b34cf60fe62d78287c101d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 17
        echo "  ";
        $this->displayBlock('header', $context, $blocks);
        // line 85
        echo "<body>
";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "</body>
";
        // line 89
        $this->displayBlock('footer', $context, $blocks);
        // line 172
        echo "<!-- Scroll Up -->
<div id=\"back-top\">
    <a title=\"Go to Top\" href=\"#\">
        <i class=\"fas fa-level-up-alt\"></i>
    </a>
</div>
";
        // line 178
        $this->displayBlock('js', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/slicknav.css\">
    <link rel=\"stylesheet\" href=\"assets/css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"assets/css/gijgo.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animated-headline.css\">
    <link rel=\"stylesheet\" href=\"assets/css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome-all.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"assets/css/slick.css\">
    <link rel=\"stylesheet\" href=\"assets/css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "<header>

    <!-- Header Start -->
    <div class=\"header-area  black-bg\">
            <div class=\"container-fluid\">
                <div
                        class=\"menu-wrapper d-flex align-items-center justify-content-between\">
                    <!-- Logo -->
                    <div class=\"logo\">
                        <a href=\"index.html\"><img src=\"assets/img/logo/LOGO.png\" alt=\"\"></a>
                    </div>

                    ";
        // line 30
        $this->displayBlock('nav', $context, $blocks);
        // line 65
        echo "                    <!-- Header-btn -->
                    <div class=\"d-flex\">
                        <div class=\"header-btns d-none d-lg-block f-right\">
                            <a href=\"#\" class=\"btn\">LOGIN</a>
                        </div>
                        <div class=\"header-btns d-none d-lg-block f-right px-4\">
                            <a href=\"#\" class=\"btn\">SIGN UP</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 31
        echo "                        <div class=\"main-menu f-right d-none d-lg-block\">

                            <nav>

                                <ul id=\"navigation\">
                                    <li>
                                        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\">Courses</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\">Product</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\">Event</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                                    </li>
                                    <li>
                                        <a href=\"\">
                                            <i class=\"bi-cart-fill me-1\"></i>
                                </ul>
                                </li>
                            </nav>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 90
        echo "    <footer>
        <!--? Footer Start-->
        <div class=\"footer-area black-bg\">
            <div class=\"container\">
                <div class=\"footer-top footer-padding\">
                    <!-- Footer Menu -->
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"single-footer-caption mb-50 text-center\">
                                <!-- logo -->
                                <div class=\"footer-logo wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                                    <a href=\"index.html\"><img src=\"assets/img/logo/LOGO.png\" alt=\"\"></a>
                                </div>
                                <!-- Menu -->
                                <!-- Header Start -->
                                <div class=\"header-area main-header2 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".4s\">
                                    <div class=\"main-header main-header2\">
                                        <div class=\"menu-wrapper menu-wrapper2\">
                                            <!-- Main-menu -->
                                            <div class=\"main-menu main-menu2 text-center\">
                                                <nav>

                                                    <ul id=\"navigation\">
                                                        <li>
                                                            <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\">Courses</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\">Product</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\">Event</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"\">
                                                                <i class=\"bi-cart-fill me-1\"></i>
                                                    </ul>
                                                    </li>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header End -->
                                <!-- social -->
                                <div class=\"footer-social mt-30 wow fadeInUp\" data-wow-duration=\"3s\" data-wow-delay=\".8s\">
                                    <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"https://bit.ly/sai4ull\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-pinterest-p\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class=\"footer-bottom\">
                    <div class=\"row d-flex align-items-center\">
                        <div class=\"col-lg-12\">
                            <div class=\"footer-copy-right text-center\">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 178
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 179
        echo "    <!-- JS here -->

    <script src=\"./assets/js/vendor/modernizr-3.5.0.min.js\"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src=\"./assets/js/vendor/jquery-1.12.4.min.js\"></script>
    <script src=\"./assets/js/popper.min.js\"></script>
    <script src=\"./assets/js/bootstrap.min.js\"></script>
    <!-- Jquery Mobile Menu -->
    <script src=\"./assets/js/jquery.slicknav.min.js\"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src=\"./assets/js/owl.carousel.min.js\"></script>
    <script src=\"./assets/js/slick.min.js\"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src=\"./assets/js/wow.min.js\"></script>
    <script src=\"./assets/js/animated.headline.js\"></script>
    <script src=\"./assets/js/jquery.magnific-popup.js\"></script>

    <!-- Date Picker -->
    <script src=\"./assets/js/gijgo.min.js\"></script>
    <!-- Nice-select, sticky -->
    <script src=\"./assets/js/jquery.nice-select.min.js\"></script>
    <script src=\"./assets/js/jquery.sticky.js\"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src=\"./assets/js/jquery.counterup.min.js\"></script>
    <script src=\"./assets/js/waypoints.min.js\"></script>
    <script src=\"./assets/js/jquery.countdown.min.js\"></script>
    <script src=\"./assets/js/hover-direction-snake.min.js\"></script>

    <!-- contact js -->
    <script src=\"./assets/js/contact.js\"></script>
    <script src=\"./assets/js/jquery.form.js\"></script>
    <script src=\"./assets/js/jquery.validate.min.js\"></script>
    <script src=\"./assets/js/mail-script.js\"></script>
    <script src=\"./assets/js/jquery.ajaxchimp.min.js\"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src=\"./assets/js/plugins.js\"></script>
    <script src=\"./assets/js/main.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  395 => 179,  385 => 178,  335 => 132,  329 => 129,  323 => 126,  317 => 123,  311 => 120,  305 => 117,  299 => 114,  273 => 90,  263 => 89,  245 => 86,  225 => 55,  219 => 52,  213 => 49,  207 => 46,  201 => 43,  195 => 40,  189 => 37,  181 => 31,  171 => 30,  142 => 65,  140 => 30,  126 => 18,  116 => 17,  92 => 2,  82 => 1,  72 => 178,  64 => 172,  62 => 89,  59 => 88,  57 => 86,  54 => 85,  51 => 17,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%block css%}
    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/slicknav.css\">
    <link rel=\"stylesheet\" href=\"assets/css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"assets/css/gijgo.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animated-headline.css\">
    <link rel=\"stylesheet\" href=\"assets/css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome-all.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"assets/css/slick.css\">
    <link rel=\"stylesheet\" href=\"assets/css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
{% endblock %}
  {%block header%}
<header>

    <!-- Header Start -->
    <div class=\"header-area  black-bg\">
            <div class=\"container-fluid\">
                <div
                        class=\"menu-wrapper d-flex align-items-center justify-content-between\">
                    <!-- Logo -->
                    <div class=\"logo\">
                        <a href=\"index.html\"><img src=\"assets/img/logo/LOGO.png\" alt=\"\"></a>
                    </div>

                    {% block nav%}
                        <div class=\"main-menu f-right d-none d-lg-block\">

                            <nav>

                                <ul id=\"navigation\">
                                    <li>
                                        <a href=\"{{ path('home') }}\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('shop') }}\">Shop</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('course') }}\">Courses</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('produit') }}\">Product</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('AfficheEvenementsPublic') }}\">Event</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('contact') }}\">Contact</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('shop') }}\">Shop</a>
                                    </li>
                                    <li>
                                        <a href=\"\">
                                            <i class=\"bi-cart-fill me-1\"></i>
                                </ul>
                                </li>
                            </nav>
                        </div>
                    {%endblock%}
                    <!-- Header-btn -->
                    <div class=\"d-flex\">
                        <div class=\"header-btns d-none d-lg-block f-right\">
                            <a href=\"#\" class=\"btn\">LOGIN</a>
                        </div>
                        <div class=\"header-btns d-none d-lg-block f-right px-4\">
                            <a href=\"#\" class=\"btn\">SIGN UP</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
{% endblock %}
<body>
{% block body %}
{% endblock  %}
</body>
{% block footer %}
    <footer>
        <!--? Footer Start-->
        <div class=\"footer-area black-bg\">
            <div class=\"container\">
                <div class=\"footer-top footer-padding\">
                    <!-- Footer Menu -->
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"single-footer-caption mb-50 text-center\">
                                <!-- logo -->
                                <div class=\"footer-logo wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                                    <a href=\"index.html\"><img src=\"assets/img/logo/LOGO.png\" alt=\"\"></a>
                                </div>
                                <!-- Menu -->
                                <!-- Header Start -->
                                <div class=\"header-area main-header2 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".4s\">
                                    <div class=\"main-header main-header2\">
                                        <div class=\"menu-wrapper menu-wrapper2\">
                                            <!-- Main-menu -->
                                            <div class=\"main-menu main-menu2 text-center\">
                                                <nav>

                                                    <ul id=\"navigation\">
                                                        <li>
                                                            <a href=\"{{ path('home') }}\">Home</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"{{ path('shop') }}\">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"{{ path('course') }}\">Courses</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"{{ path('produit') }}\">Product</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"{{ path('AfficheEvenementsPublic') }}\">Event</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"{{ path('contact') }}\">Contact</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"{{ path('contact') }}\">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"\">
                                                                <i class=\"bi-cart-fill me-1\"></i>
                                                    </ul>
                                                    </li>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header End -->
                                <!-- social -->
                                <div class=\"footer-social mt-30 wow fadeInUp\" data-wow-duration=\"3s\" data-wow-delay=\".8s\">
                                    <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"https://bit.ly/sai4ull\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-pinterest-p\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class=\"footer-bottom\">
                    <div class=\"row d-flex align-items-center\">
                        <div class=\"col-lg-12\">
                            <div class=\"footer-copy-right text-center\">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
{% endblock %}
<!-- Scroll Up -->
<div id=\"back-top\">
    <a title=\"Go to Top\" href=\"#\">
        <i class=\"fas fa-level-up-alt\"></i>
    </a>
</div>
{%block js%}
    <!-- JS here -->

    <script src=\"./assets/js/vendor/modernizr-3.5.0.min.js\"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src=\"./assets/js/vendor/jquery-1.12.4.min.js\"></script>
    <script src=\"./assets/js/popper.min.js\"></script>
    <script src=\"./assets/js/bootstrap.min.js\"></script>
    <!-- Jquery Mobile Menu -->
    <script src=\"./assets/js/jquery.slicknav.min.js\"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src=\"./assets/js/owl.carousel.min.js\"></script>
    <script src=\"./assets/js/slick.min.js\"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src=\"./assets/js/wow.min.js\"></script>
    <script src=\"./assets/js/animated.headline.js\"></script>
    <script src=\"./assets/js/jquery.magnific-popup.js\"></script>

    <!-- Date Picker -->
    <script src=\"./assets/js/gijgo.min.js\"></script>
    <!-- Nice-select, sticky -->
    <script src=\"./assets/js/jquery.nice-select.min.js\"></script>
    <script src=\"./assets/js/jquery.sticky.js\"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src=\"./assets/js/jquery.counterup.min.js\"></script>
    <script src=\"./assets/js/waypoints.min.js\"></script>
    <script src=\"./assets/js/jquery.countdown.min.js\"></script>
    <script src=\"./assets/js/hover-direction-snake.min.js\"></script>

    <!-- contact js -->
    <script src=\"./assets/js/contact.js\"></script>
    <script src=\"./assets/js/jquery.form.js\"></script>
    <script src=\"./assets/js/jquery.validate.min.js\"></script>
    <script src=\"./assets/js/mail-script.js\"></script>
    <script src=\"./assets/js/jquery.ajaxchimp.min.js\"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src=\"./assets/js/plugins.js\"></script>
    <script src=\"./assets/js/main.js\"></script>
{%endblock%}
", "base.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\base.html.twig");
    }
}
