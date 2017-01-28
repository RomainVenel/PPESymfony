<?php

/* rvmgGSBBundle:Default:baseComptable.html.twig */
class __TwigTemplate_cc1985ad3ec6f83bf2b1b8afd5a270318080eed308e1fdedf7dae4076b946bd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'identite' => array($this, 'block_identite'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb947485035627a92aba2d3ddfc196d8d0c71a3a8a1c86ad19c1b32ae53f0f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb947485035627a92aba2d3ddfc196d8d0c71a3a8a1c86ad19c1b32ae53f0f5c->enter($__internal_bb947485035627a92aba2d3ddfc196d8d0c71a3a8a1c86ad19c1b32ae53f0f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:baseComptable.html.twig"));

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
            ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "        </div>
        <div id=\"content\">
            ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "        </div>
    </body>
</html>";
        
        $__internal_bb947485035627a92aba2d3ddfc196d8d0c71a3a8a1c86ad19c1b32ae53f0f5c->leave($__internal_bb947485035627a92aba2d3ddfc196d8d0c71a3a8a1c86ad19c1b32ae53f0f5c_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2a10dfabded1708bb9d49ed18263c62573f014d17be3867896546342b57b8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a10dfabded1708bb9d49ed18263c62573f014d17be3867896546342b57b8a8->enter($__internal_e2a10dfabded1708bb9d49ed18263c62573f014d17be3867896546342b57b8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e2a10dfabded1708bb9d49ed18263c62573f014d17be3867896546342b57b8a8->leave($__internal_e2a10dfabded1708bb9d49ed18263c62573f014d17be3867896546342b57b8a8_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_b60d2d4c4553215249aa5daabca6f101b20c6531ea78b53d60dfc75c4b36d24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60d2d4c4553215249aa5daabca6f101b20c6531ea78b53d60dfc75c4b36d24a->enter($__internal_b60d2d4c4553215249aa5daabca6f101b20c6531ea78b53d60dfc75c4b36d24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b60d2d4c4553215249aa5daabca6f101b20c6531ea78b53d60dfc75c4b36d24a->leave($__internal_b60d2d4c4553215249aa5daabca6f101b20c6531ea78b53d60dfc75c4b36d24a_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_31dfbda04cee57ea127acd8dbcc7d9755373d4c7f5ce89ca88720226db9e5739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dfbda04cee57ea127acd8dbcc7d9755373d4c7f5ce89ca88720226db9e5739->enter($__internal_31dfbda04cee57ea127acd8dbcc7d9755373d4c7f5ce89ca88720226db9e5739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"#\">Galaxy Swiss Bourdin</a>
                        </div>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Fiches Frais <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rvmg_gsb_choose_month_visitor");
        echo "\">Valider</a></li>
                                    <li><a href=\"#\">Suivre</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Paramètres</a></li>
                            ";
        // line 31
        $this->displayBlock('identite', $context, $blocks);
        // line 34
        echo "                            <li id=\"Deco\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rvmg_gsb_deconnexion");
        echo "\">Déconnexion</a>
                        </ul>
                    </div>
                </nav>
            ";
        
        $__internal_31dfbda04cee57ea127acd8dbcc7d9755373d4c7f5ce89ca88720226db9e5739->leave($__internal_31dfbda04cee57ea127acd8dbcc7d9755373d4c7f5ce89ca88720226db9e5739_prof);

    }

    // line 31
    public function block_identite($context, array $blocks = array())
    {
        $__internal_b8b4010577e587e07e6a324bce23c7089068c4d8f820569dc37e9631373d47c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b4010577e587e07e6a324bce23c7089068c4d8f820569dc37e9631373d47c7->enter($__internal_b8b4010577e587e07e6a324bce23c7089068c4d8f820569dc37e9631373d47c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "identite"));

        // line 32
        echo "                                <div class=\"CouleurConnecte\">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_firstname"), "method") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_lastname"), "method")), "html", null, true);
        echo "</div>
                            ";
        
        $__internal_b8b4010577e587e07e6a324bce23c7089068c4d8f820569dc37e9631373d47c7->leave($__internal_b8b4010577e587e07e6a324bce23c7089068c4d8f820569dc37e9631373d47c7_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ff0aa7c7bb3816d20a27292c4dcf2515096721a9dab363f775317a1d0cf73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ff0aa7c7bb3816d20a27292c4dcf2515096721a9dab363f775317a1d0cf73a->enter($__internal_c4ff0aa7c7bb3816d20a27292c4dcf2515096721a9dab363f775317a1d0cf73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4ff0aa7c7bb3816d20a27292c4dcf2515096721a9dab363f775317a1d0cf73a->leave($__internal_c4ff0aa7c7bb3816d20a27292c4dcf2515096721a9dab363f775317a1d0cf73a_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a1b19ebd45ca6ce41feb6cb29742fcab7d4d540b189b68c04a0ab766a0b3e8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b19ebd45ca6ce41feb6cb29742fcab7d4d540b189b68c04a0ab766a0b3e8c8->enter($__internal_a1b19ebd45ca6ce41feb6cb29742fcab7d4d540b189b68c04a0ab766a0b3e8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 45
        echo "                <p>&copy; Copyright 2016 by Romain Venel & Maxime Genevier</p> 
            ";
        
        $__internal_a1b19ebd45ca6ce41feb6cb29742fcab7d4d540b189b68c04a0ab766a0b3e8c8->leave($__internal_a1b19ebd45ca6ce41feb6cb29742fcab7d4d540b189b68c04a0ab766a0b3e8c8_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Default:baseComptable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 45,  178 => 44,  167 => 41,  157 => 32,  151 => 31,  138 => 34,  136 => 31,  128 => 26,  118 => 18,  112 => 17,  101 => 11,  93 => 12,  91 => 11,  86 => 9,  82 => 8,  78 => 7,  74 => 6,  69 => 5,  63 => 4,  54 => 47,  52 => 44,  48 => 42,  46 => 41,  42 => 39,  40 => 17,  35 => 14,  33 => 4,  28 => 1,);
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
            {% block header %}
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"#\">Galaxy Swiss Bourdin</a>
                        </div>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Fiches Frais <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('rvmg_gsb_choose_month_visitor') }}\">Valider</a></li>
                                    <li><a href=\"#\">Suivre</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Paramètres</a></li>
                            {% block identite %}
                                <div class=\"CouleurConnecte\">{{ app.session.get('user_firstname')~ \" \" ~app.session.get('user_lastname') }}</div>
                            {% endblock %}
                            <li id=\"Deco\"><a href=\"{{ path('rvmg_gsb_deconnexion') }}\">Déconnexion</a>
                        </ul>
                    </div>
                </nav>
            {% endblock %}
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
