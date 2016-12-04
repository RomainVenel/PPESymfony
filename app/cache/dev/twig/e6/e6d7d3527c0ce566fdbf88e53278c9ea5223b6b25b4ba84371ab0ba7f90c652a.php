<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_46e6eb2f5852d98aa04b2068c5853734636582650c4c362a19a86e9174676c89 extends Twig_Template
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
        $__internal_d61f3292b7d96a6610e507ef2ac0909b04522ca9cf44570cd0877429158f189a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61f3292b7d96a6610e507ef2ac0909b04522ca9cf44570cd0877429158f189a->enter($__internal_d61f3292b7d96a6610e507ef2ac0909b04522ca9cf44570cd0877429158f189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d61f3292b7d96a6610e507ef2ac0909b04522ca9cf44570cd0877429158f189a->leave($__internal_d61f3292b7d96a6610e507ef2ac0909b04522ca9cf44570cd0877429158f189a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
