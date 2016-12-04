<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8705e45a82aaf910e5b8be824464eb9b6cec181b038211260b4316a783182115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da647e069244f5e014cfc11114a1f0f9c101ff95def2524edb648cd4942bb5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da647e069244f5e014cfc11114a1f0f9c101ff95def2524edb648cd4942bb5e0->enter($__internal_da647e069244f5e014cfc11114a1f0f9c101ff95def2524edb648cd4942bb5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_da647e069244f5e014cfc11114a1f0f9c101ff95def2524edb648cd4942bb5e0->leave($__internal_da647e069244f5e014cfc11114a1f0f9c101ff95def2524edb648cd4942bb5e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:error.xml.twig' %}
";
    }
}
