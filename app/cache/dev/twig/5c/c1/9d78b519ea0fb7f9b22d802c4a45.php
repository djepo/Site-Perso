<?php

/* comainBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_5cc19d78b519ea0fb7f9b22d802c4a45 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "A contact enquiry was made by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "enquiry"), "name"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo ".

Reply-To: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "enquiry"), "email"), "html", null, true);
        echo "
Subject: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "enquiry"), "subject"), "html", null, true);
        echo "
Body:
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "enquiry"), "body"), "html", null, true);
        echo "}";
    }

    public function getTemplateName()
    {
        return "comainBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
