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
        $__internal_0d610b8c4b1f76131cd52d024c3c1a397854d3a8ad87e96b30fa28220eea5deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d610b8c4b1f76131cd52d024c3c1a397854d3a8ad87e96b30fa28220eea5deb->enter($__internal_0d610b8c4b1f76131cd52d024c3c1a397854d3a8ad87e96b30fa28220eea5deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d610b8c4b1f76131cd52d024c3c1a397854d3a8ad87e96b30fa28220eea5deb->leave($__internal_0d610b8c4b1f76131cd52d024c3c1a397854d3a8ad87e96b30fa28220eea5deb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6da8d8f65a4c9add4408bd00e37d4f7be13f39899c1ab73c85b2df1a80d5e7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da8d8f65a4c9add4408bd00e37d4f7be13f39899c1ab73c85b2df1a80d5e7ff->enter($__internal_6da8d8f65a4c9add4408bd00e37d4f7be13f39899c1ab73c85b2df1a80d5e7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6da8d8f65a4c9add4408bd00e37d4f7be13f39899c1ab73c85b2df1a80d5e7ff->leave($__internal_6da8d8f65a4c9add4408bd00e37d4f7be13f39899c1ab73c85b2df1a80d5e7ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9765dc00252b7eddf6c7689cdb43f19f364af8cb642e60becd6214489724b96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9765dc00252b7eddf6c7689cdb43f19f364af8cb642e60becd6214489724b96c->enter($__internal_9765dc00252b7eddf6c7689cdb43f19f364af8cb642e60becd6214489724b96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9765dc00252b7eddf6c7689cdb43f19f364af8cb642e60becd6214489724b96c->leave($__internal_9765dc00252b7eddf6c7689cdb43f19f364af8cb642e60becd6214489724b96c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddcf9bc22016e1392574359f5f374099e0d2d0fb92401bdf48bad43176dca992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcf9bc22016e1392574359f5f374099e0d2d0fb92401bdf48bad43176dca992->enter($__internal_ddcf9bc22016e1392574359f5f374099e0d2d0fb92401bdf48bad43176dca992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ddcf9bc22016e1392574359f5f374099e0d2d0fb92401bdf48bad43176dca992->leave($__internal_ddcf9bc22016e1392574359f5f374099e0d2d0fb92401bdf48bad43176dca992_prof);

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
