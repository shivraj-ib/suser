<?php

/* default/admin.html.twig */
class __TwigTemplate_4e21027a924845d1b325726c819bf6cb508b6258f811055f3ef34d1b30e79935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "default/admin.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52190a52327bd2dc7f2ef607633b02e90c19e423b135bb4c7d3cd0d7af87a463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52190a52327bd2dc7f2ef607633b02e90c19e423b135bb4c7d3cd0d7af87a463->enter($__internal_52190a52327bd2dc7f2ef607633b02e90c19e423b135bb4c7d3cd0d7af87a463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52190a52327bd2dc7f2ef607633b02e90c19e423b135bb4c7d3cd0d7af87a463->leave($__internal_52190a52327bd2dc7f2ef607633b02e90c19e423b135bb4c7d3cd0d7af87a463_prof);

    }

    public function getTemplateName()
    {
        return "default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'main.html.twig' %}

";
    }
}
