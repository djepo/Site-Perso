<?php

/* comainBundle:article:edit.html.twig */
class __TwigTemplate_96a46a07aa12a5eb1a844bd5bf442275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'arbre' => array($this, 'block_arbre'),
            'title' => array($this, 'block_title'),
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

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "  ";
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/css/articles.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> ";
    }

    // line 9
    public function block_arbre($context, array $blocks = array())
    {
        // line 10
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
 > <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\">Articles</a>
 > <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edition", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\">Edition</a>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
        echo " | CAILBAUT Olivier";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "
    <div class=\"blog\">
        <header>
            <h1>Edition de l'article</h1>
            <h1>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
        echo "</h1>
            
            <p>Par ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "author"), "html", null, true);
        echo "</p>            
            
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($this->getContext($context, "article"), "image")))), "html", null, true);
        echo "\" alt=\"\" class=\"large\" />
        </header>  <!-- Fin balise header -->

        <div>
            <textarea>
                <p>";
        // line 31
        echo $this->getAttribute($this->getContext($context, "article"), "article");
        echo "</p>
            </textarea>
        </div>

        <div class=\"footer\">
            <div class=\"date\"><time datetime=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "created"), "c"), "html", null, true);
        echo "\">Posté le: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "created"), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo "</time></div>

        </div>  <!-- Fin balise footer -->

    </div>  <!-- Fin balise blog -->




<!--
";
        // line 49
        echo "-->
";
    }

    // line 52
    public function block_commentaires($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "comainBundle:article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
