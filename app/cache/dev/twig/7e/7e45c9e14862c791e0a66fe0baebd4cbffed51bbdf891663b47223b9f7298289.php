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
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c06a588e0b61bd6b8c502d3d9b977f96aed7b1eccd1d13b184b5dbda87b5f309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06a588e0b61bd6b8c502d3d9b977f96aed7b1eccd1d13b184b5dbda87b5f309->enter($__internal_c06a588e0b61bd6b8c502d3d9b977f96aed7b1eccd1d13b184b5dbda87b5f309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06a588e0b61bd6b8c502d3d9b977f96aed7b1eccd1d13b184b5dbda87b5f309->leave($__internal_c06a588e0b61bd6b8c502d3d9b977f96aed7b1eccd1d13b184b5dbda87b5f309_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_754dc4da2b50b79e003b1372764f62fdf6c7f9a54ed7324034c20086d2d149fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754dc4da2b50b79e003b1372764f62fdf6c7f9a54ed7324034c20086d2d149fb->enter($__internal_754dc4da2b50b79e003b1372764f62fdf6c7f9a54ed7324034c20086d2d149fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_754dc4da2b50b79e003b1372764f62fdf6c7f9a54ed7324034c20086d2d149fb->leave($__internal_754dc4da2b50b79e003b1372764f62fdf6c7f9a54ed7324034c20086d2d149fb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b0bee5ebdd5d6e697331ceebec6bb54511d076395c12ea2e682854e8c2eacfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0bee5ebdd5d6e697331ceebec6bb54511d076395c12ea2e682854e8c2eacfb->enter($__internal_2b0bee5ebdd5d6e697331ceebec6bb54511d076395c12ea2e682854e8c2eacfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Galaxy Swiss Bourdin</h1>
    <br/>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <div class=\"well\">
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "  
    </div>
        
    <br/>
";
        
        $__internal_2b0bee5ebdd5d6e697331ceebec6bb54511d076395c12ea2e682854e8c2eacfb->leave($__internal_2b0bee5ebdd5d6e697331ceebec6bb54511d076395c12ea2e682854e8c2eacfb_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abbe88862f3e699e7693b1b235f693429291318a3757886ebc3285b70f4deb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbe88862f3e699e7693b1b235f693429291318a3757886ebc3285b70f4deb85->enter($__internal_abbe88862f3e699e7693b1b235f693429291318a3757886ebc3285b70f4deb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_abbe88862f3e699e7693b1b235f693429291318a3757886ebc3285b70f4deb85->leave($__internal_abbe88862f3e699e7693b1b235f693429291318a3757886ebc3285b70f4deb85_prof);

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
        return array (  83 => 10,  77 => 9,  65 => 13,  62 => 12,  60 => 9,  56 => 7,  50 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    {% block stylesheets %}
       {{ parent() }}
    {% endblock %}
    <div class=\"well\">
        {{ form(form) }}  
    </div>
        
    <br/>
{% endblock %}
";
    }
}
