<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fdca7c641632cec7b91d39ea1be6846e4dbf1ce54658ddc7baf7e23a74b6e5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_904dc7a6ed85fd08b540cc89eaf45f68c202110cb1f289e35579da7f466b129f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904dc7a6ed85fd08b540cc89eaf45f68c202110cb1f289e35579da7f466b129f->enter($__internal_904dc7a6ed85fd08b540cc89eaf45f68c202110cb1f289e35579da7f466b129f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_904dc7a6ed85fd08b540cc89eaf45f68c202110cb1f289e35579da7f466b129f->leave($__internal_904dc7a6ed85fd08b540cc89eaf45f68c202110cb1f289e35579da7f466b129f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bda85e5c809e075843bae29bde6174bd19f4e946fc91f692adcaafca4f62ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bda85e5c809e075843bae29bde6174bd19f4e946fc91f692adcaafca4f62ca8->enter($__internal_3bda85e5c809e075843bae29bde6174bd19f4e946fc91f692adcaafca4f62ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3bda85e5c809e075843bae29bde6174bd19f4e946fc91f692adcaafca4f62ca8->leave($__internal_3bda85e5c809e075843bae29bde6174bd19f4e946fc91f692adcaafca4f62ca8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_112645bb69960a3f6fe59cd0fa53bd43d4eff00575d170babba6b8170ddbd1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112645bb69960a3f6fe59cd0fa53bd43d4eff00575d170babba6b8170ddbd1d4->enter($__internal_112645bb69960a3f6fe59cd0fa53bd43d4eff00575d170babba6b8170ddbd1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_112645bb69960a3f6fe59cd0fa53bd43d4eff00575d170babba6b8170ddbd1d4->leave($__internal_112645bb69960a3f6fe59cd0fa53bd43d4eff00575d170babba6b8170ddbd1d4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2066b4726703c049ecfa27031680ee06ac3d45f1598e885a119b4c4a71ffedc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2066b4726703c049ecfa27031680ee06ac3d45f1598e885a119b4c4a71ffedc7->enter($__internal_2066b4726703c049ecfa27031680ee06ac3d45f1598e885a119b4c4a71ffedc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2066b4726703c049ecfa27031680ee06ac3d45f1598e885a119b4c4a71ffedc7->leave($__internal_2066b4726703c049ecfa27031680ee06ac3d45f1598e885a119b4c4a71ffedc7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
