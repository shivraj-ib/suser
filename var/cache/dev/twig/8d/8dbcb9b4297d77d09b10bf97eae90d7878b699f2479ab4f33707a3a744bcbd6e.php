<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_49d5d88532106498e854e1aa97ca71d95fa74e0a56c5131b378afa9e4f4e9a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3a083161257f82d84ba28a43286d794120c4a6c61ccada5d400aca250a5e8966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a083161257f82d84ba28a43286d794120c4a6c61ccada5d400aca250a5e8966->enter($__internal_3a083161257f82d84ba28a43286d794120c4a6c61ccada5d400aca250a5e8966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a083161257f82d84ba28a43286d794120c4a6c61ccada5d400aca250a5e8966->leave($__internal_3a083161257f82d84ba28a43286d794120c4a6c61ccada5d400aca250a5e8966_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_889cfcf76f14ce375d0ded8c667d67c8a84462a401fc69167cdce95727ac200a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889cfcf76f14ce375d0ded8c667d67c8a84462a401fc69167cdce95727ac200a->enter($__internal_889cfcf76f14ce375d0ded8c667d67c8a84462a401fc69167cdce95727ac200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_889cfcf76f14ce375d0ded8c667d67c8a84462a401fc69167cdce95727ac200a->leave($__internal_889cfcf76f14ce375d0ded8c667d67c8a84462a401fc69167cdce95727ac200a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
