<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_91126a7a53b4eaededf902fa6d8339518eab30c10a5cb492b7e34c5ba11f203c extends Twig_Template
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
        $__internal_2ebdc29f16f9fa44e0da85d7ca33b5b9b32b29c3169587f7c8542fa9b72bbd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebdc29f16f9fa44e0da85d7ca33b5b9b32b29c3169587f7c8542fa9b72bbd26->enter($__internal_2ebdc29f16f9fa44e0da85d7ca33b5b9b32b29c3169587f7c8542fa9b72bbd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2ebdc29f16f9fa44e0da85d7ca33b5b9b32b29c3169587f7c8542fa9b72bbd26->leave($__internal_2ebdc29f16f9fa44e0da85d7ca33b5b9b32b29c3169587f7c8542fa9b72bbd26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
    }
}
