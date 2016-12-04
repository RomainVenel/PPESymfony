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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6492d954ca9e9c31c8fd52a41b23fe26e00c0c45c365df045018e8e220f611bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6492d954ca9e9c31c8fd52a41b23fe26e00c0c45c365df045018e8e220f611bd->enter($__internal_6492d954ca9e9c31c8fd52a41b23fe26e00c0c45c365df045018e8e220f611bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6492d954ca9e9c31c8fd52a41b23fe26e00c0c45c365df045018e8e220f611bd->leave($__internal_6492d954ca9e9c31c8fd52a41b23fe26e00c0c45c365df045018e8e220f611bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97aae898bc5ce39fc5b780f2f23cf8a7f8978056987b484aa6a800449aceeab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97aae898bc5ce39fc5b780f2f23cf8a7f8978056987b484aa6a800449aceeab0->enter($__internal_97aae898bc5ce39fc5b780f2f23cf8a7f8978056987b484aa6a800449aceeab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_97aae898bc5ce39fc5b780f2f23cf8a7f8978056987b484aa6a800449aceeab0->leave($__internal_97aae898bc5ce39fc5b780f2f23cf8a7f8978056987b484aa6a800449aceeab0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd5d58ab21082a3e8d0012548fb6af2a6c02ec05deeda7efaaf45e22dcf779f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5d58ab21082a3e8d0012548fb6af2a6c02ec05deeda7efaaf45e22dcf779f5->enter($__internal_bd5d58ab21082a3e8d0012548fb6af2a6c02ec05deeda7efaaf45e22dcf779f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd5d58ab21082a3e8d0012548fb6af2a6c02ec05deeda7efaaf45e22dcf779f5->leave($__internal_bd5d58ab21082a3e8d0012548fb6af2a6c02ec05deeda7efaaf45e22dcf779f5_prof);

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
