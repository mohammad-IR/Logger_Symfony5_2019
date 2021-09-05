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

/* User/Logger_html/Applications/add_applications.html.twig */
class __TwigTemplate_e6a04ecdd9ef3ec6010f26f269fe9ac959ef55230cb1245309b242c6ce8f22b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "User/doshbord_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/Applications/add_applications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/Applications/add_applications.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "User/Logger_html/Applications/add_applications.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    افزدودن اپلیکیشن
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "<div class=\"post d-flex flex-column-fluid\" id=\"kt_post\">
    <!--begin::Container-->
    <div id=\"kt_content_container\" class=\"container\">
        <!--begin::Card-->
        <div class=\"card\">
            <!--begin::Card body-->
            <div class=\"card-body p-0\">
                <!--begin::Heading-->
                <div class=\"card-px text-center py-20 my-10\">
                    <!--begin::Title-->
                    <h2 class=\"fs-2x fw-bolder mb-10\">اضافه کردم پکیج</h2>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <a href=\"#\" class=\"btn btn-primary er fs-6 px-8 py-4\" data-bs-toggle=\"modal\"
                       data-bs-target=\"#kt_modal_new_target\">افزودن </a>
                    <!--end::Action-->
                </div>
                <!--end::Heading-->
                <!--begin::Illustration-->
                <div class=\"text-center px-5\">
                    <img src=\"/assets/media/illustrations/statistics.png\" alt=\"\" class=\"mw-100 mh-300px\">
                </div>
                <!--end::Illustration-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modal - هدف جدید-->
        <div class=\"modal fade\" id=\"kt_modal_new_target\" tabindex=\"-1\" aria-hidden=\"true\">
            <!--begin::Modal dialog-->
            <div class=\"modal-dialog modal-dialog-centered mw-650px\">
                <!--begin::Modal content-->
                <div class=\"modal-content rounded\">
                    <!--begin::Modal header-->
                    <div class=\"modal-header pb-0 bیاder-0 justify-content-end\">
                        <!--begin::Close-->
                        <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                            <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                                               fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\"
                                                                      rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                      transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                                                      x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class=\"modal-body scroll-y px-10 px-lg-15 pt-0 pb-15\">
                        <br>
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "                            <div class=\"justify-content-center bg-light border-5\">
                                <span class=\"text-muted\">";
            // line 69
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
                        <!--begin:Fیاm-->
                        ";
        // line 75
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_start', ["attr" => ["id" => "kt_modal_new_target_form", "class" => "form fv-plugins-bootstrap5 fv-plugins-framework"]]);
        // line 76
        echo "
                        <div class=\"mb-13 text-center\">
                            <!--begin::Title-->
                            <h1 class=\"mb-3\">تنظیم اولین هدف</h1>
                            <br>
                            <br>
                            <div class=\"d-flex flex-column mb-8 fv-row fv-plugins-icon-container\">
                                <!--begin::برچسب-->
                                <label class=\"d-flex align-items-center fs-6 fw-bold mb-2\">
                                    <span class=\"required\">نام اپلیکیشن</span>
                                    <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\" title=\"\"
                                       data-bs-original-title=\"نام اپلیکیشین رو وارد کنید\"
                                       aria-label=\"یک نام هدف را برای استفاده و مرجع در آینده مشخص کنید\"></i>
                                </label>
                                <!--end::برچسب-->
                                ";
        // line 92
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92), 'row');
        echo "
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), 'errors');
        echo "
                                <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                            </div>
                            <div class=\"d-flex flex-column mb-8 fv-row fv-plugins-icon-container\">
                                <!--begin::برچسب-->
                                <label class=\"d-flex align-items-center fs-6 fw-bold mb-2\">
                                    <span class=\"required\">url اپلیکیشن</span>
                                    <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\" title=\"\"
                                       data-bs-original-title=\"url سایت رو وارد کنید.\"
                                       aria-label=\"یک نام هدف را برای استفاده و مرجع در آینده مشخص کنید\"></i>
                                </label>
                                <!--end::برچسب-->
                                ";
        // line 106
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "url", [], "any", false, false, false, 106), 'row');
        echo "
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "url", [], "any", false, false, false, 107), 'errors');
        echo "
                                <div class=\"fv-plugins-message-container invalid-feedback\">
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <button type=\"submit\" id=\"kt_modal_new_target_submit\" class=\"btn btn-primary\">
                                    <span class=\"indicator-label\">ثبت</span>
                                    <span class=\"indicator-progress\">لطفا صبر کنید
                                                            <span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                                </button>
                            </div>
                            ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
        echo "
                            <!--end:Fیاm-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - هدف جدید-->
        </div>
        <!--end::Container-->
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 133
        echo "    <script>
        document.getElementById('add_application').className = 'menu-link active';
        document.getElementById('Applications_scrole').className = \"menu-item menu-accordion hover show\";
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/Logger_html/Applications/add_applications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 133,  256 => 132,  232 => 118,  218 => 107,  213 => 106,  198 => 93,  193 => 92,  176 => 76,  173 => 75,  169 => 72,  160 => 69,  157 => 68,  153 => 67,  91 => 7,  81 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"User/doshbord_user.html.twig\" %}
{% block title %}
    افزدودن اپلیکیشن
{% endblock %}

{% block main %}
<div class=\"post d-flex flex-column-fluid\" id=\"kt_post\">
    <!--begin::Container-->
    <div id=\"kt_content_container\" class=\"container\">
        <!--begin::Card-->
        <div class=\"card\">
            <!--begin::Card body-->
            <div class=\"card-body p-0\">
                <!--begin::Heading-->
                <div class=\"card-px text-center py-20 my-10\">
                    <!--begin::Title-->
                    <h2 class=\"fs-2x fw-bolder mb-10\">اضافه کردم پکیج</h2>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <a href=\"#\" class=\"btn btn-primary er fs-6 px-8 py-4\" data-bs-toggle=\"modal\"
                       data-bs-target=\"#kt_modal_new_target\">افزودن </a>
                    <!--end::Action-->
                </div>
                <!--end::Heading-->
                <!--begin::Illustration-->
                <div class=\"text-center px-5\">
                    <img src=\"/assets/media/illustrations/statistics.png\" alt=\"\" class=\"mw-100 mh-300px\">
                </div>
                <!--end::Illustration-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modal - هدف جدید-->
        <div class=\"modal fade\" id=\"kt_modal_new_target\" tabindex=\"-1\" aria-hidden=\"true\">
            <!--begin::Modal dialog-->
            <div class=\"modal-dialog modal-dialog-centered mw-650px\">
                <!--begin::Modal content-->
                <div class=\"modal-content rounded\">
                    <!--begin::Modal header-->
                    <div class=\"modal-header pb-0 bیاder-0 justify-content-end\">
                        <!--begin::Close-->
                        <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                            <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                                               fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\"
                                                                      rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                      transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                                                      x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class=\"modal-body scroll-y px-10 px-lg-15 pt-0 pb-15\">
                        <br>
                        {% for message in app.flashes('notice') %}
                            <div class=\"justify-content-center bg-light border-5\">
                                <span class=\"text-muted\">{{ message }}</span>
                            </div>
                        {% endfor %}

                        <!--begin:Fیاm-->
                        {# <form id=\"kt_modal_new_target_form\" class=\"form fv-plugins-bootstrap5 fv-plugins-framework\" action=\"#\"> #}
                        {{ form_start(form,
                            {'attr':{ 'id': 'kt_modal_new_target_form', 'class': 'form fv-plugins-bootstrap5 fv-plugins-framework' }}) }}
                        <div class=\"mb-13 text-center\">
                            <!--begin::Title-->
                            <h1 class=\"mb-3\">تنظیم اولین هدف</h1>
                            <br>
                            <br>
                            <div class=\"d-flex flex-column mb-8 fv-row fv-plugins-icon-container\">
                                <!--begin::برچسب-->
                                <label class=\"d-flex align-items-center fs-6 fw-bold mb-2\">
                                    <span class=\"required\">نام اپلیکیشن</span>
                                    <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\" title=\"\"
                                       data-bs-original-title=\"نام اپلیکیشین رو وارد کنید\"
                                       aria-label=\"یک نام هدف را برای استفاده و مرجع در آینده مشخص کنید\"></i>
                                </label>
                                <!--end::برچسب-->
                                {# <input type=\"text\" class=\"form-control form-control-solid\" placeholder=\"Enter عنوان هدف\" name=\"target_title\"> #}
                                {{ form_row(form.name) }}
                                {{ form_errors(form.name) }}
                                <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                            </div>
                            <div class=\"d-flex flex-column mb-8 fv-row fv-plugins-icon-container\">
                                <!--begin::برچسب-->
                                <label class=\"d-flex align-items-center fs-6 fw-bold mb-2\">
                                    <span class=\"required\">url اپلیکیشن</span>
                                    <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\" title=\"\"
                                       data-bs-original-title=\"url سایت رو وارد کنید.\"
                                       aria-label=\"یک نام هدف را برای استفاده و مرجع در آینده مشخص کنید\"></i>
                                </label>
                                <!--end::برچسب-->
                                {# <input type=\"text\" class=\"form-control form-control-solid\" placeholder=\"Enter عنوان هدف\" name=\"target_title\"> #}
                                {{ form_row(form.url) }}
                                {{ form_errors(form.url) }}
                                <div class=\"fv-plugins-message-container invalid-feedback\">
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <button type=\"submit\" id=\"kt_modal_new_target_submit\" class=\"btn btn-primary\">
                                    <span class=\"indicator-label\">ثبت</span>
                                    <span class=\"indicator-progress\">لطفا صبر کنید
                                                            <span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                                </button>
                            </div>
                            {{ form_end(form) }}
                            <!--end:Fیاm-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - هدف جدید-->
        </div>
        <!--end::Container-->
    </div>
    {% endblock %}
{% block javascript %}
    <script>
        document.getElementById('add_application').className = 'menu-link active';
        document.getElementById('Applications_scrole').className = \"menu-item menu-accordion hover show\";
    </script>
{% endblock %}", "User/Logger_html/Applications/add_applications.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\Applications\\add_applications.html.twig");
    }
}
