<?php

/* rvmgGSBBundle:Visiteur:renseignerForfait.html.twig */
class __TwigTemplate_d8fb459e92b5fb13620cef69e00dd31af99467e6c6bbfaebbf6b335a9b80474a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:baseVisiteur.html.twig", "rvmgGSBBundle:Visiteur:renseignerForfait.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:baseVisiteur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b4fb7a914f9fa78bd1a6d92372f1caf768073382fe4c62366d0817dc34ab14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4fb7a914f9fa78bd1a6d92372f1caf768073382fe4c62366d0817dc34ab14c->enter($__internal_8b4fb7a914f9fa78bd1a6d92372f1caf768073382fe4c62366d0817dc34ab14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Visiteur:renseignerForfait.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4fb7a914f9fa78bd1a6d92372f1caf768073382fe4c62366d0817dc34ab14c->leave($__internal_8b4fb7a914f9fa78bd1a6d92372f1caf768073382fe4c62366d0817dc34ab14c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b153c47de5ffdc837466be8d2cca3fd4784b9a86dae2f5a18b3c098dc0f3f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b153c47de5ffdc837466be8d2cca3fd4784b9a86dae2f5a18b3c098dc0f3f32->enter($__internal_6b153c47de5ffdc837466be8d2cca3fd4784b9a86dae2f5a18b3c098dc0f3f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"containerForfait\">
        
        ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"ChampForm\">";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'label');
        echo "</div>
           ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget');
        echo "
            <div class=\"ChampForm\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idfraisforfait", array()), 'label');
        echo "</div>
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idfraisforfait", array()), 'widget');
        echo "

        <div class=\"BoutonForm\"><input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" />
            <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\" /></div>
        
       
        ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_6b153c47de5ffdc837466be8d2cca3fd4784b9a86dae2f5a18b3c098dc0f3f32->leave($__internal_6b153c47de5ffdc837466be8d2cca3fd4784b9a86dae2f5a18b3c098dc0f3f32_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Visiteur:renseignerForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:baseVisiteur.html.twig\" %}

{% block body %}
    <div class=\"containerForfait\">
        
        {{ form_start(form) }}
            <div class=\"ChampForm\">{{ form_label(form.quantite) }}</div>
           {{ form_widget(form.quantite) }}
            <div class=\"ChampForm\">{{ form_label(form.idfraisforfait) }}</div>
            {{ form_widget(form.idfraisforfait) }}

        <div class=\"BoutonForm\"><input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" />
            <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\" /></div>
        
       
        {{ form_end(form) }}
    </div>
{% endblock %}";
    }
}
