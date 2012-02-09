<?php

/* comainBundle:Default:index.html.twig */
class __TwigTemplate_7779bdbc058090e8336265dd745b7737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo "    ";
        // line 3
        echo " 
<h1>Bienvenue !</h1>
<h2>
    Ce site est actuellement en construction, et me sert principalement de test pour mes scripts php.<br><br>

    Veuillez noter, que tout ce site à été codé à la main, et ne fait appel à aucun CMS.<br><br>

    Vous pourrez y trouver mon CV et diverses de mes réalisations.
    
    <h3>Vie du site:</h3>
    <ul>
        <li>
            28/01/2012: Ajout des commentaires sur toutes les pages via le module Facebook Comments (histoire d'avoir quelques backlinks au passage).
        </li>
        <li>
            26/01/2012 - 28/01/2012: On casse tout et on recommence !<br>
            Le site passe sous symfony 2 (j'essaie d'y comprendre quelque chose pour le moment, ca n'avance pas bien vite. <br>
            Je me suis rendu compte que mon système d'intégration automatique des pages était un peu bancale. J'ai donc regardé ce qui se faisait du côté des frameworks,
            et j'ai entendu dire beaucoup de bien de symfony.<br>
            De plus apprendre un framework étant toujours une expérience intéressante (bien que pas forcément très simple), j'ai donc décidé de m'y mettre.<br>
        </li>
    </ul>
</h2>
";
    }

    public function getTemplateName()
    {
        return "comainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
