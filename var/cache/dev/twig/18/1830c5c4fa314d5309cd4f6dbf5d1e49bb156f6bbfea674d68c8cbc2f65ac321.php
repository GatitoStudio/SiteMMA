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

/* admin/baseAdmin.html.twig */
class __TwigTemplate_02a1a4477af7dd5d4fd1c9c3359fef71080e29204d020a8bc0c1f482086c3870 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/baseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/baseAdmin.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("all"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
  <!-- Custom styles for this template-->
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin"), "html", null, true);
        echo "\" rel=\"stylesheet\">


</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

      <!-- Sidebar - Brand -->
      <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPanel");
        echo "\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
          <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">MMA admin</div>
      </a>

      <!-- Divider -->
      <hr class=\"sidebar-divider my-0\">

      <!-- Nav Item - Dashboard -->
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPanel");
        echo "\">
          <i class=\"fas fa-fw fa-tachometer-alt\"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Heading -->
      <div class=\"sidebar-heading\">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Events</span>
        </a>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" ";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Adminevents");
        echo " \">Liste des events</a>
            <a class=\"collapse-item\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createEvent");
        echo "\">Créer un évent</a>
          </div>
        </div>
        
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwoo\" aria-expanded=\"true\" aria-controls=\"collapseTwoo\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Annales</span>
        </a>
        <div id=\"collapseTwoo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" ";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminAnnals");
        echo " \">Liste annales</a>
          </div>
        </div>
        
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"true\" aria-controls=\"collapseThree\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Offre de stage</span>
        </a>
        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" ";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminOffreStage");
        echo " \">Lister les offres de stage</a>
            <a class=\"collapse-item\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createOS");
        echo "\">Ajouter une offre de stage</a>
          </div>
        </div>     
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"true\" aria-controls=\"collapseFour\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Tutorat</span>
        </a>
        <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" ";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminTutorats");
        echo " \">Lister les tutorats</a>
            <a class=\"collapse-item\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createTutorat");
        echo "\">Ajouter un tutorat</a>
          </div>
        </div>     
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFive\" aria-expanded=\"true\" aria-controls=\"collapseFive\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Utilisateurs</span>
        </a>
        <div id=\"collapseFive\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" ";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminOffreStage");
        echo " \">Lister les utilisateurs</a>
            <a class=\"collapse-item\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createOS");
        echo "\">Ajouter un utilisateur</a>
          </div>
        </div>     
      </li>
      <!-- Divider -->
      <hr class=\"sidebar-divider\">

 



      <!-- Sidebar Toggler (Sidebar) -->
      <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

          <!-- Sidebar Toggle (Topbar) -->
          <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
          </button>

    

          <!-- Topbar Navbar -->
          <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
              <a class=\"nav-link dropdown-toggle\" role=\"button\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "Prenom", [], "any", false, false, false, 162), "html", null, true);
        echo " ";
        echo " ";
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "Nom", [], "any", false, false, false, 162), "html", null, true);
        echo "</span>
                <img class=\"img-profile rounded-circle\" src=\"https://i.pinimg.com/originals/93/bf/94/93bf940422372f478d45c53f00a7847e.jpg\">
              </a>
              <!-- Dropdown - User Information -->
              <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Profile
                </a>
                <!--
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Settings
                </a>
                -->
                <!--
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Activity Log
                </a>
                -->
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                  <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
          </div>

          <!-- Content Row -->
 
          ";
        // line 206
        $this->displayBlock('body', $context, $blocks);
        // line 209
        echo "   



        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"container my-auto\">
          <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Logout Modal-->
  <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Déconnexion</h5>
          <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">Voulez-vous vraiment vous déconnecter ? </div>
        <div class=\"modal-footer\">
          <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Non</button>
          <a class=\"btn btn-primary\" href=\" ";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo " \">Oui</a>
        </div>
      </div>
    </div>
  </div>
  <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("boot"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jqueryeasy"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sb-js"), "html", null, true);
        echo "\"></script>

  <!--<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script> -->
  
  <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatablejquery"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatableBoostrap"), "html", null, true);
        echo "\"></script>
  <!-- Page level custom scripts -->
  <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatable"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 206
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "    

          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 206,  381 => 268,  376 => 266,  372 => 265,  365 => 261,  360 => 259,  356 => 258,  352 => 257,  344 => 252,  299 => 209,  297 => 206,  246 => 162,  197 => 116,  193 => 115,  179 => 104,  175 => 103,  161 => 92,  157 => 91,  141 => 78,  125 => 65,  121 => 64,  97 => 43,  82 => 31,  65 => 17,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href=\"{{ asset('all') }}\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
  <!-- Custom styles for this template-->
  <link href=\"{{ asset('sbadmin') }}\" rel=\"stylesheet\">


</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

      <!-- Sidebar - Brand -->
      <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{path('adminPanel')}}\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
          <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">MMA admin</div>
      </a>

      <!-- Divider -->
      <hr class=\"sidebar-divider my-0\">

      <!-- Nav Item - Dashboard -->
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"{{path('adminPanel')}}\">
          <i class=\"fas fa-fw fa-tachometer-alt\"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Heading -->
      <div class=\"sidebar-heading\">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Events</span>
        </a>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" {{path('Adminevents')}} \">Liste des events</a>
            <a class=\"collapse-item\" href=\"{{path('createEvent')}}\">Créer un évent</a>
          </div>
        </div>
        
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwoo\" aria-expanded=\"true\" aria-controls=\"collapseTwoo\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Annales</span>
        </a>
        <div id=\"collapseTwoo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" {{path('AdminAnnals')}} \">Liste annales</a>
          </div>
        </div>
        
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"true\" aria-controls=\"collapseThree\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Offre de stage</span>
        </a>
        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" {{path('AdminOffreStage')}} \">Lister les offres de stage</a>
            <a class=\"collapse-item\" href=\"{{path('createOS')}}\">Ajouter une offre de stage</a>
          </div>
        </div>     
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"true\" aria-controls=\"collapseFour\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Tutorat</span>
        </a>
        <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" {{path('AdminTutorats')}} \">Lister les tutorats</a>
            <a class=\"collapse-item\" href=\"{{path('createTutorat')}}\">Ajouter un tutorat</a>
          </div>
        </div>     
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFive\" aria-expanded=\"true\" aria-controls=\"collapseFive\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Utilisateurs</span>
        </a>
        <div id=\"collapseFive\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\" {{path('AdminOffreStage')}} \">Lister les utilisateurs</a>
            <a class=\"collapse-item\" href=\"{{path('createOS')}}\">Ajouter un utilisateur</a>
          </div>
        </div>     
      </li>
      <!-- Divider -->
      <hr class=\"sidebar-divider\">

 



      <!-- Sidebar Toggler (Sidebar) -->
      <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

          <!-- Sidebar Toggle (Topbar) -->
          <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
          </button>

    

          <!-- Topbar Navbar -->
          <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
              <a class=\"nav-link dropdown-toggle\" role=\"button\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.Prenom}} {{\" \"}} {{ app.user.Nom }}</span>
                <img class=\"img-profile rounded-circle\" src=\"https://i.pinimg.com/originals/93/bf/94/93bf940422372f478d45c53f00a7847e.jpg\">
              </a>
              <!-- Dropdown - User Information -->
              <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Profile
                </a>
                <!--
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Settings
                </a>
                -->
                <!--
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Activity Log
                </a>
                -->
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                  <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
          </div>

          <!-- Content Row -->
 
          {% block body %}    

          {% endblock %}
   



        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"container my-auto\">
          <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Logout Modal-->
  <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Déconnexion</h5>
          <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">Voulez-vous vraiment vous déconnecter ? </div>
        <div class=\"modal-footer\">
          <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Non</button>
          <a class=\"btn btn-primary\" href=\" {{path('app_logout')}} \">Oui</a>
        </div>
      </div>
    </div>
  </div>
  <script src=\"{{ asset('jquery') }}\"></script>
  <script src=\"{{ asset('boot') }}\"></script>
  <script src=\"{{ asset('jqueryeasy') }}\"></script>

  <script src=\"{{ asset('sb-js') }}\"></script>

  <!--<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script> -->
  
  <script src=\"{{ asset('datatablejquery') }}\"></script>
  <script src=\"{{ asset('datatableBoostrap') }}\"></script>
  <!-- Page level custom scripts -->
  <script src=\"{{ asset('datatable') }}\"></script>

</body>

</html>
", "admin/baseAdmin.html.twig", "C:\\Users\\Camille\\Desktop\\ProjetsWeb\\SiteMMA\\templates\\admin\\baseAdmin.html.twig");
    }
}
