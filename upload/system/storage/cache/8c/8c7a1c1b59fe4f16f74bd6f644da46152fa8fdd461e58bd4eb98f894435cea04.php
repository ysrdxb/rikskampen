<?php

/* OPC080191_2/template/product/category.twig */
class __TwigTemplate_bcd8600cf351d8e16004d4e01b19983df2b0080f234419f049668d8c253859d1 extends Twig_Template
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
<div id=\"product-category\" class=\"container\">
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
        echo "    <div id=\"content\" class=\"";
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
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            echo " 
      <div class=\"row category_thumb\">
        ";
            // line 20
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 21
                echo "        <div class=\"col-sm-2 category_img\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
\t\t
        ";
            }
            // line 24
            echo "        ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 25
                echo "        <div class=\"col-sm-10 category_description\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 27
            echo "      </div>     
      ";
        }
        // line 29
        echo "       ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 30
            echo "      <h3 class=\"refine-search\">";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
      <div class=\"row\">
        <div class=\"col-sm-12 category_list\">
          <ul>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 35
                echo "            <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "          </ul>
        </div>
      </div>
       ";
        }
        // line 41
        echo "\t   
      ";
        // line 42
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 43
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\" data-toggle=\"tooltip\" title=\"";
            // line 46
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" data-toggle=\"tooltip\" title=\"";
            // line 47
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"></button>            
          </div>
        </div>
\t\t<div class=\"compare-total\"><a href=\"";
            // line 50
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\"> ";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
\t\t<div class=\"pagination-right\">
\t\t <div class=\"sort-by-wrapper\">
\t\t\t<div class=\"col-md-2 text-right sort-by\">
\t\t\t  <label class=\"control-label\" for=\"input-sort\">";
            // line 54
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 text-right sort\">
\t\t\t  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
\t\t\t\t";
                // line 59
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 60
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 62
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo " </option>
\t\t\t\t ";
                }
                // line 64
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t </div>
\t\t <div class=\"show-wrapper\">
\t\t\t<div class=\"col-md-1 text-right show\">
\t\t\t  <label class=\"control-label\" for=\"input-limit\">";
            // line 70
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 text-right limit\">
\t\t\t  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 75
                echo "\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 76
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 78
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo " </option>
\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t</div>
      </div>
\t  </div>
\t  
      <div class=\"row category\">
        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
\t\t  \t <div class=\"product-block-inner\">     
          <div class=\"image\">
           <a href=\"";
                // line 93
                echo $this->getAttribute($context["product"], "href", array());
                echo " \"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo " \" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" class=\"img-responsive\" />
             ";
                // line 94
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
             ";
                } else {
                    // line 95
                    echo "   
            <span class=\"saleicon sale\">Sale</span>  
            ";
                }
                // line 98
                echo "          </a>
           ";
                // line 100
                echo "               <div class=\"rating\">
               ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 102
                    echo "               ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 103
                        echo "               <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
                   ";
                    } else {
                        // line 105
                        echo "                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                 ";
                    }
                    // line 107
                    echo "                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "               </div>
            ";
                // line 110
                echo "         
         </div>
        <div class=\"caption\">
            <h4><a href=\"";
                // line 113
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
            ";
                // line 115
                echo "            ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 116
                    echo "                <p class=\"price\">
                ";
                    // line 117
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 118
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
              ";
                    } else {
                        // line 120
                        echo "              <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
              ";
                    }
                    // line 122
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 123
                        echo "                <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                ";
                    }
                    // line 125
                    echo "              </p>
              ";
                }
                // line 126
                echo "       
      </div>
      <div class=\"product_blockhover\">      
        <div class=\"button-group\">
        <button class=\"wishlist_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 130
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                // line 131
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " </button>
        <button class=\"compare_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 132
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
                // line 139
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
        ";
                // line 141
                echo "               <div class=\"rating\">
               ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 143
                    echo "               ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 144
                        echo "               <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
                   ";
                    } else {
                        // line 146
                        echo "                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                 ";
                    }
                    // line 148
                    echo "                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "               </div>
            ";
                // line 151
                echo "         <p class=\"desc\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
        ";
                // line 152
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 153
                    echo "              <p class=\"price\">
                ";
                    // line 154
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 155
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
              ";
                    } else {
                        // line 157
                        echo "              <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
              ";
                    }
                    // line 159
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 160
                        echo "                <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                ";
                    }
                    // line 162
                    echo "              </p>
              ";
                }
                // line 164
                echo "
        <div class=\"button-group\">         
          <button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 166
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " </button>
           <button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 167
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-heart\"></i></button>
         <button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 168
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
            // line 177
            echo "      </div>
       <div class=\"pagination-wrapper\">
\t\t\t<div class=\"col-sm-6 text-left page-link\">";
            // line 179
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right page-result\">";
            // line 180
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
\t   </div>     
      ";
        }
        // line 183
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            echo " 
      <p>";
            // line 184
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 186
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 189
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 190
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 192
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 192,  541 => 190,  536 => 189,  528 => 186,  523 => 184,  518 => 183,  512 => 180,  508 => 179,  504 => 177,  487 => 168,  481 => 167,  475 => 166,  471 => 164,  467 => 162,  459 => 160,  456 => 159,  448 => 157,  442 => 155,  440 => 154,  437 => 153,  435 => 152,  430 => 151,  427 => 149,  421 => 148,  417 => 146,  413 => 144,  410 => 143,  406 => 142,  403 => 141,  397 => 139,  385 => 132,  379 => 131,  373 => 130,  367 => 126,  363 => 125,  355 => 123,  352 => 122,  344 => 120,  338 => 118,  336 => 117,  333 => 116,  330 => 115,  324 => 113,  319 => 110,  316 => 108,  310 => 107,  306 => 105,  302 => 103,  299 => 102,  295 => 101,  292 => 100,  289 => 98,  284 => 95,  279 => 94,  269 => 93,  263 => 89,  259 => 88,  250 => 81,  244 => 80,  236 => 78,  228 => 76,  225 => 75,  221 => 74,  214 => 70,  207 => 65,  201 => 64,  193 => 62,  185 => 60,  183 => 59,  177 => 58,  170 => 54,  161 => 50,  155 => 47,  151 => 46,  146 => 43,  144 => 42,  141 => 41,  135 => 37,  124 => 35,  120 => 34,  112 => 30,  109 => 29,  105 => 27,  99 => 25,  96 => 24,  85 => 21,  83 => 20,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
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
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2 class="page-title">{{ heading_title }}</h2>*/
/*       {% if thumb  or  description %} */
/*       <div class="row category_thumb">*/
/*         {% if thumb %}*/
/*         <div class="col-sm-2 category_img"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/* 		*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-sm-10 category_description">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>     */
/*       {% endif %}*/
/*        {% if categories %}*/
/*       <h3 class="refine-search">{{ text_refine }}</h3>*/
/*       <div class="row">*/
/*         <div class="col-sm-12 category_list">*/
/*           <ul>*/
/*             {% for category in categories %}*/
/*             <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*        {% endif %}*/
/* 	   */
/*       {% if products %}*/
/*       <div class="category_filter">*/
/*         <div class="col-md-4 btn-list-grid">*/
/*           <div class="btn-group">*/
/*             <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="{{ button_grid }}"></button>*/
/*             <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="{{ button_list }}"></button>            */
/*           </div>*/
/*         </div>*/
/* 		<div class="compare-total"><a href="{{ compare }}" id="compare-total"> {{ text_compare }}</a></div>*/
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
/* 	  */
/*       <div class="row category">*/
/*         {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-block product-thumb">*/
/* 		  	 <div class="product-block-inner">     */
/*           <div class="image">*/
/*            <a href="{{ product.href }} "><img src="{{ product.thumb }} " alt="{{ product.name }} " title="{{ product.name }} " class="img-responsive" />*/
/*              {% if not product.special %}        */
/*              {% else %}   */
/*             <span class="saleicon sale">Sale</span>  */
/*             {% endif %}*/
/*           </a>*/
/*            {#{% if product.rating %}#}*/
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
/*          </div>*/
/*         <div class="caption">*/
/*             <h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/*             {# <p class="desc">{{ product.description }}</p> #}*/
/*             {% if product.price %}*/
/*                 <p class="price">*/
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
/*       <div class="product_blockhover">      */
/*         <div class="button-group">*/
/*         <button class="wishlist_button" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" class="cart_button" onclick="cart.add('{{ product.product_id }} ');">{{ button_cart }} </button>*/
/*         <button class="compare_button" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-area-chart"></i></button>*/
/*        </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*         <div class="product-details">*/
/*         <div class="caption">*/
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
/*        <div class="pagination-wrapper">*/
/* 			<div class="col-sm-6 text-left page-link">{{ pagination }}</div>*/
/* 			<div class="col-sm-6 text-right page-result">{{ results }}</div>*/
/* 	   </div>     */
/*       {% endif %}*/
/*       {% if not categories  and  not products %} */
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
