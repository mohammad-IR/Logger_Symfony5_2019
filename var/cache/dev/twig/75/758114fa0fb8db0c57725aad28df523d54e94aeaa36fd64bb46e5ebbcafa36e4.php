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

/* security/login.html.twig */
class __TwigTemplate_f92479375165dd6a0e754106fa5e88177042520309cb25386f87357b9cf767de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<head>
    <meta charset=\"utf-8\"/>
    <title>ورود</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Premium Bootstrap 4 Landing Page Template\"/>
    <meta name=\"keywords\" content=\"bootstrap 4, premium, marketing, multipurpose\"/>
    <meta content=\"Shreethemes\" name=\"author\"/>
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\">
    <!-- Bootstrap -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons -->
    <link href=\"css/materialdesignicons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Main css -->
    <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"css/style-rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>

</head>

<body style=\"background: #E2E2E2 \">
<!-- Loader -->
<div id=\"preloader\">
    <div id=\"status\">
        <div class=\"spinner\">
            <div class=\"double-bounce1\"></div>
            <div class=\"double-bounce2\"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<div class=\"back-to-home rounded d-none d-sm-block\">
    <a href=\"index.html\" class=\"text-white rounded d-inline-block text-center\"><i class=\"mdi mdi-home\"></i></a>
</div>

";
        // line 43
        echo "<div class=\"row position-relative justify-content-center\">
    <div class=\"col-lg-3 cover-my-30 order-2\" style=\"border-radius: 10%; margin-top: 2%; background: white\">
        ";
        // line 46
        echo "        ";
        // line 47
        echo "        <div class=\" row-cols-10\">
            <div class=\"login-page position-relative\" style=\"z-index: 1\">
                <form class=\"login-form\" method=\"post\">

                    <div class=\"text-center\">
                        <h4 class=\"mb-4\">ورود</h4>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"form-group position-relative\">
                                <label>نام کاربری <span class=\"text-danger\">*</span></label>
                                <i class=\"mdi mdi-account ml-3 icons\"></i>
                                <input type=\"text\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control pl-5\"
                                       placeholder=\"نام کاربری\" name=\"username\" autocomplete=\"username\" required
                                       autofocus>
                            </div>
                        </div><!--end col-->

                        <div class=\"col-lg-12\">
                            <div class=\"form-group position-relative\">
                                <label>رمز عبور <span class=\"text-danger\">*</span></label>
                                <i class=\"mdi mdi-key ml-3 icons\"></i>
                                <input type=\"password\" name=\"password\" class=\"form-control pl-5\" placeholder=\"رمز\"
                                       autocomplete=\"current-password\" required>
                            </div>
                        </div><!--end col-->
                        ";
        // line 73
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 73, $this->source); })())) {
            // line 74
            echo "                            <div class=\"alert text-danger ms-1\">ورودی اشتباه وارد شده</div>
                        ";
        }
        // line 76
        echo "
                        ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) {
            // line 78
            echo "                        <div class=\"mb-3\">
                            شما در سیستم هستید در صورت میل به خارج شدن <a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">خارج شوید</a>
                        </div>
                        ";
        } else {
            // line 82
            echo "
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                        <div class=\"col-12\">

                            <p class=\"float-right forgot-pass\"><a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_eamil");
            echo "\"
                                                                  class=\"text-dark font-weight-bold\">فراموشی رمز
                                    عبور؟</a></p>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" id=\"remember-me\" name=\"_remember_me\" class=\"\"/>
                                <label class=\"form-check-label rem-check\" for=\"remember-me\"   >
                                    مرا به خاطر داشته باش
                                </label>
                            </div>
                        </div>
                        <div class=\"col-lg-12 mb-0\">
                            <button class=\"btn btn-primary w-100\">ورود</button>
                        </div><!--end col-->

                        <div class=\"col-lg-12 mt-4 text-center\">
                            <h6>و یا از طریق</h6>
                            <ul class=\"list-unstyled social-icon mb-0 mt-3\">
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                                class=\"mdi mdi-facebook\" title=\"فیس بوک\"></i></a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                                class=\"mdi mdi-google-plus\" title=\"گوگل\"></i></a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                                class=\"mdi mdi-github-circle\" title=\"گیتوب\"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class=\"col-12 text-center\">
                            <p class=\"mb-0 mt-3\"><small class=\"text-dark mr-2\">حساب ندارید؟</small> <a
                                        href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"text-dark font-weight-bold\">ثبت نام</a></p>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
                ";
        }
        // line 120
        echo "            </div>
        </div>
        ";
        // line 123
        echo "        ";
        // line 124
        echo "    </div>
</div><!--end row-->
</div><!--end container fluid-->
</section><!--end section-->
<!-- Hero End -->
<!-- javascript -->
<script src=\"/js/jquery.min.js\"></script>
<script src=\"/js/bootstrap.bundle.min.js\"></script>
<script src=\"/js/jquery.easing.min.js\"></script>
<script src=\"/js/scrollspy.min.js\"></script>
<!-- Main Js -->
<script src=\"/js/app.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 124,  194 => 123,  190 => 120,  182 => 115,  151 => 87,  145 => 84,  141 => 82,  135 => 79,  132 => 78,  130 => 77,  127 => 76,  123 => 74,  121 => 73,  104 => 59,  90 => 47,  88 => 46,  84 => 43,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<head>
    <meta charset=\"utf-8\"/>
    <title>ورود</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Premium Bootstrap 4 Landing Page Template\"/>
    <meta name=\"keywords\" content=\"bootstrap 4, premium, marketing, multipurpose\"/>
    <meta content=\"Shreethemes\" name=\"author\"/>
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\">
    <!-- Bootstrap -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons -->
    <link href=\"css/materialdesignicons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Main css -->
    <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"css/style-rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>

</head>

<body style=\"background: #E2E2E2 \">
<!-- Loader -->
<div id=\"preloader\">
    <div id=\"status\">
        <div class=\"spinner\">
            <div class=\"double-bounce1\"></div>
            <div class=\"double-bounce2\"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<div class=\"back-to-home rounded d-none d-sm-block\">
    <a href=\"index.html\" class=\"text-white rounded d-inline-block text-center\"><i class=\"mdi mdi-home\"></i></a>
</div>

{# <!-- Hero Start --> #}
{# <section class=\"cover-user bg-white\"> #}
{# <div class=\"container-fluid\"> #}
<div class=\"row position-relative justify-content-center\">
    <div class=\"col-lg-3 cover-my-30 order-2\" style=\"border-radius: 10%; margin-top: 2%; background: white\">
        {# <div class=\"cover-user-img d-flex align-items-center\"> #}
        {# <div class=\"row\"> #}
        <div class=\" row-cols-10\">
            <div class=\"login-page position-relative\" style=\"z-index: 1\">
                <form class=\"login-form\" method=\"post\">

                    <div class=\"text-center\">
                        <h4 class=\"mb-4\">ورود</h4>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"form-group position-relative\">
                                <label>نام کاربری <span class=\"text-danger\">*</span></label>
                                <i class=\"mdi mdi-account ml-3 icons\"></i>
                                <input type=\"text\" value=\"{{ last_username }}\" class=\"form-control pl-5\"
                                       placeholder=\"نام کاربری\" name=\"username\" autocomplete=\"username\" required
                                       autofocus>
                            </div>
                        </div><!--end col-->

                        <div class=\"col-lg-12\">
                            <div class=\"form-group position-relative\">
                                <label>رمز عبور <span class=\"text-danger\">*</span></label>
                                <i class=\"mdi mdi-key ml-3 icons\"></i>
                                <input type=\"password\" name=\"password\" class=\"form-control pl-5\" placeholder=\"رمز\"
                                       autocomplete=\"current-password\" required>
                            </div>
                        </div><!--end col-->
                        {% if error %}
                            <div class=\"alert text-danger ms-1\">ورودی اشتباه وارد شده</div>
                        {% endif %}

                        {% if app.user %}
                        <div class=\"mb-3\">
                            شما در سیستم هستید در صورت میل به خارج شدن <a href=\"{{ path('logout') }}\">خارج شوید</a>
                        </div>
                        {% else %}

                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\">
                        <div class=\"col-12\">

                            <p class=\"float-right forgot-pass\"><a href=\"{{ path('validation_eamil') }}\"
                                                                  class=\"text-dark font-weight-bold\">فراموشی رمز
                                    عبور؟</a></p>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" id=\"remember-me\" name=\"_remember_me\" class=\"\"/>
                                <label class=\"form-check-label rem-check\" for=\"remember-me\"   >
                                    مرا به خاطر داشته باش
                                </label>
                            </div>
                        </div>
                        <div class=\"col-lg-12 mb-0\">
                            <button class=\"btn btn-primary w-100\">ورود</button>
                        </div><!--end col-->

                        <div class=\"col-lg-12 mt-4 text-center\">
                            <h6>و یا از طریق</h6>
                            <ul class=\"list-unstyled social-icon mb-0 mt-3\">
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                                class=\"mdi mdi-facebook\" title=\"فیس بوک\"></i></a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                                class=\"mdi mdi-google-plus\" title=\"گوگل\"></i></a></li>
                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i
                                                class=\"mdi mdi-github-circle\" title=\"گیتوب\"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class=\"col-12 text-center\">
                            <p class=\"mb-0 mt-3\"><small class=\"text-dark mr-2\">حساب ندارید؟</small> <a
                                        href=\"{{ path('register') }}\" class=\"text-dark font-weight-bold\">ثبت نام</a></p>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
                {% endif %}
            </div>
        </div>
        {# </div><!--end row--> #}
        {# </div> <!-- end about detail --> #}
    </div>
</div><!--end row-->
</div><!--end container fluid-->
</section><!--end section-->
<!-- Hero End -->
<!-- javascript -->
<script src=\"/js/jquery.min.js\"></script>
<script src=\"/js/bootstrap.bundle.min.js\"></script>
<script src=\"/js/jquery.easing.min.js\"></script>
<script src=\"/js/scrollspy.min.js\"></script>
<!-- Main Js -->
<script src=\"/js/app.js\"></script>
</body>

</html>", "security/login.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\security\\login.html.twig");
    }
}
