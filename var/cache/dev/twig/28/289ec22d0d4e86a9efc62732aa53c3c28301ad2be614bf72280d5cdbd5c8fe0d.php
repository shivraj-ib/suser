<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c2c16f1926637a6d466e6b5552517719a8cc712b1cc47bf0e344046de3d4c3bf extends Twig_Template
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
        $__internal_0577345c68778308fe9d2b5c323624fb95e207cb2481e89d75e76db34605ae27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0577345c68778308fe9d2b5c323624fb95e207cb2481e89d75e76db34605ae27->enter($__internal_0577345c68778308fe9d2b5c323624fb95e207cb2481e89d75e76db34605ae27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0577345c68778308fe9d2b5c323624fb95e207cb2481e89d75e76db34605ae27->leave($__internal_0577345c68778308fe9d2b5c323624fb95e207cb2481e89d75e76db34605ae27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_863947489fb7d6a8069092e8bf51d42f46213aead839b8274afcd410f0fb584b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863947489fb7d6a8069092e8bf51d42f46213aead839b8274afcd410f0fb584b->enter($__internal_863947489fb7d6a8069092e8bf51d42f46213aead839b8274afcd410f0fb584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_863947489fb7d6a8069092e8bf51d42f46213aead839b8274afcd410f0fb584b->leave($__internal_863947489fb7d6a8069092e8bf51d42f46213aead839b8274afcd410f0fb584b_prof);

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
