<?php

/* rvmgGSBBundle:Accueil:index.html.twig */
class __TwigTemplate_5459b6b7c06d99459bf994481863090446f5791b2039e6a3aed6745c504d08d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Accueil:index.html.twig", 1);
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
        $__internal_06afdd5c464a1e484d3b55b604174fedfd9a50ccb99ea85d93df7d276c0cff27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06afdd5c464a1e484d3b55b604174fedfd9a50ccb99ea85d93df7d276c0cff27->enter($__internal_06afdd5c464a1e484d3b55b604174fedfd9a50ccb99ea85d93df7d276c0cff27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06afdd5c464a1e484d3b55b604174fedfd9a50ccb99ea85d93df7d276c0cff27->leave($__internal_06afdd5c464a1e484d3b55b604174fedfd9a50ccb99ea85d93df7d276c0cff27_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ee23211dc5f996fd56e9962997b1cd308a1404b6988de796530092868192768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee23211dc5f996fd56e9962997b1cd308a1404b6988de796530092868192768->enter($__internal_1ee23211dc5f996fd56e9962997b1cd308a1404b6988de796530092868192768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_1ee23211dc5f996fd56e9962997b1cd308a1404b6988de796530092868192768->leave($__internal_1ee23211dc5f996fd56e9962997b1cd308a1404b6988de796530092868192768_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e496723ab649da9d24bcf1ed2097ca4e6e62988acdcef95506a8474c630df44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e496723ab649da9d24bcf1ed2097ca4e6e62988acdcef95506a8474c630df44->enter($__internal_3e496723ab649da9d24bcf1ed2097ca4e6e62988acdcef95506a8474c630df44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_3e496723ab649da9d24bcf1ed2097ca4e6e62988acdcef95506a8474c630df44->leave($__internal_3e496723ab649da9d24bcf1ed2097ca4e6e62988acdcef95506a8474c630df44_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_925ae920ac9612e58958a3b8999f258c3b0c4b97cb4ba3441642ac21cda93dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925ae920ac9612e58958a3b8999f258c3b0c4b97cb4ba3441642ac21cda93dfd->enter($__internal_925ae920ac9612e58958a3b8999f258c3b0c4b97cb4ba3441642ac21cda93dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <h1 align=\"center\">Galaxy Swiss Bourdin</h1>
    <br/>
    <div class=\"well\">
        <form method=\"post\" ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" />
            <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\" />
        </form>
    </div>
        
    <br/>
";
        
        $__internal_925ae920ac9612e58958a3b8999f258c3b0c4b97cb4ba3441642ac21cda93dfd->leave($__internal_925ae920ac9612e58958a3b8999f258c3b0c4b97cb4ba3441642ac21cda93dfd_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  77 => 13,  72 => 10,  66 => 9,  56 => 7,  50 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    <h1 align=\"center\">Galaxy Swiss Bourdin</h1>
    <br/>
    <div class=\"well\">
        <form method=\"post\" {{ form_enctype(form) }}>
            {{ form_widget(form) }}
            <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" />
            <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\" />
        </form>
    </div>
        
    <br/>
{% endblock %}
";
    }
}
