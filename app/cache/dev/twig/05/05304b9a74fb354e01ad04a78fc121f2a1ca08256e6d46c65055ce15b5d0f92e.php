<?php

/* rvmgGSBBundle:Default:baseVisiteur.html.twig */
class __TwigTemplate_a820681c82cf50939ef424bf98d06b6978606847163df215d0949f346bbc17ad extends Twig_Template
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
        $__internal_b93ce6a3ffa9004242e0b9a77dc7c60d3f2d0d32e277bbe26921d982994d9fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93ce6a3ffa9004242e0b9a77dc7c60d3f2d0d32e277bbe26921d982994d9fb0->enter($__internal_b93ce6a3ffa9004242e0b9a77dc7c60d3f2d0d32e277bbe26921d982994d9fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:baseVisiteur.html.twig"));

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
        // line 49
        echo "        </div>
        <div id=\"content\">
            ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "        </div>
    </body>
</html>";
        
        $__internal_b93ce6a3ffa9004242e0b9a77dc7c60d3f2d0d32e277bbe26921d982994d9fb0->leave($__internal_b93ce6a3ffa9004242e0b9a77dc7c60d3f2d0d32e277bbe26921d982994d9fb0_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_928458b717e3b027ab717be9a537a9ddc165ac57b087f77e677187a121d1bbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928458b717e3b027ab717be9a537a9ddc165ac57b087f77e677187a121d1bbae->enter($__internal_928458b717e3b027ab717be9a537a9ddc165ac57b087f77e677187a121d1bbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_928458b717e3b027ab717be9a537a9ddc165ac57b087f77e677187a121d1bbae->leave($__internal_928458b717e3b027ab717be9a537a9ddc165ac57b087f77e677187a121d1bbae_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f788c12033a33939d075dcf7de23529a2f6b03956333b8c794e12fb2520335d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f788c12033a33939d075dcf7de23529a2f6b03956333b8c794e12fb2520335d->enter($__internal_8f788c12033a33939d075dcf7de23529a2f6b03956333b8c794e12fb2520335d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8f788c12033a33939d075dcf7de23529a2f6b03956333b8c794e12fb2520335d->leave($__internal_8f788c12033a33939d075dcf7de23529a2f6b03956333b8c794e12fb2520335d_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_2fad47ee0a92643f9c4c564a2f10fa9b6177f7ca8a6e62fa61264b022b41c124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fad47ee0a92643f9c4c564a2f10fa9b6177f7ca8a6e62fa61264b022b41c124->enter($__internal_2fad47ee0a92643f9c4c564a2f10fa9b6177f7ca8a6e62fa61264b022b41c124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "                <nav class=\"navbar navbar-inverse\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"#\">Galaxy Swiss Bourdin</a>
                        </div>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Fiches Frais <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"dropdown-submenu\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Renseigner</a>
                                        <ul class=\"dropdown-menu\">
                                            <li class=\"menu-item\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rvmg_gsb_renseigner", array("type" => "forfait"));
        echo "\">Forfait</a></li>
                                            <li class=\"menu-item\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rvmg_gsb_renseigner", array("type" => "horsforfait"));
        echo "\">Hors Forfait</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">Consulter</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Paramètres <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Changer MDP</a></li>
                                    <li><a href=\"#\">A propos</a></li>
                                </ul>
                            </li>
                            ";
        // line 41
        $this->displayBlock('identite', $context, $blocks);
        // line 44
        echo "                            <li id=\"Deco\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rvmg_gsb_deconnexion");
        echo "\">Déconnexion</a>
                        </ul>
                    </div>
                </nav>
            ";
        
        $__internal_2fad47ee0a92643f9c4c564a2f10fa9b6177f7ca8a6e62fa61264b022b41c124->leave($__internal_2fad47ee0a92643f9c4c564a2f10fa9b6177f7ca8a6e62fa61264b022b41c124_prof);

    }

    // line 41
    public function block_identite($context, array $blocks = array())
    {
        $__internal_dcced22558c1dee6bc2df7edad094a4c3e59371fae27675cedcabc5fa60695bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcced22558c1dee6bc2df7edad094a4c3e59371fae27675cedcabc5fa60695bc->enter($__internal_dcced22558c1dee6bc2df7edad094a4c3e59371fae27675cedcabc5fa60695bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "identite"));

        // line 42
        echo "                                <div class=\"CouleurConnecte\">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_firstname"), "method") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_lastname"), "method")), "html", null, true);
        echo "</div>
                            ";
        
        $__internal_dcced22558c1dee6bc2df7edad094a4c3e59371fae27675cedcabc5fa60695bc->leave($__internal_dcced22558c1dee6bc2df7edad094a4c3e59371fae27675cedcabc5fa60695bc_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_9876dd78fb9efc736c490e74ab714f9766cd4f1dab706624db4e8bc6f42486ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9876dd78fb9efc736c490e74ab714f9766cd4f1dab706624db4e8bc6f42486ec->enter($__internal_9876dd78fb9efc736c490e74ab714f9766cd4f1dab706624db4e8bc6f42486ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9876dd78fb9efc736c490e74ab714f9766cd4f1dab706624db4e8bc6f42486ec->leave($__internal_9876dd78fb9efc736c490e74ab714f9766cd4f1dab706624db4e8bc6f42486ec_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_08fec33acf34fa4696e7521b21040340d2fc989ae124d7e31ae159c66606840e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fec33acf34fa4696e7521b21040340d2fc989ae124d7e31ae159c66606840e->enter($__internal_08fec33acf34fa4696e7521b21040340d2fc989ae124d7e31ae159c66606840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "                <p>&copy; Copyright 2016 by Romain Venel & Maxime Genevier</p>
            ";
        
        $__internal_08fec33acf34fa4696e7521b21040340d2fc989ae124d7e31ae159c66606840e->leave($__internal_08fec33acf34fa4696e7521b21040340d2fc989ae124d7e31ae159c66606840e_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Default:baseVisiteur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 55,  191 => 54,  180 => 51,  170 => 42,  164 => 41,  151 => 44,  149 => 41,  134 => 29,  130 => 28,  118 => 18,  112 => 17,  101 => 11,  93 => 12,  91 => 11,  86 => 9,  82 => 8,  78 => 7,  74 => 6,  69 => 5,  63 => 4,  54 => 57,  52 => 54,  48 => 52,  46 => 51,  42 => 49,  40 => 17,  35 => 14,  33 => 4,  28 => 1,);
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
                <nav class=\"navbar navbar-inverse\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"#\">Galaxy Swiss Bourdin</a>
                        </div>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Fiches Frais <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"dropdown-submenu\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Renseigner</a>
                                        <ul class=\"dropdown-menu\">
                                            <li class=\"menu-item\"><a href=\"{{ path('rvmg_gsb_renseigner',{'type':'forfait'}) }}\">Forfait</a></li>
                                            <li class=\"menu-item\"><a href=\"{{ path('rvmg_gsb_renseigner',{'type':'horsforfait'}) }}\">Hors Forfait</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">Consulter</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Paramètres <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Changer MDP</a></li>
                                    <li><a href=\"#\">A propos</a></li>
                                </ul>
                            </li>
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
