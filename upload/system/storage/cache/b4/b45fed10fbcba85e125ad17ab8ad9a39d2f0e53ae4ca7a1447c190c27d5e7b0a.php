<?php

/* OPC080191_2/template/product/manufacturer_info.twig */
class __TwigTemplate_e95497f3abcde013f4eec9956c9f64971efe5e9969d594ebd80e1dde253f547a extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"product-manufacturer\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\"class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2 class=\"page-title\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      ";
        // line 18
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 19
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\" data-toggle=\"tooltip\" title=\"";
            // line 22
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" data-toggle=\"tooltip\" title=\"";
            // line 23
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"></button>
          </div>
        </div>
\t\t<div class=\"compare-total\"><a href=\"";
            // line 26
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
\t\t<div class=\"pagination-right\">
\t\t <div class=\"sort-by-wrapper\">
\t\t\t<div class=\"col-md-2 text-right sort-by\">
\t\t\t  <label class=\"control-label\" for=\"input-sort\">";
            // line 30
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 text-right sort\">
\t\t\t  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
\t\t\t\t";
                // line 35
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 36
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo " </option>
\t\t\t\t ";
                }
                // line 40
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t </div>
\t\t <div class=\"show-wrapper\">
\t\t\t<div class=\"col-md-1 text-right show\">
\t\t\t  <label class=\"control-label\" for=\"input-limit\">";
            // line 46
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 text-right limit\">
\t\t\t  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 51
                echo "\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 52
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 54
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo " </option>
\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t</div>
      </div>
\t  </div>
      <br />
      <div class=\"row category\">
        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 65
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
         <div class=\"product-block-inner\">      
    <div class=\"image\">
      <a href=\"";
                // line 69
                echo $this->getAttribute($context["product"], "href", array());
                echo " \"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo " \" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" class=\"img-responsive\" />
       ";
                // line 70
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
        ";
                } else {
                    // line 71
                    echo "   
      <span class=\"saleicon sale\">Sale</span>  
           ";
                }
                // line 74
                echo "          </a>
      ";
                // line 76
                echo "               <div class=\"rating\">
               ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 78
                    echo "               ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 79
                        echo "               <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
                   ";
                    } else {
                        // line 81
                        echo "                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                 ";
                    }
                    // line 83
                    echo "                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "               </div>
            ";
                // line 86
                echo "         
    </div>
    <div class=\"caption\">
            <h4><a href=\"";
                // line 89
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
        ";
                // line 91
                echo "        ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 92
                    echo "              <p class=\"price\">
                ";
                    // line 93
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 94
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
              ";
                    } else {
                        // line 96
                        echo "              <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
              ";
                    }
                    // line 98
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 99
                        echo "                <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                ";
                    }
                    // line 101
                    echo "              </p>
              ";
                }
                // line 102
                echo "       
      </div>
        <div class=\"product_blockhover\">      
      <div class=\"button-group\">
        <button class=\"wishlist_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 106
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                // line 107
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " </button>
        <button class=\"compare_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 108
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo " \" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-area-chart\"></i></button>
      </div>
      </div>
    </div>

        <div class=\"product-details\">
      <div class=\"caption\">
        <h4><a href=\"";
                // line 115
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
        ";
                // line 117
                echo "               <div class=\"rating\">
               ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 119
                    echo "               ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 120
                        echo "               <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
                   ";
                    } else {
                        // line 122
                        echo "                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                 ";
                    }
                    // line 124
                    echo "                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "               </div>
            ";
                // line 127
                echo "         <p class=\"desc\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
        ";
                // line 128
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 129
                    echo "              <p class=\"price\">
                ";
                    // line 130
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 131
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
              ";
                    } else {
                        // line 133
                        echo "              <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
              ";
                    }
                    // line 135
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 136
                        echo "                <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                ";
                    }
                    // line 138
                    echo "              </p>
              ";
                }
                // line 140
                echo "
        <div class=\"button-group\">         
          <button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 142
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " </button>
           <button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 143
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-heart\"></i></button>
         <button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 144
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo " \" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-area-chart\"></i></button>
       </div>
      </div>    
      
      </div>

        </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "      </div>
      <div class=\"pagination-wrapper\">
\t\t\t<div class=\"col-sm-6 text-left page-link\">";
            // line 155
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right page-result\">";
            // line 156
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
\t   </div> 
      ";
        } else {
            // line 159
            echo "      <p><?php echo \$text_empty; ?></p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"<?php echo \$continue; ?>\" class=\"btn btn-primary\"><?php echo \$button_continue; ?></a></div>
      </div>
      ";
        }
        // line 164
        echo "     ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 165
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 167
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 167,  464 => 165,  459 => 164,  452 => 159,  446 => 156,  442 => 155,  438 => 153,  421 => 144,  415 => 143,  409 => 142,  405 => 140,  401 => 138,  393 => 136,  390 => 135,  382 => 133,  376 => 131,  374 => 130,  371 => 129,  369 => 128,  364 => 127,  361 => 125,  355 => 124,  351 => 122,  347 => 120,  344 => 119,  340 => 118,  337 => 117,  331 => 115,  319 => 108,  313 => 107,  307 => 106,  301 => 102,  297 => 101,  289 => 99,  286 => 98,  278 => 96,  272 => 94,  270 => 93,  267 => 92,  264 => 91,  258 => 89,  253 => 86,  250 => 84,  244 => 83,  240 => 81,  236 => 79,  233 => 78,  229 => 77,  226 => 76,  223 => 74,  218 => 71,  213 => 70,  203 => 69,  197 => 65,  193 => 64,  184 => 57,  178 => 56,  170 => 54,  162 => 52,  159 => 51,  155 => 50,  148 => 46,  141 => 41,  135 => 40,  127 => 38,  119 => 36,  117 => 35,  111 => 34,  104 => 30,  95 => 26,  89 => 23,  85 => 22,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-manufacturer" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content"class="{{ class }}">{{ content_top }}*/
/*       <h2 class="page-title">{{ heading_title }}</h2>*/
/*       {% if products %}*/
/*       <div class="category_filter">*/
/*         <div class="col-md-4 btn-list-grid">*/
/*           <div class="btn-group">*/
/*             <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="{{ button_grid }}"></button>*/
/*             <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="{{ button_list }}"></button>*/
/*           </div>*/
/*         </div>*/
/* 		<div class="compare-total"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/* 		<div class="pagination-right">*/
/* 		 <div class="sort-by-wrapper">*/
/* 			<div class="col-md-2 text-right sort-by">*/
/* 			  <label class="control-label" for="input-sort">{{ text_sort }}</label>*/
/* 			</div>*/
/* 			<div class="col-md-3 text-right sort">*/
/* 			  <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 				{% for sorts in sorts %} */
/* 				{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 				<option value="{{ sorts.href }} " selected="selected">{{ sorts.text }}</option>*/
/* 				{% else %}*/
/* 				<option value="{{ sorts.href }} ">{{ sorts.text }} </option>*/
/* 				 {% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		 </div>*/
/* 		 <div class="show-wrapper">*/
/* 			<div class="col-md-1 text-right show">*/
/* 			  <label class="control-label" for="input-limit">{{ text_limit }}</label>*/
/* 			</div>*/
/* 			<div class="col-md-2 text-right limit">*/
/* 			  <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 				{% for limits in limits %}*/
/* 				{% if limits.value == limit %}*/
/* 				<option value="{{ limits.href }} " selected="selected">{{ limits.text }}</option>*/
/* 				{% else %}*/
/* 				<option value="{{ limits.href }} ">{{ limits.text }} </option>*/
/* 				{% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		</div>*/
/*       </div>*/
/* 	  </div>*/
/*       <br />*/
/*       <div class="row category">*/
/*         {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-block product-thumb">*/
/*          <div class="product-block-inner">      */
/*     <div class="image">*/
/*       <a href="{{ product.href }} "><img src="{{ product.thumb }} " alt="{{ product.name }} " title="{{ product.name }} " class="img-responsive" />*/
/*        {% if not product.special %}        */
/*         {% else %}   */
/*       <span class="saleicon sale">Sale</span>  */
/*            {% endif %}*/
/*           </a>*/
/*       {#{% if product.rating %}#}*/
/*                <div class="rating">*/
/*                {% for i in 1..5 %}*/
/*                {% if product.rating < i %}*/
/*                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>*/
/*                    {% else %}*/
/*                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>*/
/*                  {% endif %}*/
/*                  {% endfor %}*/
/*                </div>*/
/*             {#{% endif %}#}*/
/*          */
/*     </div>*/
/*     <div class="caption">*/
/*             <h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/*         {# <p class="desc">{{ product.description }}</p> #}*/
/*         {% if product.price %}*/
/*               <p class="price">*/
/*                 {% if not product.special %}*/
/*                 {{ product.price }}*/
/*               {% else %}*/
/*               <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*               {% endif %}*/
/*                   {% if product.tax %}*/
/*                 <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                 {% endif %}*/
/*               </p>*/
/*               {% endif %}       */
/*       </div>*/
/*         <div class="product_blockhover">      */
/*       <div class="button-group">*/
/*         <button class="wishlist_button" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" class="cart_button" onclick="cart.add('{{ product.product_id }} ');">{{ button_cart }} </button>*/
/*         <button class="compare_button" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-area-chart"></i></button>*/
/*       </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*         <div class="product-details">*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/*         {#{% if product.rating %}#}*/
/*                <div class="rating">*/
/*                {% for i in 1..5 %}*/
/*                {% if product.rating < i %}*/
/*                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>*/
/*                    {% else %}*/
/*                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>*/
/*                  {% endif %}*/
/*                  {% endfor %}*/
/*                </div>*/
/*             {#{% endif %}#}*/
/*          <p class="desc">{{ product.description }}</p>*/
/*         {% if product.price %}*/
/*               <p class="price">*/
/*                 {% if not product.special %}*/
/*                 {{ product.price }}*/
/*               {% else %}*/
/*               <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*               {% endif %}*/
/*                   {% if product.tax %}*/
/*                 <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                 {% endif %}*/
/*               </p>*/
/*               {% endif %}*/
/* */
/*         <div class="button-group">         */
/*           <button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }} ');">{{ button_cart }} </button>*/
/*            <button class="wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/*          <button class="compare" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-area-chart"></i></button>*/
/*        </div>*/
/*       </div>    */
/*       */
/*       </div>*/
/* */
/*         </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       <div class="pagination-wrapper">*/
/* 			<div class="col-sm-6 text-left page-link">{{ pagination }}</div>*/
/* 			<div class="col-sm-6 text-right page-result">{{ results }}</div>*/
/* 	   </div> */
/*       {% else %}*/
/*       <p><?php echo $text_empty; ?></p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*      {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
