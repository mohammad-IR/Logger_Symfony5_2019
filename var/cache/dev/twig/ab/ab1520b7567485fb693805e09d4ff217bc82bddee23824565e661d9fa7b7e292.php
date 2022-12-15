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

/* category/add_category.html.twig */
class __TwigTemplate_be9b1fb85cc2e87bee151688379a57f1fd1fba2f91f2aad89da47f4d0de3a125 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/add_category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/add_category.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "category/add_category.html.twig", 1);
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
        echo "    اضافه کردن دسته بندی
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
        echo "    <div class=\"container justify-content-center \">
        <form method=\"post\" class=\"border form-group bg-light  border-dark rounded-3 p-10\" >
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <label for=\"validationCustom01\" class=\"form-label\">نام</label>
                    <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name=\"name\" required>
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "name"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                        <span class=\"text-danger\"></span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </div>
            </div>
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <label for=\"validationCustom04\" class=\"form-label\">راس دسته بندی</label>
                    <select class=\"form-select\" name=\"parent\" id=\"validationCustom04\" required>
                        <option selected disabled value=\"\">انتخاب کنید</option>
                        <option value=\"none\">هیچکدام</option>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 24
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </select>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [0 => "parent"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "                        <span class=\"text-danger\"></span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </div>
            </div>
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" name=\"status\" type=\"checkbox\"
                               id=\"invalidCheck\">
                        <label class=\"form-check-label\" for=\"invalidCheck\">
                            فعال
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-4\">
                    <button class=\"btn btn-outline-dark\" type=\"submit\">ارسال</button>
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 53
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script>
        document.getElementById('add_category').className = 'menu-link active';
        document.getElementById('article_scrole').className = \"menu-item menu-accordion hover show\";
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/add_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 53,  179 => 52,  149 => 30,  142 => 28,  138 => 27,  135 => 26,  124 => 24,  120 => 23,  110 => 15,  103 => 13,  99 => 12,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
    اضافه کردن دسته بندی
{% endblock %}
{% block main %}
    <div class=\"container justify-content-center \">
        <form method=\"post\" class=\"border form-group bg-light  border-dark rounded-3 p-10\" >
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <label for=\"validationCustom01\" class=\"form-label\">نام</label>
                    <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name=\"name\" required>
                    {% for item in app.flashes('name') %}
                        <span class=\"text-danger\"></span>
                    {% endfor %}
                </div>
            </div>
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <label for=\"validationCustom04\" class=\"form-label\">راس دسته بندی</label>
                    <select class=\"form-select\" name=\"parent\" id=\"validationCustom04\" required>
                        <option selected disabled value=\"\">انتخاب کنید</option>
                        <option value=\"none\">هیچکدام</option>
                        {% for category in categories %}
                            <option value=\"{{ category.id }}\">{{ category.name }}</option>
                        {% endfor %}
                    </select>
                    {% for item in app.flashes('parent') %}
                        <span class=\"text-danger\"></span>
                    {% endfor %}
                </div>
            </div>
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" name=\"status\" type=\"checkbox\"
                               id=\"invalidCheck\">
                        <label class=\"form-check-label\" for=\"invalidCheck\">
                            فعال
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-4\">
                    <button class=\"btn btn-outline-dark\" type=\"submit\">ارسال</button>
                </div>
            </div>
        </form>
    </div>
{% endblock %}

    {% block javascript %}
    {{ parent() }}
    <script>
        document.getElementById('add_category').className = 'menu-link active';
        document.getElementById('article_scrole').className = \"menu-item menu-accordion hover show\";
    </script>
{% endblock %}", "category/add_category.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\category\\add_category.html.twig");
    }
}
