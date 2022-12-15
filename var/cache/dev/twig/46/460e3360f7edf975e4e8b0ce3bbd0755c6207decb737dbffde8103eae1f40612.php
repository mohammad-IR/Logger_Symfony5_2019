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

/* category/edit_category.html.twig */
class __TwigTemplate_42d4fd16934b5aacd09cd832e8006131be135e385b1ec5e311f6ab00ba35077c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/edit_category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/edit_category.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "category/edit_category.html.twig", 1);
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
        echo "    تغییر دسته بندی ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category_edit"]) || array_key_exists("category_edit", $context) ? $context["category_edit"] : (function () { throw new RuntimeError('Variable "category_edit" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "
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
        <form method=\"post\" class=\"border form-group bg-light  border-dark rounded-3 p-10\">
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <label for=\"validationCustom01\" class=\"form-label\">نام</label>
                    <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name=\"name\"
                           value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category_edit"]) || array_key_exists("category_edit", $context) ? $context["category_edit"] : (function () { throw new RuntimeError('Variable "category_edit" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "\" required>
                </div>
            </div>
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <label for=\"validationCustom04\" class=\"form-label\">راس دسته بندی</label>
                    <select class=\"form-select\" name=\"parent\" id=\"validationCustom04\" required>
                        <option selected disabled value=\"\">انتخاب کنید</option>
                        <option value=\"none\">هیچکدام</option>
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </select>
                </div>
            </div>
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input\"
                               name=\"status\" type=\"checkbox\"
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

    // line 47
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 48
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script>
        document.getElementById('list_category').className = 'menu-link active';
        document.getElementById('article_scrole').className = \"menu-item menu-accordion hover show\";
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/edit_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 48,  160 => 47,  128 => 24,  117 => 22,  113 => 21,  101 => 12,  93 => 6,  83 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
    تغییر دسته بندی {{ category_edit.name }}
{% endblock %}
{% block main %}
    <div class=\"container justify-content-center \">
        <form method=\"post\" class=\"border form-group bg-light  border-dark rounded-3 p-10\">
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <label for=\"validationCustom01\" class=\"form-label\">نام</label>
                    <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name=\"name\"
                           value=\"{{ category_edit.name }}\" required>
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
                </div>
            </div>
            <div class=\"row mt-5 justify-content-center\">
                <div class=\"col-md-12\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input\"
                               name=\"status\" type=\"checkbox\"
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
        document.getElementById('list_category').className = 'menu-link active';
        document.getElementById('article_scrole').className = \"menu-item menu-accordion hover show\";
</script>
{% endblock %}", "category/edit_category.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\category\\edit_category.html.twig");
    }
}
