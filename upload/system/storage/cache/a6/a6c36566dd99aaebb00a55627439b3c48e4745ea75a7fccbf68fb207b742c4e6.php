<?php

/* OPC080191_2/template/extension/module/banner.twig */
class __TwigTemplate_0ed5f0ddc4ae0ba3a2063749ca7eb411b926ca150001a11772e1a1ffa6605729 extends Twig_Template
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
        echo "\t";
        $context["sliderForbanner"] = 1;
        // line 2
        echo "\t";
        $context["bannercount"] = twig_length_filter($this->env, (isset($context["banners"]) ? $context["banners"] : null));
        // line 3
        echo "<div class=\"swiper-viewport\">
  <div id=\"banner";
        // line 4
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container ";
        if (((isset($context["bannercount"]) ? $context["bannercount"] : null) > (isset($context["sliderForbanner"]) ? $context["sliderForbanner"] : null))) {
            echo " owl-carousel bannercarousel ";
        } else {
            echo " single-banner ";
        }
        echo "\">
    <div class=\"swiper-wrapper\">
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "      <div class=\"swiper-slide\">";
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
        // line 8
        echo "</div>
\t  <!-- If we need pagination -->
    <div class=\"swiper-pagination\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#banner";
        // line 14
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\teffect: 'fade',
\tautoplay: 2500,
    pagination: '.swiper-pagination',  // If we need pagination
    autoplayDisableOnInteraction: false
});
--></script> ";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  66 => 8,  43 => 7,  39 => 6,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* 	{% set sliderForbanner = 1 %}*/
/* 	{% set	bannercount = banners|length %}*/
/* <div class="swiper-viewport">*/
/*   <div id="banner{{ module }}" class="swiper-container {% if bannercount > sliderForbanner %} owl-carousel bannercarousel {% else %} single-banner {% endif %}">*/
/*     <div class="swiper-wrapper">*/
/* 	{% for banner in banners %}*/
/*       <div class="swiper-slide">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}</div>*/
/* 	  <!-- If we need pagination -->*/
/*     <div class="swiper-pagination"></div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#banner{{ module }}').swiper({*/
/* 	effect: 'fade',*/
/* 	autoplay: 2500,*/
/*     pagination: '.swiper-pagination',  // If we need pagination*/
/*     autoplayDisableOnInteraction: false*/
/* });*/
/* --></script> */
