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

/* User/Logger_html/packages/add_package.html.twig */
class __TwigTemplate_96eb0f1e9804b6e9119c9795078c0e6dd8e5bc456f41c5c49c1699f58e0090d7 extends Template
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
        return "User/doshbord_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/add_package.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/add_package.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "User/Logger_html/packages/add_package.html.twig", 1);
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
        echo "    افزودن پکیج جدید
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
        echo "    <div class=\"container col\" id=\"kt_modal_new_address\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog modal-dialog-centered mw-650px\" data-select2-id=\"select2-data-323-mqn7\">
            <!--begin::Modal content-->
            <div class=\"modal-content\" data-select2-id=\"select2-data-322-vn5l\">
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "form fv-plugins-bootstrap5 fv-plugins-framework", "method" => "post"]]);
        echo "
                    <div class=\"modal-body py-10 px-lg-17\">
                        <div class=\"scroll-y me-n7 pe-7\" id=\"kt_modal_new_address_scroll\" data-kt-scroll=\"true\" data-kt-scroll-activate=\"{default: false, lg: true}\" data-kt-scroll-max-height=\"auto\" data-kt-scroll-dependencies=\"#kt_modal_new_address_header\" data-kt-scroll-wrappers=\"#kt_modal_new_address_scroll\" data-kt-scroll-offset=\"300px\" style=\"max-height: 350px;\" data-select2-id=\"select2-data-kt_modal_new_address_scroll\">
                            <div class=\"notice d-flex bg-light-warning rounded bیاder-warning bیاder bیاder-dashed mb-9 p-6\">
                                <span class=\"svg-icon svg-icon-2tx svg-icon-warning me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"10\"></circle>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"11\" y=\"7\" width=\"2\" height=\"8\" rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"11\" y=\"16\" width=\"2\" height=\"2\" rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                    ثبت پکیج جدید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            </div>
                            <div class=\"row mb-5\">
                                <div class=\"col-md-6 fv-row fv-plugins-icon-container\">
                                    <label class=\"required fs-5 fw-bold mb-2\">نام</label>
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), 'row');
        echo "
                                    <div class=\"fv-plugins-message-container invalid-feedback\">
                                    </div>
                                    <div class=\"fv-plugins-message-container invalid-feedback\"></div></div>
                                <div class=\"col-md-6 fv-row fv-plugins-icon-container\">
                                    <label class=\"required fs-5 fw-bold mb-2\">قیمت </label>
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), 'row');
        echo "
                                    <div class=\"fv-plugins-message-container invalid-feedback\"></div></div>
                            </div>
                            <div class=\"d-flex flex-column mb-5 fv-row fv-plugins-icon-container\">
                                <label class=\"required fs-5 fw-bold mb-2\">تعداد مجاز اپ های را وارد کتید</label>
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "number_app", [], "any", false, false, false, 39), 'row');
        echo "
                                <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                            </div>
                            <div class=\"d-flex flex-column mb-5 fv-row fv-plugins-icon-container\">
                                <label class=\"required fs-5 fw-bold mb-2\">تعداد دفعات
                                </label>
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "limit_report", [], "any", false, false, false, 45), 'row');
        echo "
                                <div class=\"fv-plugins-message-container invalid-feedback\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer flex-center\">
                        <button type=\"ریست\" id=\"kt_modal_new_address_cancel\" class=\"btn btn-white me-3\">صرف نظر</button>
                        <button type=\"submit\" id=\"kt_modal_new_address_submit\" class=\"btn btn-primary\">
                            <span class=\"indicator-label\">ثبت</span>
                            <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                        </button>
                    </div>
                ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/Logger_html/packages/add_package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 59,  142 => 45,  133 => 39,  125 => 34,  116 => 28,  97 => 12,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
    افزودن پکیج جدید
{% endblock %}

{% block main %}
    <div class=\"container col\" id=\"kt_modal_new_address\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog modal-dialog-centered mw-650px\" data-select2-id=\"select2-data-323-mqn7\">
            <!--begin::Modal content-->
            <div class=\"modal-content\" data-select2-id=\"select2-data-322-vn5l\">
                    {{ form_start(form, {'attr' : {'class': \"form fv-plugins-bootstrap5 fv-plugins-framework\", 'method':'post'}}) }}
                    <div class=\"modal-body py-10 px-lg-17\">
                        <div class=\"scroll-y me-n7 pe-7\" id=\"kt_modal_new_address_scroll\" data-kt-scroll=\"true\" data-kt-scroll-activate=\"{default: false, lg: true}\" data-kt-scroll-max-height=\"auto\" data-kt-scroll-dependencies=\"#kt_modal_new_address_header\" data-kt-scroll-wrappers=\"#kt_modal_new_address_scroll\" data-kt-scroll-offset=\"300px\" style=\"max-height: 350px;\" data-select2-id=\"select2-data-kt_modal_new_address_scroll\">
                            <div class=\"notice d-flex bg-light-warning rounded bیاder-warning bیاder bیاder-dashed mb-9 p-6\">
                                <span class=\"svg-icon svg-icon-2tx svg-icon-warning me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"10\"></circle>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"11\" y=\"7\" width=\"2\" height=\"8\" rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"11\" y=\"16\" width=\"2\" height=\"2\" rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                    ثبت پکیج جدید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            </div>
                            <div class=\"row mb-5\">
                                <div class=\"col-md-6 fv-row fv-plugins-icon-container\">
                                    <label class=\"required fs-5 fw-bold mb-2\">نام</label>
                                    {{ form_row(form.name)}}
                                    <div class=\"fv-plugins-message-container invalid-feedback\">
                                    </div>
                                    <div class=\"fv-plugins-message-container invalid-feedback\"></div></div>
                                <div class=\"col-md-6 fv-row fv-plugins-icon-container\">
                                    <label class=\"required fs-5 fw-bold mb-2\">قیمت </label>
                                    {{ form_row(form.price) }}
                                    <div class=\"fv-plugins-message-container invalid-feedback\"></div></div>
                            </div>
                            <div class=\"d-flex flex-column mb-5 fv-row fv-plugins-icon-container\">
                                <label class=\"required fs-5 fw-bold mb-2\">تعداد مجاز اپ های را وارد کتید</label>
                                {{ form_row(form.number_app) }}
                                <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                            </div>
                            <div class=\"d-flex flex-column mb-5 fv-row fv-plugins-icon-container\">
                                <label class=\"required fs-5 fw-bold mb-2\">تعداد دفعات
                                </label>
                                {{ form_row(form.limit_report) }}
                                <div class=\"fv-plugins-message-container invalid-feedback\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer flex-center\">
                        <button type=\"ریست\" id=\"kt_modal_new_address_cancel\" class=\"btn btn-white me-3\">صرف نظر</button>
                        <button type=\"submit\" id=\"kt_modal_new_address_submit\" class=\"btn btn-primary\">
                            <span class=\"indicator-label\">ثبت</span>
                            <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                        </button>
                    </div>
                {{ form_end(form)}}
            </div>
        </div>
    </div>
{% endblock %}", "User/Logger_html/packages/add_package.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\packages\\add_package.html.twig");
    }
}
