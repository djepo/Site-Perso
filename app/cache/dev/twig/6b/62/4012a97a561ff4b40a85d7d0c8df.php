<?php

/* comainBundle:Blocks:GestionUser.html.twig */
class __TwigTemplate_6b624012a97a561ff4b40a85d7d0c8df extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Script pour le dropdown du menu User -->
<script>
    \$(document).ready(function () {
        //Ouverture ou Fermeture du menu lorsque l'on clique dessus
        \$('.myaccount').click(function (event) {
            \$('.dropdown').slideToggle(100);
            event.stopPropagation();    //Vu que l'on referme le menu lorsque l'on clique n'importe ou sur la page, on empeche que cela se produise lorsque l'on clique sur cet élément
        });

        //Sur un clic n'importe ou dans la page, on cache le menu déroulant
        \$('html').click(function() {
            if (\$('.dropdown').is(':visible')){     //on teste si le menu est visible
                \$('.dropdown').slideToggle(100);    // si il est visible, on le referme
            }
        });

    });
</script>
<!-- Fin de script pour le dropdown du menu User -->

";
        // line 23
        echo "
<div class=\"user\">

    ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "        <a class=\"myaccount\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "email"), "html", null, true);
            echo " </a>

        <ul class=\"dropdown\">
            <h3 class=\"title\">Mon Compte</h3>

            <div class=\"options\">
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">Voir Profil</a>
            </div>
            <div class=\"options\">
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
            echo "\">Editer Profil</a>
            </div>
            <div class=\"options\">
                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Deconnexion</a>
            </div>
        </ul>

        <!-- ";
            // line 45
            echo " -->
    ";
        } else {
            // line 47
            echo "        <a class=\"signin\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
    ";
        }
        // line 49
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "comainBundle:Blocks:GestionUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
