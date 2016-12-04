<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cad64ecc6d94888319469096f13ff905f7b4853a45af1d1c36cd57c013b5ae1d extends Twig_Template
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
        $__internal_010ec2580b3d7feb2c68cb990a28498531eba8e83a49f63a60233c75a42d7c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010ec2580b3d7feb2c68cb990a28498531eba8e83a49f63a60233c75a42d7c62->enter($__internal_010ec2580b3d7feb2c68cb990a28498531eba8e83a49f63a60233c75a42d7c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_010ec2580b3d7feb2c68cb990a28498531eba8e83a49f63a60233c75a42d7c62->leave($__internal_010ec2580b3d7feb2c68cb990a28498531eba8e83a49f63a60233c75a42d7c62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
