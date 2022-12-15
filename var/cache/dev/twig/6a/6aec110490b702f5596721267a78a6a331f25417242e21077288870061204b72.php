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

/* article/add_article.html.twig */
class __TwigTemplate_d4874ff609eac022c6ead798370ac497064bdbaa7a6cbf448bb9f5146419861a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/add_article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/add_article.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "article/add_article.html.twig", 1);
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
        echo "    اضافه کردن مقاله
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
        echo "    <div class=\"container mt-10 justify-content-center bg-light  border border-dark\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_article")]]);
        echo "
        <div class=\"row p-10\"></div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"form-group\">
                    ";
        // line 13
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), 'row');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"form-group mt-11\" style=\"direction: rtl\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "body", [], "any", false, false, false, 20), 'row');
        echo "
                    <script>
                        tinymce.init({
                            selector: 'textarea',
                            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
                            toolbar_mode: 'floating',
                            tinycomments_mode: 'embedded',
                            tinycomments_author: 'Author name',
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-start mt-20 mb-9\">
            <div class=\"offset-1 col-md-3\">
                <label for=\"validationCustom04\" class=\"form-label required\">دسته بندی</label>
                <select class=\"form-select\" id=\"validationCustom04\" name=\"category_article\"  required>
                    <option selected disabled value=\"\">انتخاب کن</option>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </select>
            </div>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", [0 => "category_article"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["category_article"]) {
            // line 45
            echo "                <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $context["category_article"], "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
        <div class=\"row justify-content-start  mt-4\">
            <div class=\"offset-1 col-4\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"publish\" class=\"form-check-input\" id=\"publish_checkBox\">
                    <label class=\"form-check-label\" for=\"publish_checkBox\">publish</label>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-start  mt-7\">
            <div class=\"col-4 offset-1\">
                <div class=\"form-group\">
";
        // line 60
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60), 'row');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center mt-4\">
            <div class=\"col-4\">
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-outline-success\" name=\"submit\">ارسال</button>
                    <a class=\"btn btn-outline-danger\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashbord");
        echo "\">انصراف</a>
                </div>
            </div>
        </div>
        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 76
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script>
        document.getElementById('add_article').className = 'menu-link active';
        document.getElementById('article_scrole').className = \"menu-item menu-accordion hover show\";
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/add_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 76,  213 => 75,  200 => 72,  193 => 68,  181 => 60,  167 => 47,  158 => 45,  154 => 44,  150 => 42,  139 => 40,  135 => 39,  113 => 20,  102 => 13,  94 => 7,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
    اضافه کردن مقاله
{% endblock %}
{% block main %}
    <div class=\"container mt-10 justify-content-center bg-light  border border-dark\">
        {{ form_start(form, {'attr': {'action':path('add_article')}}) }}
        <div class=\"row p-10\"></div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"form-group\">
                    {# <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"موضوع را وارد کنید\"> #}
                    {{ form_row(form.title) }}
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"form-group mt-11\" style=\"direction: rtl\">
                    {{ form_row(form.body) }}
                    <script>
                        tinymce.init({
                            selector: 'textarea',
                            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
                            toolbar_mode: 'floating',
                            tinycomments_mode: 'embedded',
                            tinycomments_author: 'Author name',
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-start mt-20 mb-9\">
            <div class=\"offset-1 col-md-3\">
                <label for=\"validationCustom04\" class=\"form-label required\">دسته بندی</label>
                <select class=\"form-select\" id=\"validationCustom04\" name=\"category_article\"  required>
                    <option selected disabled value=\"\">انتخاب کن</option>
                    {% for category in categories %}
                        <option value=\"{{ category.id }}\">{{ category.name }}</option>
                    {% endfor %}
                </select>
            </div>
            {% for category_article in app.flashes('category_article') %}
                <span class=\"text-danger\">{{ category_article }}</span>
            {% endfor %}
        </div>
        <div class=\"row justify-content-start  mt-4\">
            <div class=\"offset-1 col-4\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"publish\" class=\"form-check-input\" id=\"publish_checkBox\">
                    <label class=\"form-check-label\" for=\"publish_checkBox\">publish</label>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-start  mt-7\">
            <div class=\"col-4 offset-1\">
                <div class=\"form-group\">
{#                    <input type=\"file\" class=\"form-control\" id=\"image_article\" name=\"image\" required>#}
                    {{ form_row(form.image) }}
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center mt-4\">
            <div class=\"col-4\">
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-outline-success\" name=\"submit\">ارسال</button>
                    <a class=\"btn btn-outline-danger\" href=\"{{ path('dashbord') }}\">انصراف</a>
                </div>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}
{% block javascript%}
{{ parent() }}
<script>
        document.getElementById('add_article').className = 'menu-link active';
        document.getElementById('article_scrole').className = \"menu-item menu-accordion hover show\";
</script>
{% endblock %}", "article/add_article.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\article\\add_article.html.twig");
    }
}
