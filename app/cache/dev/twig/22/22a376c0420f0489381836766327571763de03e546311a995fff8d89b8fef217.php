<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_55ffa3fb7c0b9c027106479d9f204b2021c8e1015a56b54e4ac53a98a0d29d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0144e97d5fedb07bb4f10cad8ff589d01526994329969ce4e51d69350cde696b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0144e97d5fedb07bb4f10cad8ff589d01526994329969ce4e51d69350cde696b->enter($__internal_0144e97d5fedb07bb4f10cad8ff589d01526994329969ce4e51d69350cde696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0144e97d5fedb07bb4f10cad8ff589d01526994329969ce4e51d69350cde696b->leave($__internal_0144e97d5fedb07bb4f10cad8ff589d01526994329969ce4e51d69350cde696b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e76f3afe545f357516db583e1c23912f953a0305b959598e87bd2d86360f71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e76f3afe545f357516db583e1c23912f953a0305b959598e87bd2d86360f71f->enter($__internal_5e76f3afe545f357516db583e1c23912f953a0305b959598e87bd2d86360f71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5e76f3afe545f357516db583e1c23912f953a0305b959598e87bd2d86360f71f->leave($__internal_5e76f3afe545f357516db583e1c23912f953a0305b959598e87bd2d86360f71f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0826dba7b4d99cd628e8884b442b9f82e85007afd1c94e202b74ae29844c235d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0826dba7b4d99cd628e8884b442b9f82e85007afd1c94e202b74ae29844c235d->enter($__internal_0826dba7b4d99cd628e8884b442b9f82e85007afd1c94e202b74ae29844c235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0826dba7b4d99cd628e8884b442b9f82e85007afd1c94e202b74ae29844c235d->leave($__internal_0826dba7b4d99cd628e8884b442b9f82e85007afd1c94e202b74ae29844c235d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_314ca648c4dc05b275a9cd886979576fad4be1aead751e7444c0135bef7371ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314ca648c4dc05b275a9cd886979576fad4be1aead751e7444c0135bef7371ef->enter($__internal_314ca648c4dc05b275a9cd886979576fad4be1aead751e7444c0135bef7371ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_314ca648c4dc05b275a9cd886979576fad4be1aead751e7444c0135bef7371ef->leave($__internal_314ca648c4dc05b275a9cd886979576fad4be1aead751e7444c0135bef7371ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
";
    }
}
