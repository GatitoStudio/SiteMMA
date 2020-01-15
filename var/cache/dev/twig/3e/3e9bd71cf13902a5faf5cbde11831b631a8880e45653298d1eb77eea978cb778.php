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

/* blog/events.html.twig */
class __TwigTemplate_61c819353674b73ce041e4df75bdb522f672bffde2fb89805cca5b1b029a9a33 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/events.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/events.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/events.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"album py-5 bg-light mt-5\">
        <div class=\"container\">
            ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 6, $this->source); })())) > 0)) {
            // line 7
            echo "
                <div class=\"row\">
                    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 10
                echo "                        <div class=\"col-md-4\">
                            <div class=\"card mb-4 shadow-sm\">
                                <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "ImageCover", [], "any", false, false, false, 12), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\">
                                <div class=\"card-body\">
                                    <p class=\"card-text text-truncate\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Nom", [], "any", false, false, false, 14), "html", null, true);
                echo "</p>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voirevent", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "Id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\" class=\"btn btn-secondary btn-lg\" tabindex=\"-1\" role=\"button\" aria-disabled=\"true\">Voir les détails</a>
                                        </div>
                                        <small class=\"text-muted\">";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Date", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
                echo "</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                <div class=\"alert alert-primary mt-4\" role=\"alert\">
                    Aucun événement prévu
                </div>
            ";
        }
        // line 31
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  119 => 27,  115 => 25,  103 => 19,  98 => 17,  92 => 14,  87 => 12,  83 => 10,  79 => 9,  75 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <div class=\"album py-5 bg-light mt-5\">
        <div class=\"container\">
            {% if events|length > 0 %}

                <div class=\"row\">
                    {% for event in events %}
                        <div class=\"col-md-4\">
                            <div class=\"card mb-4 shadow-sm\">
                                <img src=\"{{ event.ImageCover }}\" class=\"card-img-top\" alt=\"...\">
                                <div class=\"card-body\">
                                    <p class=\"card-text text-truncate\">{{ event.Nom  }}</p>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"btn-group\">
                                            <a href=\"{{path('voirevent',{id:event.Id } )}}\" class=\"btn btn-secondary btn-lg\" tabindex=\"-1\" role=\"button\" aria-disabled=\"true\">Voir les détails</a>
                                        </div>
                                        <small class=\"text-muted\">{{event.Date | date('d/m/Y')}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"alert alert-primary mt-4\" role=\"alert\">
                    Aucun événement prévu
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "blog/events.html.twig", "C:\\Users\\Camille\\Desktop\\ProjetsWeb\\SiteMMA\\templates\\blog\\events.html.twig");
    }
}
