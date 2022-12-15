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

/* User/Logger_html/packages/searching.html.twig */
class __TwigTemplate_314b5a39aff0a8a2d74515f22c7763ac11158b38ea3f716995bcf58c11d2fdbb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/searching.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/searching.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_packages"]) || array_key_exists("list_packages", $context) ? $context["list_packages"] : (function () { throw new RuntimeError('Variable "list_packages" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    <tr class=\"odd\">
        <td>
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_packages", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\"
               class=\"text-gray-800 text-hover-primary mb-1\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</a>
        </td>
        <td>
            <div class=\"badge badge-light-success\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 8), "html", null, true);
            echo "</div>
        </td>
        <td>
            <div class=\"badge badge-light\">
                ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "numberApp", [], "any", false, false, false, 12), "html", null, true);
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
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_packages", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 36)]), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "User/Logger_html/packages/searching.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  68 => 12,  61 => 8,  55 => 5,  51 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in list_packages %}
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
{% endfor %}", "User/Logger_html/packages/searching.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\packages\\searching.html.twig");
    }
}
