<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9f334ba7fe92b916409fa2e349da70697d892170754fe489b5ed922bc7697262 extends Twig_Template
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
        $__internal_7d035ab230ccbe3a11a137b031c934a69ead00be71682da52cdb7fe76918bb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d035ab230ccbe3a11a137b031c934a69ead00be71682da52cdb7fe76918bb58->enter($__internal_7d035ab230ccbe3a11a137b031c934a69ead00be71682da52cdb7fe76918bb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d035ab230ccbe3a11a137b031c934a69ead00be71682da52cdb7fe76918bb58->leave($__internal_7d035ab230ccbe3a11a137b031c934a69ead00be71682da52cdb7fe76918bb58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a14ebb08dd3ff37eeca978a28aa8fce19d94c7b4e0b1157b704fd61b95777a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14ebb08dd3ff37eeca978a28aa8fce19d94c7b4e0b1157b704fd61b95777a57->enter($__internal_a14ebb08dd3ff37eeca978a28aa8fce19d94c7b4e0b1157b704fd61b95777a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a14ebb08dd3ff37eeca978a28aa8fce19d94c7b4e0b1157b704fd61b95777a57->leave($__internal_a14ebb08dd3ff37eeca978a28aa8fce19d94c7b4e0b1157b704fd61b95777a57_prof);

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
