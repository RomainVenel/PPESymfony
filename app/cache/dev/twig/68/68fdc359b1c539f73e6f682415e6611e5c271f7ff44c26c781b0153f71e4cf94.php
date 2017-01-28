<?php

/* rvmgGSBBundle:Accueil:vueDeconnexion.html.twig */
class __TwigTemplate_ffb03b42140cbebef330493eb152a163d19601eddabec9a769b6baa334fc1b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Accueil:vueDeconnexion.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87c6bb279fc70780feaab50c233bf118f7b8176c7ca364bfd3857b69eb281833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c6bb279fc70780feaab50c233bf118f7b8176c7ca364bfd3857b69eb281833->enter($__internal_87c6bb279fc70780feaab50c233bf118f7b8176c7ca364bfd3857b69eb281833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:vueDeconnexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87c6bb279fc70780feaab50c233bf118f7b8176c7ca364bfd3857b69eb281833->leave($__internal_87c6bb279fc70780feaab50c233bf118f7b8176c7ca364bfd3857b69eb281833_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a235af4e75a0aebcb120a5f84a30eb6036dabc3368cc1321efc0b72fd3e69ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a235af4e75a0aebcb120a5f84a30eb6036dabc3368cc1321efc0b72fd3e69ce->enter($__internal_7a235af4e75a0aebcb120a5f84a30eb6036dabc3368cc1321efc0b72fd3e69ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <meta http-equiv=\"Refresh\" content=\"2; url=";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rvmg_gsb_homepage");
        echo "\">
";
        
        $__internal_7a235af4e75a0aebcb120a5f84a30eb6036dabc3368cc1321efc0b72fd3e69ce->leave($__internal_7a235af4e75a0aebcb120a5f84a30eb6036dabc3368cc1321efc0b72fd3e69ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3576c88172aee387898980aecae1759da291c6436fcdd94fed2b226074bad62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3576c88172aee387898980aecae1759da291c6436fcdd94fed2b226074bad62->enter($__internal_e3576c88172aee387898980aecae1759da291c6436fcdd94fed2b226074bad62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    Déconnexion
";
        
        $__internal_e3576c88172aee387898980aecae1759da291c6436fcdd94fed2b226074bad62->leave($__internal_e3576c88172aee387898980aecae1759da291c6436fcdd94fed2b226074bad62_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7bd51d151ed467ecf6637f7f08798c758d7200b26ae0a6ca06ab8354c517a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bd51d151ed467ecf6637f7f08798c758d7200b26ae0a6ca06ab8354c517a45->enter($__internal_f7bd51d151ed467ecf6637f7f08798c758d7200b26ae0a6ca06ab8354c517a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_f7bd51d151ed467ecf6637f7f08798c758d7200b26ae0a6ca06ab8354c517a45->leave($__internal_f7bd51d151ed467ecf6637f7f08798c758d7200b26ae0a6ca06ab8354c517a45_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5649851bf1004585163e41e4f75cb9016e264710eeaca5533f084d2602c9a8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5649851bf1004585163e41e4f75cb9016e264710eeaca5533f084d2602c9a8c8->enter($__internal_5649851bf1004585163e41e4f75cb9016e264710eeaca5533f084d2602c9a8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <h1 align=\"center\">Galaxy Swiss Bourdin</h1>
    <br/>
    <p align='center'>Vous vous êtes bien déconnecté !</p>
";
        
        $__internal_5649851bf1004585163e41e4f75cb9016e264710eeaca5533f084d2602c9a8c8->leave($__internal_5649851bf1004585163e41e4f75cb9016e264710eeaca5533f084d2602c9a8c8_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Accueil:vueDeconnexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  87 => 13,  77 => 11,  71 => 10,  63 => 8,  57 => 7,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:base.html.twig\" %}

{% block head %}
    {{ parent() }}
    <meta http-equiv=\"Refresh\" content=\"2; url={{ path('rvmg_gsb_homepage') }}\">
{% endblock %}
{% block title %}
    Déconnexion
{% endblock %}
{% block stylesheets %}
       {{ parent() }}
    {% endblock %}
{% block body %}
    <h1 align=\"center\">Galaxy Swiss Bourdin</h1>
    <br/>
    <p align='center'>Vous vous êtes bien déconnecté !</p>
{% endblock %}
";
    }
}
