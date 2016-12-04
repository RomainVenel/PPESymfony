<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_994b77ac93ffbb5f018d5daca1ce0b853f1738d888841ff5b00994975433fe9b extends Twig_Template
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
        $__internal_64db8bc1012446e4ac7cf564034c54842ba948db99c65fe388b0ef41c367d753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64db8bc1012446e4ac7cf564034c54842ba948db99c65fe388b0ef41c367d753->enter($__internal_64db8bc1012446e4ac7cf564034c54842ba948db99c65fe388b0ef41c367d753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_64db8bc1012446e4ac7cf564034c54842ba948db99c65fe388b0ef41c367d753->leave($__internal_64db8bc1012446e4ac7cf564034c54842ba948db99c65fe388b0ef41c367d753_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
