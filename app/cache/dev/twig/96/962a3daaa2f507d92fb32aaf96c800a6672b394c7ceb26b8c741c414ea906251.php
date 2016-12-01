<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_26140fd0a636c7b4c86228396d8a6df64a0a2be076bb820b57c21132c76b9877 extends Twig_Template
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
        $__internal_ab3646a49052fc3fc30fd84b0813c21b177fe0301caa2ab2d3ead021c7d05a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3646a49052fc3fc30fd84b0813c21b177fe0301caa2ab2d3ead021c7d05a6b->enter($__internal_ab3646a49052fc3fc30fd84b0813c21b177fe0301caa2ab2d3ead021c7d05a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3646a49052fc3fc30fd84b0813c21b177fe0301caa2ab2d3ead021c7d05a6b->leave($__internal_ab3646a49052fc3fc30fd84b0813c21b177fe0301caa2ab2d3ead021c7d05a6b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfe6541cd4ba32be2a831ec4bf51afb702ec1f5a1119dcbbf08cccabbade8407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe6541cd4ba32be2a831ec4bf51afb702ec1f5a1119dcbbf08cccabbade8407->enter($__internal_dfe6541cd4ba32be2a831ec4bf51afb702ec1f5a1119dcbbf08cccabbade8407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dfe6541cd4ba32be2a831ec4bf51afb702ec1f5a1119dcbbf08cccabbade8407->leave($__internal_dfe6541cd4ba32be2a831ec4bf51afb702ec1f5a1119dcbbf08cccabbade8407_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c96c7aa679edc02b5c067d3734459e0cdbf09e0e1f049137d93978e60742037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c96c7aa679edc02b5c067d3734459e0cdbf09e0e1f049137d93978e60742037->enter($__internal_1c96c7aa679edc02b5c067d3734459e0cdbf09e0e1f049137d93978e60742037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c96c7aa679edc02b5c067d3734459e0cdbf09e0e1f049137d93978e60742037->leave($__internal_1c96c7aa679edc02b5c067d3734459e0cdbf09e0e1f049137d93978e60742037_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccd3162e2a9118774f103d81437e03c40de94ac7598a22bbd4b6f981849284cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd3162e2a9118774f103d81437e03c40de94ac7598a22bbd4b6f981849284cc->enter($__internal_ccd3162e2a9118774f103d81437e03c40de94ac7598a22bbd4b6f981849284cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ccd3162e2a9118774f103d81437e03c40de94ac7598a22bbd4b6f981849284cc->leave($__internal_ccd3162e2a9118774f103d81437e03c40de94ac7598a22bbd4b6f981849284cc_prof);

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
