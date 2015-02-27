<?php

/* GrauchoMoviesBundle::bars.html.twig */
class __TwigTemplate_e71f78f819485419e160326f3f0d60b21950e3e2f7cc14eb9dc8476a71b00a33 extends Twig_Template
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
            'menu' => array($this, 'block_menu'),
            'crede' => array($this, 'block_crede'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("graucho_movies_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Strona Główna</a></span></li>
<!--if loged in -->
\t\t<!--FIXME path-->
\t\t<!---->
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("graucho_movies_recenzja_index");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>Recenzje</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("graucho_movies_koszyk_index");
        echo "\"><span class=\"glyphicon glyphicon-shopping-cart\"></span>Koszyk</a></li>
<!--endif-->
\t\t
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("graucho_movies_movies", array("movie" => 1));
        echo "\">1. Akcji</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("graucho_movies_movies", array("movie" => 2));
        echo "\">2. Biograficzne</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("graucho_movies_movies", array("movie" => 3));
        echo "\">3. Dokumentalne</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("graucho_movies_movies", array("movie" => 4));
        echo "\">4. Komedie</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("graucho_movies_movies", array("movie" => 5));
        echo "\">5. Kryminalne</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("graucho_movies_movies", array("movie" => 6));
        echo "\">6. Seriale</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("graucho_movies_movies", array("movie" => 7));
        echo "\">7. SF</a></li>
\t\t
\t</ul>\t\t\t
";
    }

    // line 24
    public function block_crede($context, array $blocks = array())
    {
        // line 25
        echo "
\t";
        // line 26
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 27
            echo "\t\t<div class=\"row\">
\t\t\t<p>
\t\t\t\tJesteś zalogowany jako ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ". 
\t\t\t\t<a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">Wyloguj</a>
\t\t\t</p>
\t\t</div>
\t";
        } else {
            // line 34
            echo "\t\t<p>
\t\t\tNie jesteś zalogowany - 
\t\t\t<a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-primary\">Zaloguj</a>
\t\t\tJeśli nie masz konta - <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-primary\">Zarejestruj się</a>
\t\t</p>
\t";
        }
        // line 40
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "GrauchoMoviesBundle::bars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 40,  123 => 37,  119 => 36,  115 => 34,  108 => 30,  104 => 29,  100 => 27,  98 => 26,  95 => 25,  92 => 24,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
