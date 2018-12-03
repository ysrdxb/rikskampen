<?php

/* OPC080191_2/template/extension/module/slideshow.twig */
class __TwigTemplate_1b7dea11012c758f635fbe21548d2e7fe75193ceabe0127fb5b680ecee0df18c extends Twig_Template
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
        echo "<div class=\"main-slider\">

  <div id=\"slideshow";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"owl-carousel\" style=\"opacity: 1;\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"item\">";
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </div>
</div>
<script type=\"text/javascript\">
\$('#slideshow";
        // line 10
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').owlCarousel({
  items: 3,
  autoPlay: 5000,
  singleItem: true,
  navigation: true,
  navigationText: ['<i class=\"fa fa-arrow-left\"></i><div class=\"left-wrap\"></div>', '<i class=\"fa fa-arrow-right\"></i><div class=\"right-wrap\"></div>'],
  pagination: true,
  transitionStyle: 'fade'
});
</script>

<script type=\"text/javascript\">
  // Can also be used with \$(document).ready()
  \$(window).load(function() {   
    \$(\"#spinner\").fadeOut(\"slow\");
  }); 
</script>";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="main-slider">*/
/* */
/*   <div id="slideshow{{ module }}" class="owl-carousel" style="opacity: 1;">*/
/*     {% for banner in banners %}*/
/*       <div class="item">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %} */
/*   </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* $('#slideshow{{ module }}').owlCarousel({*/
/*   items: 3,*/
/*   autoPlay: 5000,*/
/*   singleItem: true,*/
/*   navigation: true,*/
/*   navigationText: ['<i class="fa fa-arrow-left"></i><div class="left-wrap"></div>', '<i class="fa fa-arrow-right"></i><div class="right-wrap"></div>'],*/
/*   pagination: true,*/
/*   transitionStyle: 'fade'*/
/* });*/
/* </script>*/
/* */
/* <script type="text/javascript">*/
/*   // Can also be used with $(document).ready()*/
/*   $(window).load(function() {   */
/*     $("#spinner").fadeOut("slow");*/
/*   }); */
/* </script>*/
