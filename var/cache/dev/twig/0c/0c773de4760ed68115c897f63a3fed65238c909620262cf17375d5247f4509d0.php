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

/* blog/edt.html.twig */
class __TwigTemplate_4a1e3a01be586e8f16aee3319b4e8f1d4ad811c01605d7efdf9c5e315f1d2d79 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/edt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/edt.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/edt.html.twig", 1);
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
        echo "<link href='http://camillebalmer.fr/fullcalendar/core/main.css' rel='stylesheet' />
<link href='http://camillebalmer.fr/fullcalendar/daygrid/main.css' rel='stylesheet' />
<link href='http://camillebalmer.fr/fullcalendar/timegrid/main.css' rel='stylesheet' />

<script src='http://camillebalmer.fr/fullcalendar/core/main.js'></script>
<script src='http://camillebalmer.fr/fullcalendar/daygrid/main.js'></script>
<script src='http://camillebalmer.fr/fullcalendar/timegrid/main.js'></script>
 <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ical"), "html", null, true);
        echo "\"></script>
 <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog"), "html", null, true);
        echo "\" rel=\"stylesheet\">

 
 <div class=\"album py-5 bg-light\">

 <div class=\" mt-5\">
      <div id='calendar' data-is-authenticated=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["edt"]) || array_key_exists("edt", $context) ? $context["edt"] : (function () { throw new RuntimeError('Variable "edt" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" class=\"mt-1\"> </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "
<script>
  function Test(value){
      let typegrid='timeGridWeek';
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
          typegrid='timeGridDay';
      }
                    var calendarEl = document.getElementById('calendar');
                // any other event sources... 
               var  calendar2 = new FullCalendar.Calendar(calendarEl, {
                  eventClick: function(info) {
                   // alert(info.event.extendedProps.department);
                
                    // change the border color just for fun
                    info.el.style.borderColor = 'red';
                  },
                  plugins: [ 'timeGrid'],
                  defaultView: typegrid,
                  nowIndicator: true,
                  handleWindowResize : false,
                  timeZone: 'local',
                  hiddenDays : [0],
                  locale: 'fr',
                  maxTime: \"24:00:00\",
                 minTime: \"08:00:00\",
                 scrollTime: \"18:00:00\",
                 height: \"auto\" ,
                 weekends: true,
                 allDaySlot : false,
                color: 'white',     // an option!
                textColor: 'white' // an option!
                }); 
              var jCalData = ICAL.parse(value);
  var array=[]
  var test=jCalData[2]
  var comp = new ICAL.Component(jCalData[2]);
  //console.log(jCalData[2].length)
  for(var i=0;i<jCalData[2].length;++i){
    console.log(jCalData[2][i][1]);
          var events=\t[
          { 
            title: jCalData[2][i][1][3][3]+\"\\n\"+jCalData[2][i][1][4][3], // a property!
            start: jCalData[2][i][1][1][3], // a property!
            end: jCalData[2][i][1][2][3], // a property! ** see important note below about 'end' **
           // extendedProps : {department: jCalData[2][i][1][5][3]},
            textColor: \"white\"

          }
        ]
       // console.log(events[0])
          //  console.log(calendar)
  
        calendar2.addEvent(events[0]);
          //console.log(jCalData[2][i][1])
  }
                calendar2.render();
  
  //var vevent = comp.getAllSubcomponents(\"vevent\");
  
  //console.log(event.startDate.toJSDate(), event.endDate.toJSDate());
  }
  
  </script>

  <script>
      var userRating = document.querySelector('#calendar');
      var isAuthenticated = userRating.dataset.isAuthenticated;
      Test(isAuthenticated)
      userRating.dataset.isAuthenticated=\"\";
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/edt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 22,  105 => 21,  91 => 17,  82 => 11,  78 => 10,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<link href='http://camillebalmer.fr/fullcalendar/core/main.css' rel='stylesheet' />
<link href='http://camillebalmer.fr/fullcalendar/daygrid/main.css' rel='stylesheet' />
<link href='http://camillebalmer.fr/fullcalendar/timegrid/main.css' rel='stylesheet' />

<script src='http://camillebalmer.fr/fullcalendar/core/main.js'></script>
<script src='http://camillebalmer.fr/fullcalendar/daygrid/main.js'></script>
<script src='http://camillebalmer.fr/fullcalendar/timegrid/main.js'></script>
 <script type=\"text/javascript\" src=\"{{ asset('ical') }}\"></script>
 <link href=\"{{ asset('blog') }}\" rel=\"stylesheet\">

 
 <div class=\"album py-5 bg-light\">

 <div class=\" mt-5\">
      <div id='calendar' data-is-authenticated=\"{{edt}}\" class=\"mt-1\"> </div>
    </div>
</div>
{% endblock %}
{% block javascript %}

<script>
  function Test(value){
      let typegrid='timeGridWeek';
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
          typegrid='timeGridDay';
      }
                    var calendarEl = document.getElementById('calendar');
                // any other event sources... 
               var  calendar2 = new FullCalendar.Calendar(calendarEl, {
                  eventClick: function(info) {
                   // alert(info.event.extendedProps.department);
                
                    // change the border color just for fun
                    info.el.style.borderColor = 'red';
                  },
                  plugins: [ 'timeGrid'],
                  defaultView: typegrid,
                  nowIndicator: true,
                  handleWindowResize : false,
                  timeZone: 'local',
                  hiddenDays : [0],
                  locale: 'fr',
                  maxTime: \"24:00:00\",
                 minTime: \"08:00:00\",
                 scrollTime: \"18:00:00\",
                 height: \"auto\" ,
                 weekends: true,
                 allDaySlot : false,
                color: 'white',     // an option!
                textColor: 'white' // an option!
                }); 
              var jCalData = ICAL.parse(value);
  var array=[]
  var test=jCalData[2]
  var comp = new ICAL.Component(jCalData[2]);
  //console.log(jCalData[2].length)
  for(var i=0;i<jCalData[2].length;++i){
    console.log(jCalData[2][i][1]);
          var events=\t[
          { 
            title: jCalData[2][i][1][3][3]+\"\\n\"+jCalData[2][i][1][4][3], // a property!
            start: jCalData[2][i][1][1][3], // a property!
            end: jCalData[2][i][1][2][3], // a property! ** see important note below about 'end' **
           // extendedProps : {department: jCalData[2][i][1][5][3]},
            textColor: \"white\"

          }
        ]
       // console.log(events[0])
          //  console.log(calendar)
  
        calendar2.addEvent(events[0]);
          //console.log(jCalData[2][i][1])
  }
                calendar2.render();
  
  //var vevent = comp.getAllSubcomponents(\"vevent\");
  
  //console.log(event.startDate.toJSDate(), event.endDate.toJSDate());
  }
  
  </script>

  <script>
      var userRating = document.querySelector('#calendar');
      var isAuthenticated = userRating.dataset.isAuthenticated;
      Test(isAuthenticated)
      userRating.dataset.isAuthenticated=\"\";
    </script>
    {% endblock %}
", "blog/edt.html.twig", "C:\\Users\\Camille\\Desktop\\ProjetsWeb\\SiteMMA\\templates\\blog\\edt.html.twig");
    }
}
