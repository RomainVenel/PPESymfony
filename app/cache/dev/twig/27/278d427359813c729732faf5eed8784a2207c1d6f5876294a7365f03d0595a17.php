<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ba580429a3d0660744b8c87c309c30c4c23b0a0c20f7dd16292de5d391b92732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46f86a4e9f8c16f1b7cf23a13721780376e2df8bf65e22a71f8f48778dec6ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f86a4e9f8c16f1b7cf23a13721780376e2df8bf65e22a71f8f48778dec6ad2->enter($__internal_46f86a4e9f8c16f1b7cf23a13721780376e2df8bf65e22a71f8f48778dec6ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46f86a4e9f8c16f1b7cf23a13721780376e2df8bf65e22a71f8f48778dec6ad2->leave($__internal_46f86a4e9f8c16f1b7cf23a13721780376e2df8bf65e22a71f8f48778dec6ad2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_affaa7ad9ca793aa719938b7cd413472bf765b6032579d3ecd6824e59912297e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affaa7ad9ca793aa719938b7cd413472bf765b6032579d3ecd6824e59912297e->enter($__internal_affaa7ad9ca793aa719938b7cd413472bf765b6032579d3ecd6824e59912297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_affaa7ad9ca793aa719938b7cd413472bf765b6032579d3ecd6824e59912297e->leave($__internal_affaa7ad9ca793aa719938b7cd413472bf765b6032579d3ecd6824e59912297e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86687081101c5e355af2f99adeaf73aa6081ac8e4b818c3a0b4824bed359f414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86687081101c5e355af2f99adeaf73aa6081ac8e4b818c3a0b4824bed359f414->enter($__internal_86687081101c5e355af2f99adeaf73aa6081ac8e4b818c3a0b4824bed359f414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_86687081101c5e355af2f99adeaf73aa6081ac8e4b818c3a0b4824bed359f414->leave($__internal_86687081101c5e355af2f99adeaf73aa6081ac8e4b818c3a0b4824bed359f414_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7301cb10631b5cb0f333c60dc2d52ca5b1ef35cf96bd7505ff55e2896e777c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7301cb10631b5cb0f333c60dc2d52ca5b1ef35cf96bd7505ff55e2896e777c03->enter($__internal_7301cb10631b5cb0f333c60dc2d52ca5b1ef35cf96bd7505ff55e2896e777c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_7301cb10631b5cb0f333c60dc2d52ca5b1ef35cf96bd7505ff55e2896e777c03->leave($__internal_7301cb10631b5cb0f333c60dc2d52ca5b1ef35cf96bd7505ff55e2896e777c03_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ef551f9c6cc46bee2169c95ac24314525f0d00205dc01deb9a33ac64bdf198f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef551f9c6cc46bee2169c95ac24314525f0d00205dc01deb9a33ac64bdf198f->enter($__internal_2ef551f9c6cc46bee2169c95ac24314525f0d00205dc01deb9a33ac64bdf198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2ef551f9c6cc46bee2169c95ac24314525f0d00205dc01deb9a33ac64bdf198f->leave($__internal_2ef551f9c6cc46bee2169c95ac24314525f0d00205dc01deb9a33ac64bdf198f_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
";
    }
}
