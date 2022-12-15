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

/* User/Logger_html/packages/package_list.html.twig */
class __TwigTemplate_d87c6774a75f957ffeac1ad18aeae1d1aa9606c16066d81ee695e4ef11c4c249 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/package_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/package_list.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "User/Logger_html/packages/package_list.html.twig", 1);
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
        echo "    لیست پکیج ها
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
        echo "    <div class=\"post d-flex flex-column-fluid\" id=\"kt_post\">
        <!--begin::Container-->
        <div id=\"kt_content_container\" class=\"container\">
            <!--begin::Card-->
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
                            <input type=\"text\" data-kt-subscription-table-filter=\"search\"
                                   class=\"form-control form-control-solid w-250px ps-14\" onkeyup=\"searching(this.value)\"
                                   id=\"searching_list\" placeholder=\"جستجو اشتراک ها\">
                        </div>
                        <!--end::جستجو-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class=\"card-toolbar\">
                        <!--begin::Toolbar-->
                        <div class=\"d-flex justify-content-end\" data-kt-subscription-table-toolbar=\"base\">
                            <!--begin::Add subscription-->
                            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_packages", ["name_app" => "x"]);
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
                                        style=\"width: 157.113px;\">نام
                                    </th>
                                    <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                        rowspan=\"1\" colspan=\"1\" aria-label=\"وضعیت: activate to sort column ascending\"
                                        style=\"width: 157.113px;\">قیمت
                                    </th>
                                    <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                        rowspan=\"1\" colspan=\"1\" aria-label=\"صورتحساب: activate to sort column ascending\"
                                        style=\"width: 188.038px;\">تعداد اپ های مجاز
                                    </th>
                                    <th class=\"text-end min-w-70px sorting_disabled\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"عملیات\" style=\"width: 126.363px;\">عملیات
                                    </th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody id=\"body_list\" class=\"text-gray-600 fw-bold\">
                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_packages"]) || array_key_exists("list_packages", $context) ? $context["list_packages"] : (function () { throw new RuntimeError('Variable "list_packages" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "                                    <tr class=\"odd\">
                                        <td>
                                            <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_packages", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\"
                                               class=\"text-gray-800 text-hover-primary mb-1\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 104), "html", null, true);
            echo "</a>
                                        </td>
                                        <td>
                                            <div class=\"badge badge-light-success\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 107), "html", null, true);
            echo "</div>
                                        </td>
                                        <td>
                                            <div class=\"badge badge-light\">
                                                ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "numberApp", [], "any", false, false, false, 111), "html", null, true);
            echo "
                                            </div>
                                        </td>
                                        <td class=\"text-end\">
                                            <a href=\"#\" class=\"btn btn-light btn-active-light-primary btn-sm\"
                                               data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\"
                                               data-kt-menu-flip=\"top-end\">عملیات
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
                                            </a>
                                            <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4\"
                                                 data-kt-menu=\"true\">
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_packages", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 135)]), "html", null, true);
            echo "\"
                                                       data-kt-subscriptions-table-filter=\"delete_row\"
                                                       class=\"menu-link px-3\">
                                                        حذف
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal fade\" id=\"kt_subscriptions_اکسپورت_modal\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered mw-650px\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h2 class=\"fw-bolder\">اکسپورت اشتراک ها</h2>
                            <div id=\"kt_subscriptions_اکسپورت_close\"
                                 class=\"btn btn-icon btn-sm btn-active-icon-primary\">
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
                            </div>
                        </div>
                        <div class=\"modal-body scroll-y mx-5 mx-xl-15 my-7\">
                            <form id=\"kt_subscriptions_اکسپورت_form\" class=\"form\" action=\"#\">
                                <div class=\"fv-row mb-10\">
                                    <label class=\"fs-5 fw-bold form-label mb-5\">انتخاب تاریخ Range:</label>
                                    <input class=\"form-control form-control-solid\" placeholder=\"Pick a تاریخ\"
                                           name=\"تاریخ\">
                                </div>
                                <div class=\"row fv-row mb-15\">
                                    <label class=\"fs-5 fw-bold form-label mb-5\">Payment نوع:</label>
                                    <div class=\"d-flex flex-column\">
                                        <label class=\"form-check form-check-custom form-check-sm form-check-solid mb-3\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"
                                                   name=\"payment_نوع\">
                                            <span class=\"form-check-label text-gray-600 fw-bold\">همه</span>
                                        </label>
                                        <label class=\"form-check form-check-custom form-check-sm form-check-solid mb-3\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"2\" checked=\"checked\"
                                                   name=\"payment_نوع\">
                                            <span class=\"form-check-label text-gray-600 fw-bold\">Visa</span>
                                        </label>
                                        <label class=\"form-check form-check-custom form-check-sm form-check-solid mb-3\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"3\"
                                                   name=\"payment_نوع\">
                                            <span class=\"form-check-label text-gray-600 fw-bold\">Mastercard</span>
                                        </label>
                                        <label class=\"form-check form-check-custom form-check-sm form-check-solid\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"4\"
                                                   name=\"payment_نوع\">
                                            <span class=\"form-check-label text-gray-600 fw-bold\">American Express</span>
                                        </label>
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"ریست\" id=\"kt_subscriptions_اکسپورت_cancel\" class=\"btn btn-white me-3\">
                                        صرف نظر
                                    </button>
                                    <button type=\"submit\" id=\"kt_subscriptions_اکسپورت_submit\" class=\"btn btn-primary\">
                                        <span class=\"indicator-label\">ثبت</span>
                                        <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 224
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 225
        echo "<script type=\"text/javascript\">
    function searching(value){
    if (value == \"\"){
    value = \"all\";
}
    console.log(value)
    \$.post('";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searching_package");
        echo "',{word : value}, function (data){
                    document.getElementById('body_list').innerHTML = null;
                    document.getElementById('body_list').innerHTML = data;
        });
    }
</script>
";
        // line 237
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

<script>
    document.getElementById('list_package').className = 'menu-link active';
    document.getElementById('package_scrole').className = \"menu-item menu-accordion hover show\";
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/Logger_html/packages/package_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 237,  363 => 231,  355 => 225,  345 => 224,  257 => 145,  241 => 135,  214 => 111,  207 => 107,  201 => 104,  197 => 103,  193 => 101,  189 => 100,  133 => 47,  91 => 7,  81 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
    لیست پکیج ها
{% endblock %}

{% block main %}
    <div class=\"post d-flex flex-column-fluid\" id=\"kt_post\">
        <!--begin::Container-->
        <div id=\"kt_content_container\" class=\"container\">
            <!--begin::Card-->
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
                            <input type=\"text\" data-kt-subscription-table-filter=\"search\"
                                   class=\"form-control form-control-solid w-250px ps-14\" onkeyup=\"searching(this.value)\"
                                   id=\"searching_list\" placeholder=\"جستجو اشتراک ها\">
                        </div>
                        <!--end::جستجو-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class=\"card-toolbar\">
                        <!--begin::Toolbar-->
                        <div class=\"d-flex justify-content-end\" data-kt-subscription-table-toolbar=\"base\">
                            <!--begin::Add subscription-->
                            <a href=\"{{ path('add_packages', {'name_app': 'x'}) }}\" class=\"btn btn-primary\">
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
                                        style=\"width: 157.113px;\">نام
                                    </th>
                                    <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                        rowspan=\"1\" colspan=\"1\" aria-label=\"وضعیت: activate to sort column ascending\"
                                        style=\"width: 157.113px;\">قیمت
                                    </th>
                                    <th class=\"min-w-125px sorting\" tabindex=\"0\" aria-controls=\"kt_subscriptions_table\"
                                        rowspan=\"1\" colspan=\"1\" aria-label=\"صورتحساب: activate to sort column ascending\"
                                        style=\"width: 188.038px;\">تعداد اپ های مجاز
                                    </th>
                                    <th class=\"text-end min-w-70px sorting_disabled\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"عملیات\" style=\"width: 126.363px;\">عملیات
                                    </th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody id=\"body_list\" class=\"text-gray-600 fw-bold\">
                                {% for item in list_packages %}
                                    <tr class=\"odd\">
                                        <td>
                                            <a href=\"{{ path('edit_packages', {'id': item.id}) }}\"
                                               class=\"text-gray-800 text-hover-primary mb-1\">{{ item.name }}</a>
                                        </td>
                                        <td>
                                            <div class=\"badge badge-light-success\">{{ item.price }}</div>
                                        </td>
                                        <td>
                                            <div class=\"badge badge-light\">
                                                {{ item.numberApp }}
                                            </div>
                                        </td>
                                        <td class=\"text-end\">
                                            <a href=\"#\" class=\"btn btn-light btn-active-light-primary btn-sm\"
                                               data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\"
                                               data-kt-menu-flip=\"top-end\">عملیات
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
                                            </a>
                                            <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4\"
                                                 data-kt-menu=\"true\">
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"{{ path('delete_packages', {'id': item.id}) }}\"
                                                       data-kt-subscriptions-table-filter=\"delete_row\"
                                                       class=\"menu-link px-3\">
                                                        حذف
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal fade\" id=\"kt_subscriptions_اکسپورت_modal\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered mw-650px\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h2 class=\"fw-bolder\">اکسپورت اشتراک ها</h2>
                            <div id=\"kt_subscriptions_اکسپورت_close\"
                                 class=\"btn btn-icon btn-sm btn-active-icon-primary\">
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
                            </div>
                        </div>
                        <div class=\"modal-body scroll-y mx-5 mx-xl-15 my-7\">
                            <form id=\"kt_subscriptions_اکسپورت_form\" class=\"form\" action=\"#\">
                                <div class=\"fv-row mb-10\">
                                    <label class=\"fs-5 fw-bold form-label mb-5\">انتخاب تاریخ Range:</label>
                                    <input class=\"form-control form-control-solid\" placeholder=\"Pick a تاریخ\"
                                           name=\"تاریخ\">
                                </div>
                                <div class=\"row fv-row mb-15\">
                                    <label class=\"fs-5 fw-bold form-label mb-5\">Payment نوع:</label>
                                    <div class=\"d-flex flex-column\">
                                        <label class=\"form-check form-check-custom form-check-sm form-check-solid mb-3\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"
                                                   name=\"payment_نوع\">
                                            <span class=\"form-check-label text-gray-600 fw-bold\">همه</span>
                                        </label>
                                        <label class=\"form-check form-check-custom form-check-sm form-check-solid mb-3\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"2\" checked=\"checked\"
                                                   name=\"payment_نوع\">
                                            <span class=\"form-check-label text-gray-600 fw-bold\">Visa</span>
                                        </label>
                                        <label class=\"form-check form-check-custom form-check-sm form-check-solid mb-3\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"3\"
                                                   name=\"payment_نوع\">
                                            <span class=\"form-check-label text-gray-600 fw-bold\">Mastercard</span>
                                        </label>
                                        <label class=\"form-check form-check-custom form-check-sm form-check-solid\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"4\"
                                                   name=\"payment_نوع\">
                                            <span class=\"form-check-label text-gray-600 fw-bold\">American Express</span>
                                        </label>
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"ریست\" id=\"kt_subscriptions_اکسپورت_cancel\" class=\"btn btn-white me-3\">
                                        صرف نظر
                                    </button>
                                    <button type=\"submit\" id=\"kt_subscriptions_اکسپورت_submit\" class=\"btn btn-primary\">
                                        <span class=\"indicator-label\">ثبت</span>
                                        <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder spinner-bیاder-sm align-middle ms-2\"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
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
    console.log(value)
    \$.post('{{ path('searching_package') }}',{word : value}, function (data){
                    document.getElementById('body_list').innerHTML = null;
                    document.getElementById('body_list').innerHTML = data;
        });
    }
</script>
{{ parent() }}

<script>
    document.getElementById('list_package').className = 'menu-link active';
    document.getElementById('package_scrole').className = \"menu-item menu-accordion hover show\";
</script>
{% endblock %}", "User/Logger_html/packages/package_list.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\packages\\package_list.html.twig");
    }
}
