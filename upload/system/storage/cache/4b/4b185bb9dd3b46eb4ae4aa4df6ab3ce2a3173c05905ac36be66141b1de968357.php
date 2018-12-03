<?php

/* OPC080191_2/template/extension/module/latest.twig */
class __TwigTemplate_fa33ffb24ccb35b522bd1dfd03d236d3be154123de10e516246078c27a832e11 extends Twig_Template
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
        echo "<div class=\"box latest\">
\t<div class=\"product_inner content\">
  <div class=\"box-heading\"><span class=\"heading_inner\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</span></div>
  <div class=\"box-content\"> 
\t\t";
        // line 5
        $context["sliderFor"] = 5;
        // line 6
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
        // line 7
        echo "\t";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            // line 8
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 13
        echo "\t
\t<div class=\"box-product ";
        // line 14
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "product-carousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "latest-carousel";
        } else {
            echo "latest-grid";
        }
        echo "\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "  <div class=\"";
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t<div class=\"image\">
\t\t\t<a href=\"";
            // line 20
            echo $this->getAttribute($context["product"], "href", array());
            echo " \"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo " \" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \" class=\"img-responsive\" />
\t\t\t ";
            // line 21
            if ( !$this->getAttribute($context["product"], "special", array())) {
                echo "        
\t\t\t  ";
            } else {
                // line 22
                echo "   
\t\t\t<span class=\"saleicon sale\">Sale</span>  
           ";
            }
            // line 25
            echo "       \t\t</a>
\t\t\t";
            // line 27
            echo "       \t\t\t\t <div class=\"rating\">
         \t\t\t ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "         \t\t\t ";
                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                    // line 30
                    echo "         \t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
          \t\t     ";
                } else {
                    // line 32
                    echo "          \t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
          \t\t\t ";
                }
                // line 34
                echo "          \t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "       \t\t\t\t </div>
        \t\t";
            // line 37
            echo "\t       
\t\t</div>
\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
            // line 40
            echo $this->getAttribute($context["product"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>
\t\t\t\t";
            // line 42
            echo "\t\t\t\t";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 43
                echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                // line 44
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 45
                    echo "          \t\t\t";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
         \t\t\t";
                } else {
                    // line 47
                    echo "         \t\t\t<span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t        ";
                }
                // line 49
                echo "  \t\t            ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 50
                    echo "\t\t            <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
          \t\t\t";
                }
                // line 52
                echo "\t\t\t        </p>
\t            ";
            }
            // line 53
            echo "\t
\t             <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
            // line 54
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><span class=\"hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>\t\t\t
\t\t\t</div>
      \t<div class=\"product_blockhover\"> \t    
\t\t\t<div class=\"button-group\">
\t\t\t\t<button class=\"wishlist_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 58
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo " \" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
            // line 59
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo " </button>
\t\t\t\t<button class=\"compare_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 60
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo " \" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t</div>
\t  \t</div>
  \t</div>
\t</div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
  </div>
</div>
</div>
<span class=\"latest_default_width\" style=\"display:none; visibility:hidden\"></span>
";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 68,  198 => 60,  192 => 59,  186 => 58,  177 => 54,  174 => 53,  170 => 52,  162 => 50,  159 => 49,  151 => 47,  145 => 45,  143 => 44,  140 => 43,  137 => 42,  131 => 40,  126 => 37,  123 => 35,  117 => 34,  113 => 32,  109 => 30,  106 => 29,  102 => 28,  99 => 27,  96 => 25,  91 => 22,  86 => 21,  76 => 20,  64 => 16,  60 => 15,  46 => 14,  43 => 13,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="box latest">*/
/* 	<div class="product_inner content">*/
/*   <div class="box-heading"><span class="heading_inner">{{ heading_title }}</span></div>*/
/*   <div class="box-content"> */
/* 		{% set sliderFor = 5 %}*/
/* 		{% set productCount = products|length %}*/
/* 	{% if productCount >= sliderFor %}*/
/* 		<div class="customNavigation">*/
/* 			<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 			<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 		</div>	*/
/* 	{% endif %}*/
/* 	*/
/* 	<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %} productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}latest-carousel{% else %}latest-grid{% endif %}">*/
/*   {% for product in products %}*/
/*   <div class="{% if productCount >= sliderFor %}slider-item{% else %}product-items{% endif %}">*/
/*     <div class="product-block product-thumb transition">*/
/* 	  <div class="product-block-inner">	  	*/
/* 		<div class="image">*/
/* 			<a href="{{ product.href }} "><img src="{{ product.thumb }} " alt="{{ product.name }} " title="{{ product.name }} " class="img-responsive" />*/
/* 			 {% if not product.special %}        */
/* 			  {% else %}   */
/* 			<span class="saleicon sale">Sale</span>  */
/*            {% endif %}*/
/*        		</a>*/
/* 			{#{% if product.rating %}#}*/
/*        				 <div class="rating">*/
/*          			 {% for i in 1..5 %}*/
/*          			 {% if product.rating < i %}*/
/*          			 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>*/
/*           		     {% else %}*/
/*           			 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>*/
/*           			 {% endif %}*/
/*           			 {% endfor %}*/
/*        				 </div>*/
/*         		{#{% endif %}#}*/
/* 	       */
/* 		</div>*/
/* 		<div class="caption">*/
/* 						<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 				{# <p class="desc">{{ product.description }}</p> #}*/
/* 				{% if product.price %}*/
/*         			<p class="price">*/
/*        			    {% if not product.special %}*/
/*           			{{ product.price }}*/
/*          			{% else %}*/
/*          			<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 			        {% endif %}*/
/*   		            {% if product.tax %}*/
/* 		            <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           			{% endif %}*/
/* 			        </p>*/
/* 	            {% endif %}	*/
/* 	             <button type="button" class="cart_button" onclick="cart.add('{{ product.product_id }} ');"><span class="hidden-sm hidden-md">{{ button_cart }}</span></button>			*/
/* 			</div>*/
/*       	<div class="product_blockhover"> 	    */
/* 			<div class="button-group">*/
/* 				<button class="wishlist_button" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/* 				<button type="button" class="cart_button" onclick="cart.add('{{ product.product_id }} ');">{{ button_cart }} </button>*/
/* 				<button class="compare_button" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-exchange"></i></button>*/
/* 			</div>*/
/* 	  	</div>*/
/*   	</div>*/
/* 	</div>*/
/* </div>*/
/*   */
/*  {% endfor %}*/
/* </div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <span class="latest_default_width" style="display:none; visibility:hidden"></span>*/
/* */
