<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5279c7173726e6230c0efd738abd0ac0e2dc1cc17eaca9c687b8f761c824b1de extends Twig_Template
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
        $__internal_6b9f6fc4191403cb6b90bf193fcd385608163fbf0b7a81655939f4baf310385b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9f6fc4191403cb6b90bf193fcd385608163fbf0b7a81655939f4baf310385b->enter($__internal_6b9f6fc4191403cb6b90bf193fcd385608163fbf0b7a81655939f4baf310385b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6b9f6fc4191403cb6b90bf193fcd385608163fbf0b7a81655939f4baf310385b->leave($__internal_6b9f6fc4191403cb6b90bf193fcd385608163fbf0b7a81655939f4baf310385b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
