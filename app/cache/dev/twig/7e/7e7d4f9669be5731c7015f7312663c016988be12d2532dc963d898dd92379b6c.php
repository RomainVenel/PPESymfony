<?php

/* rvmgGSBBundle:Accueil:vueConnexionErreur.html.twig */
class __TwigTemplate_bc7e088884452e4469d5ce9791020405c42b7e36b4346dae719faa35ddf31c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Accueil:vueConnexionErreur.html.twig", 1);
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
        $__internal_754fb9a396f90a6367d457be5c74e73f47fa322ec563c72230a00bf75a3fd745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754fb9a396f90a6367d457be5c74e73f47fa322ec563c72230a00bf75a3fd745->enter($__internal_754fb9a396f90a6367d457be5c74e73f47fa322ec563c72230a00bf75a3fd745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:vueConnexionErreur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_754fb9a396f90a6367d457be5c74e73f47fa322ec563c72230a00bf75a3fd745->leave($__internal_754fb9a396f90a6367d457be5c74e73f47fa322ec563c72230a00bf75a3fd745_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_152b51b4a3efd838ca8ebe9b6b261e44cbc91c7a45e273dae2f2b13052413021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152b51b4a3efd838ca8ebe9b6b261e44cbc91c7a45e273dae2f2b13052413021->enter($__internal_152b51b4a3efd838ca8ebe9b6b261e44cbc91c7a45e273dae2f2b13052413021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Erreur de connexion
";
        
        $__internal_152b51b4a3efd838ca8ebe9b6b261e44cbc91c7a45e273dae2f2b13052413021->leave($__internal_152b51b4a3efd838ca8ebe9b6b261e44cbc91c7a45e273dae2f2b13052413021_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4fe9c52cf1524c3b266d87627db2fa1502a7d788e9c6f5e71d747cec62fe4009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe9c52cf1524c3b266d87627db2fa1502a7d788e9c6f5e71d747cec62fe4009->enter($__internal_4fe9c52cf1524c3b266d87627db2fa1502a7d788e9c6f5e71d747cec62fe4009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_4fe9c52cf1524c3b266d87627db2fa1502a7d788e9c6f5e71d747cec62fe4009->leave($__internal_4fe9c52cf1524c3b266d87627db2fa1502a7d788e9c6f5e71d747cec62fe4009_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a4d15804a5fe6f6bf95c58736769cb8b04b7c451956c374013ca940f18563df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4d15804a5fe6f6bf95c58736769cb8b04b7c451956c374013ca940f18563df->enter($__internal_6a4d15804a5fe6f6bf95c58736769cb8b04b7c451956c374013ca940f18563df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <h1 align=\"center\">Galaxy Swiss Bourdin</h1>
    <br/>
    <p align='center'>Le ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "profil", array()), "html", null, true);
        echo " de login ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "login", array()), "html", null, true);
        echo " et de mdp ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "mdp", array()), "html", null, true);
        echo " n'existe pas !</p>
";
        
        $__internal_6a4d15804a5fe6f6bf95c58736769cb8b04b7c451956c374013ca940f18563df->leave($__internal_6a4d15804a5fe6f6bf95c58736769cb8b04b7c451956c374013ca940f18563df_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Accueil:vueConnexionErreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  72 => 10,  66 => 9,  56 => 7,  50 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:base.html.twig\" %}

{% block title %}
    Erreur de connexion
{% endblock %}
{% block stylesheets %}
       {{ parent() }}
    {% endblock %}
{% block body %}
    <h1 align=\"center\">Galaxy Swiss Bourdin</h1>
    <br/>
    <p align='center'>Le {{ data.profil }} de login {{ data.login }} et de mdp {{ data.mdp }} n'existe pas !</p>
{% endblock %}
";
    }
}
