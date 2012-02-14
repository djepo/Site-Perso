<?php

/* comainBundle:article:add.html.twig */
class __TwigTemplate_4c38c5c2ff7cc371c943115ac12fd182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'commentaires' => array($this, 'block_commentaires'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/css/articles.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> ";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 22
        echo "
    <header>
        <h1>Ajout d'un article</h1>
    </header>
        
    ";
        // line 28
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array("notification", ), "method")) {
            // line 29
            echo "        <div class=\"notification\">
            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array("notification", ), "method"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 33
        echo "    ";
        // line 34
        echo "        
        <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("articles_ajout"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
            <div>                
                ";
        // line 37
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "title"), "Titre de l'article");
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "title"));
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "title"));
        echo "
            </div>
            <div>
                ";
        // line 42
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "article"), "Contenu de l'article");
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "article"));
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "article"));
        echo "
            </div>
            <br>
            <input type=\"submit\" />
        </form>               
";
    }

    // line 51
    public function block_commentaires($context, array $blocks = array())
    {
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 55
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "
";
    }

    public function getTemplateName()
    {
        return "comainBundle:article:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
