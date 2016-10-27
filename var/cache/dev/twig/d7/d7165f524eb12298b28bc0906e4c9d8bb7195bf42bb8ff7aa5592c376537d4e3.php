<?php

/* base.html.twig */
class __TwigTemplate_e6887980cebe59234ac512e88e7188817ad995771d18ec48209ff56c021d6de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_616ba9eb4901d0580b6f024cabc421611ea8fb0fc71b69584c32efe898a5f974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616ba9eb4901d0580b6f024cabc421611ea8fb0fc71b69584c32efe898a5f974->enter($__internal_616ba9eb4901d0580b6f024cabc421611ea8fb0fc71b69584c32efe898a5f974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_616ba9eb4901d0580b6f024cabc421611ea8fb0fc71b69584c32efe898a5f974->leave($__internal_616ba9eb4901d0580b6f024cabc421611ea8fb0fc71b69584c32efe898a5f974_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59aebefe6b9f25343196de598966288bdc4549e3511aaf24c8e5973452b39583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59aebefe6b9f25343196de598966288bdc4549e3511aaf24c8e5973452b39583->enter($__internal_59aebefe6b9f25343196de598966288bdc4549e3511aaf24c8e5973452b39583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_59aebefe6b9f25343196de598966288bdc4549e3511aaf24c8e5973452b39583->leave($__internal_59aebefe6b9f25343196de598966288bdc4549e3511aaf24c8e5973452b39583_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1732e136aaf46d8b15ee2f32a826dec74c6eb04b37f28ca5598dc9a4067a47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1732e136aaf46d8b15ee2f32a826dec74c6eb04b37f28ca5598dc9a4067a47b->enter($__internal_c1732e136aaf46d8b15ee2f32a826dec74c6eb04b37f28ca5598dc9a4067a47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c1732e136aaf46d8b15ee2f32a826dec74c6eb04b37f28ca5598dc9a4067a47b->leave($__internal_c1732e136aaf46d8b15ee2f32a826dec74c6eb04b37f28ca5598dc9a4067a47b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cf1cb0c8c5d1853e161d850c71275f29022d68de33db9e4935c3bd81b48b11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf1cb0c8c5d1853e161d850c71275f29022d68de33db9e4935c3bd81b48b11e->enter($__internal_9cf1cb0c8c5d1853e161d850c71275f29022d68de33db9e4935c3bd81b48b11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9cf1cb0c8c5d1853e161d850c71275f29022d68de33db9e4935c3bd81b48b11e->leave($__internal_9cf1cb0c8c5d1853e161d850c71275f29022d68de33db9e4935c3bd81b48b11e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86fd1d26db4e22bf848a6f01199dd5245da8e08995d7312b2fe5cb9a8c60a700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fd1d26db4e22bf848a6f01199dd5245da8e08995d7312b2fe5cb9a8c60a700->enter($__internal_86fd1d26db4e22bf848a6f01199dd5245da8e08995d7312b2fe5cb9a8c60a700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_86fd1d26db4e22bf848a6f01199dd5245da8e08995d7312b2fe5cb9a8c60a700->leave($__internal_86fd1d26db4e22bf848a6f01199dd5245da8e08995d7312b2fe5cb9a8c60a700_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
