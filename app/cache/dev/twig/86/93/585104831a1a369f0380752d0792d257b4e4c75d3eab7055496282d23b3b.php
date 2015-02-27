<?php

/* KasiaEpopejaBundle:Default:index.html.twig */
class __TwigTemplate_8693585104831a1a369f0380752d0792d257b4e4c75d3eab7055496282d23b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("KasiaEpopejaBundle::bars.html.twig");
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
        return "KasiaEpopejaBundle::bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>PAN TADEUSZ</h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<p>Pan Tadeusz, czyli Ostatni zajazd na Litwie – poemat Adama Mickiewicza wydany w dwóch tomach w 1834 w Paryżu przez Aleksandra Jełowickiego.</p>
\t<p>Ta epopeja narodowa z elementami gawędy szlacheckiej powstała w latach 1832-1834 w Paryżu. Składa się z dwunastu ksiąg pisanych wierszem, trzynastozgłoskowym aleksandrynem polskim.</p>
\t<p>Rękopis Pana Tadeusza przechowywany jest w Zakładzie Narodowym im. Ossolińskich we Wrocławiu, w szkatule z hebanu i kości słoniowej zamówionej przez Stanisława Tarnowskiego i wykonanej w 1873 przez Józefa Brzostowskiego.</p>
\t<p>Pierwsze wydanie Pana Tadeusza na ziemiach polskich ukazało się w Toruniu w 1858 r. w drukarni miejskiej dzierżawionej przez Ernsta Lambecka[1]. Czas akcji: pięć dni z roku 1811 i dwa dni z roku 1812.</p>
\t<div class=\"col-xs-12 col-md-6\">
\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kasiaepopeja/images/pan_tadeusz1.jpg"), "html", null, true);
        echo "\" alt=\"Pan Tadeusz\" class=\"img-thumbnail\">
\t</div>
\t<div class=\"col-xs-12 col-md-6\">
\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kasiaepopeja/images/pan_tadeusz2.jpg"), "html", null, true);
        echo "\" alt=\"Pan Tadeusz\" class=\"img-thumbnail\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "KasiaEpopejaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  55 => 13,  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
