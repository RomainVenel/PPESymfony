<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a4070604a065dd856cfb019564dbfa8764184bb2d381645ff7bece4f2a1fd2a6 extends Twig_Template
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
        $__internal_4359adabbccc31caafc1de3df4b8c1bcbf96ef51e1b9cd833c0236a991e8ce04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4359adabbccc31caafc1de3df4b8c1bcbf96ef51e1b9cd833c0236a991e8ce04->enter($__internal_4359adabbccc31caafc1de3df4b8c1bcbf96ef51e1b9cd833c0236a991e8ce04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4359adabbccc31caafc1de3df4b8c1bcbf96ef51e1b9cd833c0236a991e8ce04->leave($__internal_4359adabbccc31caafc1de3df4b8c1bcbf96ef51e1b9cd833c0236a991e8ce04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
