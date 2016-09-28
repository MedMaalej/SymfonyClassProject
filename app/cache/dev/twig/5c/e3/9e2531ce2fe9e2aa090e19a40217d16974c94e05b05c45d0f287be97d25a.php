<?php

/* ::base.html.twig */
class __TwigTemplate_5ce39e2531ce2fe9e2aa090e19a40217d16974c94e05b05c45d0f287be97d25a extends Twig_Template
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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t   
        <div id=\"header\">
\t\t\t<div id=\"titre\">
\t\t\t\t<div style=\"float:left\">
\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/body-bg.png"), "html", null, true);
        echo "\" height=\"80\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"float:left; margin:25px\">Centre de Formation</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"menu\">
\t\t\t<ul>
\t\t\t    <li>Formation</li>
\t\t\t\t
\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("formation_new");
        echo "\">Ajouter</a></li>
\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\">Liste</a></li>
\t\t\t\t
\t\t\t\t
\t\t\t</ul>
\t\t\t
\t\t</div>
\t\t";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "\t\t
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "\t\t<div id=\"contenu\">
\t\t\t\t
\t\t</div>
\t\t";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  108 => 37,  101 => 33,  98 => 32,  91 => 7,  88 => 6,  82 => 5,  76 => 40,  73 => 37,  71 => 32,  62 => 26,  58 => 25,  46 => 16,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
