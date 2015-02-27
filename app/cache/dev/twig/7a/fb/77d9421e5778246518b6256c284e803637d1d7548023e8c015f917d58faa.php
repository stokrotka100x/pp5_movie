<?php

/* KasiaEpopejaBundle::layout.html.twig */
class __TwigTemplate_7afb77d9421e5778246518b6256c284e803637d1d7548023e8c015f917d58faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>

<html>
\t<head>
\t\t<title>PAN TADEUSZ</title>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kasiaepopeja/css/bootstrap.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kasiaepopeja/css/style.css"), "html", null, true);
        echo "\">
\t\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kasiaepopeja/js/jquery-2.1.3.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kasiaepopeja/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<header class=\"row\">
\t\t\t\t<div class=\"page-header text-uppercase\">
\t\t\t\t\t";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "\t\t\t\t</div>
\t\t\t</header>
\t\t\t";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 21
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<p>
\t\t\t\t\t\tJesteś zalogowany jako ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ". 
\t\t\t\t\t\t<a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">Wyloguj</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t<p>
\t\t\t\t\tNie jesteś zalogowany - 
\t\t\t\t\t<a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-primary\">Zaloguj</a>
\t\t\t\t\tJeśli nie masz konta - <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-primary\">Zarejestruj się</a>
\t\t\t\t</p>
\t\t\t";
        }
        // line 34
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
        // line 36
        $this->displayBlock('menu', $context, $blocks);
        // line 38
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer class=\"row\">
\t\t\t\t<p>(c) Copyright Katarzyna Wójcik</p>
\t\t\t</footer>
\t\t</div>
\t</body>
</html>";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\t\t\t";
    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        // line 37
        echo "\t\t\t\t\t";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "\t\t\t\t\t\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 43
        echo "\t\t\t\t\t";
    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 42
        echo "\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "KasiaEpopejaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 42,  136 => 41,  132 => 43,  129 => 41,  126 => 40,  122 => 37,  119 => 36,  115 => 17,  112 => 16,  101 => 44,  99 => 40,  95 => 38,  93 => 36,  89 => 34,  83 => 31,  79 => 30,  75 => 28,  68 => 24,  64 => 23,  60 => 21,  58 => 20,  54 => 18,  52 => 16,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }
}
