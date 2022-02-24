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

/* front/base-front.html.twig  */
class __TwigTemplate_83c63d1d080c2eb485e27fbcddf6f83ddc89c3fae21d39174d13b5372d800870 extends Template
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
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'nav' => [$this, 'block_nav'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base-front.html.twig "));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base-front.html.twig "));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Gym trainer | Template
    </title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"manifest\" href=\"site.webmanifest\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\">
    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "</head>
";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 777
        echo "</html>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 13
        echo "        <!-- CSS here -->
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

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "    <body
            class=\"black-bg\">
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
    ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 114
        echo "    <main>
        <!--? slider Area Start-->
        <div class=\"slider-area position-relative\">
            <div
                    class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height d-flex align-items-center\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-9 col-lg-9 col-md-10\">
                                <div class=\"hero__caption\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.1s\">Hi This is  GO GYM</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.4s\">Gym Trainer</h1>
                                    <a href=\"courses.html\" class=\"border-btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.8s\">My Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
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
                                        <p>You’ll look at graphs and charts in Task One, how to approach the task and
                                            <br>
                                            the language needed for a successful answer.</p>
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
                                        <p>You’ll look at graphs and charts in Task One, how to approach the task and
                                            <br>
                                            the language needed for a successful answer.</p>
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
        <!--? Team -->
        <section class=\"team-area fix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"section-tittle text-center mb-55 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                            <h2>What I Offer</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-cat text-center mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                            <div class=\"cat-icon\">
                                <img src=\"assets/img/gallery/team1.png\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5>
                                    <a href=\"services.html\">Body Building</a>
                                </h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-cat text-center mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                            <div class=\"cat-icon\">
                                <img src=\"assets/img/gallery/team2.png\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5>
                                    <a href=\"services.html\">Muscle Gain</a>
                                </h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-cat text-center mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".6s\">
                            <div class=\"cat-icon\">
                                <img src=\"assets/img/gallery/team3.png\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5>
                                    <a href=\"services.html\">Weight Loss</a>
                                </h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->


        <!--? Gallery Area Start -->
        <div class=\"gallery-area section-padding30 \">
            <div class=\"container-fluid \">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery1.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery2.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery3.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery4.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery5.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery6.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!-- Courses area start -->
        <section class=\"pricing-area section-padding40 fix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"section-tittle text-center mb-55 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".1s\">
                            <h2>Pricing</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"properties mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                            <div class=\"properties__card\">
                                <div class=\"about-icon\">
                                    <img src=\"assets/img/icon/price.svg\" alt=\"\">
                                </div>
                                <div class=\"properties__caption\">
                                    <span class=\"month\">3 month</span>
                                    <p class=\"mb-25\">300TND
                                        <span>(Single class)</span>
                                    </p>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Free riding
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Unlimited equipments</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Personal trainer</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Weight losing classes</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features mb-20\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Month to mouth</p>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"border-btn border-btn2\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"properties mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                            <div class=\"properties__card\">
                                <div class=\"about-icon\">
                                    <img src=\"assets/img/icon/price.svg\" alt=\"\">
                                </div>
                                <div class=\"properties__caption\">
                                    <span class=\"month\">6 month</span>
                                    <p class=\"mb-25\">600TND
                                        <span>(Single class)</span>
                                    </p>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Free riding
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Unlimited equipments</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Personal trainer</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Weight losing classes</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features mb-20\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Month to mouth</p>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"border-btn border-btn2\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"properties mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".6s\">
                            <div class=\"properties__card\">
                                <div class=\"about-icon\">
                                    <img src=\"assets/img/icon/price.svg\" alt=\"\">
                                </div>
                                <div class=\"properties__caption\">
                                    <span class=\"month\">9 month</span>
                                    <p class=\"mb-25\">900TND
                                        <span>(Single class)</span>
                                    </p>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Free riding
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Unlimited equipments</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Personal trainer</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Weight losing classes</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features mb-20\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Month to mouth</p>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"border-btn border-btn2\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses area End -->
        <!--? About Area-2 Start -->
        <section class=\"about-area2 fix pb-padding pt-50 pb-80\">
            <div class=\"support-wrapper align-items-center\">
                <div
                        class=\"right-content2\">
                    <!-- img -->
                    <div class=\"right-img wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                        <img src=\"assets/img/gallery/about.png\" alt=\"\">
                    </div>
                </div>
                <div
                        class=\"left-content2\">
                    <!-- section tittle -->
                    <div class=\"section-tittle2 mb-20 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                        <div class=\"front-text\">
                            <h2 class=\"\">About Me</h2>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task and the language needed
                                for a successful answer. You’ll examine Task Two questions and learn how to plan, write and
                                check academic essays.</p>
                            <p class=\"mb-40\">Task One, how to approach the task and the language needed for a successful answer. You’ll
                                examine Task Two questions and learn how to plan, write and check academic essays.</p>
                            <a href=\"courses.html\" class=\"border-btn\">My Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Blog Area Start -->
        <section class=\"home-blog-area pt-10 pb-50\">
            <div
                    class=\"container\">
                <!-- Section Tittle -->
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-7 col-md-9 col-sm-10\">
                        <div class=\"section-tittle text-center mb-100 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".2s\">
                            <h2>From Blog</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 col-md-6\">
                        <div class=\"home-blog-single mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                            <div class=\"blog-img-cap\">
                                <div class=\"blog-img\">
                                    <img src=\"assets/img/gallery/blog1.png\" alt=\"\">
                                </div>
                                <div class=\"blog-cap\">
                                    <span>Gym & Fitness</span>
                                    <h3>
                                        <a href=\"blog_details.html\">Your Antibiotic One Day To 10 Day Options</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6\">
                        <div class=\"home-blog-single mb-30 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".6s\">
                            <div class=\"blog-img-cap\">
                                <div class=\"blog-img\">
                                    <img src=\"assets/img/gallery/blog2.png\" alt=\"\">
                                </div>
                                <div class=\"blog-cap\">
                                    <span>Gym & Fitness</span>
                                    <h3>
                                        <a href=\"blog_details.html\">Your Antibiotic One Day To 10 Day Options</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!--? video_start -->
        <div class=\"video-area section-bg2 d-flex align-items-center\" data-background=\"assets/img/gallery/video-bg.png\">
            <div class=\"container\">
                <div class=\"video-wrap position-relative\">
                    <div class=\"video-icon\">
                        <a class=\"popup-video btn-icon\" href=\"https://www.youtube.com/watch?v=up68UAfH0d0\">
                            <i class=\"fas fa-play\"></i>
                        </a>
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
                        <div class=\"single-services mb-40 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                            <div class=\"features-icon\">
                                <img src=\"assets/img/icon/icon1.svg\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <h3>Location</h3>
                                <p>You’ll look at graphs and charts in Task One, how to approach
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">
                        <div class=\"single-services mb-40 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                            <div class=\"features-icon\">
                                <img src=\"assets/img/icon/icon2.svg\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <h3>Phone</h3>
                                <p>(90) 277 278 2566</p>
                                <p>
                                    (78) 267 256 2578</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">
                        <div class=\"single-services mb-40 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".4s\">
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
    ";
        // line 646
        $this->displayBlock('footer', $context, $blocks);
        // line 726
        echo "    <!-- Scroll Up -->
    <div id=\"back-top\">
        <a title=\"Go to Top\" href=\"#\">
            <i class=\"fas fa-level-up-alt\"></i>
        </a>
    </div>
    ";
        // line 732
        $this->displayBlock('js', $context, $blocks);
        // line 774
        echo "
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "        <header>

            <!-- Header Start -->
            <div class=\"header-area header-transparent\">
                <div class=\"main-header header-sticky\">
                    <div class=\"container-fluid\">
                        <div
                                class=\"menu-wrapper d-flex align-items-center justify-content-between\">
                            <!-- Logo -->
                            <div class=\"logo\">
                                <a href=\"index.html\"><img src=\"assets/img/logo/LOGO.png\" alt=\"\"></a>
                            </div>
                            <!-- Main-menu -->
                            ";
        // line 58
        $this->displayBlock('nav', $context, $blocks);
        // line 94
        echo "                            <!-- Header-btn -->
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

    // line 58
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 59
        echo "                                <div class=\"main-menu f-right d-none d-lg-block\">

                                    <nav>

                                        <ul id=\"navigation\">
                                            <li>
                                                <a href=\"#\">Home</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">About</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Courses</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Pricing</a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\">Event</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Contact</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Shop</a>
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

    // line 646
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 647
        echo "        <footer>
            <!--? Footer Start-->
            <div class=\"footer-area black-bg\">
                <div class=\"container\">
                    <div
                            class=\"footer-top footer-padding\">
                        <!-- Footer Menu -->
                        <div class=\"row\">
                            <div class=\"col-xl-12\">
                                <div
                                        class=\"single-footer-caption mb-50 text-center\">
                                    <!-- logo -->
                                    <div class=\"footer-logo wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                                        <a href=\"index.html\"><img src=\"assets/img/logo/LOGO.png\" alt=\"\"></a>
                                    </div>
                                    <!-- Menu -->
                                    <!-- Header Start -->
                                    <div class=\"header-area main-header2 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".4s\">
                                        <div class=\"main-header main-header2\">
                                            <div
                                                    class=\"menu-wrapper menu-wrapper2\">
                                                <!-- Main-menu -->
                                                <div class=\"main-menu main-menu2 text-center\">
                                                    <nav>
                                                        <ul id=\"navigation\">
                                                            <li>
                                                                <a href=\"#\">Home</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">About</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">Courses</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"pricing.html\">Pricing</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
        // line 685
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\">Event</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">Contact</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">Shop</a>
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
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                        <a href=\"https://bit.ly/sai4ull\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                        <a href=\"#\">
                                            <i class=\"fab fa-pinterest-p\"></i>
                                        </a>
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
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 732
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 733
        echo "        <!-- JS here -->

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
        return "front/base-front.html.twig ";
    }

    public function getDebugInfo()
    {
        return array (  926 => 733,  916 => 732,  865 => 685,  825 => 647,  815 => 646,  788 => 77,  768 => 59,  758 => 58,  729 => 94,  727 => 58,  712 => 45,  702 => 44,  690 => 774,  688 => 732,  680 => 726,  678 => 646,  144 => 114,  142 => 44,  126 => 30,  116 => 29,  92 => 13,  82 => 12,  69 => 777,  67 => 29,  64 => 28,  62 => 12,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Gym trainer | Template
    </title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"manifest\" href=\"site.webmanifest\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\">
    {%block css%}
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
</head>
{% block body %}
    <body
            class=\"black-bg\">
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
    {%block header%}
        <header>

            <!-- Header Start -->
            <div class=\"header-area header-transparent\">
                <div class=\"main-header header-sticky\">
                    <div class=\"container-fluid\">
                        <div
                                class=\"menu-wrapper d-flex align-items-center justify-content-between\">
                            <!-- Logo -->
                            <div class=\"logo\">
                                <a href=\"index.html\"><img src=\"assets/img/logo/LOGO.png\" alt=\"\"></a>
                            </div>
                            <!-- Main-menu -->
                            {% block nav%}
                                <div class=\"main-menu f-right d-none d-lg-block\">

                                    <nav>

                                        <ul id=\"navigation\">
                                            <li>
                                                <a href=\"#\">Home</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">About</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Courses</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Pricing</a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('AfficheEvenementsPublic') }}\">Event</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Contact</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Shop</a>
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
    {%endblock%}
    <main>
        <!--? slider Area Start-->
        <div class=\"slider-area position-relative\">
            <div
                    class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height d-flex align-items-center\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-9 col-lg-9 col-md-10\">
                                <div class=\"hero__caption\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.1s\">Hi This is  GO GYM</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.4s\">Gym Trainer</h1>
                                    <a href=\"courses.html\" class=\"border-btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.8s\">My Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
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
                                        <p>You’ll look at graphs and charts in Task One, how to approach the task and
                                            <br>
                                            the language needed for a successful answer.</p>
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
                                        <p>You’ll look at graphs and charts in Task One, how to approach the task and
                                            <br>
                                            the language needed for a successful answer.</p>
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
        <!--? Team -->
        <section class=\"team-area fix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"section-tittle text-center mb-55 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                            <h2>What I Offer</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-cat text-center mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                            <div class=\"cat-icon\">
                                <img src=\"assets/img/gallery/team1.png\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5>
                                    <a href=\"services.html\">Body Building</a>
                                </h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-cat text-center mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                            <div class=\"cat-icon\">
                                <img src=\"assets/img/gallery/team2.png\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5>
                                    <a href=\"services.html\">Muscle Gain</a>
                                </h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-cat text-center mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".6s\">
                            <div class=\"cat-icon\">
                                <img src=\"assets/img/gallery/team3.png\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5>
                                    <a href=\"services.html\">Weight Loss</a>
                                </h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->


        <!--? Gallery Area Start -->
        <div class=\"gallery-area section-padding30 \">
            <div class=\"container-fluid \">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery1.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery2.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery3.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery4.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery5.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"box snake mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery6.png);\"></div>
                            <div class=\"overlay\">
                                <div class=\"overlay-content\">
                                    <h3>Muscle gaining
                                    </h3>
                                    <a href=\"gallery.html\">
                                        <i class=\"ti-plus\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!-- Courses area start -->
        <section class=\"pricing-area section-padding40 fix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"section-tittle text-center mb-55 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".1s\">
                            <h2>Pricing</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"properties mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                            <div class=\"properties__card\">
                                <div class=\"about-icon\">
                                    <img src=\"assets/img/icon/price.svg\" alt=\"\">
                                </div>
                                <div class=\"properties__caption\">
                                    <span class=\"month\">3 month</span>
                                    <p class=\"mb-25\">300TND
                                        <span>(Single class)</span>
                                    </p>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Free riding
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Unlimited equipments</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Personal trainer</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Weight losing classes</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features mb-20\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Month to mouth</p>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"border-btn border-btn2\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"properties mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                            <div class=\"properties__card\">
                                <div class=\"about-icon\">
                                    <img src=\"assets/img/icon/price.svg\" alt=\"\">
                                </div>
                                <div class=\"properties__caption\">
                                    <span class=\"month\">6 month</span>
                                    <p class=\"mb-25\">600TND
                                        <span>(Single class)</span>
                                    </p>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Free riding
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Unlimited equipments</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Personal trainer</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Weight losing classes</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features mb-20\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Month to mouth</p>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"border-btn border-btn2\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"properties mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".6s\">
                            <div class=\"properties__card\">
                                <div class=\"about-icon\">
                                    <img src=\"assets/img/icon/price.svg\" alt=\"\">
                                </div>
                                <div class=\"properties__caption\">
                                    <span class=\"month\">9 month</span>
                                    <p class=\"mb-25\">900TND
                                        <span>(Single class)</span>
                                    </p>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Free riding
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Unlimited equipments</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Personal trainer</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Weight losing classes</p>
                                        </div>
                                    </div>
                                    <div class=\"single-features mb-20\">
                                        <div class=\"features-icon\">
                                            <img src=\"assets/img/icon/check.svg\" alt=\"\">
                                        </div>
                                        <div class=\"features-caption\">
                                            <p>Month to mouth</p>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"border-btn border-btn2\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses area End -->
        <!--? About Area-2 Start -->
        <section class=\"about-area2 fix pb-padding pt-50 pb-80\">
            <div class=\"support-wrapper align-items-center\">
                <div
                        class=\"right-content2\">
                    <!-- img -->
                    <div class=\"right-img wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                        <img src=\"assets/img/gallery/about.png\" alt=\"\">
                    </div>
                </div>
                <div
                        class=\"left-content2\">
                    <!-- section tittle -->
                    <div class=\"section-tittle2 mb-20 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                        <div class=\"front-text\">
                            <h2 class=\"\">About Me</h2>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task and the language needed
                                for a successful answer. You’ll examine Task Two questions and learn how to plan, write and
                                check academic essays.</p>
                            <p class=\"mb-40\">Task One, how to approach the task and the language needed for a successful answer. You’ll
                                examine Task Two questions and learn how to plan, write and check academic essays.</p>
                            <a href=\"courses.html\" class=\"border-btn\">My Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Blog Area Start -->
        <section class=\"home-blog-area pt-10 pb-50\">
            <div
                    class=\"container\">
                <!-- Section Tittle -->
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-7 col-md-9 col-sm-10\">
                        <div class=\"section-tittle text-center mb-100 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".2s\">
                            <h2>From Blog</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 col-md-6\">
                        <div class=\"home-blog-single mb-30 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                            <div class=\"blog-img-cap\">
                                <div class=\"blog-img\">
                                    <img src=\"assets/img/gallery/blog1.png\" alt=\"\">
                                </div>
                                <div class=\"blog-cap\">
                                    <span>Gym & Fitness</span>
                                    <h3>
                                        <a href=\"blog_details.html\">Your Antibiotic One Day To 10 Day Options</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6\">
                        <div class=\"home-blog-single mb-30 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".6s\">
                            <div class=\"blog-img-cap\">
                                <div class=\"blog-img\">
                                    <img src=\"assets/img/gallery/blog2.png\" alt=\"\">
                                </div>
                                <div class=\"blog-cap\">
                                    <span>Gym & Fitness</span>
                                    <h3>
                                        <a href=\"blog_details.html\">Your Antibiotic One Day To 10 Day Options</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!--? video_start -->
        <div class=\"video-area section-bg2 d-flex align-items-center\" data-background=\"assets/img/gallery/video-bg.png\">
            <div class=\"container\">
                <div class=\"video-wrap position-relative\">
                    <div class=\"video-icon\">
                        <a class=\"popup-video btn-icon\" href=\"https://www.youtube.com/watch?v=up68UAfH0d0\">
                            <i class=\"fas fa-play\"></i>
                        </a>
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
                        <div class=\"single-services mb-40 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                            <div class=\"features-icon\">
                                <img src=\"assets/img/icon/icon1.svg\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <h3>Location</h3>
                                <p>You’ll look at graphs and charts in Task One, how to approach
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">
                        <div class=\"single-services mb-40 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                            <div class=\"features-icon\">
                                <img src=\"assets/img/icon/icon2.svg\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <h3>Phone</h3>
                                <p>(90) 277 278 2566</p>
                                <p>
                                    (78) 267 256 2578</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">
                        <div class=\"single-services mb-40 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".4s\">
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
    {%block footer%}
        <footer>
            <!--? Footer Start-->
            <div class=\"footer-area black-bg\">
                <div class=\"container\">
                    <div
                            class=\"footer-top footer-padding\">
                        <!-- Footer Menu -->
                        <div class=\"row\">
                            <div class=\"col-xl-12\">
                                <div
                                        class=\"single-footer-caption mb-50 text-center\">
                                    <!-- logo -->
                                    <div class=\"footer-logo wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                                        <a href=\"index.html\"><img src=\"assets/img/logo/LOGO.png\" alt=\"\"></a>
                                    </div>
                                    <!-- Menu -->
                                    <!-- Header Start -->
                                    <div class=\"header-area main-header2 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".4s\">
                                        <div class=\"main-header main-header2\">
                                            <div
                                                    class=\"menu-wrapper menu-wrapper2\">
                                                <!-- Main-menu -->
                                                <div class=\"main-menu main-menu2 text-center\">
                                                    <nav>
                                                        <ul id=\"navigation\">
                                                            <li>
                                                                <a href=\"#\">Home</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">About</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">Courses</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"pricing.html\">Pricing</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"{{ path('AfficheEvenementsPublic')}}\">Event</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">Contact</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">Shop</a>
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
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                        <a href=\"https://bit.ly/sai4ull\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                        <a href=\"#\">
                                            <i class=\"fab fa-pinterest-p\"></i>
                                        </a>
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
    {%endblock%}
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

    </body>
{%endblock%}
</html>
</body>
</html>
", "front/base-front.html.twig ", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\front\\base-front.html.twig");
    }
}
