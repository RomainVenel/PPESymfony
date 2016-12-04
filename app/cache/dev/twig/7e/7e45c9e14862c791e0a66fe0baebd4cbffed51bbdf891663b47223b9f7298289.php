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
        $__internal_a481305ff3cb91bc63d38d4d414c1c6aa39c44b4d41930f36ecbf466535b0881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a481305ff3cb91bc63d38d4d414c1c6aa39c44b4d41930f36ecbf466535b0881->enter($__internal_a481305ff3cb91bc63d38d4d414c1c6aa39c44b4d41930f36ecbf466535b0881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a481305ff3cb91bc63d38d4d414c1c6aa39c44b4d41930f36ecbf466535b0881->leave($__internal_a481305ff3cb91bc63d38d4d414c1c6aa39c44b4d41930f36ecbf466535b0881_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_679d7c035a4898fcf933e9983bd7a2401257373cad3971d4f7ac20df0278ecfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679d7c035a4898fcf933e9983bd7a2401257373cad3971d4f7ac20df0278ecfb->enter($__internal_679d7c035a4898fcf933e9983bd7a2401257373cad3971d4f7ac20df0278ecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_679d7c035a4898fcf933e9983bd7a2401257373cad3971d4f7ac20df0278ecfb->leave($__internal_679d7c035a4898fcf933e9983bd7a2401257373cad3971d4f7ac20df0278ecfb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af59da812ae0bb6628a0eea9b07df0bc6e226852f38e19609138ea0d5732575a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af59da812ae0bb6628a0eea9b07df0bc6e226852f38e19609138ea0d5732575a->enter($__internal_af59da812ae0bb6628a0eea9b07df0bc6e226852f38e19609138ea0d5732575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_af59da812ae0bb6628a0eea9b07df0bc6e226852f38e19609138ea0d5732575a->leave($__internal_af59da812ae0bb6628a0eea9b07df0bc6e226852f38e19609138ea0d5732575a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_03930c96a68cd9b1a053494e452d2c98023793a5e6ffab08965f7eb645d8f7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03930c96a68cd9b1a053494e452d2c98023793a5e6ffab08965f7eb645d8f7bd->enter($__internal_03930c96a68cd9b1a053494e452d2c98023793a5e6ffab08965f7eb645d8f7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_03930c96a68cd9b1a053494e452d2c98023793a5e6ffab08965f7eb645d8f7bd->leave($__internal_03930c96a68cd9b1a053494e452d2c98023793a5e6ffab08965f7eb645d8f7bd_prof);

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
