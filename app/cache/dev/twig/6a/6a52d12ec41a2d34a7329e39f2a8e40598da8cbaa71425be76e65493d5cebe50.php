<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ef83a993bae062419bcd70222039c443a8a5aef89733898d1be8189575115c9b extends Twig_Template
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
        $__internal_511138fcd486ceb94de032bef67f1953f5806c3d4c887ab457002b99b7302682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511138fcd486ceb94de032bef67f1953f5806c3d4c887ab457002b99b7302682->enter($__internal_511138fcd486ceb94de032bef67f1953f5806c3d4c887ab457002b99b7302682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_511138fcd486ceb94de032bef67f1953f5806c3d4c887ab457002b99b7302682->leave($__internal_511138fcd486ceb94de032bef67f1953f5806c3d4c887ab457002b99b7302682_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
