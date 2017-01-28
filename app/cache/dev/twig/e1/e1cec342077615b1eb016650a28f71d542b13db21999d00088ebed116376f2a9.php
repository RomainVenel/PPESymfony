<?php

/* rvmgGSBBundle:Visiteur:accueilVisiteur.html.twig */
class __TwigTemplate_281c3567e9a500e9795d2482cf9362973c1fe58ee782192ca81e5ddded1405e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:baseVisiteur.html.twig", "rvmgGSBBundle:Visiteur:accueilVisiteur.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:baseVisiteur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e34c2060c9f0bc6f8e8ab2ac2e12bbab038515f9b5c63a7804b0b4948cfc4fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34c2060c9f0bc6f8e8ab2ac2e12bbab038515f9b5c63a7804b0b4948cfc4fb0->enter($__internal_e34c2060c9f0bc6f8e8ab2ac2e12bbab038515f9b5c63a7804b0b4948cfc4fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Visiteur:accueilVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34c2060c9f0bc6f8e8ab2ac2e12bbab038515f9b5c63a7804b0b4948cfc4fb0->leave($__internal_e34c2060c9f0bc6f8e8ab2ac2e12bbab038515f9b5c63a7804b0b4948cfc4fb0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4667cf16a80d8ff8b451b834c3881b79921cbd5778964f8560fe5029eb286a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4667cf16a80d8ff8b451b834c3881b79921cbd5778964f8560fe5029eb286a59->enter($__internal_4667cf16a80d8ff8b451b834c3881b79921cbd5778964f8560fe5029eb286a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil Visiteur
";
        
        $__internal_4667cf16a80d8ff8b451b834c3881b79921cbd5778964f8560fe5029eb286a59->leave($__internal_4667cf16a80d8ff8b451b834c3881b79921cbd5778964f8560fe5029eb286a59_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Visiteur:accueilVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:baseVisiteur.html.twig\" %}
{% block title %}
    Accueil Visiteur
{% endblock %}";
    }
}
