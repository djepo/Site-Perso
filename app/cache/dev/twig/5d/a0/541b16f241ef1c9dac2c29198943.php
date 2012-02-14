<?php

/* coBlogBundle:article:show.html.twig */
class __TwigTemplate_5da0541b16f241ef1c9dac2c29198943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'arbre' => array($this, 'block_arbre'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\">Articles</a>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
        echo " | CAILBAUT Olivier";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"blog\">
        <header>
            <h1>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
        echo "</h1>
            <p>test</p>
            <p>Par ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "author"), "html", null, true);
        echo "</p>
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($this->getContext($context, "article"), "image")))), "html", null, true);
        echo "\" alt=\"\" class=\"large\" />
        </header>  <!-- Fin balise header -->
        
        <div>            
            <p>";
        // line 27
        echo $this->getAttribute($this->getContext($context, "article"), "article");
        echo "</p>            
        </div>
        
        <div class=\"footer\">
            <div class=\"date\"><time datetime=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "created"), "c"), "html", null, true);
        echo "\">Posté le: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "created"), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo "</time></div>
            
            <!-- Lockerz Share BEGIN -->
            <!--
                <a class=\"a2a_dd\" href=\"http://www.addtoany.com/share_save\"><img src=\"http://static.addtoany.com/buttons/share_save_120_16.gif\" width=\"120\" height=\"16\" border=\"0\" alt=\"Share\"/></a>
                <script type=\"text/javascript\">
                    var a2a_config = a2a_config || {};
                    a2a_config.locale = \"fr\";
                </script>
                <script type=\"text/javascript\" src=\"http://static.addtoany.com/menu/page.js\"></script>
            -->
            <!-- Lockerz Share END -->          
            
        </div>  <!-- Fin balise footer -->
        
    </div>  <!-- Fin balise blog -->
";
    }

    public function getTemplateName()
    {
        return "coBlogBundle:article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
