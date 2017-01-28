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
        $__internal_9562c07426489eb04263cc77317319ba8f71c5a6c0f32ee3326afe3ccaebe82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9562c07426489eb04263cc77317319ba8f71c5a6c0f32ee3326afe3ccaebe82f->enter($__internal_9562c07426489eb04263cc77317319ba8f71c5a6c0f32ee3326afe3ccaebe82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:base.html.twig"));

        // line 1
        echo "<! DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        <div id=\"header\">
        </div>
        <div id=\"content\">
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 22
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "        </div>
    </body>
</html>";
        
        $__internal_9562c07426489eb04263cc77317319ba8f71c5a6c0f32ee3326afe3ccaebe82f->leave($__internal_9562c07426489eb04263cc77317319ba8f71c5a6c0f32ee3326afe3ccaebe82f_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcf231b3a41573bd215df24cfade57d9b31de7b75e1ac9b6aaf1e94e8d2063d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf231b3a41573bd215df24cfade57d9b31de7b75e1ac9b6aaf1e94e8d2063d4->enter($__internal_fcf231b3a41573bd215df24cfade57d9b31de7b75e1ac9b6aaf1e94e8d2063d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/rvmggsb/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/rvmggsb/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/rvmggsb/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/rvmggsb/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/rvmggsb/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <title>
                ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "            </title>
        ";
        
        $__internal_fcf231b3a41573bd215df24cfade57d9b31de7b75e1ac9b6aaf1e94e8d2063d4->leave($__internal_fcf231b3a41573bd215df24cfade57d9b31de7b75e1ac9b6aaf1e94e8d2063d4_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_c51866fdc8f594d6d29bee71486dbe6a815af6fc219b22ac3eec5c5442d08858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51866fdc8f594d6d29bee71486dbe6a815af6fc219b22ac3eec5c5442d08858->enter($__internal_c51866fdc8f594d6d29bee71486dbe6a815af6fc219b22ac3eec5c5442d08858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c51866fdc8f594d6d29bee71486dbe6a815af6fc219b22ac3eec5c5442d08858->leave($__internal_c51866fdc8f594d6d29bee71486dbe6a815af6fc219b22ac3eec5c5442d08858_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_04d2f8d6ccd186f275eae316aa290264e386ffd6fd59e795c16868419848f0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d2f8d6ccd186f275eae316aa290264e386ffd6fd59e795c16868419848f0f8->enter($__internal_04d2f8d6ccd186f275eae316aa290264e386ffd6fd59e795c16868419848f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04d2f8d6ccd186f275eae316aa290264e386ffd6fd59e795c16868419848f0f8->leave($__internal_04d2f8d6ccd186f275eae316aa290264e386ffd6fd59e795c16868419848f0f8_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6f20443593369092d7c1a7003f26274224c74c3a51b1f28559c302233f6d293c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f20443593369092d7c1a7003f26274224c74c3a51b1f28559c302233f6d293c->enter($__internal_6f20443593369092d7c1a7003f26274224c74c3a51b1f28559c302233f6d293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo "                <p>&copy; Copyright 2016 by Romain Venel & Maxime Genevier</p>
            ";
        
        $__internal_6f20443593369092d7c1a7003f26274224c74c3a51b1f28559c302233f6d293c->leave($__internal_6f20443593369092d7c1a7003f26274224c74c3a51b1f28559c302233f6d293c_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 23,  117 => 22,  106 => 19,  95 => 11,  87 => 12,  85 => 11,  80 => 9,  76 => 8,  72 => 7,  68 => 6,  63 => 5,  57 => 4,  48 => 25,  46 => 22,  42 => 20,  40 => 19,  33 => 14,  31 => 4,  26 => 1,);
    }

    public function getSource()
    {
        return "<! DOCTYPE html>
<html>
    <head>
        {% block head %}
            <link href=\"{{ asset('bundles/rvmggsb/css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"{{ asset('bundles/rvmggsb/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"{{ asset('bundles/rvmggsb/css/font-awesome.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
            <script type=\"text/javascript\" src=\"{{ asset('bundles/rvmggsb/js/jquery.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bundles/rvmggsb/js/bootstrap.js') }}\"></script>
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
                <p>&copy; Copyright 2016 by Romain Venel & Maxime Genevier</p>
            {% endblock %}
        </div>
    </body>
</html>";
    }
}
