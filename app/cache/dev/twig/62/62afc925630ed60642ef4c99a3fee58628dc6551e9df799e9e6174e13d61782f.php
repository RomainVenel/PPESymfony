<?php

/* base.html.twig */
class __TwigTemplate_460216384dff408c87d443fe097dcf146b552cbe5f77b6fe902e2cb703db5896 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0add24450408fcd47b25558deadb424b366c26d738ccd35ea745645280feab98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0add24450408fcd47b25558deadb424b366c26d738ccd35ea745645280feab98->enter($__internal_0add24450408fcd47b25558deadb424b366c26d738ccd35ea745645280feab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0add24450408fcd47b25558deadb424b366c26d738ccd35ea745645280feab98->leave($__internal_0add24450408fcd47b25558deadb424b366c26d738ccd35ea745645280feab98_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87273a60922038d2232f9c3375edd3c0d7f82eb5f245e16c13923cf7030b1ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87273a60922038d2232f9c3375edd3c0d7f82eb5f245e16c13923cf7030b1ae9->enter($__internal_87273a60922038d2232f9c3375edd3c0d7f82eb5f245e16c13923cf7030b1ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87273a60922038d2232f9c3375edd3c0d7f82eb5f245e16c13923cf7030b1ae9->leave($__internal_87273a60922038d2232f9c3375edd3c0d7f82eb5f245e16c13923cf7030b1ae9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d32c602eed6efd4ed457fcd11788619d05b1412cc841892cb3c35e4049c212cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32c602eed6efd4ed457fcd11788619d05b1412cc841892cb3c35e4049c212cc->enter($__internal_d32c602eed6efd4ed457fcd11788619d05b1412cc841892cb3c35e4049c212cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d32c602eed6efd4ed457fcd11788619d05b1412cc841892cb3c35e4049c212cc->leave($__internal_d32c602eed6efd4ed457fcd11788619d05b1412cc841892cb3c35e4049c212cc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b16511b1738e04231dca48f0f149f96ccf6b21fba390dfa49f181c82ed07587c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16511b1738e04231dca48f0f149f96ccf6b21fba390dfa49f181c82ed07587c->enter($__internal_b16511b1738e04231dca48f0f149f96ccf6b21fba390dfa49f181c82ed07587c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b16511b1738e04231dca48f0f149f96ccf6b21fba390dfa49f181c82ed07587c->leave($__internal_b16511b1738e04231dca48f0f149f96ccf6b21fba390dfa49f181c82ed07587c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a10e96502aeaf0e9118a768e01751345f31a807daf9abf7fb9b2f61d4d6f635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a10e96502aeaf0e9118a768e01751345f31a807daf9abf7fb9b2f61d4d6f635->enter($__internal_9a10e96502aeaf0e9118a768e01751345f31a807daf9abf7fb9b2f61d4d6f635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9a10e96502aeaf0e9118a768e01751345f31a807daf9abf7fb9b2f61d4d6f635->leave($__internal_9a10e96502aeaf0e9118a768e01751345f31a807daf9abf7fb9b2f61d4d6f635_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
