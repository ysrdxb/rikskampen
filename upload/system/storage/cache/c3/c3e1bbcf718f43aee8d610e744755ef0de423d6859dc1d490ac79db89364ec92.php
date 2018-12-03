<?php

/* OPC080191_2/template/extension/module/carousel.twig */
class __TwigTemplate_5fb59f41cb2fa92264e2df726bb5d980f56de8915efc773c58e561e5f8ab1a5a extends Twig_Template
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
        echo "<div id=\"carousel-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"banners-slider-carousel\">
  <div class=\"carousel_inner container\">
\t<div class=\"customNavigation\">
\t\t<a class=\"btn prev\">&nbsp;</a>
\t\t<a class=\"btn next\">&nbsp;</a>
\t</div>
  <div class=\"product-carousel\" id=\"module-";
        // line 7
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "-carousel\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 9
            echo "    \t<div class=\"slider-item\">
\t\t<div class=\"product-block\">
\t\t<div class=\"product-block-inner\">
\t\t\t";
            // line 12
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 13
                echo "   <a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" /></a>
    ";
            } else {
                // line 15
                echo "    <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" />
    ";
            }
            // line 17
            echo "\t\t</div></div></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </div>
</div>
</div>
<span class=\"module_default_width\" style=\"display:none; visibility:hidden\"></span>";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  62 => 17,  54 => 15,  44 => 13,  42 => 12,  37 => 9,  33 => 8,  29 => 7,  19 => 1,);
    }
}
/* <div id="carousel-{{ module }}" class="banners-slider-carousel">*/
/*   <div class="carousel_inner container">*/
/* 	<div class="customNavigation">*/
/* 		<a class="btn prev">&nbsp;</a>*/
/* 		<a class="btn next">&nbsp;</a>*/
/* 	</div>*/
/*   <div class="product-carousel" id="module-{{ module }}-carousel">*/
/*     {% for banner in banners %}*/
/*     	<div class="slider-item">*/
/* 		<div class="product-block">*/
/* 		<div class="product-block-inner">*/
/* 			{% if banner.link %}*/
/*    <a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" /></a>*/
/*     {% else %}*/
/*     <img src="{{ banner.image }}" alt="{{ banner.title }}" />*/
/*     {% endif %}*/
/* 		</div></div></div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <span class="module_default_width" style="display:none; visibility:hidden"></span>*/
