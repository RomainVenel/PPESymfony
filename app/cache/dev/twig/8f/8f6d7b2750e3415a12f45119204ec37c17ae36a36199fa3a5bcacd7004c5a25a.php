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
        $__internal_9a308de53a8fbbb3e5f0dea128c643d86cafa61068f3a518c3b84d827eb38734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a308de53a8fbbb3e5f0dea128c643d86cafa61068f3a518c3b84d827eb38734->enter($__internal_9a308de53a8fbbb3e5f0dea128c643d86cafa61068f3a518c3b84d827eb38734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:base.html.twig"));

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
        
        $__internal_9a308de53a8fbbb3e5f0dea128c643d86cafa61068f3a518c3b84d827eb38734->leave($__internal_9a308de53a8fbbb3e5f0dea128c643d86cafa61068f3a518c3b84d827eb38734_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_11627bce3a309b82294b5abc1096da240f698a5a68819ecc84dd57ae6fa2ba1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11627bce3a309b82294b5abc1096da240f698a5a68819ecc84dd57ae6fa2ba1a->enter($__internal_11627bce3a309b82294b5abc1096da240f698a5a68819ecc84dd57ae6fa2ba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_11627bce3a309b82294b5abc1096da240f698a5a68819ecc84dd57ae6fa2ba1a->leave($__internal_11627bce3a309b82294b5abc1096da240f698a5a68819ecc84dd57ae6fa2ba1a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_c227e8417ba9c1e4d8588c2b4675c242da7343ce9746c127ca6e36662c993d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c227e8417ba9c1e4d8588c2b4675c242da7343ce9746c127ca6e36662c993d66->enter($__internal_c227e8417ba9c1e4d8588c2b4675c242da7343ce9746c127ca6e36662c993d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c227e8417ba9c1e4d8588c2b4675c242da7343ce9746c127ca6e36662c993d66->leave($__internal_c227e8417ba9c1e4d8588c2b4675c242da7343ce9746c127ca6e36662c993d66_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_160719e3a815e3b534814fb3ec0ebe84aadad68d74c45bc074db87d6fbf7c4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160719e3a815e3b534814fb3ec0ebe84aadad68d74c45bc074db87d6fbf7c4f3->enter($__internal_160719e3a815e3b534814fb3ec0ebe84aadad68d74c45bc074db87d6fbf7c4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_160719e3a815e3b534814fb3ec0ebe84aadad68d74c45bc074db87d6fbf7c4f3->leave($__internal_160719e3a815e3b534814fb3ec0ebe84aadad68d74c45bc074db87d6fbf7c4f3_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8f45d45900b80ea68591d357ff8c737648fc38fa30301d27cd3f21ec6112f36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f45d45900b80ea68591d357ff8c737648fc38fa30301d27cd3f21ec6112f36b->enter($__internal_8f45d45900b80ea68591d357ff8c737648fc38fa30301d27cd3f21ec6112f36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "                &copy; Copyright 2016 by Romain Venel & Maxime Genevier 
            ";
        
        $__internal_8f45d45900b80ea68591d357ff8c737648fc38fa30301d27cd3f21ec6112f36b->leave($__internal_8f45d45900b80ea68591d357ff8c737648fc38fa30301d27cd3f21ec6112f36b_prof);

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
