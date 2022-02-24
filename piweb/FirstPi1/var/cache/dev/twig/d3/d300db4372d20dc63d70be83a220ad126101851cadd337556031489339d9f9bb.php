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

/* shop/shop.html.twig */
class __TwigTemplate_2b8f82418cb63ff6b94bf358cc9c989a2cb6dcdd3d6d8f975ddde1e3145e5d83 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/shop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/shop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop/shop.html.twig", 1);
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
\t\t\t\t\t    <body>
        <!-- Navigation-->
        <div class=\"header-area header-transparent\">
            <div class=\"main-header header-sticky\">
                <div class=\"container-fluid\">
                    <div class=\"menu-wrapper d-flex align-items-center justify-content-between\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"../../index.html\"><img src=\"../../assets/img/logo/LOGO.png\" alt=\"\"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class=\"main-menu f-right d-none d-lg-block\">
                            <nav>

                                <ul id=\"navigation\">
                                    <li>
                                        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\">Courses</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\">Product</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\">Event</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                                    </li>
                                    <li>
                                        <a href=\"\">
                                            <i class=\"bi-cart-fill me-1\"></i>
                                </ul>
                                </li>
                            </nav>
                        </div class=\"d-flex\">          
                        <!-- Header-btn -->
                        <div>
                       <div class=\"header-btns d-none d-lg-block f-right\">
                           <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"btn\">LOGIN</a>
                       </div>
                        <div class=\"header-btns d-none d-lg-block f-right px-4\">  
                            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\" class=\"btn\">SIGN UP</a>
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
        <!-- <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container px-4 px-lg-5\">
                <a class=\"navbar-brand\" href=\"#!\">Start Bootstrap</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                        <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"#!\">Home</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#!\">About</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Shop</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#!\">All Products</a></li>
                                <li><hr class=\"dropdown-divider\" /></li>
                                <li><a class=\"dropdown-item\" href=\"#!\">Popular Items</a></li>
                                <li><a class=\"dropdown-item\" href=\"#!\">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"d-flex\">
                        <button class=\"btn btn-outline-dark\" type=\"submit\">
                            <i class=\"bi-cart-fill me-1\"></i>
                            Cart
                            <span class=\"badge bg-dark text-white ms-1 rounded-pill\">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav> -->
        <!-- Header-->
        <header class=\"bg-dark py-5\">
            <div class=\"container px-4 px-lg-5 my-5\">
                <div class=\"text-center text-white\">
                    <h1 class=\"display-4 fw-bolder\"></h1>
                    <p class=\"lead fw-normal text-white-50 mb-0\"></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class=\"py-5\">
            <div class=\"container px-4 px-lg-5 mt-5\">
                <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center\">
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Fancy Product</h5>
                                    <!-- Product price-->
                                    \$40.00 - \$80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">View options</a></div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$20.00</span>
                                    \$18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$50.00</span>
                                    \$25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    \$40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$50.00</span>
                                    \$25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Fancy Product</h5>
                                    <!-- Product price-->
                                    \$120.00 - \$280.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">View options</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$20.00</span>
                                    \$18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    \$40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
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
                                        <a href=\"index.html\"><img src=\"../../assets/img/logo/LOGO.png\" alt=\"\"></a>
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
        // line 347
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
        // line 350
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
        // line 353
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\">Courses</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
        // line 356
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\">Product</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
        // line 359
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheEvenementsPublic");
        echo "\">Event</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
        // line 362
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
        // line 365
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
        <!-- <footer class=\"py-5 bg-dark\">
            <div class=\"container\"><p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2021</p></div>
        </footer> -->
        <!-- Bootstrap core JS-->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 365,  471 => 362,  465 => 359,  459 => 356,  453 => 353,  447 => 350,  441 => 347,  144 => 53,  138 => 50,  123 => 38,  117 => 35,  111 => 32,  105 => 29,  99 => 26,  93 => 23,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{%block body%}

\t\t\t\t\t    <body>
        <!-- Navigation-->
        <div class=\"header-area header-transparent\">
            <div class=\"main-header header-sticky\">
                <div class=\"container-fluid\">
                    <div class=\"menu-wrapper d-flex align-items-center justify-content-between\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"../../index.html\"><img src=\"../../assets/img/logo/LOGO.png\" alt=\"\"></a>
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
                        </div class=\"d-flex\">          
                        <!-- Header-btn -->
                        <div>
                       <div class=\"header-btns d-none d-lg-block f-right\">
                           <a href=\"{{ path('login') }}\" class=\"btn\">LOGIN</a>
                       </div>
                        <div class=\"header-btns d-none d-lg-block f-right px-4\">  
                            <a href=\"{{ path('signup') }}\" class=\"btn\">SIGN UP</a>
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
        <!-- <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container px-4 px-lg-5\">
                <a class=\"navbar-brand\" href=\"#!\">Start Bootstrap</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                        <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"#!\">Home</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#!\">About</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Shop</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#!\">All Products</a></li>
                                <li><hr class=\"dropdown-divider\" /></li>
                                <li><a class=\"dropdown-item\" href=\"#!\">Popular Items</a></li>
                                <li><a class=\"dropdown-item\" href=\"#!\">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"d-flex\">
                        <button class=\"btn btn-outline-dark\" type=\"submit\">
                            <i class=\"bi-cart-fill me-1\"></i>
                            Cart
                            <span class=\"badge bg-dark text-white ms-1 rounded-pill\">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav> -->
        <!-- Header-->
        <header class=\"bg-dark py-5\">
            <div class=\"container px-4 px-lg-5 my-5\">
                <div class=\"text-center text-white\">
                    <h1 class=\"display-4 fw-bolder\"></h1>
                    <p class=\"lead fw-normal text-white-50 mb-0\"></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class=\"py-5\">
            <div class=\"container px-4 px-lg-5 mt-5\">
                <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center\">
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Fancy Product</h5>
                                    <!-- Product price-->
                                    \$40.00 - \$80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">View options</a></div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$20.00</span>
                                    \$18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$50.00</span>
                                    \$25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    \$40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$50.00</span>
                                    \$25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Fancy Product</h5>
                                    <!-- Product price-->
                                    \$120.00 - \$280.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">View options</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$20.00</span>
                                    \$18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class=\"col mb-5\">
                        <a href=\"item.html\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    \$40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
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
                                        <a href=\"index.html\"><img src=\"../../assets/img/logo/LOGO.png\" alt=\"\"></a>
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
        <!-- <footer class=\"py-5 bg-dark\">
            <div class=\"container\"><p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2021</p></div>
        </footer> -->
        <!-- Bootstrap core JS-->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
    </body>
{%endblock%}
", "shop/shop.html.twig", "C:\\xampp\\htdocs\\piweb\\FirstPi1\\templates\\shop\\shop.html.twig");
    }
}
