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

/* /User/Logger_html/Applications/list_app.html.twig */
class __TwigTemplate_fc1d320a5ca8fb5aca945a7663df905f295263aede7f3cf02e57bc54419e4f31 extends Template
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
        return "/User/doshbord_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/User/Logger_html/Applications/list_app.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/User/Logger_html/Applications/list_app.html.twig"));

        $this->parent = $this->loadTemplate("/User/doshbord_user.html.twig", "/User/Logger_html/Applications/list_app.html.twig", 1);
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
        echo "    لیست اپلیکیشن ها
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
        echo "    <div id=\"kt_content_container\" class=\"container\">
        <div class=\"card\">
            <!--begin::Card header-->
            <div class=\"card-header bیاder-0 pt-6\">
                <!--begin::Card title-->
                <div class=\"card-title\">
                    <!--begin::جستجو-->
                    <div class=\"d-flex align-items-center position-relative my-1\">
                        <!--begin::Svg Icon | path: icons/duotone/عمومی/جستجو.svg-->
                        <span class=\"svg-icon svg-icon-1 position-absolute ms-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                         height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                           fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"
                                                                  opacity=\"0.3\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                        <input type=\"text\" id=\"searching_list\" onkeyup=\"searching(this.value)\"
                               data-kt-subscription-table-filter=\"search\"
                               class=\"form-control form-control-solid w-250px ps-14\" placeholder=\"جستجو اشتراک ها\">
                    </div>
                    <!--end::جستجو-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class=\"card-toolbar\">
                    <!--begin::Toolbar-->
                    <div class=\"d-flex justify-content-end\" data-kt-subscription-table-toolbar=\"base\">
                        <!--begin::فیلتر-->
                        <!--begin::Menu 1-->
                        <div class=\"menu menu-sub menu-sub-dropdown w-300px w-md-325px\" data-kt-menu=\"true\">
                            <!--begin::Header-->
                            <div class=\"px-7 py-5\">
                                <div class=\"fs-5 text-dark fw-bolder\">تنظیمات فیلتر</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separatیا-->
                            <div class=\"separator bیاder-gray-200\"></div>
                            <!--end::Separatیا-->
                            <!--begin::Content-->
                            <div class=\"px-7 py-5\" data-kt-subscription-table-filter=\"form\">\\
                                <!--begin::Input group-->
                                <div class=\"mb-10\">
                                    <label class=\"form-label fs-6 fw-bold\">وضعیت</label>
                                    <select class=\"form-select form-select-solid fw-bolder select2-hidden-accessible\"
                                            data-kt-select2=\"true\" data-placeholder=\"انتخاب گزینه\"
                                            data-allow-clear=\"true\" data-kt-subscription-table-filter=\"status\"
                                            data-hide-search=\"true\" data-select2-id=\"select2-data-13-ybys\" tabindex=\"-1\"
                                            aria-hidden=\"true\">
                                        <option data-select2-id=\"select2-data-15-ijrq\"></option>
                                        <option value=\"فعال\">فعال</option>
                                        <option value=\"منقضی می شود\">منقضی می شود</option>
                                        <option value=\"معلق\">معلق</option>
                                    </select><span class=\"select2 select2-container select2-container--bootstrap5\"
                                                   dir=\"rtl\" data-select2-id=\"select2-data-14-burm\"
                                                   style=\"width: 100%;\"><span class=\"selection\"><span
                                                    class=\"select2-selection select2-selection--single form-select form-select-solid fw-bolder\"
                                                    role=\"combobox\" aria-haspopup=\"true\" aria-expanded=\"false\"
                                                    tabindex=\"0\" aria-disabled=\"false\"
                                                    aria-labelledby=\"select2-tx9m-container\"
                                                    aria-controls=\"select2-tx9m-container\"><span
                                                        class=\"select2-selection__rendered\" id=\"select2-tx9m-container\"
                                                        role=\"textbox\" aria-readonly=\"true\" title=\"انتخاب گزینه\"><span
                                                            class=\"select2-selection__placeholder\">انتخاب گزینه</span></span><span
                                                        class=\"select2-selection__arrow\" role=\"presentation\"><b
                                                            role=\"presentation\"></b></span></span></span><span
                                                class=\"dropdown-wrapper\" aria-hidden=\"true\"></span></span>
                                </div>
                                <!--end::Input group-->
                                <!--begin::عملیات-->
                                <div class=\"d-flex justify-content-end\">
                                    <button type=\"ریست\" class=\"btn btn-white btn-active-light-primary fw-bold me-2 px-6\"
                                            data-kt-menu-dismiss=\"true\" data-kt-subscription-table-filter=\"ریست\">ریست
                                    </button>
                                    <button type=\"submit\" class=\"btn btn-primary fw-bold px-6\"
                                            data-kt-menu-dismiss=\"true\" data-kt-subscription-table-filter=\"filter\">
                                        درخواست دادن
                                    </button>
                                </div>
                                <!--end::عملیات-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::اکسپورت-->
                        <!--begin::Add subscription-->
                        <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_app");
        echo "\" class=\"btn btn-primary\">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                            <span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                         height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"4\" y=\"11\" width=\"16\" height=\"2\"
                                                              rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                              transform=\"translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)\"
                                                              x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <!--end::Svg Icon-->افزودن اشتراک</a>
                        <!--end::Add subscription-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div class=\"d-flex justify-content-end align-items-center d-none\"
                         data-kt-subscription-table-toolbar=\"selected\">
                        <div class=\"fw-bolder me-5\">
                            <span class=\"me-2\" data-kt-subscription-table-select=\"selected_count\"></span>انتخابed
                        </div>
                        <button type=\"button\" class=\"btn btn-danger\"
                                data-kt-subscription-table-select=\"delete_selected\">حذف انتخابed
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
                <div id=\"kt_subscriptions_table_wrapper\" class=\"dataTables_wrapper dt-bootstrap4 no-footer\">
                    <div class=\"table-responsive\">
                        <table class=\"table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer\"
                               id=\"kt_subscriptions_table\" role=\"grid\">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class=\"text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0\" role=\"row\">
                                <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                    rowspan=\"1\" colspan=\"1\" aria-label=\"مشتری: activate to sort column ascending\"
                                    style=\"width: 116.363px;\">
                                    نام اپلیکیشن
                                </th>
                                <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                    rowspan=\"1\" colspan=\"1\" aria-label=\"مشتری: activate to sort column ascending\"
                                    style=\"width: 116.363px;\">
                                    وضعیت
                                </th>
                                <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                    rowspan=\"1\" colspan=\"1\" aria-label=\"صورتحساب: activate to sort column ascending\"
                                    style=\"width: 140.15px;\">
                                    زمان تشکیل
                                </th>
                                <th class=\"text-end min-w-70px sorting_disabled\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\"عملیات\" style=\"width: 94.95px;\">عملیات
                                </th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class=\"text-gray-600 fw-bold\" id=\"body_list\">
                            ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) || array_key_exists("apps", $context) ? $context["apps"] : (function () { throw new RuntimeError('Variable "apps" does not exist.', 168, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 169
            echo "                                <tr class=\"odd\">
                                    <td>
                                        <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_app", ["id" => twig_get_attribute($this->env, $this->source, $context["app"], "id", [], "array", false, false, false, 171)]), "html", null, true);
            echo "\"
                                           class=\"text-gray-800 text-hover-primary mb-1\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "name_app", [], "array", false, false, false, 172), "html", null, true);
            echo "</a>
                                    </td>

                                    <td>
                                        ";
            // line 176
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["app"], "status", [], "array", false, false, false, 176), true))) {
                // line 177
                echo "                                            <div class=\"badge badge-light-success\">فعال</div>
                                        ";
            } else {
                // line 179
                echo "                                            <div class=\"badge badge-light-danger\">غیر فعال</div>
                                        ";
            }
            // line 181
            echo "                                    </td>

                                    <!--begin::تاریخ=-->
                                    <td data-order=\"2021-01-20T00:00:00+03:30\">";
            // line 184
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "date", [], "array", false, false, false, 184), "Y,Md"), "html", null, true);
            echo "</td>
                                    <!--end::تاریخ=-->
                                    <!--begin::Action=-->
                                    <td class=\"text-end\">
                                        <a href=\"#\" class=\"btn btn-light btn-active-light-primary btn-sm\"
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
                                        <div data-toggle=\"modal\"
                                             class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4\"
                                             data-kt-menu=\"true\">
                                            <div class=\"menu-item px-3\">
                                                <button type=\"submit\" class=\"menu-link px-3\"
                                                        style=\" border: 0; background: white\">
                                                    <a name=\"token\" href=\"\" style=\"display: none\">گزارش</a>
                                                </button>
                                            </div>
                                            <!--end::Menu مورد-->
                                            <!--begin::Menu مورد-->
                                            <div class=\"menu-item px-3\">
                                                <form method=\"get\" action=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_app", ["id" => twig_get_attribute($this->env, $this->source, $context["app"], "id", [], "array", false, false, false, 219)]), "html", null, true);
            echo " \">
                                                    <button class=\"menu-link px-3\"
                                                            style=\" border: 0; background: white\" type=\"submit\">
                                                        ";
            // line 222
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["app"], "status", [], "array", false, false, false, 222), true))) {
                // line 223
                echo "                                                            حذف
                                                        ";
            } else {
                // line 225
                echo "                                                            اضافه کردن
                                                        ";
            }
            // line 227
            echo "                                                    </button>
                                                </form>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a class=\"menu-link px-3\"
                                                   href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_token", ["id" => twig_get_attribute($this->env, $this->source, $context["app"], "id", [], "array", false, false, false, 232)]), "html", null, true);
            echo "\">تغییر توکن</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <!-- Button trigger modal -->
                                                <button type=\"button\" class=\"menu-link px-3\"
                                                        style=\" border: 0; background: white\" data-bs-toggle=\"modal\"
                                                        data-bs-target=\"#exampleModal\">
                                                    نمایش توکن
                                                </button>

                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\"
                                     aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\"
                                                    id=\"exampleModalLabel\">";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "name_app", [], "array", false, false, false, 254), "html", null, true);
            echo "</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                                        aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                ";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "token", [], "array", false, false, false, 259), "html", null, true);
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::مدال-->
        <!--begin::Modal - تنظیم تعادل-->
        <div class=\"modal fade\" id=\"kt_subscriptions_اکسپورت_modal\" tabindex=\"-1\" aria-hidden=\"true\">
            <!--begin::Modal dialog-->
            <div class=\"modal-dialog modal-dialog-centered mw-650px\">
                <!--begin::Modal content-->
                <div class=\"modal-content\">
                    <!--begin::Modal header-->
                    <div class=\"modal-header\">
                        <!--begin::Modal title-->
                        <h2 class=\"fw-bolder\">اکسپورت اشتراک ها</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id=\"kt_subscriptions_اکسپورت_close\" class=\"btn btn-icon btn-sm btn-active-icon-primary\">
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
                    <!--end::Modal header-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - کارت جدید-->
        <!--end::مدال-->
    </div>
    <!-- Modal delete -->
    <div class=\"modal fade\" id=\"delete_app\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"#delete_app\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ...
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 340
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 341
        echo "<script type=\"text/javascript\">
    function searching(value){
    if (value == \"\"){
    value = \"all\";
}
    \$.post('";
        // line 346
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searching_app");
        echo "',{word : value}, function (data){
                    document.getElementById('body_list').innerText = '';
                    \$('#body_list').append(data);
        });
    }
</script>
    ";
        // line 352
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/User/Logger_html/Applications/list_app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 352,  498 => 346,  491 => 341,  481 => 340,  398 => 266,  385 => 259,  377 => 254,  352 => 232,  345 => 227,  341 => 225,  337 => 223,  335 => 222,  329 => 219,  291 => 184,  286 => 181,  282 => 179,  278 => 177,  276 => 176,  269 => 172,  265 => 171,  261 => 169,  257 => 168,  187 => 101,  91 => 7,  81 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/User/doshbord_user.html.twig\" %}
{% block title %}
    لیست اپلیکیشن ها
{% endblock %}

{% block main %}
    <div id=\"kt_content_container\" class=\"container\">
        <div class=\"card\">
            <!--begin::Card header-->
            <div class=\"card-header bیاder-0 pt-6\">
                <!--begin::Card title-->
                <div class=\"card-title\">
                    <!--begin::جستجو-->
                    <div class=\"d-flex align-items-center position-relative my-1\">
                        <!--begin::Svg Icon | path: icons/duotone/عمومی/جستجو.svg-->
                        <span class=\"svg-icon svg-icon-1 position-absolute ms-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                         height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                           fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"
                                                                  opacity=\"0.3\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                        <input type=\"text\" id=\"searching_list\" onkeyup=\"searching(this.value)\"
                               data-kt-subscription-table-filter=\"search\"
                               class=\"form-control form-control-solid w-250px ps-14\" placeholder=\"جستجو اشتراک ها\">
                    </div>
                    <!--end::جستجو-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class=\"card-toolbar\">
                    <!--begin::Toolbar-->
                    <div class=\"d-flex justify-content-end\" data-kt-subscription-table-toolbar=\"base\">
                        <!--begin::فیلتر-->
                        <!--begin::Menu 1-->
                        <div class=\"menu menu-sub menu-sub-dropdown w-300px w-md-325px\" data-kt-menu=\"true\">
                            <!--begin::Header-->
                            <div class=\"px-7 py-5\">
                                <div class=\"fs-5 text-dark fw-bolder\">تنظیمات فیلتر</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separatیا-->
                            <div class=\"separator bیاder-gray-200\"></div>
                            <!--end::Separatیا-->
                            <!--begin::Content-->
                            <div class=\"px-7 py-5\" data-kt-subscription-table-filter=\"form\">\\
                                <!--begin::Input group-->
                                <div class=\"mb-10\">
                                    <label class=\"form-label fs-6 fw-bold\">وضعیت</label>
                                    <select class=\"form-select form-select-solid fw-bolder select2-hidden-accessible\"
                                            data-kt-select2=\"true\" data-placeholder=\"انتخاب گزینه\"
                                            data-allow-clear=\"true\" data-kt-subscription-table-filter=\"status\"
                                            data-hide-search=\"true\" data-select2-id=\"select2-data-13-ybys\" tabindex=\"-1\"
                                            aria-hidden=\"true\">
                                        <option data-select2-id=\"select2-data-15-ijrq\"></option>
                                        <option value=\"فعال\">فعال</option>
                                        <option value=\"منقضی می شود\">منقضی می شود</option>
                                        <option value=\"معلق\">معلق</option>
                                    </select><span class=\"select2 select2-container select2-container--bootstrap5\"
                                                   dir=\"rtl\" data-select2-id=\"select2-data-14-burm\"
                                                   style=\"width: 100%;\"><span class=\"selection\"><span
                                                    class=\"select2-selection select2-selection--single form-select form-select-solid fw-bolder\"
                                                    role=\"combobox\" aria-haspopup=\"true\" aria-expanded=\"false\"
                                                    tabindex=\"0\" aria-disabled=\"false\"
                                                    aria-labelledby=\"select2-tx9m-container\"
                                                    aria-controls=\"select2-tx9m-container\"><span
                                                        class=\"select2-selection__rendered\" id=\"select2-tx9m-container\"
                                                        role=\"textbox\" aria-readonly=\"true\" title=\"انتخاب گزینه\"><span
                                                            class=\"select2-selection__placeholder\">انتخاب گزینه</span></span><span
                                                        class=\"select2-selection__arrow\" role=\"presentation\"><b
                                                            role=\"presentation\"></b></span></span></span><span
                                                class=\"dropdown-wrapper\" aria-hidden=\"true\"></span></span>
                                </div>
                                <!--end::Input group-->
                                <!--begin::عملیات-->
                                <div class=\"d-flex justify-content-end\">
                                    <button type=\"ریست\" class=\"btn btn-white btn-active-light-primary fw-bold me-2 px-6\"
                                            data-kt-menu-dismiss=\"true\" data-kt-subscription-table-filter=\"ریست\">ریست
                                    </button>
                                    <button type=\"submit\" class=\"btn btn-primary fw-bold px-6\"
                                            data-kt-menu-dismiss=\"true\" data-kt-subscription-table-filter=\"filter\">
                                        درخواست دادن
                                    </button>
                                </div>
                                <!--end::عملیات-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::اکسپورت-->
                        <!--begin::Add subscription-->
                        <a href=\"{{ path('add_app') }}\" class=\"btn btn-primary\">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                            <span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                         height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"4\" y=\"11\" width=\"16\" height=\"2\"
                                                              rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                              transform=\"translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)\"
                                                              x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <!--end::Svg Icon-->افزودن اشتراک</a>
                        <!--end::Add subscription-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div class=\"d-flex justify-content-end align-items-center d-none\"
                         data-kt-subscription-table-toolbar=\"selected\">
                        <div class=\"fw-bolder me-5\">
                            <span class=\"me-2\" data-kt-subscription-table-select=\"selected_count\"></span>انتخابed
                        </div>
                        <button type=\"button\" class=\"btn btn-danger\"
                                data-kt-subscription-table-select=\"delete_selected\">حذف انتخابed
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
                <div id=\"kt_subscriptions_table_wrapper\" class=\"dataTables_wrapper dt-bootstrap4 no-footer\">
                    <div class=\"table-responsive\">
                        <table class=\"table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer\"
                               id=\"kt_subscriptions_table\" role=\"grid\">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class=\"text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0\" role=\"row\">
                                <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                    rowspan=\"1\" colspan=\"1\" aria-label=\"مشتری: activate to sort column ascending\"
                                    style=\"width: 116.363px;\">
                                    نام اپلیکیشن
                                </th>
                                <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                    rowspan=\"1\" colspan=\"1\" aria-label=\"مشتری: activate to sort column ascending\"
                                    style=\"width: 116.363px;\">
                                    وضعیت
                                </th>
                                <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                    rowspan=\"1\" colspan=\"1\" aria-label=\"صورتحساب: activate to sort column ascending\"
                                    style=\"width: 140.15px;\">
                                    زمان تشکیل
                                </th>
                                <th class=\"text-end min-w-70px sorting_disabled\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\"عملیات\" style=\"width: 94.95px;\">عملیات
                                </th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class=\"text-gray-600 fw-bold\" id=\"body_list\">
                            {% for app in apps %}
                                <tr class=\"odd\">
                                    <td>
                                        <a href=\"{{ path('edit_app', {'id' : app['id']} ) }}\"
                                           class=\"text-gray-800 text-hover-primary mb-1\">{{ app['name_app'] }}</a>
                                    </td>

                                    <td>
                                        {% if app['status'] == true %}
                                            <div class=\"badge badge-light-success\">فعال</div>
                                        {% else %}
                                            <div class=\"badge badge-light-danger\">غیر فعال</div>
                                        {% endif %}
                                    </td>

                                    <!--begin::تاریخ=-->
                                    <td data-order=\"2021-01-20T00:00:00+03:30\">{{ app['date']|date('Y,Md') }}</td>
                                    <!--end::تاریخ=-->
                                    <!--begin::Action=-->
                                    <td class=\"text-end\">
                                        <a href=\"#\" class=\"btn btn-light btn-active-light-primary btn-sm\"
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
                                        <div data-toggle=\"modal\"
                                             class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4\"
                                             data-kt-menu=\"true\">
                                            <div class=\"menu-item px-3\">
                                                <button type=\"submit\" class=\"menu-link px-3\"
                                                        style=\" border: 0; background: white\">
                                                    <a name=\"token\" href=\"\" style=\"display: none\">گزارش</a>
                                                </button>
                                            </div>
                                            <!--end::Menu مورد-->
                                            <!--begin::Menu مورد-->
                                            <div class=\"menu-item px-3\">
                                                <form method=\"get\" action=\"{{ path('remove_app', {id : app['id']}) }} \">
                                                    <button class=\"menu-link px-3\"
                                                            style=\" border: 0; background: white\" type=\"submit\">
                                                        {% if app['status'] == true %}
                                                            حذف
                                                        {% else %}
                                                            اضافه کردن
                                                        {% endif %}
                                                    </button>
                                                </form>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a class=\"menu-link px-3\"
                                                   href=\"{{ path('change_token',{ id : app['id'] }) }}\">تغییر توکن</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <!-- Button trigger modal -->
                                                <button type=\"button\" class=\"menu-link px-3\"
                                                        style=\" border: 0; background: white\" data-bs-toggle=\"modal\"
                                                        data-bs-target=\"#exampleModal\">
                                                    نمایش توکن
                                                </button>

                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\"
                                     aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\"
                                                    id=\"exampleModalLabel\">{{ app['name_app'] }}</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                                        aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                {{ app['token'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
        <!--end::Card-->
        <!--begin::مدال-->
        <!--begin::Modal - تنظیم تعادل-->
        <div class=\"modal fade\" id=\"kt_subscriptions_اکسپورت_modal\" tabindex=\"-1\" aria-hidden=\"true\">
            <!--begin::Modal dialog-->
            <div class=\"modal-dialog modal-dialog-centered mw-650px\">
                <!--begin::Modal content-->
                <div class=\"modal-content\">
                    <!--begin::Modal header-->
                    <div class=\"modal-header\">
                        <!--begin::Modal title-->
                        <h2 class=\"fw-bolder\">اکسپورت اشتراک ها</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id=\"kt_subscriptions_اکسپورت_close\" class=\"btn btn-icon btn-sm btn-active-icon-primary\">
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
                    <!--end::Modal header-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - کارت جدید-->
        <!--end::مدال-->
    </div>
    <!-- Modal delete -->
    <div class=\"modal fade\" id=\"delete_app\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"#delete_app\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ...
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascript %}
<script type=\"text/javascript\">
    function searching(value){
    if (value == \"\"){
    value = \"all\";
}
    \$.post('{{ path('searching_app') }}',{word : value}, function (data){
                    document.getElementById('body_list').innerText = '';
                    \$('#body_list').append(data);
        });
    }
</script>
    {{ parent() }}
{% endblock %}", "/User/Logger_html/Applications/list_app.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\Applications\\list_app.html.twig");
    }
}
