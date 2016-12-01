<?php

/* rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig */
class __TwigTemplate_11d88795aa28e1f8cd7d031424e3ecd906b90c79373f7218e732587d8f25e0b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b832f945dc88952c7e7f9f95cb2b63ca2be00ba8f189adc01a964166021e493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b832f945dc88952c7e7f9f95cb2b63ca2be00ba8f189adc01a964166021e493->enter($__internal_6b832f945dc88952c7e7f9f95cb2b63ca2be00ba8f189adc01a964166021e493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b832f945dc88952c7e7f9f95cb2b63ca2be00ba8f189adc01a964166021e493->leave($__internal_6b832f945dc88952c7e7f9f95cb2b63ca2be00ba8f189adc01a964166021e493_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e155547956d9dde6315e58d4d3d1822bf04cc147c21d2fa6f5dcbf4f449fec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e155547956d9dde6315e58d4d3d1822bf04cc147c21d2fa6f5dcbf4f449fec8->enter($__internal_1e155547956d9dde6315e58d4d3d1822bf04cc147c21d2fa6f5dcbf4f449fec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_1e155547956d9dde6315e58d4d3d1822bf04cc147c21d2fa6f5dcbf4f449fec8->leave($__internal_1e155547956d9dde6315e58d4d3d1822bf04cc147c21d2fa6f5dcbf4f449fec8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3be97b7a981ca30cd4b19d5994035430479a84fbcb04e0be10ec8c7da288ca21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be97b7a981ca30cd4b19d5994035430479a84fbcb04e0be10ec8c7da288ca21->enter($__internal_3be97b7a981ca30cd4b19d5994035430479a84fbcb04e0be10ec8c7da288ca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Galaxy Swiss Bourdin</h1>
    <br/>
    Login: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "login", array()), "html", null, true);
        echo "</br>
    Mot de passe: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "mdp", array()), "html", null, true);
        echo "</br>
    Profil: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "profil", array()), "html", null, true);
        echo "</br>
";
        
        $__internal_3be97b7a981ca30cd4b19d5994035430479a84fbcb04e0be10ec8c7da288ca21->leave($__internal_3be97b7a981ca30cd4b19d5994035430479a84fbcb04e0be10ec8c7da288ca21_prof);

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
        return array (  67 => 11,  63 => 10,  59 => 9,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:base.html.twig\" %}

{% block title %}
    Accueil
{% endblock %}
{% block body %}
    <h1>Galaxy Swiss Bourdin</h1>
    <br/>
    Login: {{ data.login }}</br>
    Mot de passe: {{ data.mdp }}</br>
    Profil: {{ data.profil }}</br>
{% endblock %}
";
    }
}
