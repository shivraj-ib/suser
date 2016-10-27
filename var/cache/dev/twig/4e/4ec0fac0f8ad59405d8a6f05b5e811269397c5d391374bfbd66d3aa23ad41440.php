<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_89c24a6b1fcbf52b353aaa2a04bad7ff21f48a3db79ea4e5c2ceb136372f357f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d470df659473a88c63724fbf6eb3687e8d7c5310c6329f8f29acdb9e59ff895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d470df659473a88c63724fbf6eb3687e8d7c5310c6329f8f29acdb9e59ff895->enter($__internal_8d470df659473a88c63724fbf6eb3687e8d7c5310c6329f8f29acdb9e59ff895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d470df659473a88c63724fbf6eb3687e8d7c5310c6329f8f29acdb9e59ff895->leave($__internal_8d470df659473a88c63724fbf6eb3687e8d7c5310c6329f8f29acdb9e59ff895_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcc5c23d5b046da4914280b0fe4a096bfd8eaf938f1018cdb3751444f2b6ec67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc5c23d5b046da4914280b0fe4a096bfd8eaf938f1018cdb3751444f2b6ec67->enter($__internal_bcc5c23d5b046da4914280b0fe4a096bfd8eaf938f1018cdb3751444f2b6ec67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bcc5c23d5b046da4914280b0fe4a096bfd8eaf938f1018cdb3751444f2b6ec67->leave($__internal_bcc5c23d5b046da4914280b0fe4a096bfd8eaf938f1018cdb3751444f2b6ec67_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24f52b1185c407f5cab8fb6f550327bd523312c4ff2e25a5744f5c5de2e2221c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f52b1185c407f5cab8fb6f550327bd523312c4ff2e25a5744f5c5de2e2221c->enter($__internal_24f52b1185c407f5cab8fb6f550327bd523312c4ff2e25a5744f5c5de2e2221c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_24f52b1185c407f5cab8fb6f550327bd523312c4ff2e25a5744f5c5de2e2221c->leave($__internal_24f52b1185c407f5cab8fb6f550327bd523312c4ff2e25a5744f5c5de2e2221c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fda1f3e003c00d84ee0dfd2fc3768445dd308152aa8c126ae427c74ed2e71e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda1f3e003c00d84ee0dfd2fc3768445dd308152aa8c126ae427c74ed2e71e8e->enter($__internal_fda1f3e003c00d84ee0dfd2fc3768445dd308152aa8c126ae427c74ed2e71e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fda1f3e003c00d84ee0dfd2fc3768445dd308152aa8c126ae427c74ed2e71e8e->leave($__internal_fda1f3e003c00d84ee0dfd2fc3768445dd308152aa8c126ae427c74ed2e71e8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
