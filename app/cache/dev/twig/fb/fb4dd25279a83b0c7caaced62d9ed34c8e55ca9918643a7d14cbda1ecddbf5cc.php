<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4251244b3b015f8a85cc28e8c75367ba1d31234888cf66fffc5ff3d90c377f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_222d73e71941f07b7937f3e35dd086e25db556727e258045dfb4eaf925a5624c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222d73e71941f07b7937f3e35dd086e25db556727e258045dfb4eaf925a5624c->enter($__internal_222d73e71941f07b7937f3e35dd086e25db556727e258045dfb4eaf925a5624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222d73e71941f07b7937f3e35dd086e25db556727e258045dfb4eaf925a5624c->leave($__internal_222d73e71941f07b7937f3e35dd086e25db556727e258045dfb4eaf925a5624c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_431f0e09f4d026fcfa8e10d98f04f984982163fdc62ba29776d4bdd0572313f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431f0e09f4d026fcfa8e10d98f04f984982163fdc62ba29776d4bdd0572313f6->enter($__internal_431f0e09f4d026fcfa8e10d98f04f984982163fdc62ba29776d4bdd0572313f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_431f0e09f4d026fcfa8e10d98f04f984982163fdc62ba29776d4bdd0572313f6->leave($__internal_431f0e09f4d026fcfa8e10d98f04f984982163fdc62ba29776d4bdd0572313f6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_737a65afc0c639c23cb56bd280fcac33317b343619698d1b5c70b22b473152bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737a65afc0c639c23cb56bd280fcac33317b343619698d1b5c70b22b473152bf->enter($__internal_737a65afc0c639c23cb56bd280fcac33317b343619698d1b5c70b22b473152bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_737a65afc0c639c23cb56bd280fcac33317b343619698d1b5c70b22b473152bf->leave($__internal_737a65afc0c639c23cb56bd280fcac33317b343619698d1b5c70b22b473152bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
