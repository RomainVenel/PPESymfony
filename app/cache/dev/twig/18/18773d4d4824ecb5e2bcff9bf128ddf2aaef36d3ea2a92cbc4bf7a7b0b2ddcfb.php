<?php

/* rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig */
class __TwigTemplate_873706aeb85706ab25f71d322e4543719530671ea3271996e49a48685e4dc388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e2ad66bc095685c65339eaabc9fbdd810a4edad1a9e645acc802503bedb2a907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ad66bc095685c65339eaabc9fbdd810a4edad1a9e645acc802503bedb2a907->enter($__internal_e2ad66bc095685c65339eaabc9fbdd810a4edad1a9e645acc802503bedb2a907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2ad66bc095685c65339eaabc9fbdd810a4edad1a9e645acc802503bedb2a907->leave($__internal_e2ad66bc095685c65339eaabc9fbdd810a4edad1a9e645acc802503bedb2a907_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_441cdf6f80245fb59f9a103d735993625d9fd3a998b6e93d2083680f6e0e4706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441cdf6f80245fb59f9a103d735993625d9fd3a998b6e93d2083680f6e0e4706->enter($__internal_441cdf6f80245fb59f9a103d735993625d9fd3a998b6e93d2083680f6e0e4706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_441cdf6f80245fb59f9a103d735993625d9fd3a998b6e93d2083680f6e0e4706->leave($__internal_441cdf6f80245fb59f9a103d735993625d9fd3a998b6e93d2083680f6e0e4706_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd2fcee16b6b79cef0edcad7f22d6b88b621baf232970750eb3b928f8bce52b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2fcee16b6b79cef0edcad7f22d6b88b621baf232970750eb3b928f8bce52b3->enter($__internal_fd2fcee16b6b79cef0edcad7f22d6b88b621baf232970750eb3b928f8bce52b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_fd2fcee16b6b79cef0edcad7f22d6b88b621baf232970750eb3b928f8bce52b3->leave($__internal_fd2fcee16b6b79cef0edcad7f22d6b88b621baf232970750eb3b928f8bce52b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a06602a802917b677c9b036506fe807ce9ae2bf6285c7b104e730d28eeab8da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06602a802917b677c9b036506fe807ce9ae2bf6285c7b104e730d28eeab8da9->enter($__internal_a06602a802917b677c9b036506fe807ce9ae2bf6285c7b104e730d28eeab8da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <h1 align='center'>Galaxy Swiss Bourdin</h1>
    <br/>
    Login: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "login", array()), "html", null, true);
        echo "</br>
    Mot de passe: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "mdp", array()), "html", null, true);
        echo "</br>
    Profil: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "profil", array()), "html", null, true);
        echo "</br>
";
        
        $__internal_a06602a802917b677c9b036506fe807ce9ae2bf6285c7b104e730d28eeab8da9->leave($__internal_a06602a802917b677c9b036506fe807ce9ae2bf6285c7b104e730d28eeab8da9_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  80 => 13,  76 => 12,  72 => 10,  66 => 9,  56 => 7,  50 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:base.html.twig\" %}

{% block title %}
    Accueil
{% endblock %}
{% block stylesheets %}
       {{ parent() }}
    {% endblock %}
{% block body %}
    <h1 align='center'>Galaxy Swiss Bourdin</h1>
    <br/>
    Login: {{ data.login }}</br>
    Mot de passe: {{ data.mdp }}</br>
    Profil: {{ data.profil }}</br>
{% endblock %}
";
    }
}
