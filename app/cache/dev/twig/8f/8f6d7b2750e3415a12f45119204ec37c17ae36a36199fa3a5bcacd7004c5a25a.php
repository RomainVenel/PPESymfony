<?php

/* rvmgGSBBundle:Default:base.html.twig */
class __TwigTemplate_a35ceb76397a15937c976db2554002e63f869067b3c72dea68ce82e797315017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceb304db6bd8ebf52ec99524c9126b12ccb43ec33655b00d6228e57ae1ecfc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb304db6bd8ebf52ec99524c9126b12ccb43ec33655b00d6228e57ae1ecfc64->enter($__internal_ceb304db6bd8ebf52ec99524c9126b12ccb43ec33655b00d6228e57ae1ecfc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:base.html.twig"));

        // line 1
        echo "<! DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <div id=\"header\">
        </div>
        <div id=\"content\">
            ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "        </div>
    </body>
</html>";
        
        $__internal_ceb304db6bd8ebf52ec99524c9126b12ccb43ec33655b00d6228e57ae1ecfc64->leave($__internal_ceb304db6bd8ebf52ec99524c9126b12ccb43ec33655b00d6228e57ae1ecfc64_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2e8e07cd0da99a14095ac2200989ce5e4ff91a6b263f0a70ed9875a139c8d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e8e07cd0da99a14095ac2200989ce5e4ff91a6b263f0a70ed9875a139c8d66->enter($__internal_f2e8e07cd0da99a14095ac2200989ce5e4ff91a6b263f0a70ed9875a139c8d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0dacc62_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0dacc62_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0dacc62_bootstrap_1.css");
            // line 6
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
            ";
        } else {
            // asset "0dacc62"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0dacc62") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0dacc62.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "            <title>
                ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "            </title>
        ";
        
        $__internal_f2e8e07cd0da99a14095ac2200989ce5e4ff91a6b263f0a70ed9875a139c8d66->leave($__internal_f2e8e07cd0da99a14095ac2200989ce5e4ff91a6b263f0a70ed9875a139c8d66_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d1fe187ba151a415104f198cdf5869148b977f82f5a8d4fa6daa3f4f57ef763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1fe187ba151a415104f198cdf5869148b977f82f5a8d4fa6daa3f4f57ef763->enter($__internal_5d1fe187ba151a415104f198cdf5869148b977f82f5a8d4fa6daa3f4f57ef763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5d1fe187ba151a415104f198cdf5869148b977f82f5a8d4fa6daa3f4f57ef763->leave($__internal_5d1fe187ba151a415104f198cdf5869148b977f82f5a8d4fa6daa3f4f57ef763_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c300466c7a6f0a473b7432f6ce5bbc806f46a4dc80c8041ab29f8f5a52d0de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c300466c7a6f0a473b7432f6ce5bbc806f46a4dc80c8041ab29f8f5a52d0de5->enter($__internal_9c300466c7a6f0a473b7432f6ce5bbc806f46a4dc80c8041ab29f8f5a52d0de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c300466c7a6f0a473b7432f6ce5bbc806f46a4dc80c8041ab29f8f5a52d0de5->leave($__internal_9c300466c7a6f0a473b7432f6ce5bbc806f46a4dc80c8041ab29f8f5a52d0de5_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_21853f223dc1b7a1550edd986c6e366957b1eea5d96472ec66acb190399fbc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21853f223dc1b7a1550edd986c6e366957b1eea5d96472ec66acb190399fbc5b->enter($__internal_21853f223dc1b7a1550edd986c6e366957b1eea5d96472ec66acb190399fbc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "                &copy; Copyright 2016 by Romain Venel & Maxime Genevier 
            ";
        
        $__internal_21853f223dc1b7a1550edd986c6e366957b1eea5d96472ec66acb190399fbc5b->leave($__internal_21853f223dc1b7a1550edd986c6e366957b1eea5d96472ec66acb190399fbc5b_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 21,  117 => 20,  106 => 17,  95 => 9,  87 => 10,  85 => 9,  82 => 8,  68 => 6,  63 => 5,  57 => 4,  48 => 23,  46 => 20,  42 => 18,  40 => 17,  33 => 12,  31 => 4,  26 => 1,);
    }

    public function getSource()
    {
        return "<! DOCTYPE html>
<html>
    <head>
        {% block head %}
            {% stylesheets '@rvmgGSBBundle/Resources/public/css/bootstrap.css'%}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\"/>
            {% endstylesheets %}
            <title>
                {% block title %}{% endblock %}
            </title>
        {% endblock %}
    </head>
    <body>
        <div id=\"header\">
        </div>
        <div id=\"content\">
            {% block body %}{% endblock %}
        </div>
        <div id=\"footer\">
            {% block footer %}
                &copy; Copyright 2016 by Romain Venel & Maxime Genevier 
            {% endblock %}
        </div>
    </body>
</html>";
    }
}
