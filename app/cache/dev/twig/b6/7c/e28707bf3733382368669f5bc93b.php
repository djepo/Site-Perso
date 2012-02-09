<?php

/* ::base.html.twig */
class __TwigTemplate_b67ce28707bf3733382368669f5bc93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'arbre' => array($this, 'block_arbre'),
            'body' => array($this, 'block_body'),
            'fbshare' => array($this, 'block_fbshare'),
            'commentaires' => array($this, 'block_commentaires'),
            'gauche' => array($this, 'block_gauche'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta description=\"Site personnel de CAILBAUT Olivier. CV, réalisation informatiques en dotNet, PHP et VBA.\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


        <meta property=\"og:url\" content=\"http://djepo.craym.eu/\">
        <meta property=\"og:title\" content=\"CAILBAUT Olivier - Créateur de Solutions\">
        <meta property=\"og:description\" content=\"Site personnel de CAILBAUT Olivier. CV, réalisation informatiques en dotNet, PHP et VBA.\">
        <meta property=\"og:image\" content=\"http://djepo.craym.eu/images/VignetteSite.jpg\">
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"fb:admins\" content=\"100002583175945\">
        <meta property=\"fb:app_id\" content=\"232953266786752\"/>


        <meta itemprop=\"name\" content=\"CAILBAUT Olivier - Créateur de Solutions\">
        <meta itemprop=\"description\" content=\"Site personnel de CAILBAUT Olivier. CV, réalisation informatiques en dotNet, PHP et VBA.\">
        <meta itemprop=\"image\" content=\"http://djepo.craym.eu/images/VignetteSite.jpg\" >

        <!-- JQuery -->
        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/js/jquery/development-bundle/jquery-1.7.1.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/js/jquery/development-bundle/ui/jquery-ui-1.8.17.custom.js"), "html", null, true);
        echo "\"></script>
        <!-- JQuery -->

    </head>

    <body>
        
        <div class=\"header\">

            ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
        </div>

        <div class=\"colmask threecol\">
            <div class=\"colmid\">
\t\t<div class=\"colleft\">
                    <div class=\"col1\">
\t\t\t<!-- Column 1 start (contenu principal du site) -->
                        <div id=\"arbre\">
                            
                            ";
        // line 65
        $this->displayBlock('arbre', $context, $blocks);
        // line 68
        echo "                                
                        </div>

                        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "
                        <div>
                            <!--
                            ";
        // line 76
        $this->displayBlock('fbshare', $context, $blocks);
        // line 79
        echo "                            -->
                            ";
        // line 80
        $this->displayBlock('commentaires', $context, $blocks);
        // line 83
        echo "                        </div>
                    </div>

                    <div class=\"col2\" style=\"overflow: visible\">
                        <!-- Column 2 start (colonne de gauche) -->
                         ";
        // line 88
        $this->displayBlock('gauche', $context, $blocks);
        // line 97
        echo "                        <!-- Column 2 end -->
                    </div>

                    <div class=\"col3\">
                        <!-- Column 3 start (colonne de droite)-->
                        <!-- Column 3 end -->
                    </div>

\t\t</div>
            </div>
        </div>

        ";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "
    </body>

    <div id=\"footer\">
        ";
        // line 127
        $this->displayBlock('footer', $context, $blocks);
        // line 145
        echo "    </div>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "CAILBAUT Olivier - Créateur de Solutions";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/css/stylesheet.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/css/usermenu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "
                <div id=\"header_gauche\">
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\" style=\"color: white;\">CAILBAUT Olivier</a>
                </div>

                <div id=\"header_droit\" style=\"text-align: center\">
                    <h2>Créateur de Solutions</h2>
                </div>

                <!-- Inclusion du bloc permettant la gestion utilisateurs (connexions, déconnexions, gestion ... -->
                ";
        // line 52
        $this->env->loadTemplate("comainBundle:Blocks:GestionUser.html.twig")->display($context);
        // line 53
        echo "
            ";
    }

    // line 65
    public function block_arbre($context, array $blocks = array())
    {
        // line 66
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
                            ";
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "                        ";
    }

    // line 76
    public function block_fbshare($context, array $blocks = array())
    {
        // line 77
        echo "                                ";
        // line 78
        echo "                            ";
    }

    // line 80
    public function block_commentaires($context, array $blocks = array())
    {
        // line 81
        echo "                                ";
        $this->env->loadTemplate("comainBundle:Blocks:Commentaires.html.twig")->display($context);
        // line 82
        echo "                            ";
    }

    // line 88
    public function block_gauche($context, array $blocks = array())
    {
        // line 89
        echo "                            
                            ";
        // line 91
        echo "                            ";
        $this->env->loadTemplate("comainBundle:Blocks:MenuVertical.html.twig")->display($context);
        // line 92
        echo "
                            ";
        // line 94
        echo "                            ";
        $this->env->loadTemplate("comainBundle:Blocks:ReseauxSociaux.html.twig")->display($context);
        // line 95
        echo "                        
                    ";
    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        // line 110
        echo "            <!-- Bouton Google -->
            <script type=\"text/javascript\">
                window.___gcfg = {lang: 'fr'};
                (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
            </script>
            <!-- Bouton Google -->


        ";
    }

    // line 127
    public function block_footer($context, array $blocks = array())
    {
        // line 128
        echo "            <ul>
                <li>
                    Le site
                    <ul>
                        <li>Plan</li>
                    </ul>
                </li>
                <li>
                    Contact
                    <ul>
                        <li><a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\">Formulaire de contact</a></li>
                        <li><a href=\"http://www.facebook.com/pages/CAILBAUT-Olivier-Cr%C3%A9ateur-de-Solutions/365054276854994\" target=\"_blank\">Facebook</a></li>
                        <li><a href=\"mailto: contact@djepo.craym.eu\">EMail</a></li>
                    </ul>
                </li>
            </ul>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
