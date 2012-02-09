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
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
!--
tinyMCE.init({
mode : \"textareas\",
valid_elements : \"em/i,strike,u,strong/b,div[align],br,#p[align],-ol[type|compact],-ul[type|compact],-li\"
});
//-->
</script>


<div class=\"blog\">
    <header>
        <h1>Ajout d'un article</h1>

        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_ajout"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
            <div>
                <!-- Génération du label. -->
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "title"), "Titre de l'article");
        echo "
                <!-- Affichage des erreurs pour ce champ précis. -->
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "title"));
        echo "
                <!-- Génération de l'input. -->
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "title"));
        echo "
            </div>
            <div>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "article"), "Contenu de l'article");
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "article"));
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "article"));
        echo "
            </div>
            <div>
                ";
        // line 41
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "author"), "Auteur");
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "author"));
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "author"));
        echo "
            </div>
            <div>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "created"), "Date de Création");
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "created"));
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "created"));
        echo "
            </div>
            <div>
                ";
        // line 51
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "updated"), "Date de dernière modification");
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "updated"));
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "updated"));
        echo "
            </div>

                ";
        // line 59
        echo "
                            <br>
                            <input type=\"submit\" />
                        </form>
                    </header>  <!-- Fin balise header -->


                </div>  <!-- Fin balise blog -->




                <!--
";
        // line 75
        echo "                -->
";
    }

    // line 78
    public function block_commentaires($context, array $blocks = array())
    {
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
