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

/* base.html.twig.old */
class __TwigTemplate_74858f595017824e79ac08550d7bb366c69d44467fa38d1ddb0dd887c92bf17b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig.old"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig.old"));

        // line 1
        echo "﻿  <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.3/examples/carousel/\">

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
\t<header>
        <nav>
            <div class=\"nav-wrapper #d32f2f red darken-2\">
              <a href=\"/\" class=\"brand-logo\">Miage Mulhouse Association</a>
              <ul class=\"right hide-on-med-and-down\">
                  <li><a href=\"/event\">Evenements</a></li>
                  <li><a href=\"/partners\">Partenaires</a></li>
                  <li><a href=\"/contact\">Contact</a></li>
                  <li><a href=\"/connexion\"><i class=\"material-icons\">lock</i></a></li>

              </ul>
            </div>
          </nav>
\t\t  </header>
\t\t  
        <main>

\t\t<div class=\"container\">

     ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "     <div id='calendar'></div>

\t\t</div>
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "      </main>
        <footer class=\"page-footer #d32f2f red darken-2\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col l6 s12\">
                  <h5 class=\"white-text\">Footer Content</h5>
                  <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class=\"col l4 offset-l2 s12\">
                  <h5 class=\"white-text\">Links</h5>
                  <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Facebook</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div  class=\"footer-copyright\">
              <div class=\"container\">
              © 2019 Copyright Text
              <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
              </div>
            </div>
          </footer>
    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        
    <style>
        body {
         display: flex;
         min-height: 100vh;
         flex-direction: column;       
       }
     
       main {
         flex: 1 0 auto;
       }
     
       </style>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\">      </script>
        <link href='http://camillebalmer.fr/fullcalendar/core/main.css' rel='stylesheet' />
        <link href='http://camillebalmer.fr/fullcalendar/daygrid/main.css' rel='stylesheet' />
        <link href='http://camillebalmer.fr/fullcalendar/timegrid/main.css' rel='stylesheet' />

        <script src='http://camillebalmer.fr/fullcalendar/core/main.js'></script>
        <script src='http://camillebalmer.fr/fullcalendar/daygrid/main.js'></script>
        <script src='http://camillebalmer.fr/fullcalendar/timegrid/main.js'></script>


        <script>

            \$(document).ready(function(){
              \$('.slider').slider();
            });
        </script>

        <script>

            document.addEventListener('DOMContentLoaded', function() {
              var calendarEl = document.getElementById('calendar');
              // any other event sources... 
              var calendar = new FullCalendar.Calendar(calendarEl, {
                eventClick: function(info) {
                  alert('Event: ' + info.event.extendedProps.department);
              
                  // change the border color just for fun
                  info.el.style.borderColor = 'red';
                },
                plugins: [ 'timeGrid'],
                defaultView: 'timeGridWeek',
                timeZone: 'UTC',
                locale: 'fr',
                maxTime: \"19:00:00\",
               minTime: \"08:00:00\",
               weekends: false,
               allDaySlot : false,
                events: [ // put the array in the `events` property
                {
                  title  : 'Programmation orienté objet',
                  start  : '2019-09-09T08:00:00',
                  end: '2019-09-09T12:00:00', // a property! ** see important note below about 'end' **
                  groupId : 'test',
                  extendedProps:
                  {
                    department: 'BioChemistry'
                  },                
                }
              ],
              color: 'black',     // an option!
              textColor: 'yellow' // an option!
              });
              
              calendar.render();
            });
      
          </script>
       
   
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig.old";
    }

    public function getDebugInfo()
    {
        return array (  213 => 50,  203 => 49,  185 => 45,  154 => 11,  135 => 5,  96 => 112,  94 => 49,  89 => 46,  87 => 45,  64 => 24,  62 => 11,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿  <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.3/examples/carousel/\">

    {% block stylesheets %}        
    <style>
        body {
         display: flex;
         min-height: 100vh;
         flex-direction: column;       
       }
     
       main {
         flex: 1 0 auto;
       }
     
       </style>{% endblock %}
    </head>
    <body>
\t<header>
        <nav>
            <div class=\"nav-wrapper #d32f2f red darken-2\">
              <a href=\"/\" class=\"brand-logo\">Miage Mulhouse Association</a>
              <ul class=\"right hide-on-med-and-down\">
                  <li><a href=\"/event\">Evenements</a></li>
                  <li><a href=\"/partners\">Partenaires</a></li>
                  <li><a href=\"/contact\">Contact</a></li>
                  <li><a href=\"/connexion\"><i class=\"material-icons\">lock</i></a></li>

              </ul>
            </div>
          </nav>
\t\t  </header>
\t\t  
        <main>

\t\t<div class=\"container\">

     {% block body %}{% endblock %}
     <div id='calendar'></div>

\t\t</div>
        {% block javascripts %}
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\">      </script>
        <link href='http://camillebalmer.fr/fullcalendar/core/main.css' rel='stylesheet' />
        <link href='http://camillebalmer.fr/fullcalendar/daygrid/main.css' rel='stylesheet' />
        <link href='http://camillebalmer.fr/fullcalendar/timegrid/main.css' rel='stylesheet' />

        <script src='http://camillebalmer.fr/fullcalendar/core/main.js'></script>
        <script src='http://camillebalmer.fr/fullcalendar/daygrid/main.js'></script>
        <script src='http://camillebalmer.fr/fullcalendar/timegrid/main.js'></script>


        <script>

            \$(document).ready(function(){
              \$('.slider').slider();
            });
        </script>

        <script>

            document.addEventListener('DOMContentLoaded', function() {
              var calendarEl = document.getElementById('calendar');
              // any other event sources... 
              var calendar = new FullCalendar.Calendar(calendarEl, {
                eventClick: function(info) {
                  alert('Event: ' + info.event.extendedProps.department);
              
                  // change the border color just for fun
                  info.el.style.borderColor = 'red';
                },
                plugins: [ 'timeGrid'],
                defaultView: 'timeGridWeek',
                timeZone: 'UTC',
                locale: 'fr',
                maxTime: \"19:00:00\",
               minTime: \"08:00:00\",
               weekends: false,
               allDaySlot : false,
                events: [ // put the array in the `events` property
                {
                  title  : 'Programmation orienté objet',
                  start  : '2019-09-09T08:00:00',
                  end: '2019-09-09T12:00:00', // a property! ** see important note below about 'end' **
                  groupId : 'test',
                  extendedProps:
                  {
                    department: 'BioChemistry'
                  },                
                }
              ],
              color: 'black',     // an option!
              textColor: 'yellow' // an option!
              });
              
              calendar.render();
            });
      
          </script>
       
   
        
        {% endblock %}
      </main>
        <footer class=\"page-footer #d32f2f red darken-2\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col l6 s12\">
                  <h5 class=\"white-text\">Footer Content</h5>
                  <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class=\"col l4 offset-l2 s12\">
                  <h5 class=\"white-text\">Links</h5>
                  <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Facebook</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div  class=\"footer-copyright\">
              <div class=\"container\">
              © 2019 Copyright Text
              <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
              </div>
            </div>
          </footer>
    </body>

</html>
", "base.html.twig.old", "C:\\Users\\Camille\\Desktop\\ProjetsWeb\\SiteMMA\\templates\\base.html.twig.old");
    }
}
