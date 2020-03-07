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

/* blog/home.html.twig */
class __TwigTemplate_38a84b8a2b52222ca15b50342ba7968c08e1c9157a56447f6e1ec9f86527e6b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("carousel"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:700,900\" rel=\"stylesheet\">

  <div class=\"container\">
    <div id=\"carouselExampleControls\" class=\"carousel slide d-none d-lg-block\" data-ride=\"carousel\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\" data-interval=\"5000\">
          <img src=\"https://via.placeholder.com/150\" class=\"d-block w-100\" alt=\"...\">
        </div>
        <div class=\"carousel-item\" data-interval=\"5000\">
          <img src=\"https://via.placeholder.com/150\"  class=\"d-block w-100\" alt=\"...\">
        </div>
        <div class=\"carousel-item\" data-interval=\"5000\">
          <img src=\"https://via.placeholder.com/150\" class=\"d-block w-100\"  alt=\"...\">
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon text-dark\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>

  </div>
  <main role=\"main\" class=\"container mt-5\">
    <h1>Bienvenue sur le site de la MMA !</h1>
    <hr>

  <div class=\"row\">
      <div class=\"col-md-8 blog-main\" style=\"word-wrap: break-word;\">

          <div class=\"blog-post\">
              <h2 class=\"blog-post-title\">Qui sommes-nous ?</h2>
         
              <p>Créée en 1976, la MIAGE Mulhouse Association, ou MMA, est l’association regroupant les étudiants de la MIAGE de Mulhouse.</p>
              <p>Nous organisons des soirées et diverses activités lors des manifestations étudiantes dans la ville de Mulhouse et ses environs.</p>
    
              <p>Dans une optique plus studieuse, nous mettons à disposition des adhérents les annales des examens des années précédentes, et prenons part à la promotion de 
                la filièreMIAGE auprès des lycéens lors d’événements tels que les journées portes-ouvertes de l’Université de Haute Alsace ou des Forums des Métiers et
                 autres Journées des Carrières.</p>
                 <p>Au niveau national, l’association est membre du réseau Miage Connection qui unifie et représente les 18 MIAGE de France.</p>
              
            </div>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 52
            echo "            <hr>
            <div class=\"blog-post\">
              <h2 class=\"blog-post-title\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</h2>
              <p class=\"blog-post-meta\">";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Date", [], "any", false, false, false, 55), "d M Y", "Europe/Paris"), "html", null, true);
            echo "</p>
              ";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["event"], "Description", [], "any", false, false, false, 56);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
  
      </div><!-- /.blog-main -->
  
      <aside class=\"col-md-4 blog-sidebar\">
        <div class=\"p-4 mb-3 bg-light rounded\">
          <h4 class=\"font-italic\">A propos</h4>
          <p class=\"mb-0\">Nous sommes la MMA</p>
        </div>
  
        <div class=\"p-4\">
          <h4 class=\"font-italic\">Archives</h4>
          <ol class=\"list-unstyled mb-0\">
            <!--
            <li><a href=\"#\">March 2014</a></li>
            -->
          </ol>
        </div>
  
        <div class=\"p-4\">
          <h4 class=\"font-italic\">Suivez-nous</h4>
          <ol class=\"list-unstyled\">
            <li><a href=\"#\">Facebook</a></li>
            <li><a href=\"#\">etc..</a></li>
          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->
  
    </div><!-- /.row -->
    </main>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 59,  138 => 56,  134 => 55,  130 => 54,  126 => 52,  122 => 51,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<link href=\"{{ asset('carousel') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('logo') }}\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:700,900\" rel=\"stylesheet\">

  <div class=\"container\">
    <div id=\"carouselExampleControls\" class=\"carousel slide d-none d-lg-block\" data-ride=\"carousel\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\" data-interval=\"5000\">
          <img src=\"https://via.placeholder.com/150\" class=\"d-block w-100\" alt=\"...\">
        </div>
        <div class=\"carousel-item\" data-interval=\"5000\">
          <img src=\"https://via.placeholder.com/150\"  class=\"d-block w-100\" alt=\"...\">
        </div>
        <div class=\"carousel-item\" data-interval=\"5000\">
          <img src=\"https://via.placeholder.com/150\" class=\"d-block w-100\"  alt=\"...\">
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon text-dark\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>

  </div>
  <main role=\"main\" class=\"container mt-5\">
    <h1>Bienvenue sur le site de la MMA !</h1>
    <hr>

  <div class=\"row\">
      <div class=\"col-md-8 blog-main\" style=\"word-wrap: break-word;\">

          <div class=\"blog-post\">
              <h2 class=\"blog-post-title\">Qui sommes-nous ?</h2>
         
              <p>Créée en 1976, la MIAGE Mulhouse Association, ou MMA, est l’association regroupant les étudiants de la MIAGE de Mulhouse.</p>
              <p>Nous organisons des soirées et diverses activités lors des manifestations étudiantes dans la ville de Mulhouse et ses environs.</p>
    
              <p>Dans une optique plus studieuse, nous mettons à disposition des adhérents les annales des examens des années précédentes, et prenons part à la promotion de 
                la filièreMIAGE auprès des lycéens lors d’événements tels que les journées portes-ouvertes de l’Université de Haute Alsace ou des Forums des Métiers et
                 autres Journées des Carrières.</p>
                 <p>Au niveau national, l’association est membre du réseau Miage Connection qui unifie et représente les 18 MIAGE de France.</p>
              
            </div>
            {% for event in events %}
            <hr>
            <div class=\"blog-post\">
              <h2 class=\"blog-post-title\">{{ event.Nom  }}</h2>
              <p class=\"blog-post-meta\">{{event.Date | date('d M Y',\"Europe/Paris\")}}</p>
              {{ event.Description | raw  }}
            </div>
            {% endfor %}

  
      </div><!-- /.blog-main -->
  
      <aside class=\"col-md-4 blog-sidebar\">
        <div class=\"p-4 mb-3 bg-light rounded\">
          <h4 class=\"font-italic\">A propos</h4>
          <p class=\"mb-0\">Nous sommes la MMA</p>
        </div>
  
        <div class=\"p-4\">
          <h4 class=\"font-italic\">Archives</h4>
          <ol class=\"list-unstyled mb-0\">
            <!--
            <li><a href=\"#\">March 2014</a></li>
            -->
          </ol>
        </div>
  
        <div class=\"p-4\">
          <h4 class=\"font-italic\">Suivez-nous</h4>
          <ol class=\"list-unstyled\">
            <li><a href=\"#\">Facebook</a></li>
            <li><a href=\"#\">etc..</a></li>
          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->
  
    </div><!-- /.row -->
    </main>
      {% endblock %}", "blog/home.html.twig", "C:\\Users\\Camille\\Desktop\\ProjetsWeb\\SiteMMA\\templates\\blog\\home.html.twig");
    }
}
