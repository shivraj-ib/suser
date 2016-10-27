<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2d968860bc3d8d0a218ed55218a6e5474c70eda97a392c4536bef6595701f7a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b5fc07d8c8fee90b8d75c95ab5e7740f63c4a8ca397955c1e7a46911c89eb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5fc07d8c8fee90b8d75c95ab5e7740f63c4a8ca397955c1e7a46911c89eb91->enter($__internal_4b5fc07d8c8fee90b8d75c95ab5e7740f63c4a8ca397955c1e7a46911c89eb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b5fc07d8c8fee90b8d75c95ab5e7740f63c4a8ca397955c1e7a46911c89eb91->leave($__internal_4b5fc07d8c8fee90b8d75c95ab5e7740f63c4a8ca397955c1e7a46911c89eb91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3528cae673741dd4286ba769e5ed6b3e7ddad6e3b3075f2fac886053a5809fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3528cae673741dd4286ba769e5ed6b3e7ddad6e3b3075f2fac886053a5809fb4->enter($__internal_3528cae673741dd4286ba769e5ed6b3e7ddad6e3b3075f2fac886053a5809fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3528cae673741dd4286ba769e5ed6b3e7ddad6e3b3075f2fac886053a5809fb4->leave($__internal_3528cae673741dd4286ba769e5ed6b3e7ddad6e3b3075f2fac886053a5809fb4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6463fd88abe495581f3d496e83a9d457cf399d5204e3fe3f5c260087bf885a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6463fd88abe495581f3d496e83a9d457cf399d5204e3fe3f5c260087bf885a39->enter($__internal_6463fd88abe495581f3d496e83a9d457cf399d5204e3fe3f5c260087bf885a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6463fd88abe495581f3d496e83a9d457cf399d5204e3fe3f5c260087bf885a39->leave($__internal_6463fd88abe495581f3d496e83a9d457cf399d5204e3fe3f5c260087bf885a39_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e577a8b12d50160896e23c210ebf04eaf1379ef84f5b42982d0da73d3dbacea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e577a8b12d50160896e23c210ebf04eaf1379ef84f5b42982d0da73d3dbacea->enter($__internal_1e577a8b12d50160896e23c210ebf04eaf1379ef84f5b42982d0da73d3dbacea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e577a8b12d50160896e23c210ebf04eaf1379ef84f5b42982d0da73d3dbacea->leave($__internal_1e577a8b12d50160896e23c210ebf04eaf1379ef84f5b42982d0da73d3dbacea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
