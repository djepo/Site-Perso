<?php

/* coUserBundle::layout.html.twig */
class __TwigTemplate_a4a05cd57cf76b7aa892cc86d4c1d403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 29
        echo "            ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        
        ";
        // line 20
        echo "
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 22
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "
        <div>
            ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "        </div>

";
    }

    // line 33
    public function block_commentaires($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "coUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
