<?php

/* KasiaEpopejaBundle::bars.html.twig */
class __TwigTemplate_c3cd5009ebacfc18b1dda719f715aa77d256652da34749fee2197c2d1614a872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("KasiaEpopejaBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KasiaEpopejaBundle::layout.html.twig";
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
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Strona Główna</a></span></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_reflection_index");
        echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span> Lista refleksji</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_reflection_add");
        echo "\"><span class=\"glyphicon glyphicon-comment\"></span> Dodaj Refleksję</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 1));
        echo "\">Księga Pierwsza</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 2));
        echo "\">Księga Druga</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 3));
        echo "\">Księga Trzecia</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 4));
        echo "\">Księga Czwarta</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 5));
        echo "\">Księga Piąta</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 6));
        echo "\">Księga Szósta</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 7));
        echo "\">Księga Siódma</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 8));
        echo "\">Księga Ósma</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 9));
        echo "\">Księga Dziewiąta</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 10));
        echo "\">Księga Dziesiąta</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 11));
        echo "\">Księga Jedenasta</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("kasia_epopeja_books", array("book" => 12));
        echo "\">Księga Dwunasta</a></li>
\t</ul>\t\t\t
";
    }

    public function getTemplateName()
    {
        return "KasiaEpopejaBundle::bars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
