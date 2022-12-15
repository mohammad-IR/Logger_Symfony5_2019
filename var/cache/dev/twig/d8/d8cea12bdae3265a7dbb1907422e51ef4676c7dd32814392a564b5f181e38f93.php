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

/* User/Logger_html/Applications/searching_app.html.twig */
class __TwigTemplate_1faf5b7512c824b7cd90f6b4a9370dcbe8289ede706cd5a43d1e56774c71ee7b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/Applications/searching_app.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/Applications/searching_app.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) || array_key_exists("apps", $context) ? $context["apps"] : (function () { throw new RuntimeError('Variable "apps" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    <tr class=\"odd\">
        <td>
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_app", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\"
               class=\"text-gray-800 text-hover-primary mb-1\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</a>
        </td>

        <td>
            ";
            // line 9
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 9), true))) {
                // line 10
                echo "                <div class=\"badge badge-light-success\">فعال</div>
            ";
            } else {
                // line 12
                echo "                <div class=\"badge badge-light-danger\">غیر فعال</div>
            ";
            }
            // line 14
            echo "        </td>

        <!--begin::تاریخ=-->
        <td data-order=\"2021-01-20T00:00:00+03:30\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 17), "Y,Md"), "html", null, true);
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
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_app", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo " \">
                        <button class=\"menu-link px-3\" id=\"button_delete\"
                                style=\" border: 0; background: white\" type=\"submit\">
                            ";
            // line 55
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 55), true))) {
                // line 56
                echo "                                حذف
                            ";
            } else {
                // line 58
                echo "                                اضافه کردن
                            ";
            }
            // line 60
            echo "                        </button>
                    </form>
                </div>
                <div class=\"menu-item px-3\">
                    <a class=\"menu-link px-3\"
                       href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_token", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 65)]), "html", null, true);
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
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 88), "html", null, true);
            echo "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "token", [], "any", false, false, false, 93), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "User/Logger_html/Applications/searching_app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 93,  164 => 88,  138 => 65,  131 => 60,  127 => 58,  123 => 56,  121 => 55,  115 => 52,  77 => 17,  72 => 14,  68 => 12,  64 => 10,  62 => 9,  55 => 5,  51 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in apps %}
    <tr class=\"odd\">
        <td>
            <a href=\"{{ path('edit_app', {'id' : item.id} ) }}\"
               class=\"text-gray-800 text-hover-primary mb-1\">{{ item.name }}</a>
        </td>

        <td>
            {% if item.status == true %}
                <div class=\"badge badge-light-success\">فعال</div>
            {% else %}
                <div class=\"badge badge-light-danger\">غیر فعال</div>
            {% endif %}
        </td>

        <!--begin::تاریخ=-->
        <td data-order=\"2021-01-20T00:00:00+03:30\">{{ item.date|date('Y,Md') }}</td>
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
                    <form method=\"get\" action=\"{{ path('remove_app', {id : item.id}) }} \">
                        <button class=\"menu-link px-3\" id=\"button_delete\"
                                style=\" border: 0; background: white\" type=\"submit\">
                            {% if item.status == true %}
                                حذف
                            {% else %}
                                اضافه کردن
                            {% endif %}
                        </button>
                    </form>
                </div>
                <div class=\"menu-item px-3\">
                    <a class=\"menu-link px-3\"
                       href=\"{{ path('change_token',{ id : item.id }) }}\">تغییر توکن</a>
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
                        id=\"exampleModalLabel\">{{ item.name }}</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    {{ item.token }}
                </div>
            </div>
        </div>
    </div>
{% endfor %}", "User/Logger_html/Applications/searching_app.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\Applications\\searching_app.html.twig");
    }
}
