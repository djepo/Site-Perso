<?php

/* comainBundle:Blocks:Commentaires.html.twig */
class __TwigTemplate_f22839377d78400229920fc76c753e89 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "                                <div id=\"disqus_thread\"></div>
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
                                    <noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>";
    }

    public function getTemplateName()
    {
        return "comainBundle:Blocks:Commentaires.html.twig";
    }

}
