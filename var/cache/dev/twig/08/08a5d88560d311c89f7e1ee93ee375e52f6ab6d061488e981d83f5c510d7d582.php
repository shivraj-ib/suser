<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_dd16dba09296def60ace877ef99e0aad00c366430dcc466234c9f25160a8d1d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7299f7ea6f0554278253d14a1f8acfbcca5172b7458ce0293b08323538c2118a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7299f7ea6f0554278253d14a1f8acfbcca5172b7458ce0293b08323538c2118a->enter($__internal_7299f7ea6f0554278253d14a1f8acfbcca5172b7458ce0293b08323538c2118a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7299f7ea6f0554278253d14a1f8acfbcca5172b7458ce0293b08323538c2118a->leave($__internal_7299f7ea6f0554278253d14a1f8acfbcca5172b7458ce0293b08323538c2118a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4f24f16bfe95350f0db514dd17a8673d0eb9902076897a00dccb57ea28b8267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f24f16bfe95350f0db514dd17a8673d0eb9902076897a00dccb57ea28b8267->enter($__internal_e4f24f16bfe95350f0db514dd17a8673d0eb9902076897a00dccb57ea28b8267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   
    <div>
";
        // line 12
        echo "    </div>

    ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 16
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 17
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 18
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    <div>
        ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "    </div>
";
        
        $__internal_e4f24f16bfe95350f0db514dd17a8673d0eb9902076897a00dccb57ea28b8267->leave($__internal_e4f24f16bfe95350f0db514dd17a8673d0eb9902076897a00dccb57ea28b8267_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2dedeafeac39a0a33a04770e72814a5695a1a9a5f178526502b26015dd4e74e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dedeafeac39a0a33a04770e72814a5695a1a9a5f178526502b26015dd4e74e7->enter($__internal_2dedeafeac39a0a33a04770e72814a5695a1a9a5f178526502b26015dd4e74e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "        ";
        
        $__internal_2dedeafeac39a0a33a04770e72814a5695a1a9a5f178526502b26015dd4e74e7->leave($__internal_2dedeafeac39a0a33a04770e72814a5695a1a9a5f178526502b26015dd4e74e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  97 => 25,  89 => 27,  87 => 25,  83 => 23,  80 => 22,  74 => 21,  65 => 18,  60 => 17,  55 => 16,  50 => 15,  48 => 14,  44 => 12,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'main.html.twig' %}
{% block body %}   
    <div>
{#        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
        {% endif %}#}
    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}  

";
    }
}
