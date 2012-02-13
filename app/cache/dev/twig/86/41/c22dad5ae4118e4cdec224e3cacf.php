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
        // line 8
        echo "<h1>Articles</h1>
<h2>
    Liste des articles disponibles
</h2>
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
            echo "</a><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "
";
    }

    // line 18
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
