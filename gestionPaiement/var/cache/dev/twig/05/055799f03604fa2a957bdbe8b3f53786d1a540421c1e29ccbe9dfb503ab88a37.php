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
class __TwigTemplate_83ff07ec1f349f990d55766951d8aaa86c84ba31cbfa98c82fcd6dce12b1b679 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "

    </head>
    <body>
    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class=\"\">
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\"><h2>Travel Agency <em>Website</em></h2></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"index.html\">Home
                                <span class=\"sr-only\">(current)</span>
                            </a>
                        </li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"packages.html\">Packages</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"blog.html\">Blog</a></li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">More</a>

                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"about-us.html\">About Us</a>
                                <a class=\"dropdown-item\" href=\"testimonials.html\">Testimonials</a>
                                <a class=\"dropdown-item\" href=\"terms.html\">Terms</a>
                            </div>
                        </li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class=\"banner header-text\">
        <div class=\"owl-banner owl-carousel\">
            <div class=\"banner-item-01\">
                <div class=\"text-content\">
                    <h4>Find your car today!</h4>
                    <h2>Lorem ipsum dolor sit amet</h2>
                </div>
            </div>
            <div class=\"banner-item-02\">
                <div class=\"text-content\">
                    <h4>Fugiat Aspernatur</h4>
                    <h2>Laboriosam reprehenderit ducimus</h2>
                </div>
            </div>
            <div class=\"banner-item-03\">
                <div class=\"text-content\">
                    <h4>Saepe Omnis</h4>
                    <h2>Quaerat suscipit unde minus dicta</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class=\"latest-products\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>Featured Vacations</h2>
                        <a href=\"packages.html\">view more <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"product-item\">
                        <a href=\"package-details.html\"><img src=\"assets/images/product-1-370x270.jpg\" alt=\"\"></a>
                        <div class=\"down-content\">
                            <a href=\"package-details.html\"><h4>Limelight Lodge</h4></a>

                            <h6>\$300 - \$400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title=\"Available\"><i class=\"fa fa-calendar\"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Nights\"><i class=\"fa fa-cube\"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Flight included\"><i class=\"fa fa-plane\"></i> Flight included</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"product-item\">
                        <a href=\"package-details.html\"><img src=\"assets/images/product-2-370x270.jpg\" alt=\"\"></a>
                        <div class=\"down-content\">
                            <a href=\"package-details.html\"><h4>Limelight Lodge</h4></a>

                            <h6>\$300 - \$400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title=\"Available\"><i class=\"fa fa-calendar\"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Nights\"><i class=\"fa fa-cube\"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Flight included\"><i class=\"fa fa-plane\"></i> Flight included</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"product-item\">
                        <a href=\"package-details.html\"><img src=\"assets/images/product-3-370x270.jpg\" alt=\"\"></a>
                        <div class=\"down-content\">
                            <a href=\"package-details.html\"><h4>Limelight Lodge</h4></a>

                            <h6>\$300 - \$400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title=\"Available\"><i class=\"fa fa-calendar\"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Nights\"><i class=\"fa fa-cube\"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Flight included\"><i class=\"fa fa-plane\"></i> Flight included</strong>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"best-features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"left-content\">
                        <p>Lorem ipsum dolor sit amet, <a href=\"#\">consectetur</a> adipisicing elit. Explicabo, esse consequatur alias repellat in excepturi inventore ad <a href=\"#\">asperiores</a> tempora ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta.</p>
                        <ul class=\"featured-list\">
                            <li><a href=\"#\">Lorem ipsum dolor sit amet</a></li>
                            <li><a href=\"#\">Consectetur an adipisicing elit</a></li>
                            <li><a href=\"#\">It aquecorporis nulla aspernatur</a></li>
                            <li><a href=\"#\">Corporis, omnis doloremque</a></li>
                        </ul>
                        <a href=\"about-us.html\" class=\"filled-button\">Read More</a>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"right-image\">
                        <img src=\"assets/images/about-1-570x350.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"services\" style=\"background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>Latest blog posts</h2>

                        <a href=\"blog.html\">read more <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item\">
                        <a href=\"#\" class=\"services-item-image\"><img src=\"assets/images/blog-1-370x270.jpg\" class=\"img-fluid\" alt=\"\"></a>

                        <div class=\"down-content\">
                            <h4><a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

                            <p style=\"margin: 0;\"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item\">
                        <a href=\"#\" class=\"services-item-image\"><img src=\"assets/images/blog-2-370x270.jpg\" class=\"img-fluid\" alt=\"\"></a>

                        <div class=\"down-content\">
                            <h4><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                            <p style=\"margin: 0;\"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item\">
                        <a href=\"#\" class=\"services-item-image\"><img src=\"assets/images/blog-3-370x270.jpg\" class=\"img-fluid\" alt=\"\"></a>

                        <div class=\"down-content\">
                            <h4><a href=\"#\">Aperiam modi voluptatum fuga officiis cumque</a></h4>

                            <p style=\"margin: 0;\"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"happy-clients\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>Happy Clients</h2>

                        <a href=\"testimonials.html\">read more <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-12\">
                    <div class=\"owl-clients owl-carousel text-center\">
                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>John Doe</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>Jane Smith</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>Antony Davis</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>John Doe</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>Jane Smith</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>Antony Davis</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"call-to-action\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"inner-content\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                            </div>
                            <div class=\"col-lg-4 col-md-6 text-right\">
                                <a href=\"contact.html\" class=\"filled-button\">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"inner-content\">
                        <p>Copyright © 2020 Company Name - Template by: <a href=\"https://www.phpjabbers.com/\">PHPJabbers.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        ";
        // line 349
        $this->displayBlock('body', $context, $blocks);
        // line 350
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 360
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <!-- Bootstrap core CSS -->
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            ";
        // line 12
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./commande/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./commande/assets/css/owl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./commande/assets/css/fontawesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 349
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

    // line 350
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 351
        echo "            <!-- Bootstrap core JavaScript -->
            <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>


            <!-- Additional Scripts -->
            <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.js"), "html", null, true);
        echo "\"></script>
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
        return array (  515 => 358,  511 => 357,  504 => 353,  500 => 352,  497 => 351,  487 => 350,  469 => 349,  457 => 14,  453 => 13,  448 => 12,  444 => 10,  441 => 9,  431 => 8,  412 => 5,  400 => 360,  397 => 350,  395 => 349,  60 => 16,  57 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            <!-- Bootstrap core CSS -->
            <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
            {#{{ encore_entry_link_tags('app') }}#}
            <link href=\"{{ asset('./commande/assets/css/style.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('./commande/assets/css/owl.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('./commande/assets/css/fontawesome.css') }}\" rel=\"stylesheet\" />
        {% endblock %}


    </head>
    <body>
    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class=\"\">
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\"><h2>Travel Agency <em>Website</em></h2></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"index.html\">Home
                                <span class=\"sr-only\">(current)</span>
                            </a>
                        </li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"packages.html\">Packages</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"blog.html\">Blog</a></li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">More</a>

                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"about-us.html\">About Us</a>
                                <a class=\"dropdown-item\" href=\"testimonials.html\">Testimonials</a>
                                <a class=\"dropdown-item\" href=\"terms.html\">Terms</a>
                            </div>
                        </li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class=\"banner header-text\">
        <div class=\"owl-banner owl-carousel\">
            <div class=\"banner-item-01\">
                <div class=\"text-content\">
                    <h4>Find your car today!</h4>
                    <h2>Lorem ipsum dolor sit amet</h2>
                </div>
            </div>
            <div class=\"banner-item-02\">
                <div class=\"text-content\">
                    <h4>Fugiat Aspernatur</h4>
                    <h2>Laboriosam reprehenderit ducimus</h2>
                </div>
            </div>
            <div class=\"banner-item-03\">
                <div class=\"text-content\">
                    <h4>Saepe Omnis</h4>
                    <h2>Quaerat suscipit unde minus dicta</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class=\"latest-products\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>Featured Vacations</h2>
                        <a href=\"packages.html\">view more <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"product-item\">
                        <a href=\"package-details.html\"><img src=\"assets/images/product-1-370x270.jpg\" alt=\"\"></a>
                        <div class=\"down-content\">
                            <a href=\"package-details.html\"><h4>Limelight Lodge</h4></a>

                            <h6>\$300 - \$400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title=\"Available\"><i class=\"fa fa-calendar\"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Nights\"><i class=\"fa fa-cube\"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Flight included\"><i class=\"fa fa-plane\"></i> Flight included</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"product-item\">
                        <a href=\"package-details.html\"><img src=\"assets/images/product-2-370x270.jpg\" alt=\"\"></a>
                        <div class=\"down-content\">
                            <a href=\"package-details.html\"><h4>Limelight Lodge</h4></a>

                            <h6>\$300 - \$400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title=\"Available\"><i class=\"fa fa-calendar\"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Nights\"><i class=\"fa fa-cube\"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Flight included\"><i class=\"fa fa-plane\"></i> Flight included</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"product-item\">
                        <a href=\"package-details.html\"><img src=\"assets/images/product-3-370x270.jpg\" alt=\"\"></a>
                        <div class=\"down-content\">
                            <a href=\"package-details.html\"><h4>Limelight Lodge</h4></a>

                            <h6>\$300 - \$400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title=\"Available\"><i class=\"fa fa-calendar\"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Nights\"><i class=\"fa fa-cube\"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title=\"Flight included\"><i class=\"fa fa-plane\"></i> Flight included</strong>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"best-features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"left-content\">
                        <p>Lorem ipsum dolor sit amet, <a href=\"#\">consectetur</a> adipisicing elit. Explicabo, esse consequatur alias repellat in excepturi inventore ad <a href=\"#\">asperiores</a> tempora ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta.</p>
                        <ul class=\"featured-list\">
                            <li><a href=\"#\">Lorem ipsum dolor sit amet</a></li>
                            <li><a href=\"#\">Consectetur an adipisicing elit</a></li>
                            <li><a href=\"#\">It aquecorporis nulla aspernatur</a></li>
                            <li><a href=\"#\">Corporis, omnis doloremque</a></li>
                        </ul>
                        <a href=\"about-us.html\" class=\"filled-button\">Read More</a>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"right-image\">
                        <img src=\"assets/images/about-1-570x350.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"services\" style=\"background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>Latest blog posts</h2>

                        <a href=\"blog.html\">read more <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item\">
                        <a href=\"#\" class=\"services-item-image\"><img src=\"assets/images/blog-1-370x270.jpg\" class=\"img-fluid\" alt=\"\"></a>

                        <div class=\"down-content\">
                            <h4><a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

                            <p style=\"margin: 0;\"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item\">
                        <a href=\"#\" class=\"services-item-image\"><img src=\"assets/images/blog-2-370x270.jpg\" class=\"img-fluid\" alt=\"\"></a>

                        <div class=\"down-content\">
                            <h4><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                            <p style=\"margin: 0;\"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item\">
                        <a href=\"#\" class=\"services-item-image\"><img src=\"assets/images/blog-3-370x270.jpg\" class=\"img-fluid\" alt=\"\"></a>

                        <div class=\"down-content\">
                            <h4><a href=\"#\">Aperiam modi voluptatum fuga officiis cumque</a></h4>

                            <p style=\"margin: 0;\"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"happy-clients\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>Happy Clients</h2>

                        <a href=\"testimonials.html\">read more <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-12\">
                    <div class=\"owl-clients owl-carousel text-center\">
                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>John Doe</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>Jane Smith</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>Antony Davis</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>John Doe</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>Jane Smith</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>

                        <div class=\"service-item\">
                            <div class=\"icon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"down-content\">
                                <h4>Antony Davis</h4>
                                <p class=\"n-m\"><em>\"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.\"</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"call-to-action\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"inner-content\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                            </div>
                            <div class=\"col-lg-4 col-md-6 text-right\">
                                <a href=\"contact.html\" class=\"filled-button\">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"inner-content\">
                        <p>Copyright © 2020 Company Name - Template by: <a href=\"https://www.phpjabbers.com/\">PHPJabbers.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <!-- Bootstrap core JavaScript -->
            <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>


            <!-- Additional Scripts -->
            <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
            <script src=\"{{ asset('assets/js/owl.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Utilisateur\\Desktop\\projetphp\\gestionPaiement\\templates\\base.html.twig");
    }
}
