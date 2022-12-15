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

/* User/Logger_html/Applications/edit&detail_app.html.twig */
class __TwigTemplate_57d9f13f3026bb8a871f060503232a388e5816065fa05b9ca21685944be3e45d extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/User/doshbord_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/Applications/edit&detail_app.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/Applications/edit&detail_app.html.twig"));

        $this->parent = $this->loadTemplate("/User/doshbord_user.html.twig", "User/Logger_html/Applications/edit&detail_app.html.twig", 1);
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
        echo "   تغییر اپلیکیشن
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
        echo "    <!-- Model -->
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-7\" id=\"kt_modal_create_api_key\">
                <!--begin::Modal dialog-->
                <div class=\"modal-dialog  modal-dialog-centered mw-1000px\">
                    <!--begin::Modal content-->
                    <div class=\"modal-content\">
                        <!--begin::Modal header-->
                        <div class=\"modal-header\" id=\"kt_modal_create_api_key_header\">
                            <!--begin::Modal title-->
                            <h2>ایجاد کردن کلید دسترسی</h2>

                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Fیاm-->
                        ";
        // line 25
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
                        <!--begin::Modal body-->
                        <div class=\"modal-body py-10 px-lg-17\">
                            <!--begin::Scroll-->
                            <div class=\"scroll-y me-n7 pe-7\" id=\"kt_modal_create_api_key_scroll\"
                                 data-kt-scroll=\"true\"
                                 data-kt-scroll-activate=\"{default: false, lg: true}\"
                                 data-kt-scroll-max-height=\"auto\"
                                 data-kt-scroll-dependencies=\"#kt_modal_create_api_key_header\"
                                 data-kt-scroll-wrappers=\"#kt_modal_create_api_key_scroll\"
                                 data-kt-scroll-offset=\"300px\"
                                 style=\"\">
                                <!--begin::Input group-->
                                <div class=\"mb-5 fv-row fv-plugins-icon-container\">
                                    <!--begin::برچسب-->
                                    <label class=\"required fs-5 fw-bold mb-2\">نام سایت</label>
                                    <!--end::برچسب-->
                                    <!--begin::Input-->
                                    ";
        // line 44
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control form-control-solid", "value" =>         // line 46
(isset($context["name_app"]) || array_key_exists("name_app", $context) ? $context["name_app"] : (function () { throw new RuntimeError('Variable "name_app" does not exist.', 46, $this->source); })())]]);
        // line 47
        echo "
                                    <!--end::Input-->
                                    <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                                </div>
                            </div>
                            <div class=\"scroll-y me-n7 pe-7\" id=\"kt_modal_create_api_key_scroll\"
                                 data-kt-scroll=\"true\"
                                 data-kt-scroll-activate=\"{default: false, lg: true}\"
                                 data-kt-scroll-max-height=\"auto\"
                                 data-kt-scroll-dependencies=\"#kt_modal_create_api_key_header\"
                                 data-kt-scroll-wrappers=\"#kt_modal_create_api_key_scroll\"
                                 data-kt-scroll-offset=\"300px\"
                                 style=\"\">
                                <!--begin::Input group-->
                                <div class=\"mb-5 fv-row fv-plugins-icon-container\">
                                    <!--begin::برچسب-->
                                    <label class=\"required fs-5 fw-bold mb-2\">url سایت</label>
                                    <!--end::برچسب-->
                                    <!--begin::Input-->
                                    ";
        // line 67
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "url", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-control form-control-solid", "value" =>         // line 69
(isset($context["url_app"]) || array_key_exists("url_app", $context) ? $context["url_app"] : (function () { throw new RuntimeError('Variable "url_app" does not exist.', 69, $this->source); })())]]);
        // line 70
        echo "
                                    <!--end::Input-->
                                    <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                                </div>
                            </div>
                            <div class=\"collapse\" id=\"package_history\"></div>
                            <!--end::Scroll-->
                        </div>
                        <!--begin::Modal footer-->
                        <div class=\"modal-footer flex-center\">
                            <!--begin::Button-->
                            <button type=\"ریست\" id=\"kt_modal_create_api_key_cancel\" class=\"btn btn-white me-3\">صرف
                                نظر
                            </button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type=\"submit\" id=\"kt_modal_create_api_key_submit\" class=\"btn btn-primary\">
                                <span class=\"indicator-label\">ثبت</span>
                                <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/Logger_html/Applications/edit&detail_app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 98,  160 => 70,  158 => 69,  156 => 67,  135 => 47,  133 => 46,  131 => 44,  109 => 25,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/User/doshbord_user.html.twig\" %}
{% block title %}
   تغییر اپلیکیشن
{% endblock %}

{% block main %}
    <!-- Model -->
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-7\" id=\"kt_modal_create_api_key\">
                <!--begin::Modal dialog-->
                <div class=\"modal-dialog  modal-dialog-centered mw-1000px\">
                    <!--begin::Modal content-->
                    <div class=\"modal-content\">
                        <!--begin::Modal header-->
                        <div class=\"modal-header\" id=\"kt_modal_create_api_key_header\">
                            <!--begin::Modal title-->
                            <h2>ایجاد کردن کلید دسترسی</h2>

                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Fیاm-->
                        {# <form id=\"kt_modal_create_api_key_form\" class=\"form fv-plugins-bootstrap5 fv-plugins-framework\" action=\"{{ path('add_app') }}\"> #}
                        {{ form_start(form) }}
                        <!--begin::Modal body-->
                        <div class=\"modal-body py-10 px-lg-17\">
                            <!--begin::Scroll-->
                            <div class=\"scroll-y me-n7 pe-7\" id=\"kt_modal_create_api_key_scroll\"
                                 data-kt-scroll=\"true\"
                                 data-kt-scroll-activate=\"{default: false, lg: true}\"
                                 data-kt-scroll-max-height=\"auto\"
                                 data-kt-scroll-dependencies=\"#kt_modal_create_api_key_header\"
                                 data-kt-scroll-wrappers=\"#kt_modal_create_api_key_scroll\"
                                 data-kt-scroll-offset=\"300px\"
                                 style=\"\">
                                <!--begin::Input group-->
                                <div class=\"mb-5 fv-row fv-plugins-icon-container\">
                                    <!--begin::برچسب-->
                                    <label class=\"required fs-5 fw-bold mb-2\">نام سایت</label>
                                    <!--end::برچسب-->
                                    <!--begin::Input-->
                                    {# <input type=\"text\" class=\"form-control form-control-solid\" placeholder=\"\" value=\"{{ name_app }}\" name=\"name\"> #}
                                    {{ form_row(form.name,
                                        {
                                            'attr':{\"class\":\"form-control form-control-solid\", \"value\": name_app }
                                        }) }}
                                    <!--end::Input-->
                                    <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                                </div>
                            </div>
                            <div class=\"scroll-y me-n7 pe-7\" id=\"kt_modal_create_api_key_scroll\"
                                 data-kt-scroll=\"true\"
                                 data-kt-scroll-activate=\"{default: false, lg: true}\"
                                 data-kt-scroll-max-height=\"auto\"
                                 data-kt-scroll-dependencies=\"#kt_modal_create_api_key_header\"
                                 data-kt-scroll-wrappers=\"#kt_modal_create_api_key_scroll\"
                                 data-kt-scroll-offset=\"300px\"
                                 style=\"\">
                                <!--begin::Input group-->
                                <div class=\"mb-5 fv-row fv-plugins-icon-container\">
                                    <!--begin::برچسب-->
                                    <label class=\"required fs-5 fw-bold mb-2\">url سایت</label>
                                    <!--end::برچسب-->
                                    <!--begin::Input-->
                                    {# <input type=\"text\" class=\"form-control form-control-solid\" placeholder=\"\" value=\"{{ url_app }}\" name=\"name\"> #}
                                    {{ form_row(form.url,
                                        {
                                            'attr':{\"class\":\"form-control form-control-solid\", \"value\": url_app }
                                        }) }}
                                    <!--end::Input-->
                                    <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                                </div>
                            </div>
                            <div class=\"collapse\" id=\"package_history\"></div>
                            <!--end::Scroll-->
                        </div>
                        <!--begin::Modal footer-->
                        <div class=\"modal-footer flex-center\">
                            <!--begin::Button-->
                            <button type=\"ریست\" id=\"kt_modal_create_api_key_cancel\" class=\"btn btn-white me-3\">صرف
                                نظر
                            </button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type=\"submit\" id=\"kt_modal_create_api_key_submit\" class=\"btn btn-primary\">
                                <span class=\"indicator-label\">ثبت</span>
                                <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(form) }}
{% endblock %}

", "User/Logger_html/Applications/edit&detail_app.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\Applications\\edit&detail_app.html.twig");
    }
}
