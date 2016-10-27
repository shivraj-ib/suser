<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_af18ef05c9bab7d3316c0838056a85dae447b7785a95b96865498ec575b88ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1b1715bf75e4af783cff797aed1fa1e5bd75c8a7195d407bfe48b9e19f76f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b1715bf75e4af783cff797aed1fa1e5bd75c8a7195d407bfe48b9e19f76f61->enter($__internal_f1b1715bf75e4af783cff797aed1fa1e5bd75c8a7195d407bfe48b9e19f76f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit Profile</a>
</div>
";
        
        $__internal_f1b1715bf75e4af783cff797aed1fa1e5bd75c8a7195d407bfe48b9e19f76f61->leave($__internal_f1b1715bf75e4af783cff797aed1fa1e5bd75c8a7195d407bfe48b9e19f76f61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  32 => 5,  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    <a href=\"{{ path('fos_user_profile_edit') }}\">Edit Profile</a>
</div>
";
    }
}
