<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_0d5bf57369335d15d62014e3d019c513 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getContext($context, "include_jquery")) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tiny_mce/jquery-1.6.1.min.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 4
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tiny_mce/jquery.tinymce.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
//<![CDATA[
(function(\$, undefined) {
    var tinymce_options = ";
        // line 9
        echo $this->getContext($context, "tinymce_config_json");
        echo ",
        textarea = 'textarea";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "textarea_class"), "html", null, true);
        echo "';

    \$(function() {
        \$(textarea).each(function (){
                var \$textarea = \$(this),
                    attr = \$.parseJSON(\$textarea.attr('tinymce')),
                    options = (attr && attr.theme == 'simple') ? tinymce_options.theme.simple : tinymce_options.theme.advanced;

                options.script_url = '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "';

                // workaround for an incompatibility with html5-validation (see: http://git.io/CMKJTw)
                if(\$textarea.is('[required]')) {
                    options.oninit = function(editor) {
                        editor.onChange.add(function(ed, l) { ed.save(); });
                    };
                }

                \$textarea.tinymce(options);
        });
    });
} (jQuery));
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
