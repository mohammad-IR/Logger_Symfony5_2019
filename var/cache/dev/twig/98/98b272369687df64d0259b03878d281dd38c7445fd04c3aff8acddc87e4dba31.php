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

/* User/Logger_html/Log_deatil.html.twig */
class __TwigTemplate_bd9670673d9a144d50f1d9b80d3be57d42e34594350e47826c81acfe7a66a46a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/Log_deatil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Logger_html/Log_deatil.html.twig"));

        // line 6
        $context["limit"] = 0;
        // line 7
        $context["i"] = 1;
        // line 1
        $this->parent = $this->loadTemplate("User/doshbord_user.html.twig", "User/Logger_html/Log_deatil.html.twig", 1);
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
        echo "جزئیات لاگ ها
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "    <div class=\"container\">
      <div class=\"row justify-content-center    \">
          <div class=\"col\">
              <table class=\"table\">
                  <thead class=\"border-bottom border-dark\">
                  <tr >
                      <th scope=\"col\">#</th>
                      <th scope=\"col\">نوع</th>
                      <th scope=\"col\">توضیحات</th>
                      <th scope=\"col\">نام اپ</th>
                  </tr>
                  </thead>
                  <tbody id=\"tboby_logs\">
                  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["logs_types"]) || array_key_exists("logs_types", $context) ? $context["logs_types"] : (function () { throw new RuntimeError('Variable "logs_types" does not exist.', 23, $this->source); })()), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["logs_type"]) {
            // line 24
            echo "                      <tr class=\"border-bottom\">
                          <th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "</th>
                          <td>
                              <a class=\"\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logs_type"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\"
                                 role=\"button\">
                                  ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logs_type"], "type", [], "any", false, false, false, 29), "html", null, true);
            echo "
                              </a>
                              <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\"
                                   id=\"offcanvasExample";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logs_type"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
                                  <div class=\"offcanvas-header bg-light-success\">
                                      <h5 class=\"offcanvas-title\"
                                          id=\"offcanvasExampleLabel\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["logs_type"], "user", [], "any", false, false, false, 35), "eraseCredentials", [], "any", false, false, false, 35), "html", null, true);
            echo "</h5>
                                      <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"
                                              aria-label=\"Close\"></button>
                                  </div>
                                  <hr>
                                  <div class=\"offcanvas-body bg-light\">
                                      <div>
                                          <p class=\"rounded-2 btn-outline-primary\"><span
                                                      class=\"text-dark btn-outline-primary fw-bold\">نوع لاگ: </span>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logs_type"], "type", [], "any", false, false, false, 43), "html", null, true);
            echo "
                                              <span class=\"text-muted\"></span></p>
                                          <p class=\"rounded-2 btn-outline-primary\"><span
                                                      class=\"text-dark btn-outline-primary fw-bold\">نام اپلیکیشن : </span>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["logs_type"], "app", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            echo "
                                              <span class=\"text-muted\"></span></p>
                                          <p class=\"rounded-2 btn-outline-primary\"><span
                                                      class=\"text-dark btn-outline-primary fw-bold\">تاریخ ثبت لاگ : </span>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logs_type"], "date", [], "any", false, false, false, 49), "Y/m/d,  h:m:s"), "html", null, true);
            echo "
                                              <span class=\"text-muted\"></span></p>
                                          <p class=\"rounded-2 btn-outline-primary\"><span
                                                      class=\"text-dark btn-outline-primary fw-bold\">توضیحات لاگ : </span>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logs_type"], "description", [], "any", false, false, false, 52), "html", null, true);
            echo "
                                              <span class=\"text-muted\"></span></p>
                                          <p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark fw-bold\">پارامتر های لاگ :</span>{
                                              ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["logs_type"], "parameters", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["key"] => $context["parameter"]) {
                // line 56
                echo "                                                  <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $context["parameter"], "html", null, true);
                echo ", </span>
                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['parameter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                              }</p>
                                      </div>
                                  </div>
                              </div>
                          </td>
                          <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logs_type"], "description", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                          <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["logs_type"], "app", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                      </tr>
                      ";
            // line 66
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 66, $this->source); })()) + 1);
            // line 67
            echo "                      ";
            $context["limit"] = twig_get_attribute($this->env, $this->source, $context["logs_type"], "type", [], "any", false, false, false, 67);
            // line 68
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                  </tbody>
              </table>
              <div class=\"g-9\">
                  <button type=\"button\" id=\"more_log\" class=\"btn btn-outline-primary\">
                      بیشتر
                  </button>
              </div>
          </div>
      </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 81
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script language=\"JavaScript\">
        \$(document).ready(function () {
            \$('#more_log').click(function () {
                \$.post('";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Log_deatil_type", ["type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logs_types"]) || array_key_exists("logs_types", $context) ? $context["logs_types"] : (function () { throw new RuntimeError('Variable "logs_types" does not exist.', 85, $this->source); })()), 0, [], "array", false, false, false, 85), "type", [], "any", false, false, false, 85)]), "html", null, true);
        echo "', {id:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logs_types"]) || array_key_exists("logs_types", $context) ? $context["logs_types"] : (function () { throw new RuntimeError('Variable "logs_types" does not exist.', 85, $this->source); })()), (twig_length_filter($this->env, (isset($context["logs_types"]) || array_key_exists("logs_types", $context) ? $context["logs_types"] : (function () { throw new RuntimeError('Variable "logs_types" does not exist.', 85, $this->source); })())) - 1), [], "array", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        echo " }, function (data) {
                    if (data.length <= 1) {
                        document.getElementById('more_log').style.display = 'none';
                        console.log(data)
                    }
                    else {
                        for (i = 0; i < data.length; i++) {
                                var e = \$('<tr>' +
                                '<th scope=\"row\">' +
                                (data[0]['number'] * 10 + i + 1) +
                                '</th><td>'
                                + '<a class=\"\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample' + data[i]['id'] + '\" role=\"button\">' + data[i]['type'] + '</a>' +
                                '<div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasExample' + data[i]['id'] + '\">' +
                                '<div class=\"offcanvas-header bg-light-success\"><h5 class=\"offcanvas-title\"id=\"offcanvasExampleLabel\"> ' +
                                '</h5><button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"' +
                                'aria-label=\"Close\"></button></div><hr>' +
                                +'<div class=\"offcanvas-body bg-light\"><div>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">نوع لاگ: </span>' + data[i]['type'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">نام اپلیکیشن : </span>' + data[i]['name_app'] +
                                '<span class=\"text-muted\"></span></p><p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">تاریخ ثبت لاگ : </span>' + data[i]['date'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">توضیحات لاگ : </span>' + data[i]['description'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark fw-bold\">پارامتر های لاگ :</span>{' + '<span class=\"text-muted\">' + data[i]['parameters'] + '</span>' + '}'
                                + '</p></div></div></div>' +
                                '</td><td>' + data[i]['description'] + '</td><td>' + data[i]['name_app'] + '</td></tr>');
                            \$('#tboby_logs').append(e);
                        }
                        console.log(data);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/Logger_html/Log_deatil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 85,  247 => 81,  237 => 80,  217 => 69,  211 => 68,  208 => 67,  206 => 66,  201 => 64,  197 => 63,  190 => 58,  179 => 56,  175 => 55,  169 => 52,  163 => 49,  157 => 46,  151 => 43,  140 => 35,  134 => 32,  128 => 29,  123 => 27,  118 => 25,  115 => 24,  111 => 23,  96 => 10,  86 => 9,  75 => 3,  65 => 2,  54 => 1,  52 => 7,  50 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User/doshbord_user.html.twig' %}
{% block title %}
جزئیات لاگ ها
{% endblock %}

{% set limit = 0 %}
{% set i = 1 %}

{% block main %}
    <div class=\"container\">
      <div class=\"row justify-content-center    \">
          <div class=\"col\">
              <table class=\"table\">
                  <thead class=\"border-bottom border-dark\">
                  <tr >
                      <th scope=\"col\">#</th>
                      <th scope=\"col\">نوع</th>
                      <th scope=\"col\">توضیحات</th>
                      <th scope=\"col\">نام اپ</th>
                  </tr>
                  </thead>
                  <tbody id=\"tboby_logs\">
                  {% for logs_type in logs_types|slice(0,10) %}
                      <tr class=\"border-bottom\">
                          <th scope=\"row\">{{ i }}</th>
                          <td>
                              <a class=\"\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample{{ logs_type.id }}\"
                                 role=\"button\">
                                  {{ logs_type.type }}
                              </a>
                              <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\"
                                   id=\"offcanvasExample{{ logs_type.id }}\">
                                  <div class=\"offcanvas-header bg-light-success\">
                                      <h5 class=\"offcanvas-title\"
                                          id=\"offcanvasExampleLabel\">{{ logs_type.user.eraseCredentials }}</h5>
                                      <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"
                                              aria-label=\"Close\"></button>
                                  </div>
                                  <hr>
                                  <div class=\"offcanvas-body bg-light\">
                                      <div>
                                          <p class=\"rounded-2 btn-outline-primary\"><span
                                                      class=\"text-dark btn-outline-primary fw-bold\">نوع لاگ: </span>{{ logs_type.type }}
                                              <span class=\"text-muted\"></span></p>
                                          <p class=\"rounded-2 btn-outline-primary\"><span
                                                      class=\"text-dark btn-outline-primary fw-bold\">نام اپلیکیشن : </span>{{ logs_type.app.name }}
                                              <span class=\"text-muted\"></span></p>
                                          <p class=\"rounded-2 btn-outline-primary\"><span
                                                      class=\"text-dark btn-outline-primary fw-bold\">تاریخ ثبت لاگ : </span>{{ logs_type.date|date(\"Y/m/d,  h:m:s\") }}
                                              <span class=\"text-muted\"></span></p>
                                          <p class=\"rounded-2 btn-outline-primary\"><span
                                                      class=\"text-dark btn-outline-primary fw-bold\">توضیحات لاگ : </span>{{ logs_type.description }}
                                              <span class=\"text-muted\"></span></p>
                                          <p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark fw-bold\">پارامتر های لاگ :</span>{
                                              {% for key,parameter in logs_type.parameters %}
                                                  <span class=\"text-muted\">{{ key }}:{{ parameter }}, </span>
                                              {% endfor %}
                                              }</p>
                                      </div>
                                  </div>
                              </div>
                          </td>
                          <td>{{ logs_type.description }}</td>
                          <td>{{ logs_type.app.name }}</td>
                      </tr>
                      {%  set i = i + 1 %}
                      {% set limit = logs_type.type %}
                  {% endfor %}
                  </tbody>
              </table>
              <div class=\"g-9\">
                  <button type=\"button\" id=\"more_log\" class=\"btn btn-outline-primary\">
                      بیشتر
                  </button>
              </div>
          </div>
      </div>
    </div>
{% endblock %}
{% block javascript %}
    {{ parent() }}
<script language=\"JavaScript\">
        \$(document).ready(function () {
            \$('#more_log').click(function () {
                \$.post('{{ path('Log_deatil_type',{type: logs_types[0].type }) }}', {id:{{ logs_types[ (logs_types|length) - 1 ].id }} }, function (data) {
                    if (data.length <= 1) {
                        document.getElementById('more_log').style.display = 'none';
                        console.log(data)
                    }
                    else {
                        for (i = 0; i < data.length; i++) {
                                var e = \$('<tr>' +
                                '<th scope=\"row\">' +
                                (data[0]['number'] * 10 + i + 1) +
                                '</th><td>'
                                + '<a class=\"\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample' + data[i]['id'] + '\" role=\"button\">' + data[i]['type'] + '</a>' +
                                '<div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasExample' + data[i]['id'] + '\">' +
                                '<div class=\"offcanvas-header bg-light-success\"><h5 class=\"offcanvas-title\"id=\"offcanvasExampleLabel\"> ' +
                                '</h5><button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"' +
                                'aria-label=\"Close\"></button></div><hr>' +
                                +'<div class=\"offcanvas-body bg-light\"><div>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">نوع لاگ: </span>' + data[i]['type'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">نام اپلیکیشن : </span>' + data[i]['name_app'] +
                                '<span class=\"text-muted\"></span></p><p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">تاریخ ثبت لاگ : </span>' + data[i]['date'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">توضیحات لاگ : </span>' + data[i]['description'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark fw-bold\">پارامتر های لاگ :</span>{' + '<span class=\"text-muted\">' + data[i]['parameters'] + '</span>' + '}'
                                + '</p></div></div></div>' +
                                '</td><td>' + data[i]['description'] + '</td><td>' + data[i]['name_app'] + '</td></tr>');
                            \$('#tboby_logs').append(e);
                        }
                        console.log(data);
                    }
                });
            });
        });
    </script>
{% endblock %}
", "User/Logger_html/Log_deatil.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\Logger_html\\Log_deatil.html.twig");
    }
}
