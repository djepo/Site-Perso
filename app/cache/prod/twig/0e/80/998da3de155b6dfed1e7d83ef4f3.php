<?php

/* comainBundle:Page:cv.html.twig */
class __TwigTemplate_0e80998da3de155b6dfed1e7d83ef4f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'arbre' => array($this, 'block_arbre'),
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

    // line 3
    public function block_arbre($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
 > <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cv"), "html", null, true);
        echo "\">CV</a>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        echo "    ";
        // line 9
        echo " 
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comain/js/CalculAge.js"), "html", null, true);
        echo "\"></script> 

<h3></h3>
<h3>CAILBAUT Olivier</h3>
<h3>12, l’aiguillette<br>
    4330 Mouzillon</h3>


<h1 style=\"font-weight: bold;\"><u>Etat civil</u>:</h1>
<ul>
    <li>Né le 08/08/1978 à Strasbourg</li>
    <li>Age: <span id=\"age\"></span></li>
    <li>Situation de famille: Concubinage</li>
</ul>

<h1 style=\"font-weight: bold; text-decoration: underline\">Diplômes:</h1>
<ul>
    <li>1999-2000: Niveau BTS Informatique (Informatique de gestion)</li>
    <li>1998: Bac STT option informatique de gestion (Lycée la Colinière – Nantes)</li>
    <li>1993: Brevet des collèges (Collège St Laurent - Blain)</li>
</ul>

<h1 style=\"font-weight: bold; text-decoration: underline\">Stages:</h1>
<ul>
    <li>2000: Développement d’un composant Delphi de lecture-écriture pour le système à carte Sésame-vitale (Apolink – Ste Luce/loire)</li>
    <li>1999: Développement d’un module de comptabilité pour le logiciel <a href=\"http://www.medialogs.net/\" target=\"_blank\">Média Coif</a> (logiciel de gestion pour salons de coiffure) sous <a href=\"http://www.pcsoft.fr/windev/index.html\" target=\"_blank\">Windev</a> (Médialogs – Clisson)</li>
</ul>

<h1 style=\"font-weight: bold; text-decoration: underline\">Emplois:</h1>
<ul>
    <li>Depuis Septembre 2004:
        <ul>
            <li>Conducteur de ligne (<a href=\"http://www.lactalis.fr/\" target=\"_blank\">Lactalis</a> - Nestlé Vallet)</li>
            <li>Détachements
                ponctuels sur démarrage lignes, mises en place de machines
                industrielles;</li>
            <li>Développement
                informatique  en VBA Access / Excel, intégration
                matériel,
                dépannage matériel, configuration réseau, développement d’applications
                de reporting,
                automatisation de calculs, statistiques sur les pesées en liaison ODBC
                avec une
                base Oracle, Reporting et statistiques d’après une base SQL Server,
                Liaison
                d’application vb.net avec un automate industriel à des fins de
                sauvegardes et
                statistiques sur la marche des installations industrielles.<br></li>
        </ul>
    <li>Mars 2004 - Septembre 2004:
        Contrat de qualification Conducteur
        de lignes Manpower Nestlé – AFPI.</li>

    <li>septembre 2001-mars 2004: diverses missions intérimaires dont:
        <ul>
            <li>Manutention diverse (Drouet
                frères, Seritex, Chef Ledoult, Celia, Cubic Santé, Bric
                Fruits);</li>
            <li>Cariste (Sautejeau–Beauquin, Vinival, Kappa SCAO, Hay’s
                Logistique);</li>
            <li>Préparation de
                commande, tenue de stocks (Chef Ledoult, menuiseries Jeanneau, Hay’s
                logistique, Vinival);</li>
            <li>Opérateur en
                Ultra-Filtration et pasteurisation chez Celia Monfaucon ;</li>
        </ul>
    <li>Décembre 2000 - Août 2001: Moniteur poids
        lourds des armées (SN);</li>
    <li>Juillet 2000 -
        Novembre 2000: Manutentionnaire,
        cariste réception MS et conducteur machines
        en mission intérimaire (Vinival – Mouzillon);</li>
    <li>Août 1998 - Juillet 2000:
        Serveur, vendeur, et responsable Internet (Vidéo@Food - Clisson);</li>

    <li>1998: Assembleur informatique
        durant 4 mois (BCS – Clisson);</li>
</ul>

<h1 style=\"font-weight: bold; text-decoration: underline\">Compétences informatiques:</h1>
<ul>
    <li>
        <h3>Langages:</h3>
        <ul>
        <li>C maîtrisé, VB.net, VBA Access et Excel maitrisés;</li>
        <li>Connaissances en WLanguage (Windev), C++, SQL;</li>
        <li>Bonne connaissance de Pascal et Delphi;</li>
        <li>Notions d’assembleur Intel.</li>
        </ul>
    </li>
    <li>
        <h3>Méthode d’analyse:</h3>
        <ul>
        <li>Merise</li>
        <li>Merise 2</li>
        </ul>
    </li>
    <li>
        <h3>Systèmes:</h3>
        <ul>
        <li>Connaissance approfondie de
            Windows 3.1, 9x, NT, XP,
            Vista, et les différentes Versions de Windows Server</li>
        <li>Bonne connaissance de DOS, UNIX</li>
        <li>Notions sous Linux (UBUNTU), BeOS</li>
        </ul>
    </li>
</ul>

<h1 style=\"font-weight: bold; text-decoration: underline\">Divers:</h1>
<ul>
    <li>Permis B, C</li>
    <li>Permis Cariste</li>
    <li>Anglais lu, parlé et écrit</li>
    <li>Brevet européen de secourisme (AFPS)</li>
    <li>Dégagé des obligations militaires</li>
</ul>

";
    }

    public function getTemplateName()
    {
        return "comainBundle:Page:cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
