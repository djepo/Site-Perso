<?php

/* comainBundle:Blocks:ReseauxSociaux.html.twig */
class __TwigTemplate_6656853f467d87223fc8686844df93e6 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "                            ";
        // line 2
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
                                        <div><iframe src=\"//www.facebook.com/plugins/like.php?href=http://djepo.craym.eu/&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:100%; height:21px;\" allowTransparency=\"true\"></iframe></div>
                                        <div class=\"g-plusone\" data-size=\"medium\" width=\"200\" data-href=\"http://djepo.craym.eu/\"></div>
                                        <div><a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://djepo.craym.eu/\" data-lang=\"fr\">Tweeter</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script></div>        </div>
                                </div>";
    }

    public function getTemplateName()
    {
        return "comainBundle:Blocks:ReseauxSociaux.html.twig";
    }

}
