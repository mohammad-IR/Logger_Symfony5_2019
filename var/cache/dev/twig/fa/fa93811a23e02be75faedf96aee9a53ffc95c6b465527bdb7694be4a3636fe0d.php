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

/* User/Logger_html/packages/edit_package.html.twig */
class __TwigTemplate_04279c2ac7d256ab38f37fa93fe7d78f88b4b67a9a9eda83e2547c27552354f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/edit_package.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/edit_package.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "User/Logger_html/packages/edit_package.html.twig", 1);
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
        echo "    تغییر ویژگی های پکیج
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
        echo "    <div class=\"col-12 mr-5\" id=\"kt_modal_new_target\" style=\"display: block;\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog modal-dialog-centered mw-650px\">
            <!--begin::Modal content-->
            <div class=\"modal-content rounded\">
                <!--begin::Modal body-->
                <div class=\"modal-body scroll-y px-10 px-lg-15 pt-0 pb-15\">
                    <!--begin:Fیاm-->
                    ";
        // line 16
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["class" => "form fv-plugins-bootstrap5 fv-plugins-framework", "method" => "post"]]);
        echo "
                    <!--begin::Heading-->
                    <div class=\"mb-13 text-center\">
                        <!--begin::Title-->
                        <h1 class=\"mb-3\">تغییر یک پکیج</h1>
                        <!--end::Title-->
                        <!--begin::توضیحات-->
                        <div class=\"text-gray-400 fw-bold fs-5\">در صورتی که به جزئیات نیاز دارید
                            <a href=\"#\" class=\"fw-bolder link-primary\">کلیک کنید.</a>.
                        </div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class=\"d-flex flex-column mb-8 fv-row fv-plugins-icon-container\">
                        <!--begin::برچسب-->
                        <label class=\"d-flex align-items-center fs-6 fw-bold mb-2\">
                            <span class=\"required\">نام پکبج</span>
                        </label>
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35)]]);
        echo "
                        <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                    </div>
                    <div class=\"row g-9 mb-8\">
                        <!--begin::Col-->
                        <div class=\"col-md-6 fv-row\">
                             <label class=\"required fs-6 fw-bold mb-2\">قیمت</label>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "price", [], "any", false, false, false, 42), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 42, $this->source); })()), "price", [], "any", false, false, false, 42)]]);
        echo "
                        </div>
                        <div class=\"col-md-6 fv-row\">
                            <label class=\"required fs-6 fw-bold mb-2\">تعداد مجاز گذارش ها</label>
                            <div class=\"position-relative d-flex align-items-center\">
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "limit_report", [], "any", false, false, false, 47), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 47, $this->source); })()), "limitReport", [], "any", false, false, false, 47)]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex flex-column mb-8\">
                        <label class=\"fs-6 fw-bold mb-2\">ویژگی های پکبج</label>
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "number_app", [], "any", false, false, false, 53), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 53, $this->source); })()), "numberApp", [], "any", false, false, false, 53)]]);
        echo "

                    </div>
                    <div class=\"text-center\">
                        <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_packages");
        echo "\"  class=\"btn btn-white me-3\">
                            انصراف
                        </a>
                        <button type=\"submit\"  class=\"btn btn-primary\">
                            <span class=\"indicator-label\">ثبت</span>
                            <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                        </button>
                    </div>
                    <!--end::عملیات-->
                    <div></div>
                    ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
                    <!--end:Fیاm-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/Logger_html/packages/edit_package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 68,  157 => 57,  150 => 53,  141 => 47,  133 => 42,  123 => 35,  100 => 16,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
    تغییر ویژگی های پکیج
{% endblock %}

{% block main %}
    <div class=\"col-12 mr-5\" id=\"kt_modal_new_target\" style=\"display: block;\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog modal-dialog-centered mw-650px\">
            <!--begin::Modal content-->
            <div class=\"modal-content rounded\">
                <!--begin::Modal body-->
                <div class=\"modal-body scroll-y px-10 px-lg-15 pt-0 pb-15\">
                    <!--begin:Fیاm-->
                    {# <form id=\"kt_modal_new_target_form\" class=\"form fv-plugins-bootstrap5 fv-plugins-framework\" action=\"#\" method=\"post\"> #}
                    {{ form_start(form, {'attr':{'class' : \"form fv-plugins-bootstrap5 fv-plugins-framework\", 'method' : 'post'}}) }}
                    <!--begin::Heading-->
                    <div class=\"mb-13 text-center\">
                        <!--begin::Title-->
                        <h1 class=\"mb-3\">تغییر یک پکیج</h1>
                        <!--end::Title-->
                        <!--begin::توضیحات-->
                        <div class=\"text-gray-400 fw-bold fs-5\">در صورتی که به جزئیات نیاز دارید
                            <a href=\"#\" class=\"fw-bolder link-primary\">کلیک کنید.</a>.
                        </div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class=\"d-flex flex-column mb-8 fv-row fv-plugins-icon-container\">
                        <!--begin::برچسب-->
                        <label class=\"d-flex align-items-center fs-6 fw-bold mb-2\">
                            <span class=\"required\">نام پکبج</span>
                        </label>
                        {{ form_row(form.name,{'attr':{'value':package.name}}) }}
                        <div class=\"fv-plugins-message-container invalid-feedback\"></div>
                    </div>
                    <div class=\"row g-9 mb-8\">
                        <!--begin::Col-->
                        <div class=\"col-md-6 fv-row\">
                             <label class=\"required fs-6 fw-bold mb-2\">قیمت</label>
                            {{ form_row(form.price, {'attr' : {'value' : package.price}}) }}
                        </div>
                        <div class=\"col-md-6 fv-row\">
                            <label class=\"required fs-6 fw-bold mb-2\">تعداد مجاز گذارش ها</label>
                            <div class=\"position-relative d-flex align-items-center\">
                                {{ form_row(form.limit_report, {'attr' : {'value' : package.limitReport}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex flex-column mb-8\">
                        <label class=\"fs-6 fw-bold mb-2\">ویژگی های پکبج</label>
                        {{ form_row(form.number_app, {'attr' : {'value' : package.numberApp}}) }}

                    </div>
                    <div class=\"text-center\">
                        <a href=\"{{ path('list_packages') }}\"  class=\"btn btn-white me-3\">
                            انصراف
                        </a>
                        <button type=\"submit\"  class=\"btn btn-primary\">
                            <span class=\"indicator-label\">ثبت</span>
                            <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                        </button>
                    </div>
                    <!--end::عملیات-->
                    <div></div>
                    {{ form_end(form) }}
                    <!--end:Fیاm-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
{% endblock %}", "User/Logger_html/packages/edit_package.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\packages\\edit_package.html.twig");
    }
}
