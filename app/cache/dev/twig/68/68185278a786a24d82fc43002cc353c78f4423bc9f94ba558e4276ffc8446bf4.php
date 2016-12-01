<?php

/* rvmgGSBBundle:Accueil:index.html.twig */
class __TwigTemplate_385779bb9cc09fcbdf5690b64403eb2791cdccba2ec8946910fba7ea03c7bf61 extends Twig_Template
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
        $__internal_b3ee3dc74b7ec22d27c6f49d68c67265f890dd97cf573d7ddbee877dc40a5204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ee3dc74b7ec22d27c6f49d68c67265f890dd97cf573d7ddbee877dc40a5204->enter($__internal_b3ee3dc74b7ec22d27c6f49d68c67265f890dd97cf573d7ddbee877dc40a5204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3ee3dc74b7ec22d27c6f49d68c67265f890dd97cf573d7ddbee877dc40a5204->leave($__internal_b3ee3dc74b7ec22d27c6f49d68c67265f890dd97cf573d7ddbee877dc40a5204_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6de565e08eca1abbb40d75aaf69953196c691084b2d3abb01781b909d966aecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de565e08eca1abbb40d75aaf69953196c691084b2d3abb01781b909d966aecc->enter($__internal_6de565e08eca1abbb40d75aaf69953196c691084b2d3abb01781b909d966aecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_6de565e08eca1abbb40d75aaf69953196c691084b2d3abb01781b909d966aecc->leave($__internal_6de565e08eca1abbb40d75aaf69953196c691084b2d3abb01781b909d966aecc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_25d3e67072042b525a710a8f00182d1bec5a8e82218cb1a8d4c02070d3849aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d3e67072042b525a710a8f00182d1bec5a8e82218cb1a8d4c02070d3849aed->enter($__internal_25d3e67072042b525a710a8f00182d1bec5a8e82218cb1a8d4c02070d3849aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25d3e67072042b525a710a8f00182d1bec5a8e82218cb1a8d4c02070d3849aed->leave($__internal_25d3e67072042b525a710a8f00182d1bec5a8e82218cb1a8d4c02070d3849aed_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76578c4c4db94480929513f6c1a8d628356929a8e63c20ac4951ec0755ca4f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76578c4c4db94480929513f6c1a8d628356929a8e63c20ac4951ec0755ca4f5e->enter($__internal_76578c4c4db94480929513f6c1a8d628356929a8e63c20ac4951ec0755ca4f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_76578c4c4db94480929513f6c1a8d628356929a8e63c20ac4951ec0755ca4f5e->leave($__internal_76578c4c4db94480929513f6c1a8d628356929a8e63c20ac4951ec0755ca4f5e_prof);

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
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
    <div class=\"well\">
        {{ form(form) }}  
    </div>
        
    <br/>
{% endblock %}
";
    }
}
