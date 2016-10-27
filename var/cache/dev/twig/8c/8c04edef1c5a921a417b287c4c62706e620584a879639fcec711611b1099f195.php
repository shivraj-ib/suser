<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7ad0864be57f049c4bda908a9fca227c006fbe45b77fd7efc36e9ac20d9cd7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c2c5aad918071702d0466e34d2df04635e662971e889ed527e36356d79082380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c5aad918071702d0466e34d2df04635e662971e889ed527e36356d79082380->enter($__internal_c2c5aad918071702d0466e34d2df04635e662971e889ed527e36356d79082380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2c5aad918071702d0466e34d2df04635e662971e889ed527e36356d79082380->leave($__internal_c2c5aad918071702d0466e34d2df04635e662971e889ed527e36356d79082380_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce8000699634b7129370b499fe87368a9635a9c0b33695cdb33982e7a43b7b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8000699634b7129370b499fe87368a9635a9c0b33695cdb33982e7a43b7b9d->enter($__internal_ce8000699634b7129370b499fe87368a9635a9c0b33695cdb33982e7a43b7b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ce8000699634b7129370b499fe87368a9635a9c0b33695cdb33982e7a43b7b9d->leave($__internal_ce8000699634b7129370b499fe87368a9635a9c0b33695cdb33982e7a43b7b9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
