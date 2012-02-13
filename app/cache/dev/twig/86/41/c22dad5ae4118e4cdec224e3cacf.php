<?php

/* coBlogBundle:article:indexarticles.html.twig */
class __TwigTemplate_8641c22dad5ae4118e4cdec224e3cacf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'arbre' => array($this, 'block_arbre'),
            'body' => array($this, 'block_body'),
            'commentaires' => array($this, 'block_commentaires'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "comainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_arbre($context, array $blocks = array())
    {
        // line 3
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
 > <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles"), "html", null, true);
        echo "\">Articles</a>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        echo "    ";
        echo " 
<h1>Articles</h1>
<h2>
    Liste des articles disponibles
</h2>
";
    }

    // line 14
    public function block_commentaires($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "coBlogBundle:article:indexarticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
