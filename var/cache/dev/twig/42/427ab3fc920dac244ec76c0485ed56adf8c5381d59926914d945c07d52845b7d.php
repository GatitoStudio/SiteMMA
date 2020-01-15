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

/* blog/login.html.twig */
class __TwigTemplate_a0ed158e1dfef5cf6c6022dd483d11c29f8052ed0d978e1d078cc1f1fb7318e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/login.html.twig", 1);
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
        echo "<link href=\"signin.css\" rel=\"stylesheet\">
<link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.3/examples/sign-in/\">


<form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" class=\"form-signin\">
    <img src=\"74888323_560436191410640_1639442987442241536_n.jpg\" class=\"d-block w-100\" alt=\"...\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
    <input type=\"email\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
    <label for=\"inputPassword\" class=\"sr-only\">Password</label>
    <input type=\"Password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
    <div class=\"checkbox mb-3\">
      <label>
        <input name=\"putain\" type=\"checkbox\" value=\"remember-me\"> Remember me
      </label>
    </div>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    <p class=\"mt-5 mb-3 text-muted\">&copy;</p>
  </form>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block  body %}
<link href=\"signin.css\" rel=\"stylesheet\">
<link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.3/examples/sign-in/\">


<form method=\"post\" action=\"{{ path('security_login')}}\" class=\"form-signin\">
    <img src=\"74888323_560436191410640_1639442987442241536_n.jpg\" class=\"d-block w-100\" alt=\"...\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
    <input type=\"email\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
    <label for=\"inputPassword\" class=\"sr-only\">Password</label>
    <input type=\"Password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
    <div class=\"checkbox mb-3\">
      <label>
        <input name=\"putain\" type=\"checkbox\" value=\"remember-me\"> Remember me
      </label>
    </div>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    <p class=\"mt-5 mb-3 text-muted\">&copy;</p>
  </form>
  {% endblock %}", "blog/login.html.twig", "C:\\Users\\Camille\\Desktop\\ProjetsWeb\\SiteMMA\\templates\\blog\\login.html.twig");
    }
}
