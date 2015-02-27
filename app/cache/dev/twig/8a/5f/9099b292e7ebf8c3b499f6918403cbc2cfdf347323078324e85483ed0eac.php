<?php

/* GrauchoMoviesBundle:Movies:movie_1.html.twig */
class __TwigTemplate_8a5f9099b292e7ebf8c3b499f6918403cbc2cfdf347323078324e85483ed0eac extends Twig_Template
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
\t\t<div class=\"navbar-header navbar-brand\">Filmy Akcji</div>
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
        echo "\t
\t<div class=\"col-md-8\" style=\"border: 1px solid #617988;\">
\t
\t<!-- movies list from db. by gerne-->
\t";
        // line 20
        $context["items"] = array(0 => "a", 1 => "b", 2 => "c", 3 => "d", 4 => "e", 5 => "f", 6 => "g", 7 => "a", 8 => "b", 9 => "c", 10 => "d", 11 => "e", 12 => "f", 13 => "g");
        // line 21
        echo "\t<table class=\"table\">
\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), 3, ""));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 23
            echo "\t\t<tr>
\t\t\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                echo "\t
\t\t\t<!-- TODO movie small preview(title, small img, link to movie site)-->
\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "</td>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</table>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "GrauchoMoviesBundle:Movies:movie_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  89 => 28,  81 => 26,  74 => 24,  71 => 23,  67 => 22,  64 => 21,  62 => 20,  56 => 16,  53 => 15,  40 => 4,  37 => 3,  11 => 1,);
    }
}
