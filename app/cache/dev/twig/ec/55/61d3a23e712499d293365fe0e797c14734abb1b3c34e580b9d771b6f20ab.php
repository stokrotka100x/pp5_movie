<?php

/* GrauchoMoviesBundle:Default:index.html.twig */
class __TwigTemplate_ec5561d3a23e712499d293365fe0e797c14734abb1b3c34e580b9d771b6f20ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GrauchoMoviesBundle::bars.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrauchoMoviesBundle::bars.html.twig";
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
\t\t<div class=\"navbar-header navbar-brand\">Graucho's Movies Store</div>
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
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
<!-- czêœto wypo¿yczane -->

";
    }

    public function getTemplateName()
    {
        return "GrauchoMoviesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  53 => 15,  40 => 4,  37 => 3,  11 => 1,);
    }
}
