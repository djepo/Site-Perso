<?php

/* comainBundle:Page:contact.html.twig */
class __TwigTemplate_a57ccc1308694602cbb25ad74190c2e1 extends Twig_Template
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

    // line 3
    public function block_arbre($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
 > <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\">Contact</a>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <header>
        <h1>Contactez moi</h1>
    </header> 
 
    ";
        // line 14
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array("notification", ), "method")) {
            // line 15
            echo "        <div class=\"blogger-notice\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array("notification", ), "method"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 19
        echo "    ";
        // line 20
        echo " 
    <p>Vous voulez me contacter ?</p>
    
    <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"blogger\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo " ";
        // line 25
        echo "        ";
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "name"), "Nom, prénom");
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "email"), "Adresse Mail");
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "subject"), "Sujet de votre message");
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "subject"));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "body"), "Votre message");
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "body"));
        echo "

        ";
        // line 34
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "   ";
        // line 35
        echo "        <p align=\"center\">
        <input type=\"submit\" value=\"Envoyer\" />
    </form>
    
";
    }

    // line 41
    public function block_commentaires($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "comainBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
