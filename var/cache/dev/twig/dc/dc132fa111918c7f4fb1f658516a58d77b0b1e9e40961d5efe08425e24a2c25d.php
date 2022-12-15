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

/* fornt_page/index.html.twig */
class __TwigTemplate_b48d1419972b6a4a592b5698da6782815f4885548b430226c404b02fa05bb4d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fornt_page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fornt_page/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "</head>

<body>
<header id=\"topnav\" class=\"defaultscroll sticky bg-white nav-sticky\">
    ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 94
        echo "</header><!--end header-->
<!-- Navbar End -->
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 448
        $this->displayBlock('footer', $context, $blocks);
        // line 501
        echo "<hr>

<!-- Back to top -->
<a href=\"#\" class=\"back-to-top rounded text-center\" id=\"back-to-top\">
    <i class=\"mdi mdi-chevron-up d-block\"> </i>
</a>
<!-- Back to top -->
";
        // line 508
        $this->displayBlock('js', $context, $blocks);
        // line 527
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "    <meta charset=\"utf-8\"/>
    <title>
        ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Premium Bootstrap 4 Landing Page Template\"/>
    <meta name=\"keywords\" content=\"bootstrap 4, premium, marketing, multipurpose\"/>
    <meta content=\"Shreethemes\" name=\"author\"/>
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"/images/favicon.ico\">
    <!-- Bootstrap -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Magnific -->
    <link href=\"/css/magnific-popup.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons -->
    <link href=\"/css/materialdesignicons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Main css -->
    <link href=\"/css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"/css/style-rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "صفحه اصلی";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "    <div class=\"container\">
        ";
        // line 33
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "method", false, false, false, 33), null))) {
            // line 34
            echo "            <div class=\"buy-button\">
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login"), "html", null, true);
            echo "\" target=\"_self\" class=\"btn btn-primary\">ورود به سایت</a>
                <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" target=\"_self\" class=\"btn btn-primary \">ثبت نام</a>
            </div>
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "method", false, false, false, 38)) {
            // line 39
            echo "            <div class=\"buy-button\">
                <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashbord");
            echo "\" class=\"btn btn-primary\">داشبورد</a>
                <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"btn btn-primary\">خروج</a>

            </div>
        ";
        }
        // line 45
        echo "        <!-- End Logo container-->
        <div class=\"menu-extras\">
            <div class=\"menu-item\">
                <!-- Mobile menu toggle-->
                <a class=\"navbar-toggle\">
                    <div class=\"lines\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>
        <div id=\"navigation\">
            <!-- Navigation Menu-->
            <ul class=\"navigation-menu\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 63
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "categories", [], "any", false, false, false, 63), null))) {
                // line 64
                echo "                        <li>
                    ";
            } else {
                // line 66
                echo "                        <li class=\"has-submenu\">
                    ";
            }
            // line 68
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_of_article");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "</a><span class=\"menu-arrow\"></span>
                    ";
            // line 69
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "categories", [], "any", false, false, false, 69), null))) {
                // line 70
                echo "                        <ul class=\"submenu\">
                            ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "categories", [], "any", false, false, false, 71));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 72
                    echo "                                ";
                    if ((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 72) % 10), 0))) {
                        // line 73
                        echo "                                    <ul class=\"submenu megamenu\">
                                ";
                    }
                    // line 75
                    echo "                                <li>
                                    <a href=\"";
                    // line 76
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_of_article");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 76), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 76), "html", null, true);
                    echo "</a>
                                </li>
                                ";
                    // line 78
                    if ((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 78) % 10), 0))) {
                        // line 79
                        echo "                                    </ul>
                                ";
                    }
                    // line 81
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                        </ul>
                    ";
            }
            // line 84
            echo "                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </ul><!--end navigation menu-->
            <div class=\"buy-menu-btn d-none\">
                <a href=\"https://www.rtl-theme.com/author/TN_Plugin/?aff=TN_Plugin\" target=\"_blank\"
                   class=\"btn btn-primary\">هم اکنون بخرید</a>
            </div><!--end login button-->
        </div>
    </div><!--end container-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 97
        echo "<!-- Hero Start -->
<section class=\"bg-half-170 border-bottom\" id=\"home\">
    <div class=\"home-center\">
        <div class=\"home-desc-center\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-7\">
                        <div class=\"title-heading mt-4\">
                            <h1 class=\"heading mb-3\">پیشرو کسب و کار دیجیتال برای <span class=\"element text-primary\"
                                                                                        data-elements=\"آژانسی, نرم افزار, تکنولوژی, استدیو, صفحات وب\"></span>
                                ساختن</h1>
                            <p class=\"para-desc text-muted\">کمپین خود را راه اندازی کنید و از تخصص ما در زمینه طراحی و
                                مدیریت تبدیل صفحه محور بوت استرپ و اچ تی ام ال بهره مند شوید.</p>
                            <div class=\"mt-4\">
                                <a href=\"javascript:void(0)\" class=\"btn btn-outline-primary rounded\"><i
                                            class=\"mdi mdi-google-my-business\"></i> فروشگاه خود را درست کنید</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class=\"col-lg-6 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0\">
                        <div class=\"position-relative\">
                            <img src=\"images/busi01.jpg\" class=\"rounded img-fluid mx-auto d-block\" alt=\"\">
                            <div class=\"play-icon\">
                                <a href=\"http://vimeo.com/287684225\" class=\"play-btn video-play-icon\">
                                    <i class=\"mdi mdi-play text-primary rounded-pill bg-white shadow\"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end home desc center-->
    </div><!--end home center-->
</section><!--end section-->
<!-- Hero End -->

<!-- Feature Start -->
<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 text-center\">
                <div class=\"section-title mb-4 pb-2\">
                    <h4 class=\"title mb-4\">چه می کنیم؟</h4>
                    <p class=\"text-muted para-desc mx-auto mb-0\">شروع به کار با <span
                                class=\"text-primary font-weight-bold\">لندریک </span> که می تواند همه چیز را برای ایجاد
                        آگاهی ، ترافیک رانندگی ، اتصال فراهم کند.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class=\"row\">
            <div class=\"col-md-4 col-12\">
                <div class=\"features mt-5\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/pen.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">طراحی و توسعه</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/video.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">مدیریت و بازاریابی</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/intellectual.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">استراتژی و تحقیق</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/user.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">استفاده آسان</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/calendar.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">گزارش های روزانه</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/sand-clock.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">منطقه زمان واقعی</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"home-shape-arrow\">
                <img src=\"images/shapes/arrow-bottom.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
                <a href=\"#cta\" class=\"mouse-down\"><i
                            class=\"mdi mdi-chevron-double-down arrow-icon mover text-dark h5\"></i></a>
            </div>
        </div><!--end row-->
    </div> <!-- END CONTAINER -->
</section><!--end section-->
<!-- End feature -->

<!-- CTA Start -->
<section class=\"bg-cta\" data-jarallax='{\"speed\": 0.5}' style=\"background: url('images/2.jpg');\" id=\"cta\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 text-center\">
                <div class=\"section-title\">
                    <h4 class=\"title text-white mb-4\">توقف پول روی میز را متوقف کنید.</h4>
                    <p class=\"text-light para-desc mx-auto\">شروع به کار با لندریک که می تواند همه چیز را برای ایجاد
                        آگاهی ، ترافیک رانندگی ، اتصال فراهم کند.</p>
                    <a href=\"http://vimeo.com/287684225\" class=\"play-btn border mt-2 video-play-icon\">
                        <i class=\"mdi mdi-play text-white\"></i>
                    </a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- CTA End -->

<!-- Price Start -->
<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 text-center\">
                <div class=\"section-title mb-60\">
                    <h4 class=\"title mb-4\">بسته های ویژه</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class=\"row align-items-center\">
            <div class=\"col-md-4 col-12\">
                <div class=\"pricing-rates business-rate shadow bg-light pt-5 pb-5 p-4 rounded text-center\">
                    <h2 class=\"title text-uppercase mb-4\">رایگان</h2>
                    <div class=\"d-flex justify-content-center mb-4\">
                        <span class=\"price h1 mb-0\">0</span>
                        <span class=\"h4 mb-0 mt-2\">تومان</span>
                        <span class=\"h4 align-self-end mb-1\">/ماه</span>
                    </div>

                    <ul class=\"feature list-unstyled pl-0\">
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>دسترسی کامل</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>امنیت پیشرفته</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>فایل های منبع</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>1 دامنه رایگان</li>
                    </ul>
                    <a href=\"javascript:void(0)\" class=\"btn btn-primary mt-4\">خرید کنید</a>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0\">
                <div class=\"pricing-rates business-rate shadow bg-white pt-5 pb-5 p-4 rounded text-center\">
                    <h2 class=\"title text-uppercase text-primary mb-4\">استارتر</h2>
                    <div class=\"d-flex justify-content-center mb-4\">
                        <span class=\"price h1 mb-0\">39</span>
                        <span class=\"h4 mb-0 mt-2\">تومان</span>
                        <span class=\"h4 align-self-end mb-1\">/ماه</span>
                    </div>

                    <ul class=\"feature list-unstyled pl-0\">
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>دسترسی کامل</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>فایل های منبع</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>قرارهای رایگان</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>اقساط رایگان</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>امنیت پیشرفته</li>
                    </ul>
                    <a href=\"javascript:void(0)\" class=\"btn btn-primary mt-4\">شروع کنید</a>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0\">
                <div class=\"pricing-rates business-rate shadow bg-light pt-5 pb-5 p-4 rounded text-center\">
                    <h2 class=\"title text-uppercase mb-4\">حرفه ای</h2>
                    <div class=\"d-flex justify-content-center mb-4\">
                        <span class=\"price h1 mb-0\">59</span>
                        <span class=\"h4 mb-0 mt-2\">تومان</span>
                        <span class=\"h4 align-self-end mb-1\">/ماه</span>
                    </div>

                    <ul class=\"feature list-unstyled pl-0\">
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>دسترسی کامل</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>امنیت پیشرفته</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>فایل های منبع</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>1 دامنه رایگان</li>
                    </ul>
                    <a href=\"javascript:void(0)\" class=\"btn btn-primary mt-4\">دوباره سعی کنید</a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- Price End -->

    <!-- Counter End -->

</section><!--end section-->
<!-- Counter End -->

<!-- News Start -->
<section class=\"section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 text-center\">
                <div class=\"section-title mb-4 pb-2\">
                    <h4 class=\"title mb-4\">اخبار اخیر</h4>
                    <p class=\"text-muted para-desc mx-auto mb-0\">شروع به کار با <span
                                class=\"text-primary font-weight-bold\">لندریک </span> که می تواند همه چیز را برای ایجاد
                        آگاهی ، ترافیک رانندگی ، اتصال فراهم کند.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 mt-4 pt-2\">
                <div class=\"blog position-relative overflow-hidden shadow rounded\">
                    <div class=\"position-relative\">
                        <img src=\"images/blog/01.jpg\" class=\"img-fluid rounded-top\" alt=\"\">
                        <div class=\"overlay rounded-top bg-dark\"></div>
                    </div>
                    <div class=\"content p-4\">
                        <h4><a href=\"javascript:void(0)\" class=\"title text-dark\">برنامه های خود را به روش خود طراحی
                                کنید</a></h4>
                        <div class=\"post-meta mt-3\">
                            <a href=\"javascript:void(0)\" class=\"text-muted float-right readmore\">ادامه مطلب <i
                                        class=\"mdi mdi-chevron-right\"></i></a>
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"list-inline-item mr-2\"><a href=\"javascript:void(0)\"
                                                                     class=\"text-muted like\"><i
                                                class=\"mdi mdi-heart-outline mr-1\"></i>33</a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"text-muted comments\"><i
                                                class=\"mdi mdi-comment-outline mr-1\"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"author\">
                        <small class=\"text-light user d-block\"><i class=\"mdi mdi-account\"></i> خان عباسی</small>
                        <small class=\"text-light date\"><i class=\"mdi mdi-calendar-check\"></i> بهمن 1398</small>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-lg-4 col-md-6 mt-4 pt-2\">
                <div class=\"blog position-relative overflow-hidden shadow rounded\">
                    <div class=\"position-relative\">
                        <img src=\"images/blog/02.jpg\" class=\"img-fluid rounded-top\" alt=\"\">
                        <div class=\"overlay rounded-top bg-dark\"></div>
                    </div>
                    <div class=\"content p-4\">
                        <h4><a href=\"javascript:void(0)\" class=\"title text-dark\">چگونه برنامه ها دنیای فناوری اطلاعات را
                                تغییر می دهند</a></h4>
                        <div class=\"post-meta mt-3\">
                            <a href=\"javascript:void(0)\" class=\"text-muted float-right readmore\">ادامه مطلب <i
                                        class=\"mdi mdi-chevron-right\"></i></a>
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"list-inline-item mr-2\"><a href=\"javascript:void(0)\"
                                                                     class=\"text-muted like\"><i
                                                class=\"mdi mdi-heart-outline mr-1\"></i>33</a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"text-muted comments\"><i
                                                class=\"mdi mdi-comment-outline mr-1\"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"author\">
                        <small class=\"text-light user d-block\"><i class=\"mdi mdi-account\"></i> خان عباسی</small>
                        <small class=\"text-light date\"><i class=\"mdi mdi-calendar-check\"></i> بهمن 1398</small>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-lg-4 col-md-6 mt-4 pt-2\">
                <div class=\"blog position-relative overflow-hidden shadow rounded\">
                    <div class=\"position-relative\">
                        <img src=\"images/blog/03.jpg\" class=\"img-fluid rounded-top\" alt=\"\">
                        <div class=\"overlay rounded-top bg-dark\"></div>
                    </div>
                    <div class=\"content p-4\">
                        <h4><a href=\"javascript:void(0)\" class=\"title text-dark\">هوشمندترین برنامه های کاربردی برای
                                تجارت</a></h4>
                        <div class=\"post-meta mt-3\">
                            <a href=\"javascript:void(0)\" class=\"text-muted float-right readmore\">ادامه مطلب <i
                                        class=\"mdi mdi-chevron-right\"></i></a>
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"list-inline-item mr-2\"><a href=\"javascript:void(0)\"
                                                                     class=\"text-muted like\"><i
                                                class=\"mdi mdi-heart-outline mr-1\"></i>33</a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"text-muted comments\"><i
                                                class=\"mdi mdi-comment-outline mr-1\"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"author\">
                        <small class=\"text-light user d-block\"><i class=\"mdi mdi-account\"></i> خان عباسی</small>
                        <small class=\"text-light date\"><i class=\"mdi mdi-calendar-check\"></i> بهمن 1398</small>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

</section><!--end section-->
<!-- News End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 448
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 449
        echo "<!-- Footer Start -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2\">
                <a class=\"logo-footer\" href=\"#\">لاگین<span class=\"text-primary\">.</span></a>
                <p class=\"mt-4\">برای لاگ های سایت میباشد.</p>
                <ul class=\"list-unstyled social-icon social mb-0 mt-4\">
                    <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                    class=\"mdi mdi-facebook\" title=\"فیس بوک\"></i></a></li>
                    <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                    class=\"mdi mdi-instagram\" title=\"اینستاگرام\"></i></a></li>
                    <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i class=\"mdi mdi-twitter\"
                                                                                                 title=\"توییتر\"></i></a>
                    </li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class=\"col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0\">
                <h4 class=\"text-light footer-head\">شرکت</h4>
                <ul class=\"list-unstyled footer-list mt-4\">
                    <li><a href=\"page-aboutus.html\" class=\"text-foot\"><i class=\"mdi mdi-chevron-right mr-1\"></i> درباره
                            ما</a></li>
                    <li><a href=\"";
        // line 472
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"text-foot\"><i class=\"mdi mdi-chevron-right mr-1\"></i>
                            ورود</a></li>
                </ul>
            </div><!--end col-->

            <div class=\"col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0\">
                <h4 class=\"text-light footer-head\">خبرنامه</h4>
                <p class=\"mt-4\">ثبت نام کنید و آخرین راهنمایی ها را از طریق ایمیل دریافت کنید.</p>
                <form>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"foot-subscribe form-group position-relative\">
                                <label>نوشتن ایمیل شما <span class=\"text-danger\">*</span></label>
                                <i class=\"mdi mdi-email ml-3 icons\"></i>
                                <input type=\"email\" name=\"email\" id=\"emailsubscribe\" class=\"form-control pl-5 rounded\"
                                       placeholder=\"ایمیل شما : \" required>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <input type=\"submit\" id=\"submitsubscribe\" name=\"send\" class=\"btn btn-primary rounded w-100\"
                                   value=\"عضو شدن\">
                        </div>
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 508
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 509
        echo "<!-- javascript -->
<script src=\"/js/jquery.min.js\"></script>
<script src=\"/js/bootstrap.bundle.min.js\"></script>
<script src=\"/js/jquery.easing.min.js\"></script>
<script src=\"/js/scrollspy.min.js\"></script>
<!-- Magnific Popup -->
<script src=\"/js/jquery.magnific-popup.min.js\"></script>
<script src=\"/js/magnific.init.js\"></script>
<!-- Typed -->
<script src=\"/js/typed.js\"></script>
<script src=\"/js/typed.init.js\"></script>
<!-- Counter -->
<script src=\"/js/counter.init.js\"></script>
<!-- Parallax -->
<script src=\"/js/parallax.js\"></script>
<!-- Main Js -->
<script src=\"/js/app.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fornt_page/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  787 => 509,  777 => 508,  738 => 472,  713 => 449,  703 => 448,  343 => 97,  333 => 96,  316 => 86,  309 => 84,  305 => 82,  291 => 81,  287 => 79,  285 => 78,  276 => 76,  273 => 75,  269 => 73,  266 => 72,  249 => 71,  246 => 70,  244 => 69,  235 => 68,  231 => 66,  227 => 64,  224 => 63,  220 => 62,  201 => 45,  194 => 41,  190 => 40,  187 => 39,  185 => 38,  180 => 36,  176 => 35,  173 => 34,  171 => 33,  168 => 32,  158 => 31,  139 => 9,  113 => 10,  111 => 9,  107 => 7,  97 => 6,  85 => 527,  83 => 508,  74 => 501,  72 => 448,  70 => 96,  66 => 94,  64 => 31,  58 => 27,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<head>
    {% block head %}
    <meta charset=\"utf-8\"/>
    <title>
        {% block title %}صفحه اصلی{% endblock title %}
    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Premium Bootstrap 4 Landing Page Template\"/>
    <meta name=\"keywords\" content=\"bootstrap 4, premium, marketing, multipurpose\"/>
    <meta content=\"Shreethemes\" name=\"author\"/>
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"/images/favicon.ico\">
    <!-- Bootstrap -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Magnific -->
    <link href=\"/css/magnific-popup.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons -->
    <link href=\"/css/materialdesignicons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Main css -->
    <link href=\"/css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"/css/style-rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>
{% endblock %}
</head>

<body>
<header id=\"topnav\" class=\"defaultscroll sticky bg-white nav-sticky\">
    {% block header %}
    <div class=\"container\">
        {% if app.user() == null %}
            <div class=\"buy-button\">
                <a href=\"{{ asset('login') }}\" target=\"_self\" class=\"btn btn-primary\">ورود به سایت</a>
                <a href=\"{{ path('register') }}\" target=\"_self\" class=\"btn btn-primary \">ثبت نام</a>
            </div>
        {% elseif app.user() %}
            <div class=\"buy-button\">
                <a href=\"{{ path('dashbord') }}\" class=\"btn btn-primary\">داشبورد</a>
                <a href=\"{{ path('logout') }}\" class=\"btn btn-primary\">خروج</a>

            </div>
        {% endif %}
        <!-- End Logo container-->
        <div class=\"menu-extras\">
            <div class=\"menu-item\">
                <!-- Mobile menu toggle-->
                <a class=\"navbar-toggle\">
                    <div class=\"lines\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>
        <div id=\"navigation\">
            <!-- Navigation Menu-->
            <ul class=\"navigation-menu\">
                {% for category in categories %}
                    {% if category.categories == null %}
                        <li>
                    {% else %}
                        <li class=\"has-submenu\">
                    {% endif %}
                    <a href=\"{{ path('category_of_article') }}/{{ category.name }}\">{{ category.name }}</a><span class=\"menu-arrow\"></span>
                    {% if category.categories != null %}
                        <ul class=\"submenu\">
                            {% for item in  category.categories %}
                                {% if loop.index % 10 == 0 %}
                                    <ul class=\"submenu megamenu\">
                                {% endif %}
                                <li>
                                    <a href=\"{{ path('category_of_article') }}/{{ item.name }}\">{{ item.name }}</a>
                                </li>
                                {% if loop.index % 10 == 0 %}
                                    </ul>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                    </li>
                {% endfor %}
            </ul><!--end navigation menu-->
            <div class=\"buy-menu-btn d-none\">
                <a href=\"https://www.rtl-theme.com/author/TN_Plugin/?aff=TN_Plugin\" target=\"_blank\"
                   class=\"btn btn-primary\">هم اکنون بخرید</a>
            </div><!--end login button-->
        </div>
    </div><!--end container-->
    {% endblock %}
</header><!--end header-->
<!-- Navbar End -->
{% block main %}
<!-- Hero Start -->
<section class=\"bg-half-170 border-bottom\" id=\"home\">
    <div class=\"home-center\">
        <div class=\"home-desc-center\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-7\">
                        <div class=\"title-heading mt-4\">
                            <h1 class=\"heading mb-3\">پیشرو کسب و کار دیجیتال برای <span class=\"element text-primary\"
                                                                                        data-elements=\"آژانسی, نرم افزار, تکنولوژی, استدیو, صفحات وب\"></span>
                                ساختن</h1>
                            <p class=\"para-desc text-muted\">کمپین خود را راه اندازی کنید و از تخصص ما در زمینه طراحی و
                                مدیریت تبدیل صفحه محور بوت استرپ و اچ تی ام ال بهره مند شوید.</p>
                            <div class=\"mt-4\">
                                <a href=\"javascript:void(0)\" class=\"btn btn-outline-primary rounded\"><i
                                            class=\"mdi mdi-google-my-business\"></i> فروشگاه خود را درست کنید</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class=\"col-lg-6 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0\">
                        <div class=\"position-relative\">
                            <img src=\"images/busi01.jpg\" class=\"rounded img-fluid mx-auto d-block\" alt=\"\">
                            <div class=\"play-icon\">
                                <a href=\"http://vimeo.com/287684225\" class=\"play-btn video-play-icon\">
                                    <i class=\"mdi mdi-play text-primary rounded-pill bg-white shadow\"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end home desc center-->
    </div><!--end home center-->
</section><!--end section-->
<!-- Hero End -->

<!-- Feature Start -->
<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 text-center\">
                <div class=\"section-title mb-4 pb-2\">
                    <h4 class=\"title mb-4\">چه می کنیم؟</h4>
                    <p class=\"text-muted para-desc mx-auto mb-0\">شروع به کار با <span
                                class=\"text-primary font-weight-bold\">لندریک </span> که می تواند همه چیز را برای ایجاد
                        آگاهی ، ترافیک رانندگی ، اتصال فراهم کند.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class=\"row\">
            <div class=\"col-md-4 col-12\">
                <div class=\"features mt-5\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/pen.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">طراحی و توسعه</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/video.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">مدیریت و بازاریابی</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/intellectual.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">استراتژی و تحقیق</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/user.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">استفاده آسان</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/calendar.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">گزارش های روزانه</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-5\">
                <div class=\"features\">
                    <div class=\"image position-relative d-inline-block\">
                        <img src=\"images/icon/sand-clock.svg\" alt=\"\">
                    </div>

                    <div class=\"content mt-4\">
                        <h4 class=\"title-2\">منطقه زمان واقعی</h4>
                        <p class=\"text-muted mb-0\">تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"home-shape-arrow\">
                <img src=\"images/shapes/arrow-bottom.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
                <a href=\"#cta\" class=\"mouse-down\"><i
                            class=\"mdi mdi-chevron-double-down arrow-icon mover text-dark h5\"></i></a>
            </div>
        </div><!--end row-->
    </div> <!-- END CONTAINER -->
</section><!--end section-->
<!-- End feature -->

<!-- CTA Start -->
<section class=\"bg-cta\" data-jarallax='{\"speed\": 0.5}' style=\"background: url('images/2.jpg');\" id=\"cta\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 text-center\">
                <div class=\"section-title\">
                    <h4 class=\"title text-white mb-4\">توقف پول روی میز را متوقف کنید.</h4>
                    <p class=\"text-light para-desc mx-auto\">شروع به کار با لندریک که می تواند همه چیز را برای ایجاد
                        آگاهی ، ترافیک رانندگی ، اتصال فراهم کند.</p>
                    <a href=\"http://vimeo.com/287684225\" class=\"play-btn border mt-2 video-play-icon\">
                        <i class=\"mdi mdi-play text-white\"></i>
                    </a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- CTA End -->

<!-- Price Start -->
<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 text-center\">
                <div class=\"section-title mb-60\">
                    <h4 class=\"title mb-4\">بسته های ویژه</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class=\"row align-items-center\">
            <div class=\"col-md-4 col-12\">
                <div class=\"pricing-rates business-rate shadow bg-light pt-5 pb-5 p-4 rounded text-center\">
                    <h2 class=\"title text-uppercase mb-4\">رایگان</h2>
                    <div class=\"d-flex justify-content-center mb-4\">
                        <span class=\"price h1 mb-0\">0</span>
                        <span class=\"h4 mb-0 mt-2\">تومان</span>
                        <span class=\"h4 align-self-end mb-1\">/ماه</span>
                    </div>

                    <ul class=\"feature list-unstyled pl-0\">
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>دسترسی کامل</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>امنیت پیشرفته</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>فایل های منبع</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>1 دامنه رایگان</li>
                    </ul>
                    <a href=\"javascript:void(0)\" class=\"btn btn-primary mt-4\">خرید کنید</a>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0\">
                <div class=\"pricing-rates business-rate shadow bg-white pt-5 pb-5 p-4 rounded text-center\">
                    <h2 class=\"title text-uppercase text-primary mb-4\">استارتر</h2>
                    <div class=\"d-flex justify-content-center mb-4\">
                        <span class=\"price h1 mb-0\">39</span>
                        <span class=\"h4 mb-0 mt-2\">تومان</span>
                        <span class=\"h4 align-self-end mb-1\">/ماه</span>
                    </div>

                    <ul class=\"feature list-unstyled pl-0\">
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>دسترسی کامل</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>فایل های منبع</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>قرارهای رایگان</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>اقساط رایگان</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>امنیت پیشرفته</li>
                    </ul>
                    <a href=\"javascript:void(0)\" class=\"btn btn-primary mt-4\">شروع کنید</a>
                </div>
            </div><!--end col-->

            <div class=\"col-md-4 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0\">
                <div class=\"pricing-rates business-rate shadow bg-light pt-5 pb-5 p-4 rounded text-center\">
                    <h2 class=\"title text-uppercase mb-4\">حرفه ای</h2>
                    <div class=\"d-flex justify-content-center mb-4\">
                        <span class=\"price h1 mb-0\">59</span>
                        <span class=\"h4 mb-0 mt-2\">تومان</span>
                        <span class=\"h4 align-self-end mb-1\">/ماه</span>
                    </div>

                    <ul class=\"feature list-unstyled pl-0\">
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>دسترسی کامل</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>امنیت پیشرفته</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>فایل های منبع</li>
                        <li class=\"feature-list\"><i class=\"mdi mdi-check text-success h5 mr-1\"></i>1 دامنه رایگان</li>
                    </ul>
                    <a href=\"javascript:void(0)\" class=\"btn btn-primary mt-4\">دوباره سعی کنید</a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- Price End -->

    <!-- Counter End -->

</section><!--end section-->
<!-- Counter End -->

<!-- News Start -->
<section class=\"section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 text-center\">
                <div class=\"section-title mb-4 pb-2\">
                    <h4 class=\"title mb-4\">اخبار اخیر</h4>
                    <p class=\"text-muted para-desc mx-auto mb-0\">شروع به کار با <span
                                class=\"text-primary font-weight-bold\">لندریک </span> که می تواند همه چیز را برای ایجاد
                        آگاهی ، ترافیک رانندگی ، اتصال فراهم کند.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 mt-4 pt-2\">
                <div class=\"blog position-relative overflow-hidden shadow rounded\">
                    <div class=\"position-relative\">
                        <img src=\"images/blog/01.jpg\" class=\"img-fluid rounded-top\" alt=\"\">
                        <div class=\"overlay rounded-top bg-dark\"></div>
                    </div>
                    <div class=\"content p-4\">
                        <h4><a href=\"javascript:void(0)\" class=\"title text-dark\">برنامه های خود را به روش خود طراحی
                                کنید</a></h4>
                        <div class=\"post-meta mt-3\">
                            <a href=\"javascript:void(0)\" class=\"text-muted float-right readmore\">ادامه مطلب <i
                                        class=\"mdi mdi-chevron-right\"></i></a>
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"list-inline-item mr-2\"><a href=\"javascript:void(0)\"
                                                                     class=\"text-muted like\"><i
                                                class=\"mdi mdi-heart-outline mr-1\"></i>33</a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"text-muted comments\"><i
                                                class=\"mdi mdi-comment-outline mr-1\"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"author\">
                        <small class=\"text-light user d-block\"><i class=\"mdi mdi-account\"></i> خان عباسی</small>
                        <small class=\"text-light date\"><i class=\"mdi mdi-calendar-check\"></i> بهمن 1398</small>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-lg-4 col-md-6 mt-4 pt-2\">
                <div class=\"blog position-relative overflow-hidden shadow rounded\">
                    <div class=\"position-relative\">
                        <img src=\"images/blog/02.jpg\" class=\"img-fluid rounded-top\" alt=\"\">
                        <div class=\"overlay rounded-top bg-dark\"></div>
                    </div>
                    <div class=\"content p-4\">
                        <h4><a href=\"javascript:void(0)\" class=\"title text-dark\">چگونه برنامه ها دنیای فناوری اطلاعات را
                                تغییر می دهند</a></h4>
                        <div class=\"post-meta mt-3\">
                            <a href=\"javascript:void(0)\" class=\"text-muted float-right readmore\">ادامه مطلب <i
                                        class=\"mdi mdi-chevron-right\"></i></a>
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"list-inline-item mr-2\"><a href=\"javascript:void(0)\"
                                                                     class=\"text-muted like\"><i
                                                class=\"mdi mdi-heart-outline mr-1\"></i>33</a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"text-muted comments\"><i
                                                class=\"mdi mdi-comment-outline mr-1\"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"author\">
                        <small class=\"text-light user d-block\"><i class=\"mdi mdi-account\"></i> خان عباسی</small>
                        <small class=\"text-light date\"><i class=\"mdi mdi-calendar-check\"></i> بهمن 1398</small>
                    </div>
                </div>
            </div><!--end col-->

            <div class=\"col-lg-4 col-md-6 mt-4 pt-2\">
                <div class=\"blog position-relative overflow-hidden shadow rounded\">
                    <div class=\"position-relative\">
                        <img src=\"images/blog/03.jpg\" class=\"img-fluid rounded-top\" alt=\"\">
                        <div class=\"overlay rounded-top bg-dark\"></div>
                    </div>
                    <div class=\"content p-4\">
                        <h4><a href=\"javascript:void(0)\" class=\"title text-dark\">هوشمندترین برنامه های کاربردی برای
                                تجارت</a></h4>
                        <div class=\"post-meta mt-3\">
                            <a href=\"javascript:void(0)\" class=\"text-muted float-right readmore\">ادامه مطلب <i
                                        class=\"mdi mdi-chevron-right\"></i></a>
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"list-inline-item mr-2\"><a href=\"javascript:void(0)\"
                                                                     class=\"text-muted like\"><i
                                                class=\"mdi mdi-heart-outline mr-1\"></i>33</a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"text-muted comments\"><i
                                                class=\"mdi mdi-comment-outline mr-1\"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"author\">
                        <small class=\"text-light user d-block\"><i class=\"mdi mdi-account\"></i> خان عباسی</small>
                        <small class=\"text-light date\"><i class=\"mdi mdi-calendar-check\"></i> بهمن 1398</small>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

</section><!--end section-->
<!-- News End -->
{% endblock %}
{% block footer %}
<!-- Footer Start -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2\">
                <a class=\"logo-footer\" href=\"#\">لاگین<span class=\"text-primary\">.</span></a>
                <p class=\"mt-4\">برای لاگ های سایت میباشد.</p>
                <ul class=\"list-unstyled social-icon social mb-0 mt-4\">
                    <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                    class=\"mdi mdi-facebook\" title=\"فیس بوک\"></i></a></li>
                    <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                    class=\"mdi mdi-instagram\" title=\"اینستاگرام\"></i></a></li>
                    <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i class=\"mdi mdi-twitter\"
                                                                                                 title=\"توییتر\"></i></a>
                    </li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class=\"col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0\">
                <h4 class=\"text-light footer-head\">شرکت</h4>
                <ul class=\"list-unstyled footer-list mt-4\">
                    <li><a href=\"page-aboutus.html\" class=\"text-foot\"><i class=\"mdi mdi-chevron-right mr-1\"></i> درباره
                            ما</a></li>
                    <li><a href=\"{{ path('login') }}\" class=\"text-foot\"><i class=\"mdi mdi-chevron-right mr-1\"></i>
                            ورود</a></li>
                </ul>
            </div><!--end col-->

            <div class=\"col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0\">
                <h4 class=\"text-light footer-head\">خبرنامه</h4>
                <p class=\"mt-4\">ثبت نام کنید و آخرین راهنمایی ها را از طریق ایمیل دریافت کنید.</p>
                <form>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"foot-subscribe form-group position-relative\">
                                <label>نوشتن ایمیل شما <span class=\"text-danger\">*</span></label>
                                <i class=\"mdi mdi-email ml-3 icons\"></i>
                                <input type=\"email\" name=\"email\" id=\"emailsubscribe\" class=\"form-control pl-5 rounded\"
                                       placeholder=\"ایمیل شما : \" required>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <input type=\"submit\" id=\"submitsubscribe\" name=\"send\" class=\"btn btn-primary rounded w-100\"
                                   value=\"عضو شدن\">
                        </div>
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
{% endblock %}
<hr>

<!-- Back to top -->
<a href=\"#\" class=\"back-to-top rounded text-center\" id=\"back-to-top\">
    <i class=\"mdi mdi-chevron-up d-block\"> </i>
</a>
<!-- Back to top -->
{% block js %}
<!-- javascript -->
<script src=\"/js/jquery.min.js\"></script>
<script src=\"/js/bootstrap.bundle.min.js\"></script>
<script src=\"/js/jquery.easing.min.js\"></script>
<script src=\"/js/scrollspy.min.js\"></script>
<!-- Magnific Popup -->
<script src=\"/js/jquery.magnific-popup.min.js\"></script>
<script src=\"/js/magnific.init.js\"></script>
<!-- Typed -->
<script src=\"/js/typed.js\"></script>
<script src=\"/js/typed.init.js\"></script>
<!-- Counter -->
<script src=\"/js/counter.init.js\"></script>
<!-- Parallax -->
<script src=\"/js/parallax.js\"></script>
<!-- Main Js -->
<script src=\"/js/app.js\"></script>
{% endblock %}
</body>

</html>", "fornt_page/index.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\fornt_page\\index.html.twig");
    }
}
