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
        $__internal_be6dda68d88fded2fa2a3c5a2bb7cfe8d4fb00615dbb5fb0453dc904e8ed6125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6dda68d88fded2fa2a3c5a2bb7cfe8d4fb00615dbb5fb0453dc904e8ed6125->enter($__internal_be6dda68d88fded2fa2a3c5a2bb7cfe8d4fb00615dbb5fb0453dc904e8ed6125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be6dda68d88fded2fa2a3c5a2bb7cfe8d4fb00615dbb5fb0453dc904e8ed6125->leave($__internal_be6dda68d88fded2fa2a3c5a2bb7cfe8d4fb00615dbb5fb0453dc904e8ed6125_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe41c7f379b35250faf490104be99ad6c4210597079ad950418bcab83c629a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe41c7f379b35250faf490104be99ad6c4210597079ad950418bcab83c629a0d->enter($__internal_fe41c7f379b35250faf490104be99ad6c4210597079ad950418bcab83c629a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_fe41c7f379b35250faf490104be99ad6c4210597079ad950418bcab83c629a0d->leave($__internal_fe41c7f379b35250faf490104be99ad6c4210597079ad950418bcab83c629a0d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f33ba1913b966b897bbe00ac23f1edcb072987fa24b2f9aa4a5d2c43a134d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f33ba1913b966b897bbe00ac23f1edcb072987fa24b2f9aa4a5d2c43a134d06->enter($__internal_0f33ba1913b966b897bbe00ac23f1edcb072987fa24b2f9aa4a5d2c43a134d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f33ba1913b966b897bbe00ac23f1edcb072987fa24b2f9aa4a5d2c43a134d06->leave($__internal_0f33ba1913b966b897bbe00ac23f1edcb072987fa24b2f9aa4a5d2c43a134d06_prof);

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
