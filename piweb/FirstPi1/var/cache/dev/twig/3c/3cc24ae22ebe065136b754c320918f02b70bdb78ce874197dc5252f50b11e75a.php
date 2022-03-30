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

/* course/courses.html.twig */
class __TwigTemplate_a70219212179b94fd8ed8dffc5980a80d4dc5c5b67939e05a9f545f644dea978 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/courses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/courses.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/courses.html.twig", 1);
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
        echo "<body class=\"black-bg\">
    <!-- ? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"assets/img/logo/LOGO1.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class=\"header-area header-transparent\">
            <div class=\"main-header header-sticky\">
                <div class=\"container-fluid\">
                    <div class=\"menu-wrapper d-flex align-items-center justify-content-between\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"index.html\"><img src=\"assets/img/logo/logo.png\" alt=\"\"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class=\"main-menu f-right d-none d-lg-block\">
                            <nav>

                                <ul id=\"navigation\">
                                    <li>
                                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\">Courses</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\">Product</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\">Event</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 50
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
                        <!-- Header-btn -->
                       <div class=\"header-btns d-none d-lg-block f-right\">
                           <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"btn\">LOGIN</a>
                       </div>
                        <div class=\"header-btns d-none d-lg-block f-right px-4\">  
                            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\" class=\"btn\">SIGN UP</a>
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
<main>
    <!--? Hero Start -->
    <div class=\"slider-area2\">
        <div class=\"slider-height2 d-flex align-items-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"hero-cap hero-cap2 pt-70\">
                            <h2>Courses</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Team -->
    <section class=\"team-area fix section-padding30\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"section-tittle text-center mb-55\">
                        <h2>What I Offer</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-cat text-center mb-30\">
                        <div class=\"cat-icon\">
                            <img src=\"assets/img/gallery/team1.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Body Building</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-cat text-center mb-30\">
                        <div class=\"cat-icon\">
                            <img src=\"assets/img/gallery/team2.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Muscle Gain</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-cat text-center mb-30\">
                        <div class=\"cat-icon\">
                            <img src=\"assets/img/gallery/team3.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Weight Loss</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!-- Traning categories Start -->
    <section class=\"traning-categories black-bg\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"single-topic text-center mb-30\">
                        <div class=\"topic-img\">
                            <img src=\"assets/img/gallery/cat1.png\" alt=\"\">
                            <div class=\"topic-content-box\">
                                <div class=\"topic-content\">
                                    <h3>Personal traning</h3>
                                    <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                    <a href=\"courses.html\" class=\"border-btn\">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"single-topic text-center mb-30\">
                        <div class=\"topic-img\">
                            <img src=\"assets/img/gallery/cat2.png\" alt=\"\">
                            <div class=\"topic-content-box\">
                                <div class=\"topic-content\">
                                    <h3>Group traning</h3>
                                    <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                    <a href=\"courses.html\" class=\"btn\">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traning categories End-->
    <!--? video_start -->
    <div class=\"video-area section-bg2 d-flex align-items-center\"  data-background=\"assets/img/gallery/video-bg.png\">
        <div class=\"container\">
            <div class=\"video-wrap position-relative\">
                <div class=\"video-icon\" >
                    <a class=\"popup-video btn-icon\" href=\"https://www.youtube.com/watch?v=up68UAfH0d0\"><i class=\"fas fa-play\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- video_end -->
    <!-- ? services-area -->
    <section class=\"services-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-8\">
                    <div class=\"single-services mb-40\">
                        <div class=\"features-icon\">
                            <img src=\"assets/img/icon/icon1.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <h3>Location</h3>
                            <p>You’ll look at graphs and charts in Task One, how to approach </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">
                    <div class=\"single-services mb-40\">
                        <div class=\"features-icon\">
                            <img src=\"assets/img/icon/icon2.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <h3>Phone</h3>
                            <p>(90) 277 278 2566</p>
                            <p>  (78) 267 256 2578</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">
                    <div class=\"single-services mb-40\">
                        <div class=\"features-icon\">
                            <img src=\"assets/img/icon/icon3.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <h3>Email</h3>
                            <p>jacson767@gmail.com</p>
                            <p>contact56@zacsion.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
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
                                                        <a href=\"";
        // line 254
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
        // line 257
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\">Courses</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
        // line 263
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\">Product</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
        // line 266
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\">Event</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
        // line 269
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
        // line 272
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

          </div>
      </div>
      <!-- Footer End-->
  </footer>

   
  <!-- Scroll Up -->
  <div id=\"back-top\" >
    <a title=\"Go to Top\" href=\"#\"> <i class=\"fas fa-level-up-alt\"></i></a>
</div>

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

<!-- Jquery Plugins, main Jquery -->\t
<script src=\"./assets/js/plugins.js\"></script>
<script src=\"./assets/js/main.js\"></script>

</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "course/courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 272,  378 => 269,  372 => 266,  366 => 263,  360 => 260,  354 => 257,  348 => 254,  155 => 64,  149 => 61,  135 => 50,  129 => 47,  123 => 44,  117 => 41,  111 => 38,  105 => 35,  99 => 32,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{%block body%}
<body class=\"black-bg\">
    <!-- ? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"assets/img/logo/LOGO1.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class=\"header-area header-transparent\">
            <div class=\"main-header header-sticky\">
                <div class=\"container-fluid\">
                    <div class=\"menu-wrapper d-flex align-items-center justify-content-between\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"index.html\"><img src=\"assets/img/logo/logo.png\" alt=\"\"></a>
                        </div>
                        <!-- Main-menu -->
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
                        <!-- Header-btn -->
                       <div class=\"header-btns d-none d-lg-block f-right\">
                           <a href=\"{{ path('login') }}\" class=\"btn\">LOGIN</a>
                       </div>
                        <div class=\"header-btns d-none d-lg-block f-right px-4\">  
                            <a href=\"{{ path('signup') }}\" class=\"btn\">SIGN UP</a>
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
<main>
    <!--? Hero Start -->
    <div class=\"slider-area2\">
        <div class=\"slider-height2 d-flex align-items-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"hero-cap hero-cap2 pt-70\">
                            <h2>Courses</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Team -->
    <section class=\"team-area fix section-padding30\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"section-tittle text-center mb-55\">
                        <h2>What I Offer</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-cat text-center mb-30\">
                        <div class=\"cat-icon\">
                            <img src=\"assets/img/gallery/team1.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Body Building</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-cat text-center mb-30\">
                        <div class=\"cat-icon\">
                            <img src=\"assets/img/gallery/team2.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Muscle Gain</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-cat text-center mb-30\">
                        <div class=\"cat-icon\">
                            <img src=\"assets/img/gallery/team3.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Weight Loss</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!-- Traning categories Start -->
    <section class=\"traning-categories black-bg\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"single-topic text-center mb-30\">
                        <div class=\"topic-img\">
                            <img src=\"assets/img/gallery/cat1.png\" alt=\"\">
                            <div class=\"topic-content-box\">
                                <div class=\"topic-content\">
                                    <h3>Personal traning</h3>
                                    <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                    <a href=\"courses.html\" class=\"border-btn\">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"single-topic text-center mb-30\">
                        <div class=\"topic-img\">
                            <img src=\"assets/img/gallery/cat2.png\" alt=\"\">
                            <div class=\"topic-content-box\">
                                <div class=\"topic-content\">
                                    <h3>Group traning</h3>
                                    <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                    <a href=\"courses.html\" class=\"btn\">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traning categories End-->
    <!--? video_start -->
    <div class=\"video-area section-bg2 d-flex align-items-center\"  data-background=\"assets/img/gallery/video-bg.png\">
        <div class=\"container\">
            <div class=\"video-wrap position-relative\">
                <div class=\"video-icon\" >
                    <a class=\"popup-video btn-icon\" href=\"https://www.youtube.com/watch?v=up68UAfH0d0\"><i class=\"fas fa-play\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- video_end -->
    <!-- ? services-area -->
    <section class=\"services-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-8\">
                    <div class=\"single-services mb-40\">
                        <div class=\"features-icon\">
                            <img src=\"assets/img/icon/icon1.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <h3>Location</h3>
                            <p>You’ll look at graphs and charts in Task One, how to approach </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">
                    <div class=\"single-services mb-40\">
                        <div class=\"features-icon\">
                            <img src=\"assets/img/icon/icon2.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <h3>Phone</h3>
                            <p>(90) 277 278 2566</p>
                            <p>  (78) 267 256 2578</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">
                    <div class=\"single-services mb-40\">
                        <div class=\"features-icon\">
                            <img src=\"assets/img/icon/icon3.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <h3>Email</h3>
                            <p>jacson767@gmail.com</p>
                            <p>contact56@zacsion.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
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
                                                        <a href=\"{{ path('shop') }}\">Shop</a>
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

          </div>
      </div>
      <!-- Footer End-->
  </footer>

   
  <!-- Scroll Up -->
  <div id=\"back-top\" >
    <a title=\"Go to Top\" href=\"#\"> <i class=\"fas fa-level-up-alt\"></i></a>
</div>

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

<!-- Jquery Plugins, main Jquery -->\t
<script src=\"./assets/js/plugins.js\"></script>
<script src=\"./assets/js/main.js\"></script>

</body>
{%endblock%}", "course/courses.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\course\\courses.html.twig");
    }
}