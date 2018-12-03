<?php

/* OPC080191_2/template/common/footer.twig */
class __TwigTemplate_55665c97b1e90863a1dbb9e80f2f55211ef3d46097cb6bb6e12a7952eade43b5 extends Twig_Template
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
  <div id=\"footer\" class=\"container\">
    
      <div class=\"footer_bottom_links\">
        <div class=\"footer_bottom\">
          <div id=\"links\">
            <ul>
              <li class=\"first\"><a href=\"";
        // line 11
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
               ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 13
            echo "              <li><a href=\"";
            echo $this->getAttribute($context["information"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["information"], "title", array());
            echo "</a></li>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                <li><a href=\"";
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 16
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 17
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 18
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
      
            </ul>
          </div>
        </div>       
      </div>      
\t</div>
  <div class=\"footer_lastbottom\"><div class=\"bottom_inner container\"><p>Developed by YSR</p></div></div>
</footer>

";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 29
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        return array (  99 => 31,  90 => 29,  86 => 28,  71 => 18,  65 => 17,  59 => 16,  52 => 15,  41 => 13,  37 => 12,  31 => 11,  19 => 1,);
    }
}
/* </div>*/
/* */
/* */
/* <footer>*/
/*   <div id="footer" class="container">*/
/*     */
/*       <div class="footer_bottom_links">*/
/*         <div class="footer_bottom">*/
/*           <div id="links">*/
/*             <ul>*/
/*               <li class="first"><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                {% for information in informations %}*/
/*               <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*                {% endfor %}*/
/*                 <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*                 <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*                 <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*                 <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*       */
/*             </ul>*/
/*           </div>*/
/*         </div>       */
/*       </div>      */
/* 	</div>*/
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
