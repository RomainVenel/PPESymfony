<?php

/* rvmgGSBBundle:Accueil:index.html.twig */
class __TwigTemplate_5459b6b7c06d99459bf994481863090446f5791b2039e6a3aed6745c504d08d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Accueil:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e493fd6edee974123bed905bc4c85316f24de4648c42abc4038e215fd5fef316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e493fd6edee974123bed905bc4c85316f24de4648c42abc4038e215fd5fef316->enter($__internal_e493fd6edee974123bed905bc4c85316f24de4648c42abc4038e215fd5fef316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e493fd6edee974123bed905bc4c85316f24de4648c42abc4038e215fd5fef316->leave($__internal_e493fd6edee974123bed905bc4c85316f24de4648c42abc4038e215fd5fef316_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10080913561b6130755c435c7390b37cb732a875a613fcc080b630adf134c7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10080913561b6130755c435c7390b37cb732a875a613fcc080b630adf134c7a3->enter($__internal_10080913561b6130755c435c7390b37cb732a875a613fcc080b630adf134c7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_10080913561b6130755c435c7390b37cb732a875a613fcc080b630adf134c7a3->leave($__internal_10080913561b6130755c435c7390b37cb732a875a613fcc080b630adf134c7a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc67b70267edcf57e63e64f0c708c8b5adadfebc6b84120c963c1faaa946a94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc67b70267edcf57e63e64f0c708c8b5adadfebc6b84120c963c1faaa946a94a->enter($__internal_bc67b70267edcf57e63e64f0c708c8b5adadfebc6b84120c963c1faaa946a94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_bc67b70267edcf57e63e64f0c708c8b5adadfebc6b84120c963c1faaa946a94a->leave($__internal_bc67b70267edcf57e63e64f0c708c8b5adadfebc6b84120c963c1faaa946a94a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea954f89786313687129c76706bd9097475afbc1074daae876529da56e3b4f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea954f89786313687129c76706bd9097475afbc1074daae876529da56e3b4f55->enter($__internal_ea954f89786313687129c76706bd9097475afbc1074daae876529da56e3b4f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <h1 align=\"center\">Galaxy Swiss Bourdin</h1>
    <br/>
    <div class=\"container\">
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"ChampForm\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label');
        echo "</div>
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'errors');
        echo "
        <div class=\"ChampForm\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp", array()), 'label');
        echo "</div>
        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp", array()), 'widget');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp", array()), 'errors');
        echo "
        <div class=\"ChampForm\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil", array()), 'label');
        echo "</div>
        <div class=\"radioButton\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil", array()), 'widget');
        echo "</div>
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil", array()), 'errors');
        echo "
        <div class=\"BoutonForm\"><input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" />
            <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\" /></div>
        ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
        
    <br/>
";
        
        $__internal_ea954f89786313687129c76706bd9097475afbc1074daae876529da56e3b4f55->leave($__internal_ea954f89786313687129c76706bd9097475afbc1074daae876529da56e3b4f55_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  72 => 10,  66 => 9,  56 => 7,  50 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:base.html.twig\" %}

{% block title %}
    Accueil
{% endblock %}
{% block stylesheets %}
       {{ parent() }}
    {% endblock %}
{% block body %}
    <h1 align=\"center\">Galaxy Swiss Bourdin</h1>
    <br/>
    <div class=\"container\">
        {{ form_start(form) }}
        <div class=\"ChampForm\">{{ form_label(form.login) }}</div>
        {{ form_widget(form.login) }}
        {{form_errors(form.login) }}
        <div class=\"ChampForm\">{{ form_label(form.mdp) }}</div>
        {{ form_widget(form.mdp) }}
        {{form_errors(form.mdp) }}
        <div class=\"ChampForm\">{{ form_label(form.profil) }}</div>
        <div class=\"radioButton\">{{ form_widget(form.profil) }}</div>
        {{ form_errors(form.profil) }}
        <div class=\"BoutonForm\"><input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" />
            <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\" /></div>
        {{ form_end(form) }}
    </div>
        
    <br/>
{% endblock %}
";
    }
}
