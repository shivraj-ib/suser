<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_173637f0e4c2232158457818a9ce3856cb77c8fde87262dc6006aa5c96e2d4c2 extends Twig_Template
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
        $__internal_7b61c4f8c60e6cd85475bb9c8284c4ee393dfaff37a2283e5994e4134f808e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b61c4f8c60e6cd85475bb9c8284c4ee393dfaff37a2283e5994e4134f808e91->enter($__internal_7b61c4f8c60e6cd85475bb9c8284c4ee393dfaff37a2283e5994e4134f808e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "<div class=\"user-from-container\">
    ";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" novalidate=\"novalidate\">
        ";
        // line 7
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 8
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 9
        echo "  
        <div class=\"form-group\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\">
        </div>
        <div class=\"checkbox\">
            <label><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Remember me</label>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\">Submit</button>
    </form>    
</div>
        ";
        
        $__internal_7b61c4f8c60e6cd85475bb9c8284c4ee393dfaff37a2283e5994e4134f808e91->leave($__internal_7b61c4f8c60e6cd85475bb9c8284c4ee393dfaff37a2283e5994e4134f808e91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  46 => 9,  40 => 8,  38 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
<div class=\"user-from-container\">
    {% if error %}
        <div class=\"error\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" novalidate=\"novalidate\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}  
        <div class=\"form-group\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\">
        </div>
        <div class=\"checkbox\">
            <label><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Remember me</label>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\">Submit</button>
    </form>    
</div>
        ";
    }
}
