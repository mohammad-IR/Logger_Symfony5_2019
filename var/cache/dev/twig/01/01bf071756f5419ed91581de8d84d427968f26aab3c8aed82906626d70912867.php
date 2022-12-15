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

/* article/edit_article.html.twig */
class __TwigTemplate_9159f3b46c48ce82e051c8d9f70f3159c0068b54d1920af2b29ee8063c22330b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/edit_article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/edit_article.html.twig"));

        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "article/edit_article.html.twig", 1);
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
        echo "    تغییر مقاله
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_article")]]);
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </select>
            </div>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", [0 => "category_article"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["category_article"]) {
            // line 46
            echo "                <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $context["category_article"], "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
        <input type=\"hidden\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\" name=\"id\">
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
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "image", [], "any", false, false, false, 61), 'row', ["value" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image_article/" . twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 61, $this->source); })()), "path", [], "any", false, false, false, 61)))]);
        echo "
                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image_article/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 62, $this->source); })()), "path", [], "any", false, false, false, 62), "html", null, true);
        echo "\" style=\"width: 100px; height: 100px;\">
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center mt-4\">
            <div class=\"col-4\">
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-outline-success\" name=\"submit\">ارسال</button>
                    <a class=\"btn btn-outline-danger\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_article");
        echo "\">انصراف</a>
                </div>
            </div>
        </div>
        ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 78
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
        return "article/edit_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 78,  222 => 77,  209 => 74,  202 => 70,  190 => 62,  186 => 61,  171 => 49,  168 => 48,  159 => 46,  155 => 45,  151 => 43,  140 => 41,  136 => 40,  113 => 20,  102 => 13,  94 => 7,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
    تغییر مقاله
{% endblock %}
{% block main %}
    <div class=\"container mt-10 justify-content-center bg-light  border border-dark\">
        {{ form_start(form, {'attr': {'action':path('edit_article')}}) }}
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
        <input type=\"hidden\" value=\"{{ id }}\" name=\"id\">
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
                    {{ form_row(form.image , {value: asset('uploads/image_article/'~image.path) }) }}
                    <img src=\"{{ asset('uploads/image_article/')  }}{{ image.path }}\" style=\"width: 100px; height: 100px;\">
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center mt-4\">
            <div class=\"col-4\">
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-outline-success\" name=\"submit\">ارسال</button>
                    <a class=\"btn btn-outline-danger\" href=\"{{ path('list_article') }}\">انصراف</a>
                </div>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}
{% block javascript %}
{{ parent() }}
<script>
        document.getElementById('list_artticle').className = 'menu-link active';
        document.getElementById('article_scrole').className = \"menu-item menu-accordion hover show\";
</script>
{% endblock %}", "article/edit_article.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\article\\edit_article.html.twig");
    }
}
