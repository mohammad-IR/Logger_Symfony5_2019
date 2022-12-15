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

/* User/Logger_html/packages/bought_package.html.twig */
class __TwigTemplate_5d38d30862ad45a746ac6ec636183cfffc8faa398bf8192f1c93f5266071fa9a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/bought_package.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/packages/bought_package.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "User/Logger_html/packages/bought_package.html.twig", 1);
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
        echo "    پکیج های خریداری شده
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
        echo "    ";
        $context["i"] = 1;
        // line 7
        echo "
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col\">
                <div class=\"card\">
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
                                       class=\"form-control form-control-solid w-250px ps-14\"
                                       placeholder=\"جستجو اشتراک ها\">
                            </div>
                            <!--end::جستجو-->
                        </div>
                        <div class=\"card-toolbar\">
                            <div class=\"d-flex justify-content-end\" data-kt-subscription-table-toolbar=\"base\">
                                <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_package");
        echo "\" class=\"btn btn-primary\" dideo-checked=\"true\">
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
                                    افزودن اشتراک
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-0\">
                        <table class=\"table  table-hover\">
                            <thead class=\" bg-light\">
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">نام پکیج</th>
                                <th scope=\"col\">قیمت</th>
                                <th scope=\"col\">تعداد مجاز اپ</th>
                                <th scope=\"col\">تعداد لاگ</th>
                            </tr>
                            </thead>
                            <tbody id=\"body_list\">
                            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bought_packages"]) || array_key_exists("bought_packages", $context) ? $context["bought_packages"] : (function () { throw new RuntimeError('Variable "bought_packages" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 73
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "</th>
                                    <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "namePackage", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                    <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "namePackage", [], "any", false, false, false, 76), "price", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "namePackage", [], "any", false, false, false, 77), "numberApp", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "namePackage", [], "any", false, false, false, 78), "limitReport", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                </tr>
                                ";
            // line 80
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 80, $this->source); })()) + 1);
            // line 81
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 91
        echo "    <script type=\"text/javascript\">
        function searching(value){
                if (value == \"\"){
                value = \"all\";
                }
            \$.post('";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searching_bought_package");
        echo "',{word : value}, function (data){
                            console.log(data)
                            document.getElementById('body_list').innerHTML = '';
                            \$('#body_list').append(data);
                });
            }
    </script>
    ";
        // line 103
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
 <script>
    document.getElementById('bought_package').className = 'menu-link active';
    document.getElementById('package_scrole').className = \"menu-item menu-accordion hover show\";
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/Logger_html/packages/bought_package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 103,  234 => 96,  227 => 91,  217 => 90,  200 => 82,  194 => 81,  192 => 80,  187 => 78,  183 => 77,  179 => 76,  175 => 75,  171 => 74,  168 => 73,  164 => 72,  132 => 43,  94 => 7,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
    پکیج های خریداری شده
{% endblock %}
{% block main %}
    {% set i = 1 %}

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col\">
                <div class=\"card\">
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
                                       class=\"form-control form-control-solid w-250px ps-14\"
                                       placeholder=\"جستجو اشتراک ها\">
                            </div>
                            <!--end::جستجو-->
                        </div>
                        <div class=\"card-toolbar\">
                            <div class=\"d-flex justify-content-end\" data-kt-subscription-table-toolbar=\"base\">
                                <a href=\"{{ path('buy_package') }}\" class=\"btn btn-primary\" dideo-checked=\"true\">
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
                                    افزودن اشتراک
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-0\">
                        <table class=\"table  table-hover\">
                            <thead class=\" bg-light\">
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">نام پکیج</th>
                                <th scope=\"col\">قیمت</th>
                                <th scope=\"col\">تعداد مجاز اپ</th>
                                <th scope=\"col\">تعداد لاگ</th>
                            </tr>
                            </thead>
                            <tbody id=\"body_list\">
                            {% for item in bought_packages %}
                                <tr>
                                    <th scope=\"row\">{{ i }}</th>
                                    <td>{{ item.namePackage.name }}</td>
                                    <td>{{ item.namePackage.price }}</td>
                                    <td>{{ item.namePackage.numberApp }}</td>
                                    <td>{{ item.namePackage.limitReport }}</td>
                                </tr>
                                {% set i = i + 1 %}
                            {% endfor %}
                            </tbody>
                        </table>
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
            \$.post('{{ path('searching_bought_package') }}',{word : value}, function (data){
                            console.log(data)
                            document.getElementById('body_list').innerHTML = '';
                            \$('#body_list').append(data);
                });
            }
    </script>
    {{ parent() }}
 <script>
    document.getElementById('bought_package').className = 'menu-link active';
    document.getElementById('package_scrole').className = \"menu-item menu-accordion hover show\";
</script>
{% endblock %}", "User/Logger_html/packages/bought_package.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\packages\\bought_package.html.twig");
    }
}
