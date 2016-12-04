<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0afd657db6e4ec6f345c12dc622ad2e87f33df3dcd0ca85ba293496b56c1ae21 extends Twig_Template
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
        $__internal_39f550d5469f375baf5346aee2777f9e82fae5bc0ae0d9d126d40725cad447af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f550d5469f375baf5346aee2777f9e82fae5bc0ae0d9d126d40725cad447af->enter($__internal_39f550d5469f375baf5346aee2777f9e82fae5bc0ae0d9d126d40725cad447af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_39f550d5469f375baf5346aee2777f9e82fae5bc0ae0d9d126d40725cad447af->leave($__internal_39f550d5469f375baf5346aee2777f9e82fae5bc0ae0d9d126d40725cad447af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
";
    }
}
