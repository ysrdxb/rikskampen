<?php

/* OPC080191_2/template/product/product.twig */
class __TwigTemplate_698ce2f25ec38db8358d53bdd502cf4db77a6a6e3f845d86aeb0105b89729a67 extends Twig_Template
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
  <h2 class=\"product-title\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
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
        // line 8
        echo "  </ul>
  <div class=\"row\">";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6 productpage";
            // line 12
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9 productpage";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "productpage col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\"> ";
        // line 18
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 19
            echo "        ";
            $context["class"] = "col-sm-6 product-left";
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "        ";
            $context["class"] = "col-sm-8 product-left";
            // line 22
            echo "        ";
        }
        // line 23
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> 
          
\t\t<div class=\"product-info\">\t\t
\t\t ";
        // line 26
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 27
            echo "          <div class=\"left product-image thumbnails\">
         ";
            // line 28
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                echo "      
\t  <!-- Megnor Cloud-Zoom Image Effect Start -->
\t  \t<div class=\"image\"><a class=\"thumbnail\" href=\"";
                // line 30
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img id=\"tmzoom\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-zoom-image=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></a></div> 
      ";
            }
            // line 32
            echo "      ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 33
                echo "\t  \t ";
                $context["sliderFor"] = 3;
                // line 34
                echo "\t\t  ";
                $context["imageCount"] = twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null));
                echo " 
\t\t \t
\t\t <div class=\"additional-carousel\">\t
\t\t  ";
                // line 37
                if (((isset($context["imageCount"]) ? $context["imageCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    // line 38
                    echo "\t\t  \t<div class=\"customNavigation\">
\t\t\t\t<span class=\"fa prev fa-arrow-left\">&nbsp;</span>
\t\t\t<span class=\"fa next fa-arrow-right\">&nbsp;</span>
\t\t\t</div> 
\t\t ";
                }
                // line 42
                echo "\t      
\t\t  <div id=\"additional-carousel\" class=\"image-additional ";
                // line 43
                if (((isset($context["imageCount"]) ? $context["imageCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "vertical-carousel";
                }
                echo "\">
    \t    
\t\t\t<div class=\"slider-item\">
\t\t\t\t<div class=\"product-block\">\t\t
\t\t\t\t\t<a href=\"";
                // line 47
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-zoom-image=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" width=\"74\" height=\"74\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></a>
\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t\t
\t\t\t";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 52
                    echo "\t\t\t\t<div class=\"slider-item\">
\t\t\t\t<div class=\"product-block\">\t\t
        \t\t\t<a href=\"";
                    // line 54
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-zoom-image=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" width=\"74\" height=\"74\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" /></a>
\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t\t\t
    \t  </div>
\t\t  <span class=\"additional_default_width\" style=\"display:none; visibility:hidden\"></span>
\t\t  </div>
\t\t";
            }
            // line 61
            echo "\t\t  \t  

\t<!-- Megnor Cloud-Zoom Image Effect End-->
    </div>
    ";
        }
        // line 66
        echo "\t
\t
\t\t\t
        </div>
\t\t  
        </div>
        ";
        // line 72
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 73
            echo "        ";
            $context["class"] = "col-sm-6 product-right";
            // line 74
            echo "        ";
        } else {
            // line 75
            echo "        ";
            $context["class"] = "col-sm-4 product-right";
            // line 76
            echo "        ";
        }
        // line 77
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          
          <h3 class=\"product-title\">";
        // line 79
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>\t

      <div class=\"description\">
        <table class=\"product-description\">
            ";
        // line 83
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 84
            echo "            <tr><td><span class=\"desc\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</span></td><td class=\"description-right\"><a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></td></tr>
            ";
        }
        // line 86
        echo "            <tr><td><span class=\"desc\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo "</span></td><td  class=\"description-right\"> ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</td></tr>
            ";
        // line 87
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 88
            echo "           <tr><td><span class=\"desc\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</span> </td><td class=\"description-right\" >";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</td></tr>
            ";
        }
        // line 90
        echo "           <tr><td><span class=\"desc\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</span> </td><td class=\"description-right\" >";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</td></tr>    
          </table>
      </div>

          ";
        // line 94
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 95
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 96
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 97
                echo "            <li>
              <h4>";
                // line 98
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h4>
            </li>
            ";
            } else {
                // line 101
                echo "            <li class=\"product-price\"><h3 class=\"special-price\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h3><span class=\"old-price\" style=\"text-decoration: line-through;\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li>
            ";
            }
            // line 103
            echo "            ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 104
                echo "            <li class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
            ";
            }
            // line 106
            echo "            ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 107
                echo "            <li class=\"rewardpoint\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 109
            echo "            ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 110
                echo "           
            ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 112
                    echo "            <li class=\"discount\">";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "            ";
            }
            // line 115
            echo "          </ul>
          ";
        }
        // line 117
        echo "          <div id=\"product\">
            <hr>
\t\t   ";
        // line 119
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 120
            echo "            <h3 class=\"product-option\">";
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 122
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 123
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 124
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 125
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 126
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 128
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 129
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 130
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 131
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo "              </select>
            </div>
            ";
                }
                // line 136
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 137
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 138
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 139
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 140
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 142
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 143
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 144
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 145
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 146
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 147
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    echo " </div>
            </div>
            ";
                }
                // line 152
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 153
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 154
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 155
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 156
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 158
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 159
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 160
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 161
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 162
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 163
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 165
                    echo " </div>
            </div>
            ";
                }
                // line 168
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 169
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 170
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 171
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 174
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 175
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 176
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 177
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 180
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 181
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 182
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 183
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 184
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 187
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 188
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 189
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 191
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 197
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 198
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 199
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 201
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 207
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 208
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 209
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 211
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 217
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "            ";
        }
        // line 219
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 220
            echo "            <hr>
            <h3>";
            // line 221
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 224
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 226
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 232
        echo "            <div class=\"form-group qty\">
              <label class=\"control-label qty\" for=\"input-quantity\">";
        // line 233
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 234
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 235
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 236
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>

              <div class=\"btn-group\">
                       <button type=\"button\"  class=\"btn btn-default wishlist\" title=\"";
        // line 239
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-heart\"></i>
                       ";
        // line 240
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</button>
                      <button type=\"button\"  class=\"btn btn-default compare\" title=\"";
        // line 241
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-exchange\"></i>
                      ";
        // line 242
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</button>
              </div>          \t\t
\t\t\t</div>
\t\t\t   ";
        // line 245
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 246
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 248
        echo "
          ";
        // line 249
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 250
            echo "          <div class=\"rating-wrapper\">
            ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 252
                echo "              ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>";
                }
                // line 253
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "<a href=\"\" class=\"review-count\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>  <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\" class=\"write-review\"><i class=\"fa fa-pencil\"></i> ";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
          </div>
          ";
        }
        // line 256
        echo "            
           <hr>
\t\t\t <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 259
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 

          <div class=\"content_product_block\">";
        // line 263
        echo (isset($context["productblock"]) ? $context["productblock"] : null);
        echo " </div>  
\t\t\t</div>
          </div>
\t\t  
\t\t   <!-- product page tab code start-->
\t\t ";
        // line 268
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 269
            echo "         ";
            $context["class"] = "col-sm-6";
            // line 270
            echo "         ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 271
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 272
            echo "         ";
        } else {
            // line 273
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 274
            echo "        ";
        }
        // line 275
        echo "\t  <div id=\"tabs-info\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 277
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
            ";
        // line 278
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 279
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
            ";
        }
        // line 281
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 282
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
            ";
        }
        // line 284
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 286
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 287
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 288
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 290
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 291
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 293
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 297
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 298
                    echo "                <tr>
                  <td>";
                    // line 299
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 300
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 303
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "              </table>
            </div>
            ";
        }
        // line 308
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 309
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h3>";
            // line 312
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h3>
                ";
            // line 313
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 314
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 316
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 317
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 322
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 324
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 329
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 330
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 340
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                </div>
                ";
                // line 342
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 345
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 349
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 351
            echo "              </form>
            </div>
            ";
        }
        // line 353
        echo "</div>
\t\t  </div>
      </div>
\t  
\t 
\t ";
        // line 358
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 359
            echo "\t  <div class=\"box related content\">
      <div class=\"box-heading\"><span class=\"heading_inner\">";
            // line 360
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</span></div>
\t  <div class=\"box-content\">
\t  <div id=\"products-related\" class=\"related-products\">
\t\t\t
\t\t\t";
            // line 364
            $context["sliderFor"] = 5;
            // line 365
            echo "\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
            echo " 
\t\t\t
\t\t\t\t";
            // line 367
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                // line 368
                echo "\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t<a class=\"btn prev\">&nbsp;</a>
\t\t\t\t\t\t<a class=\"btn next\">&nbsp;</a>
\t\t\t\t\t</div>\t
\t\t\t\t";
            }
            // line 373
            echo "\t\t\t\t
\t\t\t\t<div class=\"box-product ";
            // line 374
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "related-carousel";
            } else {
                echo "related-grid";
            }
            echo "\">
      \t\t  ";
            // line 375
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 376
                echo "\t\t\t\t<div class=\"";
                if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t <div class=\"product-block product-thumb transition\">
\t  \t\t\t\t\t<div class=\"product-block-inner\">
\t\t\t\t\t\t\t<div class=\"image\">
      <a href=\"";
                // line 380
                echo $this->getAttribute($context["product"], "href", array());
                echo " \"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo " \" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" class=\"img-responsive\" />
       ";
                // line 381
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
        ";
                } else {
                    // line 382
                    echo "   
      <span class=\"saleicon sale\">Sale</span>  
           ";
                }
                // line 385
                echo "
      </a>
      ";
                // line 388
                echo "               <div class=\"rating\">
               ";
                // line 389
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 390
                    echo "               ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 391
                        echo "               <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
                   ";
                    } else {
                        // line 393
                        echo "                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                 ";
                    }
                    // line 395
                    echo "                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 396
                echo "               </div>
            ";
                // line 398
                echo "      <div class=\"caption\">
            <h4><a href=\"";
                // line 399
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
        ";
                // line 401
                echo "        ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 402
                    echo "              <p class=\"price\">
                ";
                    // line 403
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 404
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
              ";
                    } else {
                        // line 406
                        echo "              <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
              ";
                    }
                    // line 408
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 409
                        echo "                <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                ";
                    }
                    // line 411
                    echo "              </p>
              ";
                }
                // line 412
                echo "      
        
      </div>  
         
    </div>
        <div class=\"product_blockhover\">      
      <div class=\"button-group\">
        <button class=\"wishlist_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 419
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                // line 420
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " </button>
        <button class=\"compare_button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 421
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo " \" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-area-chart\"></i></button>
      </div> 
\t  \t</div>
\t\t\t\t  \t\t<span class=\"related_default_width\" style=\"display:none; visibility:hidden\"></span>
\t\t\t\t\t<!-- Megnor Related Products Start -->\t
\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 430
            echo "\t\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
        ";
        }
        // line 435
        echo "\t\t
        ";
        // line 436
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 437
            echo "        <p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
        ";
            // line 438
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 439
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
        ";
                } else {
                    // line 440
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 441
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 443
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 444
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$.notify({
\t\t\t\t\tmessage: json['success'],
\t\t\t\t\ttarget: '_blank'
\t\t\t\t},{
\t\t\t\t\t// settings
\t\t\t\t\telement: 'body',
\t\t\t\t\tposition: null,
\t\t\t\t\ttype: \"info\",
\t\t\t\t\tallow_dismiss: true,
\t\t\t\t\tnewest_on_top: false,
\t\t\t\t\tplacement: {
\t\t\t\t\t\tfrom: \"top\",
\t\t\t\t\t\talign: \"center\"
\t\t\t\t\t},
\t\t\t\t\toffset: 0,
\t\t\t\t\tspacing: 10,
\t\t\t\t\tz_index: 2031,
\t\t\t\t\tdelay: 5000,
\t\t\t\t\ttimer: 1000,
\t\t\t\t\turl_target: '_blank',
\t\t\t\t\tmouse_over: null,
\t\t\t\t\tanimate: {
\t\t\t\t\t\tenter: 'animated fadeInDown',
\t\t\t\t\t\texit: 'animated fadeOutUp'
\t\t\t\t\t},
\t\t\t\t\tonShow: null,
\t\t\t\t\tonShown: null,
\t\t\t\t\tonClose: null,
\t\t\t\t\tonClosed: null,
\t\t\t\t\ticon_type: 'class',
\t\t\t\t\ttemplate: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&nbsp;&times;</button>' +
\t\t\t\t\t\t'<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
\t\t\t\t\t\t'<div class=\"progress\" data-notify=\"progressbar\">' +
\t\t\t\t\t\t\t'<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t'<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
\t\t\t\t\t'</div>' 
\t\t\t\t});

\t\t\t\t\$('#cart > button').html('<i class=\"fa fa-shopping-cart\"></i><span id=\"cart-total\"> ' + json['total'] + '</span>');

\t\t\t\t//\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 560
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 565
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 571
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 638
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 642
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

//\$(document).ready(function() {
//\t\$('.thumbnails').magnificPopup({
//\t\ttype:'image',
//\t\tdelegate: 'a',
//\t\tgallery: {
//\t\t\tenabled: true
//\t\t}
//\t});
//});


\$(document).ready(function() {
if (\$(window).width() > 767) {
\t\t\$(\"#tmzoom\").elevateZoom({
\t\t\t\t
\t\t\t\tgallery:'additional-carousel',
\t\t\t\t//inner zoom\t\t\t\t 
\t\t\t\t\t\t\t\t 
\t\t\t\tzoomType : \"inner\", 
\t\t\t\tcursor: \"crosshair\" 
\t\t\t\t
\t\t\t\t/*//tint
\t\t\t\t
\t\t\t\ttint:true, 
\t\t\t\ttintColour:'#F90', 
\t\t\t\ttintOpacity:0.5
\t\t\t\t
\t\t\t\t//lens zoom
\t\t\t\t
\t\t\t\tzoomType : \"lens\", 
\t\t\t\tlensShape : \"round\", 
\t\t\t\tlensSize : 200 
\t\t\t\t
\t\t\t\t//Mousewheel zoom
\t\t\t\t
\t\t\t\tscrollZoom : true*/
\t\t\t\t
\t\t\t\t
\t\t\t});
\t\tvar z_index = 0;
     \t\t\t    \t\t
     \t\t\t    \t\t\$(document).on('click', '.thumbnail', function () {
     \t\t\t    \t\t  \$('.thumbnails').magnificPopup('open', z_index);
     \t\t\t    \t\t  return false;
     \t\t\t    \t\t});
\t\t\t    \t\t
     \t\t\t    \t\t\$('.additional-carousel a').click(function() {
     \t\t\t    \t\t\tvar smallImage = \$(this).attr('data-image');
     \t\t\t    \t\t\tvar largeImage = \$(this).attr('data-zoom-image');
     \t\t\t    \t\t\tvar ez =   \$('#tmzoom').data('elevateZoom');\t
     \t\t\t    \t\t\t\$('.thumbnail').attr('href', largeImage);  
     \t\t\t    \t\t\tez.swaptheimage(smallImage, largeImage); 
     \t\t\t    \t\t\tz_index = \$(this).index('.additional-carousel a');
     \t\t\t    \t\t\treturn false;
     \t\t\t    \t\t});
\t\t\t
\t}else{
\t\t\$(document).on('click', '.thumbnail', function () {
\t\t\$('.thumbnails').magnificPopup('open', 0);
\t\treturn false;
\t\t});
\t}
});
\$(document).ready(function() {     
\t\$('.thumbnails').magnificPopup({
\t\tdelegate: 'a.elevatezoom-gallery',
\t\ttype: 'image',
\t\ttLoading: 'Loading image #%curr%...',
\t\tmainClass: 'mfp-with-zoom',
\t\tgallery: {
\t\t\tenabled: true,
\t\t\tnavigateByImgClick: true,
\t\t\tpreload: [0,1] // Will preload 0 - before current, and 1 after the current image
\t\t},
\t\timage: {
\t\t\ttError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
\t\t\ttitleSrc: function(item) {
\t\t\t\treturn item.el.attr('title');
\t\t\t}
\t\t}
\t});
});


//--></script> 
";
        // line 755
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1701 => 755,  1585 => 642,  1578 => 638,  1508 => 571,  1499 => 565,  1491 => 560,  1372 => 444,  1367 => 443,  1358 => 441,  1351 => 440,  1341 => 439,  1337 => 438,  1332 => 437,  1330 => 436,  1327 => 435,  1320 => 430,  1303 => 421,  1297 => 420,  1291 => 419,  1282 => 412,  1278 => 411,  1270 => 409,  1267 => 408,  1259 => 406,  1253 => 404,  1251 => 403,  1248 => 402,  1245 => 401,  1239 => 399,  1236 => 398,  1233 => 396,  1227 => 395,  1223 => 393,  1219 => 391,  1216 => 390,  1212 => 389,  1209 => 388,  1205 => 385,  1200 => 382,  1195 => 381,  1185 => 380,  1173 => 376,  1169 => 375,  1155 => 374,  1152 => 373,  1145 => 368,  1143 => 367,  1137 => 365,  1135 => 364,  1128 => 360,  1125 => 359,  1123 => 358,  1116 => 353,  1111 => 351,  1105 => 349,  1096 => 345,  1090 => 342,  1085 => 340,  1072 => 330,  1068 => 329,  1060 => 324,  1055 => 322,  1047 => 317,  1043 => 316,  1039 => 314,  1037 => 313,  1033 => 312,  1028 => 309,  1025 => 308,  1020 => 305,  1013 => 303,  1004 => 300,  1000 => 299,  997 => 298,  993 => 297,  986 => 293,  982 => 291,  978 => 290,  974 => 288,  972 => 287,  968 => 286,  964 => 284,  958 => 282,  955 => 281,  949 => 279,  947 => 278,  943 => 277,  937 => 275,  934 => 274,  931 => 273,  928 => 272,  925 => 271,  922 => 270,  919 => 269,  917 => 268,  909 => 263,  902 => 259,  897 => 256,  883 => 253,  876 => 252,  872 => 251,  869 => 250,  867 => 249,  864 => 248,  858 => 246,  856 => 245,  850 => 242,  844 => 241,  840 => 240,  834 => 239,  826 => 236,  822 => 235,  818 => 234,  814 => 233,  811 => 232,  805 => 228,  794 => 226,  790 => 225,  786 => 224,  780 => 221,  777 => 220,  774 => 219,  771 => 218,  765 => 217,  752 => 211,  745 => 209,  738 => 208,  735 => 207,  722 => 201,  715 => 199,  708 => 198,  705 => 197,  692 => 191,  685 => 189,  678 => 188,  675 => 187,  667 => 184,  659 => 183,  655 => 182,  648 => 181,  645 => 180,  633 => 177,  627 => 176,  620 => 175,  617 => 174,  605 => 171,  599 => 170,  592 => 169,  589 => 168,  584 => 165,  576 => 163,  569 => 162,  567 => 161,  562 => 160,  546 => 159,  540 => 158,  536 => 156,  530 => 155,  526 => 154,  519 => 153,  516 => 152,  511 => 149,  503 => 147,  496 => 146,  494 => 145,  490 => 144,  472 => 143,  466 => 142,  462 => 140,  456 => 139,  452 => 138,  445 => 137,  442 => 136,  437 => 133,  430 => 131,  423 => 130,  421 => 129,  414 => 128,  410 => 127,  406 => 126,  400 => 125,  394 => 124,  387 => 123,  384 => 122,  380 => 121,  375 => 120,  373 => 119,  369 => 117,  365 => 115,  362 => 114,  351 => 112,  347 => 111,  344 => 110,  341 => 109,  333 => 107,  330 => 106,  322 => 104,  319 => 103,  311 => 101,  305 => 98,  302 => 97,  300 => 96,  297 => 95,  295 => 94,  285 => 90,  277 => 88,  275 => 87,  268 => 86,  258 => 84,  256 => 83,  249 => 79,  243 => 77,  240 => 76,  237 => 75,  234 => 74,  231 => 73,  229 => 72,  221 => 66,  214 => 61,  207 => 57,  185 => 54,  181 => 52,  177 => 51,  158 => 47,  149 => 43,  146 => 42,  139 => 38,  137 => 37,  130 => 34,  127 => 33,  124 => 32,  109 => 30,  104 => 28,  101 => 27,  99 => 26,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  78 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  51 => 10,  47 => 9,  44 => 8,  33 => 6,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <h2 class="product-title">{{ heading_title }}</h2>*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6 productpage' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9 productpage' %}*/
/*     {% else %}*/
/*     {% set class = 'productpage col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row"> {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6 product-left' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-8 product-left' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}"> */
/*           */
/* 		<div class="product-info">		*/
/* 		 {% if thumb or images %}*/
/*           <div class="left product-image thumbnails">*/
/*          {% if thumb %}      */
/* 	  <!-- Megnor Cloud-Zoom Image Effect Start -->*/
/* 	  	<div class="image"><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}"><img id="tmzoom" src="{{ thumb }}" data-zoom-image="{{ popup }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></div> */
/*       {% endif %}*/
/*       {% if images %}*/
/* 	  	 {% set	sliderFor = 3 %}*/
/* 		  {% set imageCount = images|length %} */
/* 		 	*/
/* 		 <div class="additional-carousel">	*/
/* 		  {% if imageCount >= sliderFor %}*/
/* 		  	<div class="customNavigation">*/
/* 				<span class="fa prev fa-arrow-left">&nbsp;</span>*/
/* 			<span class="fa next fa-arrow-right">&nbsp;</span>*/
/* 			</div> */
/* 		 {% endif %}	      */
/* 		  <div id="additional-carousel" class="image-additional {% if imageCount >= sliderFor %}vertical-carousel{% endif %}">*/
/*     	    */
/* 			<div class="slider-item">*/
/* 				<div class="product-block">		*/
/* 					<a href="{{ popup }}" title="{{ heading_title }}" class="elevatezoom-gallery" data-image="{{ thumb }}" data-zoom-image="{{ popup }}"><img src="{{ thumb }}" width="74" height="74" title="{{ heading_title }}" alt="{{ heading_title }}" /></a>*/
/* 				</div>*/
/* 				</div>		*/
/* 				*/
/* 			{% for  image in images %}*/
/* 				<div class="slider-item">*/
/* 				<div class="product-block">		*/
/*         			<a href="{{ image.popup }}" title="{{ heading_title }}" class="elevatezoom-gallery" data-image="{{ image.thumb }}" data-zoom-image="{{ image.popup }}"><img src="{{ image.thumb }}" width="74" height="74" title="{{ heading_title }}" alt="{{ heading_title }}" /></a>*/
/* 				</div>*/
/* 				</div>		*/
/* 	        {% endfor %}				*/
/*     	  </div>*/
/* 		  <span class="additional_default_width" style="display:none; visibility:hidden"></span>*/
/* 		  </div>*/
/* 		{% endif %}		  	  */
/* */
/* 	<!-- Megnor Cloud-Zoom Image Effect End-->*/
/*     </div>*/
/*     {% endif %}*/
/* 	*/
/* 	*/
/* 			*/
/*         </div>*/
/* 		  */
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6 product-right' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-4 product-right' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           */
/*           <h3 class="product-title">{{ heading_title }}</h3>	*/
/* */
/*       <div class="description">*/
/*         <table class="product-description">*/
/*             {% if manufacturer %}*/
/*             <tr><td><span class="desc">{{ text_manufacturer }}</span></td><td class="description-right"><a href="{{ manufacturers }}">{{ manufacturer }}</a></td></tr>*/
/*             {% endif %}*/
/*             <tr><td><span class="desc">{{ text_model }}</span></td><td  class="description-right"> {{ model }}</td></tr>*/
/*             {% if reward %}*/
/*            <tr><td><span class="desc">{{ text_reward }}</span> </td><td class="description-right" >{{ reward }}</td></tr>*/
/*             {% endif %}*/
/*            <tr><td><span class="desc">{{ text_stock }}</span> </td><td class="description-right" >{{ stock }}</td></tr>    */
/*           </table>*/
/*       </div>*/
/* */
/*           {% if price %}*/
/*           <ul class="list-unstyled">*/
/*             {% if not special %}*/
/*             <li>*/
/*               <h4>{{ price }}</h4>*/
/*             </li>*/
/*             {% else %}*/
/*             <li class="product-price"><h3 class="special-price">{{ special }}</h3><span class="old-price" style="text-decoration: line-through;">{{ price }}</span></li>*/
/*             {% endif %}*/
/*             {% if tax %}*/
/*             <li class="price-tax">{{ text_tax }} {{ tax }}</li>*/
/*             {% endif %}*/
/*             {% if points %}*/
/*             <li class="rewardpoint">{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*            */
/*             {% for discount in discounts %}*/
/*             <li class="discount">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           <div id="product">*/
/*             <hr>*/
/* 		   {% if options %}*/
/*             <h3 class="product-option">{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}                  */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="form-group qty">*/
/*               <label class="control-label qty" for="input-quantity">{{ entry_qty }}</label>*/
/*               <input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/* */
/*               <div class="btn-group">*/
/*                        <button type="button"  class="btn btn-default wishlist" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i>*/
/*                        {{ text_wishlist }}</button>*/
/*                       <button type="button"  class="btn btn-default compare" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i>*/
/*                       {{ text_compare }}</button>*/
/*               </div>          		*/
/* 			</div>*/
/* 			   {% if minimum > 1 %}*/
/*             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}*/
/* */
/*           {% if review_status %}*/
/*           <div class="rating-wrapper">*/
/*             {% for i in 1..5 %}*/
/*               {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>{% endif %}*/
/*               {% endfor %}<a href="" class="review-count" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a>  <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" class="write-review"><i class="fa fa-pencil"></i> {{ text_write }}</a>*/
/*           </div>*/
/*           {% endif %}*/
/*             */
/*            <hr>*/
/* 			 <!-- AddThis Button BEGIN -->*/
/*             <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*             <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/*             <!-- AddThis Button END --> */
/* */
/*           <div class="content_product_block">{{ productblock }} </div>  */
/* 			</div>*/
/*           </div>*/
/* 		  */
/* 		   <!-- product page tab code start-->*/
/* 		 {% if column_left and column_right %}*/
/*          {% set class = 'col-sm-6' %}*/
/*          {%  elseif column_left or column_right %}*/
/*          {% set class = 'col-sm-12' %}*/
/*          {% else %}*/
/*          {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/* 	  <div id="tabs-info" class="{{ class }}">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*             {% if attribute_groups %}*/
/*             <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h3>{{ text_write }}</h3>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}</div>*/
/* 		  </div>*/
/*       </div>*/
/* 	  */
/* 	 */
/* 	 {% if products %}*/
/* 	  <div class="box related content">*/
/*       <div class="box-heading"><span class="heading_inner">{{ text_related }}</span></div>*/
/* 	  <div class="box-content">*/
/* 	  <div id="products-related" class="related-products">*/
/* 			*/
/* 			{% set sliderFor = 5 %}*/
/* 			{% set productCount = products|length %} */
/* 			*/
/* 				{% if productCount >= sliderFor %}*/
/* 					<div class="customNavigation">*/
/* 						<a class="btn prev">&nbsp;</a>*/
/* 						<a class="btn next">&nbsp;</a>*/
/* 					</div>	*/
/* 				{% endif %}*/
/* 				*/
/* 				<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %}productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}related-carousel{% else %}related-grid{% endif %}">*/
/*       		  {% for product in products %}*/
/* 				<div class="{% if productCount >= sliderFor %}slider-item{% else %}product-items{% endif %}">*/
/* 					 <div class="product-block product-thumb transition">*/
/* 	  					<div class="product-block-inner">*/
/* 							<div class="image">*/
/*       <a href="{{ product.href }} "><img src="{{ product.thumb }} " alt="{{ product.name }} " title="{{ product.name }} " class="img-responsive" />*/
/*        {% if not product.special %}        */
/*         {% else %}   */
/*       <span class="saleicon sale">Sale</span>  */
/*            {% endif %}*/
/* */
/*       </a>*/
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
/*       <div class="caption">*/
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
/*               {% endif %}      */
/*         */
/*       </div>  */
/*          */
/*     </div>*/
/*         <div class="product_blockhover">      */
/*       <div class="button-group">*/
/*         <button class="wishlist_button" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" class="cart_button" onclick="cart.add('{{ product.product_id }} ');">{{ button_cart }} </button>*/
/*         <button class="compare_button" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-area-chart"></i></button>*/
/*       </div> */
/* 	  	</div>*/
/* 				  		<span class="related_default_width" style="display:none; visibility:hidden"></span>*/
/* 					<!-- Megnor Related Products Start -->	*/
/* 				  </div>*/
/* 				  </div>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 		</div>*/
/* 		</div>*/
/* 		</div>*/
/*         {% endif %}*/
/* 		*/
/*         {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*         {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*         {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*         {% endfor %} </p>*/
/*         {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().before('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.before('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$.notify({*/
/* 					message: json['success'],*/
/* 					target: '_blank'*/
/* 				},{*/
/* 					// settings*/
/* 					element: 'body',*/
/* 					position: null,*/
/* 					type: "info",*/
/* 					allow_dismiss: true,*/
/* 					newest_on_top: false,*/
/* 					placement: {*/
/* 						from: "top",*/
/* 						align: "center"*/
/* 					},*/
/* 					offset: 0,*/
/* 					spacing: 10,*/
/* 					z_index: 2031,*/
/* 					delay: 5000,*/
/* 					timer: 1000,*/
/* 					url_target: '_blank',*/
/* 					mouse_over: null,*/
/* 					animate: {*/
/* 						enter: 'animated fadeInDown',*/
/* 						exit: 'animated fadeOutUp'*/
/* 					},*/
/* 					onShow: null,*/
/* 					onShown: null,*/
/* 					onClose: null,*/
/* 					onClosed: null,*/
/* 					icon_type: 'class',*/
/* 					template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +*/
/* 						'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button>' +*/
/* 						'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +*/
/* 						'<div class="progress" data-notify="progressbar">' +*/
/* 							'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +*/
/* 						'</div>' +*/
/* 						'<a href="{3}" target="{4}" data-notify="url"></a>' +*/
/* 					'</div>' */
/* 				});*/
/* */
/* 				$('#cart > button').html('<i class="fa fa-shopping-cart"></i><span id="cart-total"> ' + json['total'] + '</span>');*/
/* */
/* 				//$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* //$(document).ready(function() {*/
/* //	$('.thumbnails').magnificPopup({*/
/* //		type:'image',*/
/* //		delegate: 'a',*/
/* //		gallery: {*/
/* //			enabled: true*/
/* //		}*/
/* //	});*/
/* //});*/
/* */
/* */
/* $(document).ready(function() {*/
/* if ($(window).width() > 767) {*/
/* 		$("#tmzoom").elevateZoom({*/
/* 				*/
/* 				gallery:'additional-carousel',*/
/* 				//inner zoom				 */
/* 								 */
/* 				zoomType : "inner", */
/* 				cursor: "crosshair" */
/* 				*/
/* 				/*//* /tint*/
/* 				*/
/* 				tint:true, */
/* 				tintColour:'#F90', */
/* 				tintOpacity:0.5*/
/* 				*/
/* 				//lens zoom*/
/* 				*/
/* 				zoomType : "lens", */
/* 				lensShape : "round", */
/* 				lensSize : 200 */
/* 				*/
/* 				//Mousewheel zoom*/
/* 				*/
/* 				scrollZoom : true*//* */
/* 				*/
/* 				*/
/* 			});*/
/* 		var z_index = 0;*/
/*      			    		*/
/*      			    		$(document).on('click', '.thumbnail', function () {*/
/*      			    		  $('.thumbnails').magnificPopup('open', z_index);*/
/*      			    		  return false;*/
/*      			    		});*/
/* 			    		*/
/*      			    		$('.additional-carousel a').click(function() {*/
/*      			    			var smallImage = $(this).attr('data-image');*/
/*      			    			var largeImage = $(this).attr('data-zoom-image');*/
/*      			    			var ez =   $('#tmzoom').data('elevateZoom');	*/
/*      			    			$('.thumbnail').attr('href', largeImage);  */
/*      			    			ez.swaptheimage(smallImage, largeImage); */
/*      			    			z_index = $(this).index('.additional-carousel a');*/
/*      			    			return false;*/
/*      			    		});*/
/* 			*/
/* 	}else{*/
/* 		$(document).on('click', '.thumbnail', function () {*/
/* 		$('.thumbnails').magnificPopup('open', 0);*/
/* 		return false;*/
/* 		});*/
/* 	}*/
/* });*/
/* $(document).ready(function() {     */
/* 	$('.thumbnails').magnificPopup({*/
/* 		delegate: 'a.elevatezoom-gallery',*/
/* 		type: 'image',*/
/* 		tLoading: 'Loading image #%curr%...',*/
/* 		mainClass: 'mfp-with-zoom',*/
/* 		gallery: {*/
/* 			enabled: true,*/
/* 			navigateByImgClick: true,*/
/* 			preload: [0,1] // Will preload 0 - before current, and 1 after the current image*/
/* 		},*/
/* 		image: {*/
/* 			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',*/
/* 			titleSrc: function(item) {*/
/* 				return item.el.attr('title');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* */
/* //--></script> */
/* {{ footer }} */
/* */
