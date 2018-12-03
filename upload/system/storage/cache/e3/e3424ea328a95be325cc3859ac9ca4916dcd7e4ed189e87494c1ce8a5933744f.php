<?php

/* OPC080191_2/template/product/search.twig */
class __TwigTemplate_b390a4e999190d5baa7288c93068904dea81e5992ddd89cf165e19e6bcd010ec extends Twig_Template
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
<div class=\"container\">
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
      <label class=\"control-label \" for=\"input-search\">";
        // line 18
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 21
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3 sort\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 25
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 27
            echo "            ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 28
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            } else {
                // line 30
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            }
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                echo "            ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 34
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                } else {
                    // line 36
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                }
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 39
                    echo "            ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 40
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    } else {
                        // line 42
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    }
                    // line 44
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
        <div class=\"col-sm-3 search_subcategory\">
          <label class=\"checkbox-inline\">
           ";
        // line 51
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 52
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 54
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 56
        echo "            ";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
        </div>
      </div>
      <p>
          <label class=\"checkbox-inline\">
          ";
        // line 61
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 62
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 64
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 66
        echo "          ";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 68
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
      <h3>";
        // line 69
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h3>
      ";
        // line 70
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 71
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
             <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\" data-toggle=\"tooltip\" title=\"";
            // line 74
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" data-toggle=\"tooltip\" title=\"";
            // line 75
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"></button>
         </div>
        </div>
\t\t<div class=\"compare-total\"><a href=\"";
            // line 78
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
\t\t<div class=\"pagination-right\">
\t\t <div class=\"sort-by-wrapper\">
\t\t\t<div class=\"col-md-2 text-right sort-by\">
\t\t\t  <label class=\"control-label\" for=\"input-sort\">";
            // line 82
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 text-right sort\">
\t\t\t  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
\t\t\t\t";
                // line 87
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 88
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 90
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo " </option>
\t\t\t\t ";
                }
                // line 92
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t </div>
\t\t <div class=\"show-wrapper\">
\t\t\t<div class=\"col-md-1 text-right show\">
\t\t\t  <label class=\"control-label\" for=\"input-limit\">";
            // line 98
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 text-right limit\">
\t\t\t  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 103
                echo "\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 104
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 106
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo " </option>
\t\t\t\t";
                }
                // line 108
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t</div>
      </div>
\t  </div>
      <br />
      <div class=\"row category\">
        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 117
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
         <div class=\"product-block-inner\">      
    <div class=\"image\">
      <a href=\"";
                // line 121
                echo $this->getAttribute($context["product"], "href", array());
                echo " \"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo " \" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" class=\"img-responsive\" />
       ";
                // line 122
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
        ";
                } else {
                    // line 123
                    echo "   
      <span class=\"saleicon sale\">Sale</span>  
           ";
                }
                // line 126
                echo "          </a>
      ";
                // line 128
                echo "               <div class=\"rating\">
               ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 130
                    echo "               ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 131
                        echo "               <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
                   ";
                    } else {
                        // line 133
                        echo "                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                 ";
                    }
                    // line 135
                    echo "                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "               </div>
            ";
                // line 138
                echo "         
    </div>
    <div class=\"caption\">
            <h4><a href=\"";
                // line 141
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
        ";
                // line 143
                echo "        ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 144
                    echo "              <p class=\"price\">
                ";
                    // line 145
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 146
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
              ";
                    } else {
                        // line 148
                        echo "              <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
              ";
                    }
                    // line 150
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 151
                        echo "                <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                ";
                    }
                    // line 153
                    echo "              </p>
              ";
                }
                // line 154
                echo "       
      </div>
        <div class=\"product_blockhover\">      
      <div class=\"button-group\">
        <button class=\"wishlist_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 158
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                // line 159
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " </button>
        <button class=\"compare_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 160
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
                // line 167
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
        ";
                // line 169
                echo "               <div class=\"rating\">
               ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 171
                    echo "               ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 172
                        echo "               <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
                   ";
                    } else {
                        // line 174
                        echo "                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                 ";
                    }
                    // line 176
                    echo "                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "               </div>
            ";
                // line 179
                echo "         <p class=\"desc\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
        ";
                // line 180
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 181
                    echo "              <p class=\"price\">
                ";
                    // line 182
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 183
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
              ";
                    } else {
                        // line 185
                        echo "              <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
              ";
                    }
                    // line 187
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 188
                        echo "                <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                ";
                    }
                    // line 190
                    echo "              </p>
              ";
                }
                // line 192
                echo "
        <div class=\"button-group\">         
          <button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 194
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " </button>
           <button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 195
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-heart\"></i></button>
         <button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 196
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
            // line 205
            echo "      </div>
       <div class=\"pagination-wrapper\">
\t\t\t<div class=\"col-sm-6 text-left page-link\">";
            // line 207
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right page-result\">";
            // line 208
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
\t   </div>  
      ";
        } else {
            // line 211
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 213
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 214
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 216
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';
\t
\tvar search = \$('#content input[name=\\'search\\']').prop('value');
\t
\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');
\t
\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}
\t
\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');
\t
\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}
\t\t
\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');
\t
\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 216,  620 => 214,  615 => 213,  609 => 211,  603 => 208,  599 => 207,  595 => 205,  578 => 196,  572 => 195,  566 => 194,  562 => 192,  558 => 190,  550 => 188,  547 => 187,  539 => 185,  533 => 183,  531 => 182,  528 => 181,  526 => 180,  521 => 179,  518 => 177,  512 => 176,  508 => 174,  504 => 172,  501 => 171,  497 => 170,  494 => 169,  488 => 167,  476 => 160,  470 => 159,  464 => 158,  458 => 154,  454 => 153,  446 => 151,  443 => 150,  435 => 148,  429 => 146,  427 => 145,  424 => 144,  421 => 143,  415 => 141,  410 => 138,  407 => 136,  401 => 135,  397 => 133,  393 => 131,  390 => 130,  386 => 129,  383 => 128,  380 => 126,  375 => 123,  370 => 122,  360 => 121,  354 => 117,  350 => 116,  341 => 109,  335 => 108,  327 => 106,  319 => 104,  316 => 103,  312 => 102,  305 => 98,  298 => 93,  292 => 92,  284 => 90,  276 => 88,  274 => 87,  268 => 86,  261 => 82,  252 => 78,  246 => 75,  242 => 74,  237 => 71,  235 => 70,  231 => 69,  227 => 68,  221 => 66,  217 => 64,  213 => 62,  211 => 61,  202 => 56,  198 => 54,  194 => 52,  192 => 51,  186 => 47,  180 => 46,  174 => 45,  168 => 44,  160 => 42,  152 => 40,  149 => 39,  144 => 38,  136 => 36,  128 => 34,  125 => 33,  120 => 32,  112 => 30,  104 => 28,  101 => 27,  97 => 26,  93 => 25,  84 => 21,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*      {% for breadcrumb in breadcrumbs %}*/
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
/*       <label class="control-label " for="input-search">{{ entry_search }}</label>*/
/*       <div class="row">*/
/*         <div class="col-sm-4">*/
/*           <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" />*/
/*         </div>*/
/*         <div class="col-sm-3 sort">*/
/*           <select name="category_id" class="form-control">*/
/*             <option value="0">{{ text_category }}</option>*/
/*             {% for category_1 in categories %}*/
/*             {% if category_1.category_id == category_id %}*/
/*             <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_2 in category_1.children %}*/
/*             {% if category_2.category_id == category_id %}*/
/*             <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_3 in category_2.children %}*/
/*             {% if category_3.category_id == category_id %}*/
/*             <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*         <div class="col-sm-3 search_subcategory">*/
/*           <label class="checkbox-inline">*/
/*            {% if sub_category %}*/
/*             <input type="checkbox" name="sub_category" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="sub_category" value="1" />*/
/*             {% endif %}*/
/*             {{ text_sub_category }}</label>*/
/*         </div>*/
/*       </div>*/
/*       <p>*/
/*           <label class="checkbox-inline">*/
/*           {% if description %}*/
/*           <input type="checkbox" name="description" value="1" id="description" checked="checked" />*/
/*           {% else %}*/
/*           <input type="checkbox" name="description" value="1" id="description" />*/
/*           {% endif %}*/
/*           {{ entry_description }}</label>*/
/*       </p>*/
/*       <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary" />*/
/*       <h3>{{ text_search }}</h3>*/
/*       {% if products %}*/
/*       <div class="category_filter">*/
/*         <div class="col-md-4 btn-list-grid">*/
/*           <div class="btn-group">*/
/*              <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="{{ button_grid }}"></button>*/
/*             <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="{{ button_list }}"></button>*/
/*          </div>*/
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
/*        <div class="pagination-wrapper">*/
/* 			<div class="col-sm-6 text-left page-link">{{ pagination }}</div>*/
/* 			<div class="col-sm-6 text-right page-result">{{ results }}</div>*/
/* 	   </div>  */
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* <script type="text/javascript"><!--*/
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* 	*/
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* 	*/
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* 	*/
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* 	*/
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* 	*/
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* 		*/
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* 	*/
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* --></script>*/
