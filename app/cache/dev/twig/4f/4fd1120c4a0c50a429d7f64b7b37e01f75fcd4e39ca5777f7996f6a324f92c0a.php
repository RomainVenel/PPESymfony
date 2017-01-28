<?php

/* rvmgGSBBundle:Comptable:chooseMonthAndVisitor.html.twig */
class __TwigTemplate_370cf1ae7c78257a260169c6f9fcda934ba5b0f3c9eeb44503984c6d6278a42f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:baseComptable.html.twig", "rvmgGSBBundle:Comptable:chooseMonthAndVisitor.html.twig", 1);
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
        $__internal_704853d3e1bf40fd99479b6a0a22bfc1e4c13185d0cebcfe0f69248336f009a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704853d3e1bf40fd99479b6a0a22bfc1e4c13185d0cebcfe0f69248336f009a8->enter($__internal_704853d3e1bf40fd99479b6a0a22bfc1e4c13185d0cebcfe0f69248336f009a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Comptable:chooseMonthAndVisitor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_704853d3e1bf40fd99479b6a0a22bfc1e4c13185d0cebcfe0f69248336f009a8->leave($__internal_704853d3e1bf40fd99479b6a0a22bfc1e4c13185d0cebcfe0f69248336f009a8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0811505ee6b16514afd5ef991d1f51140dfb77abad62799f8f7cb6ac5cb5d0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0811505ee6b16514afd5ef991d1f51140dfb77abad62799f8f7cb6ac5cb5d0a5->enter($__internal_0811505ee6b16514afd5ef991d1f51140dfb77abad62799f8f7cb6ac5cb5d0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Valider fiche de frais
";
        
        $__internal_0811505ee6b16514afd5ef991d1f51140dfb77abad62799f8f7cb6ac5cb5d0a5->leave($__internal_0811505ee6b16514afd5ef991d1f51140dfb77abad62799f8f7cb6ac5cb5d0a5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc7d555365fd2281183703c6ca39a50f067b1d68c0830e211cf16cd6861b27b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7d555365fd2281183703c6ca39a50f067b1d68c0830e211cf16cd6861b27b8->enter($__internal_fc7d555365fd2281183703c6ca39a50f067b1d68c0830e211cf16cd6861b27b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- <span style=\"display: none;\"> -->
    <div class=\"container\">
        ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitor", array()), 'widget');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget', array("date_pattern" => "{{ day }}</span> {{ month }} {{ year }}"));
        echo "
        <div class=\"BoutonForm\"><input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" />
        <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\" /></div>
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    ";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 16
            echo "        <div class=\"alert alert-info\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 18
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    ";
        }
        
        $__internal_fc7d555365fd2281183703c6ca39a50f067b1d68c0830e211cf16cd6861b27b8->leave($__internal_fc7d555365fd2281183703c6ca39a50f067b1d68c0830e211cf16cd6861b27b8_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Comptable:chooseMonthAndVisitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  87 => 18,  83 => 17,  80 => 16,  78 => 15,  73 => 13,  67 => 10,  63 => 9,  59 => 8,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:baseComptable.html.twig\" %}
{% block title %}
    Valider fiche de frais
{% endblock %}
{% block body %}
    <!-- <span style=\"display: none;\"> -->
    <div class=\"container\">
        {{form_start(form)}}
        {{form_widget(form.visitor)}}
        {{form_widget(form.month, {'date_pattern': '{{ day }}</span> {{ month }} {{ year }}'})}}
        <div class=\"BoutonForm\"><input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" />
        <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\" /></div>
        {{form_end(form)}}
    </div>
    {% if app.session.flashBag.has('error') %}
        <div class=\"alert alert-info\">
            {% for msg in app.session.flashBag.get('error') %}
                {{ msg }}
            {% endfor %}
        </div>
    {% endif %}
{% endblock %}";
    }
}
