<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d69ed72e8f4e537a6fa0a2b649fd7a50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'arbre' => array($this, 'block_arbre'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_arbre($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
 > <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
        echo "\">Connexion</a>
";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        if ($this->getContext($context, "error")) {
            // line 10
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
            echo "</div>
";
        }
        // line 12
        echo "    
<h1>Connexion Utilisateur</h1>
<br>

<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />

    <label for=\"username\">Nom d'utilisateur:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br>

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">Se souvenir de moi</label>
    <br>
    <br>
    
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
