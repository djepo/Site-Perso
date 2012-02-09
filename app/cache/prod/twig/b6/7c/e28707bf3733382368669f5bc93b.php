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
            'fbcomments' => array($this, 'block_fbcomments'),
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
        // line 12
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 13
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
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/js/jquery/development-bundle/jquery-1.7.1.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/js/jquery/development-bundle/ui/jquery-ui-1.8.17.custom.js"), "html", null, true);
        echo "\"></script>
        <!-- JQuery -->

    </head>



    <body>
        <!-- Script d'intégration de facebook comments -->
        <div id=\"fb-root\"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = \"//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=232953266786752\";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!-- Fin de bloc pour le script facebook comments -->

        <div class=\"header\">
            ";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 103
        echo "        </div>

        <div class=\"colmask threecol\">
            <div class=\"colmid\">
\t\t<div class=\"colleft\">
                    <div class=\"col1\">
\t\t\t<!-- Column 1 start (contenu principal du site -->
                        <div id=\"arbre\">
                            ";
        // line 111
        $this->displayBlock('arbre', $context, $blocks);
        // line 114
        echo "                        </div>

                        ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "
                        <div>
                            <!--
                            ";
        // line 121
        $this->displayBlock('fbshare', $context, $blocks);
        // line 126
        echo "                            -->
                            <br>
                            <br>
                            ";
        // line 129
        $this->displayBlock('fbcomments', $context, $blocks);
        // line 150
        echo "                        </div>
                    </div>

                    <div class=\"col2\" style=\"overflow: visible\">
                        <!-- Column 2 start (colonne de gauche) -->
                         ";
        // line 155
        $this->displayBlock('gauche', $context, $blocks);
        // line 245
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
        // line 257
        $this->displayBlock('javascripts', $context, $blocks);
        // line 271
        echo "
    </body>

    <div id=\"footer\">
        ";
        // line 275
        $this->displayBlock('footer', $context, $blocks);
        // line 293
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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/css/stylesheet.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        // line 52
        echo "                <div id=\"header_gauche\">
                    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\" style=\"color: white;\">CAILBAUT Olivier</a>
                </div>
                <div id=\"header_droit\" style=\"text-align: center\">
                    <h2>Créateur de Solutions</h2>
                </div>

                <!-- Script pour le dropdown du menu User -->
                <script>
                    \$(document).ready(function () {
                        \$('.myaccount').click(function () {
                            \$('.dropdown').slideToggle(100);
                        });
                    });
                </script>
                <!-- Fin de script pour le dropdown du menu User -->

                ";
        // line 70
        echo "                ";
        // line 71
        echo "
                <div class=\"user\">

                    ";
        // line 74
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 75
            echo "                        <a class=\"myaccount\" > ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "email"), "html", null, true);
            echo " </a>

                        <ul class=\"dropdown\">
                            <h3 class=\"title\">Mon Compte</h3>
                            
                            <div class=\"options\">
                                <a href=\"../profile\">Voir Profil</a>
                            </div>
                            <div class=\"options\">
                                <a href=\"../profile/edit\">Editer Profil</a>
                            </div>
                            <div class=\"options\">
                                <a href=\"../logout\">Deconnexion</a>
                            </div>
                        </ul>
                        
                        <!-- ";
            // line 94
            echo "                        -->
                    ";
        } else {
            // line 96
            echo "                        <a class=\"signin\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
                    ";
        }
        // line 98
        echo "
                </div>


            ";
    }

    // line 111
    public function block_arbre($context, array $blocks = array())
    {
        // line 112
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
                            ";
    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
        // line 117
        echo "                        ";
    }

    // line 121
    public function block_fbshare($context, array $blocks = array())
    {
        // line 122
        echo "                            ";
        // line 125
        echo "                            ";
    }

    // line 129
    public function block_fbcomments($context, array $blocks = array())
    {
        // line 130
        echo "
                                <!--
                                ";
        // line 135
        echo "                                -->
                                <div id=\"disqus_thread\"></div>
<script type=\"text/javascript\">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'cailbautoliviercrateurdesolutions'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
                            ";
    }

    // line 155
    public function block_gauche($context, array $blocks = array())
    {
        // line 156
        echo "                        ";
        // line 157
        echo "
                            <div id=\"menu\">
                                <div class=\"box_menu\">
                                    <h5>Menu</h5>
                                    <div class=\"corpsmenu corpsmenuprin\" style=\"padding-bottom:0;\">
                                        <div class=\"liste_cours_menu\" style=\"margin-left: 43px; _padding:20px 0 0 0;\">
                                            <ul class=\"niveau1\">
                                                <li style=\"background-color: transparent;\">
                                                    <a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
                                                </li>
                                            </ul>
                                            <ul class=\"niveau1\">
                                                <li class=\"plus\" style=\"background-color: transparent;\">
                                                    <strong>Développement</strong>
                                                    <ul class=\"niveau2\">
                                                        <li class=\"plus\">
                                                            <strong>VB .Net</strong>
                                                            <ul class=\"niveau3\">
                                                                <li class=\"plus\">
                                                                    <strong>Digger Helper</strong>
                                                                    <ul class=\"niveau4\">
                                                                        <li>
                                                                            <a href=\"http://djepo.craym.eu/index.php?page=Développement/VB .Net/Digger Helper/2-Fonctionnement.php\">2-Fonctionnement</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"http://djepo.craym.eu/index.php?page=Développement/VB .Net/Digger Helper/1-Descriptif.html\">1-Descriptif</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class=\"plus\">
                                                            <strong>Php</strong>
                                                            <ul class=\"niveau3\">
                                                                <li>
                                                                    <a href=\"http://djepo.craym.eu/index.php?page=Développement/Php/Mes débuts en PHP.html\">Mes débuts en PHP</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class=\"plus\">
                                                            <strong>Javascript</strong>
                                                            <ul class=\"niveau3\">
                                                                <li>
                                                                    <a href=\"http://djepo.craym.eu/index.php?page=Développement/Javascript/Calculer son âge.php\">Calculer son âge</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <strong>Microsoft Office - VBA</strong>
                                                            <ul class=\"niveau3\"></ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!--
                                            <ul class=\"niveau1\">
                                            <li style=\"background-color: transparent;\">
                                                <a href=\"http://djepo.craym.eu/index.php?page=solver.php\">solver</a>
                                            </li>
                                            </ul>
                                            -->
                                            <ul class=\"niveau1\">
                                                <li style=\"background-color: transparent;\">
                                                    <a href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cv"), "html", null, true);
        echo "\">CV</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 229
        echo "                            <!-- Hack de la taille du bouton google +1 -->
                            <style>
                                #___plusone_0 iframe {
                                    width: 190px !important;
                                }
                            </style>
                            <!-- Fin du Hack -->

                                <div class=\"infobox\">
                                    <h3 class=\"special\">Vous aimez ce site ?</h3>
                                    <div class=\"conteneur_infobox\">
                                        <div><iframe src=\"//www.facebook.com/plugins/like.php?href=http://djepo.craym.eu/&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:350px; height:21px;\" allowTransparency=\"true\"></iframe></div>
                                        <div class=\"g-plusone\" data-size=\"medium\" width=\"190\" data-href=\"http://djepo.craym.eu/\"></div>
                                        <div><a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://djepo.craym.eu/\" data-lang=\"fr\">Tweeter</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script></div>        </div>
                                </div>
                    ";
    }

    // line 257
    public function block_javascripts($context, array $blocks = array())
    {
        // line 258
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

    // line 275
    public function block_footer($context, array $blocks = array())
    {
        // line 276
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
        // line 286
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
