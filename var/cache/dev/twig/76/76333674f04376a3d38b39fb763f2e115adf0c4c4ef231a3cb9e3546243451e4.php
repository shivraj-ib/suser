<?php

/* form/fields.html.twig */
class __TwigTemplate_ba85e494471492ae4cf7072126106877eb9199bb925b8241642994f05611b343 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_870b3eeed698a0d12faf3e5179efcf3517c4d06db191f8cf5d52ae2878642417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870b3eeed698a0d12faf3e5179efcf3517c4d06db191f8cf5d52ae2878642417->enter($__internal_870b3eeed698a0d12faf3e5179efcf3517c4d06db191f8cf5d52ae2878642417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_870b3eeed698a0d12faf3e5179efcf3517c4d06db191f8cf5d52ae2878642417->leave($__internal_870b3eeed698a0d12faf3e5179efcf3517c4d06db191f8cf5d52ae2878642417_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_69f00ef104eea0b6106dfc5697025919895f977a70ad207e488ae2bdb7dc9823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f00ef104eea0b6106dfc5697025919895f977a70ad207e488ae2bdb7dc9823->enter($__internal_69f00ef104eea0b6106dfc5697025919895f977a70ad207e488ae2bdb7dc9823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 3
        echo "    <div class=\"form-group\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
";
        
        $__internal_69f00ef104eea0b6106dfc5697025919895f977a70ad207e488ae2bdb7dc9823->leave($__internal_69f00ef104eea0b6106dfc5697025919895f977a70ad207e488ae2bdb7dc9823_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  42 => 5,  38 => 4,  35 => 3,  23 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}
{% block form_row %}
    <div class=\"form-group\">
            {{ form_label(form) }}
            {{ form_widget(form,{'attr':{'class':'form-control'}}) }}
            {{ form_errors(form) }}
    </div>
{% endblock %}";
    }
}
