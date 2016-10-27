<?php

/* main.html.twig */
class __TwigTemplate_3e140c0e5ddba77bd62b25b06a011f72d495dc4ba70d3a73bbd887b79554a5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'navmenu' => array($this, 'block_navmenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df916149b265f748f1d2790d753a70c53c9b3305406b1dbbf7a96bb30a029e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df916149b265f748f1d2790d753a70c53c9b3305406b1dbbf7a96bb30a029e8f->enter($__internal_df916149b265f748f1d2790d753a70c53c9b3305406b1dbbf7a96bb30a029e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>Suser</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('navmenu', $context, $blocks);
        // line 31
        echo "        <div class=\"container\">
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        </div>
    </body>
</html>


";
        
        $__internal_df916149b265f748f1d2790d753a70c53c9b3305406b1dbbf7a96bb30a029e8f->leave($__internal_df916149b265f748f1d2790d753a70c53c9b3305406b1dbbf7a96bb30a029e8f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b2004d59bd75e16acbf725dac76cce9e39a74f1f16be98854c430cc8ca0c6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2004d59bd75e16acbf725dac76cce9e39a74f1f16be98854c430cc8ca0c6d5->enter($__internal_1b2004d59bd75e16acbf725dac76cce9e39a74f1f16be98854c430cc8ca0c6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AppBundle/Resources/Public/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_1b2004d59bd75e16acbf725dac76cce9e39a74f1f16be98854c430cc8ca0c6d5->leave($__internal_1b2004d59bd75e16acbf725dac76cce9e39a74f1f16be98854c430cc8ca0c6d5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d792d6e6fec9f067fca0230f9b720ab2275cfea6852540b6343d9a72b03e4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d792d6e6fec9f067fca0230f9b720ab2275cfea6852540b6343d9a72b03e4ae->enter($__internal_0d792d6e6fec9f067fca0230f9b720ab2275cfea6852540b6343d9a72b03e4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_0d792d6e6fec9f067fca0230f9b720ab2275cfea6852540b6343d9a72b03e4ae->leave($__internal_0d792d6e6fec9f067fca0230f9b720ab2275cfea6852540b6343d9a72b03e4ae_prof);

    }

    // line 17
    public function block_navmenu($context, array $blocks = array())
    {
        $__internal_02ede27ed1ebac0258308426c1f2f0f2e306cefcf949227a5f06cc588370a118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ede27ed1ebac0258308426c1f2f0f2e306cefcf949227a5f06cc588370a118->enter($__internal_02ede27ed1ebac0258308426c1f2f0f2e306cefcf949227a5f06cc588370a118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navmenu"));

        echo " 
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
                    </div>
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"/login\">Login</a></li>
                        <li><a href=\"/logout\">Logout</a></li>
                        <li><a href=\"/profile\">Edit</a></li>                        
                    </ul>
                </div>
            </nav>
        ";
        
        $__internal_02ede27ed1ebac0258308426c1f2f0f2e306cefcf949227a5f06cc588370a118->leave($__internal_02ede27ed1ebac0258308426c1f2f0f2e306cefcf949227a5f06cc588370a118_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_149535ce75995d3662d09016cb795b2efa01a4abe0a2c0e19366c030cff5d60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149535ce75995d3662d09016cb795b2efa01a4abe0a2c0e19366c030cff5d60a->enter($__internal_149535ce75995d3662d09016cb795b2efa01a4abe0a2c0e19366c030cff5d60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "                <h3>Basic Navbar Example</h3>
                <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
        ";
        
        $__internal_149535ce75995d3662d09016cb795b2efa01a4abe0a2c0e19366c030cff5d60a->leave($__internal_149535ce75995d3662d09016cb795b2efa01a4abe0a2c0e19366c030cff5d60a_prof);

    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  120 => 32,  95 => 17,  86 => 12,  80 => 11,  71 => 9,  68 => 8,  62 => 7,  50 => 36,  48 => 32,  45 => 31,  43 => 17,  39 => 15,  36 => 11,  34 => 7,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>Suser</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link href=\"{{ asset('AppBundle/Resources/Public/css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% endblock %}
    </head>
    <body>
        {% block navmenu %} 
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
                    </div>
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"/login\">Login</a></li>
                        <li><a href=\"/logout\">Logout</a></li>
                        <li><a href=\"/profile\">Edit</a></li>                        
                    </ul>
                </div>
            </nav>
        {% endblock %}
        <div class=\"container\">
        {% block body %}
                <h3>Basic Navbar Example</h3>
                <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
        {% endblock %}
        </div>
    </body>
</html>


";
    }
}
