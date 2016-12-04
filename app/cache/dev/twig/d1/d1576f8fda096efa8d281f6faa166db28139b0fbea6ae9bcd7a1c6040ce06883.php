<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a82cba6ad078c9183caf9f66ce97210400b84e6ca9fdfecbb70b33304ae7a810 extends Twig_Template
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
        $__internal_6e38aa163ee3bc07a6acbf7e71aa0b0619a212effc0246e7f8a850b4db88d54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e38aa163ee3bc07a6acbf7e71aa0b0619a212effc0246e7f8a850b4db88d54f->enter($__internal_6e38aa163ee3bc07a6acbf7e71aa0b0619a212effc0246e7f8a850b4db88d54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6e38aa163ee3bc07a6acbf7e71aa0b0619a212effc0246e7f8a850b4db88d54f->leave($__internal_6e38aa163ee3bc07a6acbf7e71aa0b0619a212effc0246e7f8a850b4db88d54f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
