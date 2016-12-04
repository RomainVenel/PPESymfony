<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_24ba668d973cf548f77752efd8bfaa1a8d6f4f56780fd4c3cac8f1df2e46bebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b9cb3585edb3a0d2432f8a92ce0b57c3b421ada6cf274b6b72145be69f3a72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9cb3585edb3a0d2432f8a92ce0b57c3b421ada6cf274b6b72145be69f3a72f->enter($__internal_5b9cb3585edb3a0d2432f8a92ce0b57c3b421ada6cf274b6b72145be69f3a72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5b9cb3585edb3a0d2432f8a92ce0b57c3b421ada6cf274b6b72145be69f3a72f->leave($__internal_5b9cb3585edb3a0d2432f8a92ce0b57c3b421ada6cf274b6b72145be69f3a72f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e2bfa3e5b37f17860ba984261b9c91f4b0ccef94e7944fc0d1ab7dd22bda6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2bfa3e5b37f17860ba984261b9c91f4b0ccef94e7944fc0d1ab7dd22bda6d1->enter($__internal_8e2bfa3e5b37f17860ba984261b9c91f4b0ccef94e7944fc0d1ab7dd22bda6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8e2bfa3e5b37f17860ba984261b9c91f4b0ccef94e7944fc0d1ab7dd22bda6d1->leave($__internal_8e2bfa3e5b37f17860ba984261b9c91f4b0ccef94e7944fc0d1ab7dd22bda6d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
