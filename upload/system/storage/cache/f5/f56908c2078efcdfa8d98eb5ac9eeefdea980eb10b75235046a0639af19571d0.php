<?php

/* OPC080191_2/template/common/footer.twig */
class __TwigTemplate_03e4d1601707142f950cc2371be71291553e08e4862f9e2eb2075f362e4c38bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "</div>


<footer>
  <div class=\"footer_lastbottom\"><div class=\"bottom_inner container\"><p>Developed by YSR</p></div></div>
</footer>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 9
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--> 
<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body></html>
";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* </div>*/
/* */
/* */
/* <footer>*/
/*   <div class="footer_lastbottom"><div class="bottom_inner container"><p>Developed by YSR</p></div></div>*/
/* </footer>*/
/* */
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //--> */
/* <!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->*/
/* </body></html>*/
/* */
