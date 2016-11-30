<?php

/* base.html.twig */
class __TwigTemplate_863f2464aad1cc6f6028c78a97f6df901096defd11a57a4234955ff7794f1500 extends Twig_Template
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
        $__internal_c018c8581751182493be7db0fe3e246631bc44c8a50cfc10ca7ed635bf28998b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c018c8581751182493be7db0fe3e246631bc44c8a50cfc10ca7ed635bf28998b->enter($__internal_c018c8581751182493be7db0fe3e246631bc44c8a50cfc10ca7ed635bf28998b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c018c8581751182493be7db0fe3e246631bc44c8a50cfc10ca7ed635bf28998b->leave($__internal_c018c8581751182493be7db0fe3e246631bc44c8a50cfc10ca7ed635bf28998b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eac07c14306ea969e9fe5ba3551c61a5968955156a537ece5320c6c805de5ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac07c14306ea969e9fe5ba3551c61a5968955156a537ece5320c6c805de5ced->enter($__internal_eac07c14306ea969e9fe5ba3551c61a5968955156a537ece5320c6c805de5ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eac07c14306ea969e9fe5ba3551c61a5968955156a537ece5320c6c805de5ced->leave($__internal_eac07c14306ea969e9fe5ba3551c61a5968955156a537ece5320c6c805de5ced_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_000db75bff5ba3e706b3cc15dd6ddbbe2d878eb90a8c935b69f010816ae5f634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000db75bff5ba3e706b3cc15dd6ddbbe2d878eb90a8c935b69f010816ae5f634->enter($__internal_000db75bff5ba3e706b3cc15dd6ddbbe2d878eb90a8c935b69f010816ae5f634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_000db75bff5ba3e706b3cc15dd6ddbbe2d878eb90a8c935b69f010816ae5f634->leave($__internal_000db75bff5ba3e706b3cc15dd6ddbbe2d878eb90a8c935b69f010816ae5f634_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d57e9a0e9c23741ece3ebecdeb93a425d36d82cfce41958fe105e7c269156087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57e9a0e9c23741ece3ebecdeb93a425d36d82cfce41958fe105e7c269156087->enter($__internal_d57e9a0e9c23741ece3ebecdeb93a425d36d82cfce41958fe105e7c269156087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d57e9a0e9c23741ece3ebecdeb93a425d36d82cfce41958fe105e7c269156087->leave($__internal_d57e9a0e9c23741ece3ebecdeb93a425d36d82cfce41958fe105e7c269156087_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36ec748d9acc976f7af1827eb7008703b339a83b09e81b0b388d7e5df736af9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ec748d9acc976f7af1827eb7008703b339a83b09e81b0b388d7e5df736af9e->enter($__internal_36ec748d9acc976f7af1827eb7008703b339a83b09e81b0b388d7e5df736af9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_36ec748d9acc976f7af1827eb7008703b339a83b09e81b0b388d7e5df736af9e->leave($__internal_36ec748d9acc976f7af1827eb7008703b339a83b09e81b0b388d7e5df736af9e_prof);

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
