<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d47a9f6873747e08bcfe1e8914d8029b50e013317c8dc65089b02434ce6a8e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_514af5f06bab89f59c56df328dbc98015d55cfb6eb55f656c01c0a010c06f8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514af5f06bab89f59c56df328dbc98015d55cfb6eb55f656c01c0a010c06f8bb->enter($__internal_514af5f06bab89f59c56df328dbc98015d55cfb6eb55f656c01c0a010c06f8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_514af5f06bab89f59c56df328dbc98015d55cfb6eb55f656c01c0a010c06f8bb->leave($__internal_514af5f06bab89f59c56df328dbc98015d55cfb6eb55f656c01c0a010c06f8bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa0ccf8bbf1669898ddbae1102fd8bbf8d89f7cdb21bfa7e23f5fc41681fbe6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0ccf8bbf1669898ddbae1102fd8bbf8d89f7cdb21bfa7e23f5fc41681fbe6e->enter($__internal_fa0ccf8bbf1669898ddbae1102fd8bbf8d89f7cdb21bfa7e23f5fc41681fbe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_fa0ccf8bbf1669898ddbae1102fd8bbf8d89f7cdb21bfa7e23f5fc41681fbe6e->leave($__internal_fa0ccf8bbf1669898ddbae1102fd8bbf8d89f7cdb21bfa7e23f5fc41681fbe6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
