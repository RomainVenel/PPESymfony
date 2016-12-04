<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8fc09ed0c84734d351620835bc09e8efb103be7d6f3ec0cff292ddde8c00ce23 extends Twig_Template
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
        $__internal_e73934eaafb99d807d8b5157b2d49b14678b5412e81f15d11d9f9e6115d53b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73934eaafb99d807d8b5157b2d49b14678b5412e81f15d11d9f9e6115d53b75->enter($__internal_e73934eaafb99d807d8b5157b2d49b14678b5412e81f15d11d9f9e6115d53b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e73934eaafb99d807d8b5157b2d49b14678b5412e81f15d11d9f9e6115d53b75->leave($__internal_e73934eaafb99d807d8b5157b2d49b14678b5412e81f15d11d9f9e6115d53b75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
