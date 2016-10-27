<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_e4c30b4defb711bd91d70fbe191154cf6b1f840a20ce2ab242e23fe29ab6696e extends Twig_Template
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
        $__internal_0c29c3ef5147d6f1f350c459f2d46b84920941be773cfac338f89550b60f685a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c29c3ef5147d6f1f350c459f2d46b84920941be773cfac338f89550b60f685a->enter($__internal_0c29c3ef5147d6f1f350c459f2d46b84920941be773cfac338f89550b60f685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div class=\"user-from-container\">
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "    
    <button type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\">Submit</button>
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_0c29c3ef5147d6f1f350c459f2d46b84920941be773cfac338f89550b60f685a->leave($__internal_0c29c3ef5147d6f1f350c459f2d46b84920941be773cfac338f89550b60f685a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
<div class=\"user-from-container\">
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}    
    <button type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\">Submit</button>
{{ form_end(form) }}
</div>";
    }
}
