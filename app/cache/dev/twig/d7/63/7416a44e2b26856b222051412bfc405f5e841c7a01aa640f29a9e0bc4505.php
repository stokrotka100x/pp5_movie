<?php

/* GrauchoMoviesBundle::layout.html.twig */
class __TwigTemplate_d7637416a44e2b26856b222051412bfc405f5e841c7a01aa640f29a9e0bc4505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'crede' => array($this, 'block_crede'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>

<html>
<head>
\t<title>Graucho's Movies Store</title>
\t<meta charset=\"UTF-8\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/grauchomovies/css/lavish-bootstrap.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/grauchomovies/css/style.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/grauchomovies/js/jquery-2.1.3.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/grauchomovies/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
\t<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "\t</div>
\t\t
\t<div class=\"container\" style=\"margin-top:80px;\">
\t\t<div class=\"page-header\">
\t\t\t";
        // line 20
        $this->displayBlock('crede', $context, $blocks);
        // line 22
        echo "\t\t</div>
\t\t<div class=\"row\">
\t\t\t\t
\t\t\t<aside class=\"col-md-4\">
\t\t\t\t";
        // line 26
        $this->displayBlock('menu', $context, $blocks);
        // line 28
        echo "\t\t\t</aside>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr></hr>
\t\t<footer class=\"row\">
\t\t\t<p>UEK 2015 - Movies Store Project</p>
\t\t</footer>
\t</div>
</body>
</html>";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "\t\t";
    }

    // line 20
    public function block_crede($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t";
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t\t";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "GrauchoMoviesBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  108 => 30,  104 => 27,  101 => 26,  97 => 21,  94 => 20,  90 => 15,  87 => 14,  74 => 32,  72 => 30,  68 => 28,  66 => 26,  60 => 22,  58 => 20,  52 => 16,  50 => 14,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }
}
