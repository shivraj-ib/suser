<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_895bc17bfa0ede8f22915bc55f0060b72ff8239a8027550a7814b5d9965b0c3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2622843f9c380bebcf4145b29c2089cfcf0b34eec7f9b5024638ac3c08971500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2622843f9c380bebcf4145b29c2089cfcf0b34eec7f9b5024638ac3c08971500->enter($__internal_2622843f9c380bebcf4145b29c2089cfcf0b34eec7f9b5024638ac3c08971500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2622843f9c380bebcf4145b29c2089cfcf0b34eec7f9b5024638ac3c08971500->leave($__internal_2622843f9c380bebcf4145b29c2089cfcf0b34eec7f9b5024638ac3c08971500_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe64162f08e613714c215cf3678c6972a0587b7dbc478fa6b9f1fe0bd3e9333a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe64162f08e613714c215cf3678c6972a0587b7dbc478fa6b9f1fe0bd3e9333a->enter($__internal_fe64162f08e613714c215cf3678c6972a0587b7dbc478fa6b9f1fe0bd3e9333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_fe64162f08e613714c215cf3678c6972a0587b7dbc478fa6b9f1fe0bd3e9333a->leave($__internal_fe64162f08e613714c215cf3678c6972a0587b7dbc478fa6b9f1fe0bd3e9333a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
