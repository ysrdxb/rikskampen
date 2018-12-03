<?php

/* OPC080191_2/template/extension/module/featured.twig */
class __TwigTemplate_85d833f1ebc21b3e3dc2ef598d1206e4fbf7a5c104f20a6a8aa3a34153f02678 extends Twig_Template
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
        echo "<div class=\"box featured\">
\t<div class=\"product_inner content\">
  \t\t<div class=\"box-heading\"><span class=\"heading_inner\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</span></div>
    
  <div class=\"box-content\">
\t\t";
        // line 6
        $context["sliderFor"] = 5;
        // line 7
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
        // line 8
        echo "\t";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            // line 9
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"btn prev\">&nbsp;</a>
\t\t\t<a class=\"btn next\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 14
        echo "\t
\t<div class=\"box-product ";
        // line 15
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "product-carousel";
        } else {
            echo "productbox-grid";
        }
        echo "\" id=\"";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "featured-carousel";
        } else {
            echo "featured-grid";
        }
        echo "\">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
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
            // line 21
            echo $this->getAttribute($context["product"], "href", array());
            echo " \"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo " \" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \" class=\"img-responsive\" />
\t\t\t ";
            // line 22
            if ( !$this->getAttribute($context["product"], "special", array())) {
                echo "        
\t\t\t  ";
            } else {
                // line 23
                echo "   
\t\t\t<span class=\"saleicon sale\">Sale</span>  
           ";
            }
            // line 26
            echo "       \t\t</a>
\t\t\t";
            // line 28
            echo "       \t\t\t\t <div class=\"rating\">
         \t\t\t ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "         \t\t\t ";
                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                    // line 31
                    echo "         \t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
          \t\t     ";
                } else {
                    // line 33
                    echo "          \t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
          \t\t\t ";
                }
                // line 35
                echo "          \t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "       \t\t\t\t </div>
        \t\t";
            // line 38
            echo "\t       
\t\t</div>
\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
            // line 41
            echo $this->getAttribute($context["product"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>
\t\t\t\t";
            // line 43
            echo "\t\t\t\t";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 44
                echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                // line 45
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 46
                    echo "          \t\t\t";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
         \t\t\t";
                } else {
                    // line 48
                    echo "         \t\t\t<span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t        ";
                }
                // line 50
                echo "  \t\t            ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 51
                    echo "\t\t            <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
          \t\t\t";
                }
                // line 53
                echo "\t\t\t        </p>
\t            ";
            }
            // line 54
            echo "\t
\t             <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
            // line 55
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><span class=\"hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>\t\t\t
\t\t\t</div>
      \t<div class=\"product_blockhover\"> \t    
\t\t\t<div class=\"button-group\">
\t\t\t\t<button class=\"wishlist_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 59
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo " \" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
            // line 60
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo " </button>
\t\t\t\t<button class=\"compare_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 61
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo " \" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-area-chart\"></i></button>
\t\t\t</div>
\t  \t</div>
  \t</div>
   </div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</div>
  </div>
</div>
</div>
<span class=\"featured_default_width\" style=\"display:none; visibility:hidden\"></span>
";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 69,  199 => 61,  193 => 60,  187 => 59,  178 => 55,  175 => 54,  171 => 53,  163 => 51,  160 => 50,  152 => 48,  146 => 46,  144 => 45,  141 => 44,  138 => 43,  132 => 41,  127 => 38,  124 => 36,  118 => 35,  114 => 33,  110 => 31,  107 => 30,  103 => 29,  100 => 28,  97 => 26,  92 => 23,  87 => 22,  77 => 21,  65 => 17,  61 => 16,  47 => 15,  44 => 14,  37 => 9,  34 => 8,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="box featured">*/
/* 	<div class="product_inner content">*/
/*   		<div class="box-heading"><span class="heading_inner">{{ heading_title }}</span></div>*/
/*     */
/*   <div class="box-content">*/
/* 		{% set sliderFor = 5 %}*/
/* 		{% set productCount = products|length %}*/
/* 	{% if productCount >= sliderFor %}*/
/* 		<div class="customNavigation">*/
/* 			<a class="btn prev">&nbsp;</a>*/
/* 			<a class="btn next">&nbsp;</a>*/
/* 		</div>	*/
/* 	{% endif %}*/
/* 	*/
/* 	<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %}productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}featured-carousel{% else %}featured-grid{% endif %}">*/
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
/* 				<button class="compare_button" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-area-chart"></i></button>*/
/* 			</div>*/
/* 	  	</div>*/
/*   	</div>*/
/*    </div>*/
/* </div>*/
/*   */
/*  {% endfor %}*/
/* </div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <span class="featured_default_width" style="display:none; visibility:hidden"></span>*/
/* */
