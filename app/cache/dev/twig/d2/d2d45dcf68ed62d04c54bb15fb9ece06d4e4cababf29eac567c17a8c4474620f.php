<?php

/* rvmgGSBBundle:Comptable:validationFicheFrais.html.twig */
class __TwigTemplate_bd1a7e788c8ccf398c305c8ec8cd48cda0fd3028075719c7bce89ba82f6097cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:baseComptable.html.twig", "rvmgGSBBundle:Comptable:validationFicheFrais.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:baseComptable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a7a4be65d1b3e874b0b7a80af13efed922efa264991d26c635315f1d6312453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7a4be65d1b3e874b0b7a80af13efed922efa264991d26c635315f1d6312453->enter($__internal_4a7a4be65d1b3e874b0b7a80af13efed922efa264991d26c635315f1d6312453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Comptable:validationFicheFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a7a4be65d1b3e874b0b7a80af13efed922efa264991d26c635315f1d6312453->leave($__internal_4a7a4be65d1b3e874b0b7a80af13efed922efa264991d26c635315f1d6312453_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d02d2f34a1d3dabac51b894057072e9a848bf41273395d2db1d74a162a9b9a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02d2f34a1d3dabac51b894057072e9a848bf41273395d2db1d74a162a9b9a06->enter($__internal_d02d2f34a1d3dabac51b894057072e9a848bf41273395d2db1d74a162a9b9a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Valider fiche de frais
";
        
        $__internal_d02d2f34a1d3dabac51b894057072e9a848bf41273395d2db1d74a162a9b9a06->leave($__internal_d02d2f34a1d3dabac51b894057072e9a848bf41273395d2db1d74a162a9b9a06_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2de00e76ea02af87e5daa3a2ca37711df3cc2f0ce3fcc226c08822567899f4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de00e76ea02af87e5daa3a2ca37711df3cc2f0ce3fcc226c08822567899f4e1->enter($__internal_2de00e76ea02af87e5daa3a2ca37711df3cc2f0ce3fcc226c08822567899f4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table class=\"table-responsive table-hover\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableForfait"]) ? $context["tableForfait"] : $this->getContext($context, "tableForfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 8
            echo "            <thead>
                <tr>
                    <th>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "name", array()), "html", null, true);
            echo "</th>
                </tr>
                ";
            // line 12
            if (($this->getAttribute($context["list"], "type", array()) == "forfait")) {
                // line 13
                echo "                    <tr>
                        <th>Forfait</th>
                        <th>Quantité</th>
                    </tr>
                ";
            } elseif (($this->getAttribute(            // line 17
$context["list"], "type", array()) == "horsforfait")) {
                // line 18
                echo "                    <tr>
                        <th>Libellé</th>
                        <th>Date dépense</th>
                        <th>Montant</th>
                        <th></th>
                    </tr>
                ";
            }
            // line 25
            echo "            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
                // line 28
                echo "                    ";
                if (($this->getAttribute($context["list"], "type", array()) == "forfait")) {
                    // line 29
                    echo "                        <tr>
                            <td>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["frais"], "fraisforfait", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["frais"], "quantite", array()), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                // line 34
                echo "                    ";
                if (($this->getAttribute($context["list"], "type", array()) == "horsforfait")) {
                    // line 35
                    echo "                        <tr>
                            <td>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["frais"], "libelle", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["frais"], "datedepense", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["frais"], "montant", array()), "html", null, true);
                    echo "</td>
                            <td>
                                <button class=\"btn-danger\">REFUSER</button>
                            </td>
                        </tr>
                    ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </table>
";
        
        $__internal_2de00e76ea02af87e5daa3a2ca37711df3cc2f0ce3fcc226c08822567899f4e1->leave($__internal_2de00e76ea02af87e5daa3a2ca37711df3cc2f0ce3fcc226c08822567899f4e1_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Comptable:validationFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  143 => 45,  137 => 44,  128 => 38,  124 => 37,  120 => 36,  117 => 35,  114 => 34,  108 => 31,  104 => 30,  101 => 29,  98 => 28,  94 => 27,  90 => 25,  81 => 18,  79 => 17,  73 => 13,  71 => 12,  66 => 10,  62 => 8,  58 => 7,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:baseComptable.html.twig\" %}
{% block title %}
    Valider fiche de frais
{% endblock %}
{% block body %}
    <table class=\"table-responsive table-hover\">
        {% for list in tableForfait %}
            <thead>
                <tr>
                    <th>{{ list.name }}</th>
                </tr>
                {% if list.type == \"forfait\" %}
                    <tr>
                        <th>Forfait</th>
                        <th>Quantité</th>
                    </tr>
                {% elseif list.type == \"horsforfait\" %}
                    <tr>
                        <th>Libellé</th>
                        <th>Date dépense</th>
                        <th>Montant</th>
                        <th></th>
                    </tr>
                {% endif %}
            </thead>
            <tbody>
                {% for frais in list %}
                    {% if list.type == \"forfait\" %}
                        <tr>
                            <td>{{frais.fraisforfait}}</td>
                            <td>{{frais.quantite}}</td>
                        </tr>
                    {% endif %}
                    {% if list.type == \"horsforfait\" %}
                        <tr>
                            <td>{{frais.libelle}}</td>
                            <td>{{frais.datedepense}}</td>
                            <td>{{frais.montant}}</td>
                            <td>
                                <button class=\"btn-danger\">REFUSER</button>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </tbody>
        {% endfor %}
    </table>
{% endblock %}
";
    }
}
