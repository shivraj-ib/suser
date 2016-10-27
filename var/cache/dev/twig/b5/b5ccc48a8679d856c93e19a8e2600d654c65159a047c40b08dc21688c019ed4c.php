<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3146a7b7b57ea9d9009e5543954d08473c2702062cd7484a1bec52111bcdd98c extends Twig_Template
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
        $__internal_f6e05400eb5135830c618f19cbcff39a67d85626cb398c95318d4134ec1c9b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e05400eb5135830c618f19cbcff39a67d85626cb398c95318d4134ec1c9b2a->enter($__internal_f6e05400eb5135830c618f19cbcff39a67d85626cb398c95318d4134ec1c9b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e05400eb5135830c618f19cbcff39a67d85626cb398c95318d4134ec1c9b2a->leave($__internal_f6e05400eb5135830c618f19cbcff39a67d85626cb398c95318d4134ec1c9b2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5b01b4879e25b21af452c8b418204d4e1cb03ef6bdb22a1d2463d530fe3a988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b01b4879e25b21af452c8b418204d4e1cb03ef6bdb22a1d2463d530fe3a988->enter($__internal_a5b01b4879e25b21af452c8b418204d4e1cb03ef6bdb22a1d2463d530fe3a988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a5b01b4879e25b21af452c8b418204d4e1cb03ef6bdb22a1d2463d530fe3a988->leave($__internal_a5b01b4879e25b21af452c8b418204d4e1cb03ef6bdb22a1d2463d530fe3a988_prof);

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
