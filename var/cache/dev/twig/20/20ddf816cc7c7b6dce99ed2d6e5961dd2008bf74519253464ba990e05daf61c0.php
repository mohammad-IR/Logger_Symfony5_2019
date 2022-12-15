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

/* security/register.html.twig */
class __TwigTemplate_b7885579dc8b5fcb5101855e969459efbc84c65712b0146de62de480cce43598 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<head>
    <meta charset=\"utf-8\" />
    <title>قالب صفحه فرود Saas و نرم افزار</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Premium Bootstrap 4 Landing Page Template\" />
    <meta name=\"keywords\" content=\"bootstrap 4, premium, marketing, multipurpose\" />
    <meta content=\"Shreethemes\" name=\"author\" />
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\">
    <!-- Bootstrap -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Icons -->
    <link href=\"css/materialdesignicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Main css -->
    <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"css/style-rtl.css\" rel=\"stylesheet\" type=\"text/css\" />

</head>

<body>
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

<!-- Hero Start -->
<section class=\"cover-user bg-white\">
    <div class=\"container-fluid\">
        <div class=\"row position-relative\">
            <div class=\"col-lg-4 cover-my-30 order-2\">
                <div class=\"cover-user-img d-flex align-items-center\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"login_page position-relative\" style=\"z-index: 1\">
                                <div class=\"text-center\">
                                    <h4 class=\"mb-4\">ثبت نام</h4>
                                </div>
";
        // line 53
        echo "                                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group position-relative\">
                                                <label>نام کاربری <span class=\"text-danger\">*</span></label>
                                                <i class=\"mdi mdi-account ml-3 icons\"></i>
                                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "username", [], "any", false, false, false, 59), 'row');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group position-relative\">
                                                <label>ایمیل شما <span class=\"text-danger\">*</span></label>
                                                <i class=\"mdi mdi-account ml-3 icons\"></i>
                                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'row');
        echo "
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group position-relative\">
                                                <label>رمز عبور <span class=\"text-danger\">*</span></label>
                                                <i class=\"mdi mdi-key ml-3 icons\"></i>
                                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "password", [], "any", false, false, false, 73), 'row');
        echo "
                                            </div>

                                         </div><!--end col-->
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" required id=\"customCheck1\">
                                                    <label class=\"custom-control-label\" for=\"customCheck1\" >من تایید میکنم <a href=\"#\" class=\"text-primary\" >شرایط و ضوابط را</a></label>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class=\"col-md-12\">
                                            <button class=\"btn btn-primary w-100\">ثبت نام</button>
                                        </div><!--end col-->

                                        <div class=\"col-lg-12 mt-4 text-center\">
                                            <h6>و یا ثبت نام از طریق</h6>
                                            <ul class=\"list-unstyled social-icon mb-0 mt-3\">
                                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i class=\"mdi mdi-facebook\" title=\"فیس بوک\"></i></a></li>
                                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i class=\"mdi mdi-google-plus\" title=\"گوگل\"></i></a></li>
                                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i class=\"mdi mdi-github-circle\" title=\"گیتوب\"></i></a></li>
                                            </ul><!--end icon-->
                                        </div><!--end col-->

                                        <div class=\"mx-auto\">
                                            <p class=\"mb-0 mt-3\"><small class=\"text-dark mr-2\">قبلاً حساب دارید؟</small> <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"text-dark font-weight-bold\">وارد شوید</a></p>
                                        </div>
                                    </div><!--end row-->
";
        // line 104
        echo "                                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div><!--end row-->
                </div> <!-- end about detail -->
            </div> <!-- end col -->

            <div class=\"col-lg-8 offset-lg-4 padding-less img order-1\" style=\"background-image:url('images/user/02.jpg')\" data-jarallax='{\"speed\": 0.5}'></div><!-- end col -->
        </div><!--end row-->
    </div><!--end container fluid-->
</section><!--end section-->
<!-- Hero End -->

<!-- javascript -->
<script src=\"js/jquery.min.js\"></script>
<script src=\"js/bootstrap.bundle.min.js\"></script>
<script src=\"js/jquery.easing.min.js\"></script>
<script src=\"js/scrollspy.min.js\"></script>
<!-- Main Js -->
<script src=\"js/app.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 104,  156 => 100,  126 => 73,  116 => 66,  106 => 59,  96 => 53,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<head>
    <meta charset=\"utf-8\" />
    <title>قالب صفحه فرود Saas و نرم افزار</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Premium Bootstrap 4 Landing Page Template\" />
    <meta name=\"keywords\" content=\"bootstrap 4, premium, marketing, multipurpose\" />
    <meta content=\"Shreethemes\" name=\"author\" />
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\">
    <!-- Bootstrap -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Icons -->
    <link href=\"css/materialdesignicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Main css -->
    <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"css/style-rtl.css\" rel=\"stylesheet\" type=\"text/css\" />

</head>

<body>
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

<!-- Hero Start -->
<section class=\"cover-user bg-white\">
    <div class=\"container-fluid\">
        <div class=\"row position-relative\">
            <div class=\"col-lg-4 cover-my-30 order-2\">
                <div class=\"cover-user-img d-flex align-items-center\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"login_page position-relative\" style=\"z-index: 1\">
                                <div class=\"text-center\">
                                    <h4 class=\"mb-4\">ثبت نام</h4>
                                </div>
{#                                <form class=\"login-form\">#}
                                {{ form_start(form) }}
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group position-relative\">
                                                <label>نام کاربری <span class=\"text-danger\">*</span></label>
                                                <i class=\"mdi mdi-account ml-3 icons\"></i>
                                                {{ form_row(form.username ) }}
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group position-relative\">
                                                <label>ایمیل شما <span class=\"text-danger\">*</span></label>
                                                <i class=\"mdi mdi-account ml-3 icons\"></i>
                                                {{ form_row(form.email) }}
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group position-relative\">
                                                <label>رمز عبور <span class=\"text-danger\">*</span></label>
                                                <i class=\"mdi mdi-key ml-3 icons\"></i>
                                                {{ form_row(form.password) }}
                                            </div>

                                         </div><!--end col-->
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" required id=\"customCheck1\">
                                                    <label class=\"custom-control-label\" for=\"customCheck1\" >من تایید میکنم <a href=\"#\" class=\"text-primary\" >شرایط و ضوابط را</a></label>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class=\"col-md-12\">
                                            <button class=\"btn btn-primary w-100\">ثبت نام</button>
                                        </div><!--end col-->

                                        <div class=\"col-lg-12 mt-4 text-center\">
                                            <h6>و یا ثبت نام از طریق</h6>
                                            <ul class=\"list-unstyled social-icon mb-0 mt-3\">
                                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i class=\"mdi mdi-facebook\" title=\"فیس بوک\"></i></a></li>
                                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i class=\"mdi mdi-google-plus\" title=\"گوگل\"></i></a></li>
                                                <li class=\"list-inline-item\"><a href=\"javascript:void(0)\" class=\"rounded\"><i class=\"mdi mdi-github-circle\" title=\"گیتوب\"></i></a></li>
                                            </ul><!--end icon-->
                                        </div><!--end col-->

                                        <div class=\"mx-auto\">
                                            <p class=\"mb-0 mt-3\"><small class=\"text-dark mr-2\">قبلاً حساب دارید؟</small> <a href=\"{{ path('login') }}\" class=\"text-dark font-weight-bold\">وارد شوید</a></p>
                                        </div>
                                    </div><!--end row-->
{#                                </form>#}
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div><!--end row-->
                </div> <!-- end about detail -->
            </div> <!-- end col -->

            <div class=\"col-lg-8 offset-lg-4 padding-less img order-1\" style=\"background-image:url('images/user/02.jpg')\" data-jarallax='{\"speed\": 0.5}'></div><!-- end col -->
        </div><!--end row-->
    </div><!--end container fluid-->
</section><!--end section-->
<!-- Hero End -->

<!-- javascript -->
<script src=\"js/jquery.min.js\"></script>
<script src=\"js/bootstrap.bundle.min.js\"></script>
<script src=\"js/jquery.easing.min.js\"></script>
<script src=\"js/scrollspy.min.js\"></script>
<!-- Main Js -->
<script src=\"js/app.js\"></script>
</body>

</html>", "security/register.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\security\\register.html.twig");
    }
}
