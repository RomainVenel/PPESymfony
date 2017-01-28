<?php

/* rvmgGSBBundle:Comptable:accueilComptable.html.twig */
class __TwigTemplate_15e02980512250d16ebab6337080b6020e23d79fb3703d0dafbeff4232ef670e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:baseComptable.html.twig", "rvmgGSBBundle:Comptable:accueilComptable.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:baseComptable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3c74a48537e52b6ffc21461cb7a36777d9c83e2d06e73bcacf73d2c0df19ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c74a48537e52b6ffc21461cb7a36777d9c83e2d06e73bcacf73d2c0df19ea7->enter($__internal_d3c74a48537e52b6ffc21461cb7a36777d9c83e2d06e73bcacf73d2c0df19ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Comptable:accueilComptable.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3c74a48537e52b6ffc21461cb7a36777d9c83e2d06e73bcacf73d2c0df19ea7->leave($__internal_d3c74a48537e52b6ffc21461cb7a36777d9c83e2d06e73bcacf73d2c0df19ea7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c466319a532035b6ece7be53673b1b20c23824c62bdeb110437a81321b3f24df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c466319a532035b6ece7be53673b1b20c23824c62bdeb110437a81321b3f24df->enter($__internal_c466319a532035b6ece7be53673b1b20c23824c62bdeb110437a81321b3f24df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil Comptable
";
        
        $__internal_c466319a532035b6ece7be53673b1b20c23824c62bdeb110437a81321b3f24df->leave($__internal_c466319a532035b6ece7be53673b1b20c23824c62bdeb110437a81321b3f24df_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Comptable:accueilComptable.html.twig";
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
        return "{% extends \"rvmgGSBBundle:Default:baseComptable.html.twig\" %}
{% block title %}
    Accueil Comptable
{% endblock %}";
    }
}
