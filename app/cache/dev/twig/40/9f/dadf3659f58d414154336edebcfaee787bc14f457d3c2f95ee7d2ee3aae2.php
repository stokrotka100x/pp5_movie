<?php

/* GrauchoMoviesBundle:Default:login.html.twig */
class __TwigTemplate_409fdadf3659f58d414154336edebcfaee787bc14f457d3c2f95ee7d2ee3aae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GrauchoMoviesBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrauchoMoviesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"navbar-header navbar-brand\">Logowanie</div>
\t\t<div class=\"navbar-collapse collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li>
\t\t\t\t</li>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("graucho_movies_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Strona Główna</a></span></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("graucho_movies_homepage");
        echo "\"><span class=\"glyphicon glyphicon-envelope\"></span> Nie pamiętasz danych?</a></span></li>
\t\t<li class=\"list-group-item\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/grauchomovies/adv/01.jpg"), "html", null, true);
        echo "\" height=\"165\" width=\"320\"></li>
\t</ul>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "\t<div class=\"col-md-8 jumbotron\">
\t\t<h2>Logowanie</h2>
<!--\t<form accept-charset=\"UTF-8\" action=\"/\" class=\"form\" method=\"get\">
\t\t\t<div style=\"margin:0;padding:0;display:inline\"><input name=\"utf8\" value=\"✓\" type=\"hidden\"></div>
\t\t\t<div class=\"form-group col-md-8\">
\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"login\" placeholder=\"Login\">
\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"Hasło\">
\t\t\t\t<input class=\"btn btn-large btn-primary\" name=\"commit\" value=\"Zaloguj\" type=\"submit\">
\t\t\t</div>
\t\t</form>\t\t
-->
";
        // line 35
        echo $this->env->getExtension('actions')->renderUri("FOSUserBundle::Security::login", array());
        // line 36
        echo "\t\t<div class=\"col-md-12\" style=\"margin-top:20px;\"></div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "GrauchoMoviesBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 36,  91 => 35,  78 => 24,  75 => 23,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  54 => 15,  41 => 4,  38 => 3,  11 => 1,);
    }
}
