<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2242ac9f121493cf2eb1b58127f847d9fcfea7fda4469281393d21034160d437 extends Twig_Template
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
        $__internal_fd6dac6ed57322094f5f027b078cf5ee409d47d5bb1cb9074c9675ae37bfb076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6dac6ed57322094f5f027b078cf5ee409d47d5bb1cb9074c9675ae37bfb076->enter($__internal_fd6dac6ed57322094f5f027b078cf5ee409d47d5bb1cb9074c9675ae37bfb076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fd6dac6ed57322094f5f027b078cf5ee409d47d5bb1cb9074c9675ae37bfb076->leave($__internal_fd6dac6ed57322094f5f027b078cf5ee409d47d5bb1cb9074c9675ae37bfb076_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
