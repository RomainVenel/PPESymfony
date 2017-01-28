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
        $__internal_a68ad5c9cd4f67131407db63644d83040d57025bbcfdb605664e7a08d24202bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68ad5c9cd4f67131407db63644d83040d57025bbcfdb605664e7a08d24202bc->enter($__internal_a68ad5c9cd4f67131407db63644d83040d57025bbcfdb605664e7a08d24202bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a68ad5c9cd4f67131407db63644d83040d57025bbcfdb605664e7a08d24202bc->leave($__internal_a68ad5c9cd4f67131407db63644d83040d57025bbcfdb605664e7a08d24202bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9fb4e0c977e7cfbb1e6e29f93bb4bc289225e9df28437959f181dcb3fe1c6eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb4e0c977e7cfbb1e6e29f93bb4bc289225e9df28437959f181dcb3fe1c6eb6->enter($__internal_9fb4e0c977e7cfbb1e6e29f93bb4bc289225e9df28437959f181dcb3fe1c6eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9fb4e0c977e7cfbb1e6e29f93bb4bc289225e9df28437959f181dcb3fe1c6eb6->leave($__internal_9fb4e0c977e7cfbb1e6e29f93bb4bc289225e9df28437959f181dcb3fe1c6eb6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_30eca27e6596073fa16c540b258ccef22fb3240280c9a65cf3917ae37b3e8a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30eca27e6596073fa16c540b258ccef22fb3240280c9a65cf3917ae37b3e8a8d->enter($__internal_30eca27e6596073fa16c540b258ccef22fb3240280c9a65cf3917ae37b3e8a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_30eca27e6596073fa16c540b258ccef22fb3240280c9a65cf3917ae37b3e8a8d->leave($__internal_30eca27e6596073fa16c540b258ccef22fb3240280c9a65cf3917ae37b3e8a8d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3350d7f715a1d370d5a0c588073a085f5b72d30c6a5548cdfa01727a6f17933b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3350d7f715a1d370d5a0c588073a085f5b72d30c6a5548cdfa01727a6f17933b->enter($__internal_3350d7f715a1d370d5a0c588073a085f5b72d30c6a5548cdfa01727a6f17933b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3350d7f715a1d370d5a0c588073a085f5b72d30c6a5548cdfa01727a6f17933b->leave($__internal_3350d7f715a1d370d5a0c588073a085f5b72d30c6a5548cdfa01727a6f17933b_prof);

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
