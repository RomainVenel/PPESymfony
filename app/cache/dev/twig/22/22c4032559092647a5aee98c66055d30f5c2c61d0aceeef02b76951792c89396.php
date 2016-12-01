<?php

/* rvmgGSBBundle:Default:base.html.twig */
class __TwigTemplate_bddf7da476a235e96aaf745e2e9e87f59cb42687488b11fca24a0bc72f036641 extends Twig_Template
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
        $__internal_c0145973e5558b0d45bbb346d0d19cc9cf3aaa798ecaa20851a84c62cb0b5f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0145973e5558b0d45bbb346d0d19cc9cf3aaa798ecaa20851a84c62cb0b5f52->enter($__internal_c0145973e5558b0d45bbb346d0d19cc9cf3aaa798ecaa20851a84c62cb0b5f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:base.html.twig"));

        // line 1
        echo "<! DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <div id=\"header\">
        </div>
        <div id=\"content\">
            ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 17
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
</html>";
        
        $__internal_c0145973e5558b0d45bbb346d0d19cc9cf3aaa798ecaa20851a84c62cb0b5f52->leave($__internal_c0145973e5558b0d45bbb346d0d19cc9cf3aaa798ecaa20851a84c62cb0b5f52_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_1cfa5a2ad6a59701a762502c07f01ccd607d7c115ab541e9e2460957a4a32247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfa5a2ad6a59701a762502c07f01ccd607d7c115ab541e9e2460957a4a32247->enter($__internal_1cfa5a2ad6a59701a762502c07f01ccd607d7c115ab541e9e2460957a4a32247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <title>
                ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "            </title>
        ";
        
        $__internal_1cfa5a2ad6a59701a762502c07f01ccd607d7c115ab541e9e2460957a4a32247->leave($__internal_1cfa5a2ad6a59701a762502c07f01ccd607d7c115ab541e9e2460957a4a32247_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_692c54e5ce674d038427bf6193d443d25e0baa045e51a019fb8ea074dd8ad9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692c54e5ce674d038427bf6193d443d25e0baa045e51a019fb8ea074dd8ad9dd->enter($__internal_692c54e5ce674d038427bf6193d443d25e0baa045e51a019fb8ea074dd8ad9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_692c54e5ce674d038427bf6193d443d25e0baa045e51a019fb8ea074dd8ad9dd->leave($__internal_692c54e5ce674d038427bf6193d443d25e0baa045e51a019fb8ea074dd8ad9dd_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_77a083919ed4b5b84c442d348c06a879f4855b79db039308b54481da86b1a1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a083919ed4b5b84c442d348c06a879f4855b79db039308b54481da86b1a1dd->enter($__internal_77a083919ed4b5b84c442d348c06a879f4855b79db039308b54481da86b1a1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77a083919ed4b5b84c442d348c06a879f4855b79db039308b54481da86b1a1dd->leave($__internal_77a083919ed4b5b84c442d348c06a879f4855b79db039308b54481da86b1a1dd_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a74283711ebf5c6fca48d4fa2d77bc8d28f43d9c9c90107a1ee102ca529e5b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74283711ebf5c6fca48d4fa2d77bc8d28f43d9c9c90107a1ee102ca529e5b1a->enter($__internal_a74283711ebf5c6fca48d4fa2d77bc8d28f43d9c9c90107a1ee102ca529e5b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "                &copy; Copyright 2016 by Romain Venel & Maxime Genevier 
            ";
        
        $__internal_a74283711ebf5c6fca48d4fa2d77bc8d28f43d9c9c90107a1ee102ca529e5b1a->leave($__internal_a74283711ebf5c6fca48d4fa2d77bc8d28f43d9c9c90107a1ee102ca529e5b1a_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 18,  98 => 17,  87 => 14,  76 => 6,  68 => 7,  66 => 6,  63 => 5,  57 => 4,  48 => 20,  46 => 17,  42 => 15,  40 => 14,  33 => 9,  31 => 4,  26 => 1,);
    }

    public function getSource()
    {
        return "<! DOCTYPE html>
<html>
    <head>
        {% block head %}
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
