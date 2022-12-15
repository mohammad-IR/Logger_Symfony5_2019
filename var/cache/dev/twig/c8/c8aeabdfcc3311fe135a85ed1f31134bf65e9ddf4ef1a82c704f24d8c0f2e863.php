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

/* article/list_article.html.twig */
class __TwigTemplate_5c337f8bfcdce4c5f45722cdfd1278975e6e9fcc21ad34ee604d00a20e97b84e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/list_article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/list_article.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "article/list_article.html.twig", 1);
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
        echo "    لیست مقاله ها
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card\">
                    <!--begin::Card header-->
                    <div class=\"card-header bیاder-0 pt-6\">
                        <!--begin::Card toolbar-->
                        <div class=\"card-toolbar\">
                            <!--begin::Group actions-->
                            <div class=\"d-flex justify-content-end align-items-center d-none\"
                                 data-kt-مشتری-table-toolbar=\"selected\">
                                <div class=\"fw-bolder me-5\">
                                    <span class=\"me-2\" data-kt-مشتری-table-select=\"selected_count\"></span>انتخابed
                                </div>
                                <button type=\"button\" class=\"btn btn-danger\"
                                        data-kt-مشتری-table-select=\"delete_selected\">حذف انتخابed
                                </button>
                            </div>
                            <!--end::Group actions-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class=\"card-body pt-0\">
                        <!--begin::Table-->
                        <div id=\"kt_customers_table_wrapper\" class=\"dataTables_wrapper dt-bootstrap4 no-footer\">
                            <div class=\"table-responsive\">
                                <table class=\"table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer\"
                                       id=\"kt_customers_table\" role=\"grid\">
                                    <!--begin::Table head-->
                                    <thead>
                                    <!--begin::Table row-->
                                    <tr class=\"text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0\" role=\"row\">

                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"مشتری نام: activate to sort column ascending\"
                                            style=\"width: 140.675px;\">title
                                        </th>
                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"ایمیل: activate to sort column ascending\"
                                            style=\"width: 228.262px;\">وضعیت انتشار
                                        </th>
                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\" aria-label=\"شرکت: activate to sort column ascending\"
                                            style=\"width: 170.212px;\">دسته بندی
                                        </th>
                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"روش پرداخت: activate to sort column ascending\"
                                            style=\"width: 148.525px;\">نویسنده
                                        </th>
                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"زمان ایجاد تاریخ: activate to sort column ascending\"
                                            style=\"width: 191.337px;\">زمان انتشار
                                        </th>
                                        <th class=\"text-end min-w-70px sorting_disabled\" rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"عملیات\" style=\"width: 113.688px;\">عملیات
                                        </th>
                                    </tr>
                                    <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class=\"fw-bold text-gray-600\">
                                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_article"]) || array_key_exists("list_article", $context) ? $context["list_article"] : (function () { throw new RuntimeError('Variable "list_article" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 75
            echo "                                    <tr class=\"even\">
                                        <!--begin::نام=-->
                                        <td>
                                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"
                                               class=\"text-gray-800 text-hover-primary mb-1\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 79), "html", null, true);
            echo "</a>
                                        </td>
                                        <!--end::نام=-->
                                        <td>
                                            ";
            // line 83
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "publish", [], "any", false, false, false, 83), true))) {
                // line 84
                echo "                                            <div class=\"badge badge-light-success\">منتشر شده</div>
                                            ";
            } else {
                // line 86
                echo "                                            <div class=\"badge badge-light-danger\">منتشر نشده</div>
                                            ";
            }
            // line 88
            echo "                                        </td>
                                        <!--begin::شرکت=-->
                                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                        <!--end::شرکت=-->
                                        <!--begin::روش پرداخت=-->
                                        <td data-filter=\"visa\">
                                            ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "auther", [], "any", false, false, false, 94), "username", [], "any", false, false, false, 94), "html", null, true);
            echo "
                                        </td>
                                        <!--end::روش پرداخت=-->
                                        <!--begin::تاریخ=-->
                                        <td data-order=\"2020-08-18T15:34:00+04:30\">";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 98), "d,M,Y"), "html", null, true);
            echo "</td>
                                        <!--end::تاریخ=-->
                                        <!--begin::Action=-->
                                        <td class=\"text-end\">
                                            <a href=\"#\" class=\"btn btn-sm btn-light btn-active-light-primary\"
                                               data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\"
                                               data-kt-menu-flip=\"top-end\">عملیات
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                                                <span class=\"svg-icon svg-icon-5 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                 xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                                 height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                   fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"></polygon>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z\"
                                                                          fill=\"#000000\" fill-rule=\"nonzero\"
                                                                          transform=\"translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon--></a>
                                            <!--begin::Menu-->
                                            <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4\"
                                                 data-kt-menu=\"true\">
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\" class=\"menu-link px-3\">
                                                        ";
            // line 126
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "publish", [], "any", false, false, false, 126), true))) {
                // line 127
                echo "                                                            غیر فعال
                                                        ";
            } else {
                // line 129
                echo "                                                            فعال
                                                        ";
            }
            // line 131
            echo "                                                    </a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\" class=\"menu-link px-3\"
                                                       data-kt-مشتری-table-filter=\"delete_row\">حذف</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                        <!--end::Action=-->
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 160
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script>
        document.getElementById('list_artticle').className = 'menu-link active';
        document.getElementById('article_scrole').className = \"menu-item menu-accordion hover show\";
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/list_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 160,  298 => 159,  276 => 146,  260 => 136,  253 => 131,  249 => 129,  245 => 127,  243 => 126,  239 => 125,  209 => 98,  202 => 94,  195 => 90,  191 => 88,  187 => 86,  183 => 84,  181 => 83,  174 => 79,  170 => 78,  165 => 75,  161 => 74,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
    لیست مقاله ها
{% endblock %}
{% block main %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card\">
                    <!--begin::Card header-->
                    <div class=\"card-header bیاder-0 pt-6\">
                        <!--begin::Card toolbar-->
                        <div class=\"card-toolbar\">
                            <!--begin::Group actions-->
                            <div class=\"d-flex justify-content-end align-items-center d-none\"
                                 data-kt-مشتری-table-toolbar=\"selected\">
                                <div class=\"fw-bolder me-5\">
                                    <span class=\"me-2\" data-kt-مشتری-table-select=\"selected_count\"></span>انتخابed
                                </div>
                                <button type=\"button\" class=\"btn btn-danger\"
                                        data-kt-مشتری-table-select=\"delete_selected\">حذف انتخابed
                                </button>
                            </div>
                            <!--end::Group actions-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class=\"card-body pt-0\">
                        <!--begin::Table-->
                        <div id=\"kt_customers_table_wrapper\" class=\"dataTables_wrapper dt-bootstrap4 no-footer\">
                            <div class=\"table-responsive\">
                                <table class=\"table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer\"
                                       id=\"kt_customers_table\" role=\"grid\">
                                    <!--begin::Table head-->
                                    <thead>
                                    <!--begin::Table row-->
                                    <tr class=\"text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0\" role=\"row\">

                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"مشتری نام: activate to sort column ascending\"
                                            style=\"width: 140.675px;\">title
                                        </th>
                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"ایمیل: activate to sort column ascending\"
                                            style=\"width: 228.262px;\">وضعیت انتشار
                                        </th>
                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\" aria-label=\"شرکت: activate to sort column ascending\"
                                            style=\"width: 170.212px;\">دسته بندی
                                        </th>
                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"روش پرداخت: activate to sort column ascending\"
                                            style=\"width: 148.525px;\">نویسنده
                                        </th>
                                        <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_customers_table\"
                                            rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"زمان ایجاد تاریخ: activate to sort column ascending\"
                                            style=\"width: 191.337px;\">زمان انتشار
                                        </th>
                                        <th class=\"text-end min-w-70px sorting_disabled\" rowspan=\"1\" colspan=\"1\"
                                            aria-label=\"عملیات\" style=\"width: 113.688px;\">عملیات
                                        </th>
                                    </tr>
                                    <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class=\"fw-bold text-gray-600\">
                                    {% for article in list_article %}
                                    <tr class=\"even\">
                                        <!--begin::نام=-->
                                        <td>
                                            <a href=\"{{ path('edit_article', { id : article.id}) }}\"
                                               class=\"text-gray-800 text-hover-primary mb-1\">{{ article.title }}</a>
                                        </td>
                                        <!--end::نام=-->
                                        <td>
                                            {% if article.publish == true %}
                                            <div class=\"badge badge-light-success\">منتشر شده</div>
                                            {% else %}
                                            <div class=\"badge badge-light-danger\">منتشر نشده</div>
                                            {% endif %}
                                        </td>
                                        <!--begin::شرکت=-->
                                        <td>{{ article.category.name }}</td>
                                        <!--end::شرکت=-->
                                        <!--begin::روش پرداخت=-->
                                        <td data-filter=\"visa\">
                                            {{ article.auther.username }}
                                        </td>
                                        <!--end::روش پرداخت=-->
                                        <!--begin::تاریخ=-->
                                        <td data-order=\"2020-08-18T15:34:00+04:30\">{{ article.date|date('d,M,Y') }}</td>
                                        <!--end::تاریخ=-->
                                        <!--begin::Action=-->
                                        <td class=\"text-end\">
                                            <a href=\"#\" class=\"btn btn-sm btn-light btn-active-light-primary\"
                                               data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\"
                                               data-kt-menu-flip=\"top-end\">عملیات
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                                                <span class=\"svg-icon svg-icon-5 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                 xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                                 height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                   fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"></polygon>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z\"
                                                                          fill=\"#000000\" fill-rule=\"nonzero\"
                                                                          transform=\"translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon--></a>
                                            <!--begin::Menu-->
                                            <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4\"
                                                 data-kt-menu=\"true\">
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"{{ path('change_status_article', {id : article.id}) }}\" class=\"menu-link px-3\">
                                                        {% if article.publish == true%}
                                                            غیر فعال
                                                        {% else %}
                                                            فعال
                                                        {% endif %}
                                                    </a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"{{ path('delete_article',{id : article.id}) }}\" class=\"menu-link px-3\"
                                                       data-kt-مشتری-table-filter=\"delete_row\">حذف</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                        <!--end::Action=-->
                                    </tr>
                                    {% endfor %}
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascript %}
{{ parent() }}
<script>
        document.getElementById('list_artticle').className = 'menu-link active';
        document.getElementById('article_scrole').className = \"menu-item menu-accordion hover show\";
</script>
{% endblock %}
", "article/list_article.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\article\\list_article.html.twig");
    }
}
