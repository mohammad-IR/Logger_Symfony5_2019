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

/* security/Validation.html.twig */
class __TwigTemplate_1fe7497a5a0a91f4711c0cc2d0824137768820215a61d1c20ad2813c0c03926c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/Validation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/Validation.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<!--
Product Name: Metronic - #1 Selling Bootstrap 5 HTML Multi-demo Ad????? Dashboard ThemeAuthor: KeenThemes
Purchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
دریبل: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
<html direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\" >
<!--begin::Head-->
<head><base href=\"../../../\">
    <meta charset=\"utf-8\" />
    <title>validation</title>
    <meta name=\"description\" content=\"Metronic ad????? dashboard live demo. Check out all the features of the ad????? panel. A large number of settings, additional services and widgets.\" />
    <meta name=\"keywords\" content=\"Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, ad????? themes, web design, figma, web development, ree ad????? themes, bootstrap ad?????, bootstrap dashboard\" />
    <link rel=\"canonical\" href=\"Https://preview.keenthemes.com/metronic8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <link rel=\"shortcut icon\" href=\"assets/media/logos/favicon.ico\" />
    <!--begin::Fonts-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href=\"assets/plugins/global/plugins.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/css/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id=\"kt_body\" class=\"bg-white\">
<!--begin::Main-->
<div class=\"d-flex flex-column flex-root\">

    <!--begin::Authentication - Password reset -->
    <div class=\"d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed\" style=\"background-image: url(assets/media/illustrations/progress-hd.png)\">
        <!--begin::Content-->
        <div class=\"d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20\">
            <!--begin::Wrapper-->
            <div class=\"w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto gy-10\">
                <!--begin::Form-->
                <form class=\"form w-100\" novalidate=\"novalidate\" method=\"post\"  id=\"kt_password_reset_form\">

                    <!--begin::Heading-->
                    <div class=\"text-center mb-10\">
                        <!--begin::Title-->
                        <h1 class=\"text-dark mb-3\">رمزعبور خود را فراموش کرده اید؟</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class=\"text-gray-400 fw-bold fs-4\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })()), "html", null, true);
        echo " خود را برای بازیابی وارد نمایید</div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class=\"fv-row mb-10\">
                        <label class=\"form-label fw-bolder text-gray-900 fs-6\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "</label>
                        <input class=\"form-control form-control-solid\" type=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\" autocomplete=\"off\" />
                    </div>
                    <!--end::Input group-->
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "                        <div class=\"m-4 mb-5\" style=\"direction: ltr\">
                                <span class=\"text-danger\">";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 63, $this->source); })()), "html", null, true);
            echo "</span>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    <!--begin::Actions-->
                    <div class=\"d-flex flex-wrap justify-content-center pb-lg-0\">
                        <button type=\"submit\"   class=\"btn btn-lg btn-primary fw-bolder me-4\">
                            <span class=\"indicator-label\">ثبت</span>
                        </button>
                        <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searching_app");
        echo "\" class=\"btn btn-lg btn-light-primary fw-bolder\">انصراف</a>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class=\"d-flex flex-center flex-column-auto p-10\">
            <!--begin::Links-->
            <div class=\"d-flex align-items-center fw-bold fs-6\">
                <a href=\"https://keenthemes.com/faqs\" class=\"text-muted text-hover-primary px-2\" target=\"_blank\">درباره ی ما</a>
                <a href=\"https://keenthemes.com/support\" class=\"text-muted text-hover-primary px-2\" target=\"_blank\">پشتیبانی</a>
                <a href=\"https://1.envato.market/EA4JP\" class=\"text-muted text-hover-primary px-2\" target=\"_blank\">خرید</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Password reset-->
</div>
<!--end::Main-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src=\"assets/plugins/global/plugins.bundle.js\"></script>
<script src=\"assets/js/scripts.bundle.js\"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src=\"assets/js/custom/authentication/password-reset/password-reset.js\"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/Validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 71,  132 => 66,  123 => 63,  120 => 62,  116 => 61,  108 => 58,  104 => 57,  95 => 51,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<!--
Product Name: Metronic - #1 Selling Bootstrap 5 HTML Multi-demo Ad????? Dashboard ThemeAuthor: KeenThemes
Purchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
دریبل: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
<html direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\" >
<!--begin::Head-->
<head><base href=\"../../../\">
    <meta charset=\"utf-8\" />
    <title>validation</title>
    <meta name=\"description\" content=\"Metronic ad????? dashboard live demo. Check out all the features of the ad????? panel. A large number of settings, additional services and widgets.\" />
    <meta name=\"keywords\" content=\"Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, ad????? themes, web design, figma, web development, ree ad????? themes, bootstrap ad?????, bootstrap dashboard\" />
    <link rel=\"canonical\" href=\"Https://preview.keenthemes.com/metronic8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <link rel=\"shortcut icon\" href=\"assets/media/logos/favicon.ico\" />
    <!--begin::Fonts-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href=\"assets/plugins/global/plugins.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/css/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id=\"kt_body\" class=\"bg-white\">
<!--begin::Main-->
<div class=\"d-flex flex-column flex-root\">

    <!--begin::Authentication - Password reset -->
    <div class=\"d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed\" style=\"background-image: url(assets/media/illustrations/progress-hd.png)\">
        <!--begin::Content-->
        <div class=\"d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20\">
            <!--begin::Wrapper-->
            <div class=\"w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto gy-10\">
                <!--begin::Form-->
                <form class=\"form w-100\" novalidate=\"novalidate\" method=\"post\"  id=\"kt_password_reset_form\">

                    <!--begin::Heading-->
                    <div class=\"text-center mb-10\">
                        <!--begin::Title-->
                        <h1 class=\"text-dark mb-3\">رمزعبور خود را فراموش کرده اید؟</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class=\"text-gray-400 fw-bold fs-4\">{{ type}} خود را برای بازیابی وارد نمایید</div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class=\"fv-row mb-10\">
                        <label class=\"form-label fw-bolder text-gray-900 fs-6\">{{ type }}</label>
                        <input class=\"form-control form-control-solid\" type=\"{{ item }}\" placeholder=\"\" name=\"{{ item }}\" autocomplete=\"off\" />
                    </div>
                    <!--end::Input group-->
                    {% for item in app.flashes('notice') %}
                        <div class=\"m-4 mb-5\" style=\"direction: ltr\">
                                <span class=\"text-danger\">{{ type }}</span>
                        </div>
                    {% endfor %}
                    <!--begin::Actions-->
                    <div class=\"d-flex flex-wrap justify-content-center pb-lg-0\">
                        <button type=\"submit\"   class=\"btn btn-lg btn-primary fw-bolder me-4\">
                            <span class=\"indicator-label\">ثبت</span>
                        </button>
                        <a href=\"{{ path('searching_app') }}\" class=\"btn btn-lg btn-light-primary fw-bolder\">انصراف</a>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class=\"d-flex flex-center flex-column-auto p-10\">
            <!--begin::Links-->
            <div class=\"d-flex align-items-center fw-bold fs-6\">
                <a href=\"https://keenthemes.com/faqs\" class=\"text-muted text-hover-primary px-2\" target=\"_blank\">درباره ی ما</a>
                <a href=\"https://keenthemes.com/support\" class=\"text-muted text-hover-primary px-2\" target=\"_blank\">پشتیبانی</a>
                <a href=\"https://1.envato.market/EA4JP\" class=\"text-muted text-hover-primary px-2\" target=\"_blank\">خرید</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Password reset-->
</div>
<!--end::Main-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src=\"assets/plugins/global/plugins.bundle.js\"></script>
<script src=\"assets/js/scripts.bundle.js\"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src=\"assets/js/custom/authentication/password-reset/password-reset.js\"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>", "security/Validation.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\security\\Validation.html.twig");
    }
}
