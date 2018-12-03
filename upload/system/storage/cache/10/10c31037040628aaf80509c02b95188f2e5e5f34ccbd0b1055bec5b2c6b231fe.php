<?php

/* extension/module/d_admin_menu/d_admin_menu_custom_section.twig */
class __TwigTemplate_9541bbb9034275df33866bca5679d6e2caaf9181340593e3cffbc93f523e7e55 extends Twig_Template
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
        echo "<div class=\"well well-sm\">
  <div style=\"float: right;\">
    <button type=\"button\" id=\"button-collapse-custom\" class=\"btn btn-sm\" >Collapse All</button>
    <button type=\"button\" id=\"button-expand-custom\" class=\"btn btn-sm\">Expand All</button>
  </div>
  <button type=\"button\" id=\"button-add-custom\" class=\"btn btn-sm btn-primary\" ><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Item</button>
  <button type=\"button\" id=\"button-add-custom-route\" class=\"btn btn-sm btn-basic\" ><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 7
        echo (isset($context["button_custom_route_item"]) ? $context["button_custom_route_item"] : null);
        echo "</button>

</div>

";
        // line 11
        if ( !(isset($context["custom_menu_data"]) ? $context["custom_menu_data"] : null)) {
            // line 12
            echo "<ol class=\"dd-list dd-nodrag main-custom-list\">
</ol>
";
        }
        // line 15
        echo "

";
        // line 17
        if ((isset($context["custom_menu_data"]) ? $context["custom_menu_data"] : null)) {
            // line 18
            echo "<ol class=\"dd-list dd-nodrag main-custom-list\">

      <!-- first level -->
      ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["custom_menu_data"]) ? $context["custom_menu_data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cmd_first_item"]) {
                // line 22
                echo "      <li id=\"dd_custom_";
                echo $this->getAttribute($context["cmd_first_item"], "id", array(), "array");
                echo "\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"";
                echo $this->getAttribute($context["cmd_first_item"], "id", array(), "array");
                echo "\">

        <div class=\"dd-handle form-inline\">

          <span class=\"item-icon-picker btn-group\">
            <button type=\"button\" class=\"btn btn-default iconpicker-component\"><i class=\"fa fa-fw fa-heart\"></i></button>
            <button type=\"button\" class=\"icp icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"";
                // line 28
                echo $this->getAttribute($context["cmd_first_item"], "icon", array(), "array");
                echo "\" data-id=\"";
                echo $this->getAttribute($context["cmd_first_item"], "id", array(), "array");
                echo "\" data-toggle=\"dropdown\">
              <span class=\"caret\"></span>
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <span class=\"dropdown-menu\"></span>
            <input type=\"hidden\" name=\"custom-menu[";
                // line 33
                echo $this->getAttribute($context["cmd_first_item"], "id", array(), "array");
                echo "][icon]\" value=\"";
                echo $this->getAttribute($context["cmd_first_item"], "icon", array(), "array");
                echo "\">
          </span>

          <span class=\"item-name\">
            <input type=\"item-name\" name=\"custom-menu[";
                // line 37
                echo $this->getAttribute($context["cmd_first_item"], "id", array(), "array");
                echo "][name]\" value=\"";
                echo $this->getAttribute($context["cmd_first_item"], "name", array(), "array");
                echo "\" class=\"custom-item-name form-control\" placeholder=\"";
                echo $this->getAttribute($context["cmd_first_item"], "name", array(), "array");
                echo "\">
          </span>
          <span class=\"item-link\">

            ";
                // line 41
                if ($this->getAttribute($context["cmd_first_item"], "custom_route", array(), "array")) {
                    // line 42
                    echo "
              <input type=\"hidden\" name=\"custom-menu[";
                    // line 43
                    echo $this->getAttribute($context["cmd_first_item"], "id", array(), "array");
                    echo "][custom_route]\" value=\"1\">
              <input type=\"text\" name=\"custom-menu[";
                    // line 44
                    echo $this->getAttribute($context["cmd_first_item"], "id", array(), "array");
                    echo "][item_link]\" value=\"";
                    echo $this->getAttribute($context["cmd_first_item"], "custom_route", array(), "array");
                    echo "\" class=\"custom-item-link custom_route_input form-control\" placeholder=\"";
                    echo (isset($context["text_custom_route"]) ? $context["text_custom_route"] : null);
                    echo "\" title=\"";
                    echo (isset($context["help_custom_route"]) ? $context["help_custom_route"] : null);
                    echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">

            ";
                } else {
                    // line 47
                    echo "
              <select name=\"custom-menu[";
                    // line 48
                    echo $this->getAttribute($context["cmd_first_item"], "id", array(), "array");
                    echo "][item_link]\" class=\"input-sm custom-item-link\">
                ";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["modules_for_links"]) ? $context["modules_for_links"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["mfl"]) {
                        // line 50
                        echo "                <optgroup label=\"";
                        echo $this->getAttribute($context["mfl"], "text", array(), "array");
                        echo "\">
                ";
                        // line 51
                        if ( !$this->getAttribute($context["mfl"], "extra", array(), "array")) {
                            // line 52
                            echo "                <!-- ? -->
                ";
                        } else {
                            // line 54
                            echo "                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mfl"], "extra", array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["ex_mfl"]) {
                                // line 55
                                echo "                <option ";
                                echo ((twig_in_filter($this->getAttribute($context["ex_mfl"], "edit", array(), "array"), $this->getAttribute($context["cmd_first_item"], "href", array(), "array"))) ? ("selected") : (""));
                                echo " value=\"";
                                echo $this->getAttribute($context["ex_mfl"], "edit", array(), "array");
                                echo "\">";
                                echo $this->getAttribute($context["ex_mfl"], "name", array(), "array");
                                echo "</option>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex_mfl'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 57
                            echo "                ";
                        }
                        // line 58
                        echo "                </optgroup>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mfl'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "              </select>

            ";
                }
                // line 63
                echo "
          </span>
          <span class=\"item-icons-custom dd-nodrag\">
            <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"";
                // line 66
                echo $this->getAttribute($context["cmd_first_item"], "id", array(), "array");
                echo "\"></span>
          </span>
        </div>


        <!-- second level -->
        ";
                // line 72
                if ($this->getAttribute($context["cmd_first_item"], "children", array(), "array")) {
                    // line 73
                    echo "        <ol class=\"dd-list dd-nodrag\">
        ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd_first_item"], "children", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["cmd_second_item"]) {
                        // line 75
                        echo "
        <li id=\"dd_custom_";
                        // line 76
                        echo $this->getAttribute($context["cmd_second_item"], "id", array(), "array");
                        echo "\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"";
                        echo $this->getAttribute($context["cmd_second_item"], "id", array(), "array");
                        echo "\">


          <div class=\"dd-handle form-inline\">

            <span class=\"item-icon-picker btn-group\">
              <button type=\"button\" class=\"btn btn-default iconpicker-component\"><i class=\"fa fa-fw fa-heart\"></i></button>
              <button type=\"button\" class=\"icp icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"";
                        // line 83
                        echo $this->getAttribute($context["cmd_second_item"], "icon", array(), "array");
                        echo "\" data-id=\"";
                        echo $this->getAttribute($context["cmd_second_item"], "id", array(), "array");
                        echo "\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
              </button>
              <span class=\"dropdown-menu\"></span>
              <input type=\"hidden\" name=\"custom-menu[";
                        // line 88
                        echo $this->getAttribute($context["cmd_second_item"], "id", array(), "array");
                        echo "][icon]\" value=\"";
                        echo $this->getAttribute($context["cmd_second_item"], "icon", array(), "array");
                        echo "\">
            </span>

            <span class=\"item-name\">
              <input type=\"item-name\" name=\"custom-menu[";
                        // line 92
                        echo $this->getAttribute($context["cmd_second_item"], "id", array(), "array");
                        echo "][name]\" value=\"";
                        echo $this->getAttribute($context["cmd_second_item"], "name", array(), "array");
                        echo "\" class=\"custom-item-name form-control\" placeholder=\"";
                        echo $this->getAttribute($context["cmd_second_item"], "name", array(), "array");
                        echo "\">
            </span>
            <span class=\"item-link\">

              ";
                        // line 96
                        if ($this->getAttribute($context["cmd_second_item"], "custom_route", array(), "array")) {
                            // line 97
                            echo "
                <input type=\"hidden\" name=\"custom-menu[";
                            // line 98
                            echo $this->getAttribute($context["cmd_second_item"], "id", array(), "array");
                            echo "][custom_route]\" value=\"1\">
                <input type=\"text\" name=\"custom-menu[";
                            // line 99
                            echo $this->getAttribute($context["cmd_second_item"], "id", array(), "array");
                            echo "][item_link]\" value=\"";
                            echo $this->getAttribute($context["cmd_second_item"], "custom_route", array(), "array");
                            echo "\" class=\"custom-item-link\" placeholder=\"";
                            echo (isset($context["text_custom_route"]) ? $context["text_custom_route"] : null);
                            echo "\"  title=\"";
                            echo (isset($context["help_custom_route"]) ? $context["help_custom_route"] : null);
                            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">

              ";
                        } else {
                            // line 102
                            echo "
                <select name=\"custom-menu[";
                            // line 103
                            echo $this->getAttribute($context["cmd_second_item"], "id", array(), "array");
                            echo "][item_link]\" class=\"input-sm custom-item-link\">
                  ";
                            // line 104
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["modules_for_links"]) ? $context["modules_for_links"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["mfl"]) {
                                // line 105
                                echo "                  <optgroup label=\"";
                                echo $this->getAttribute($context["mfl"], "text", array(), "array");
                                echo "\">
                  ";
                                // line 106
                                if ( !$this->getAttribute($context["mfl"], "extra", array(), "array")) {
                                    // line 107
                                    echo "                  <!-- ? -->
                  ";
                                } else {
                                    // line 109
                                    echo "                  ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mfl"], "extra", array(), "array"));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ex_mfl"]) {
                                        // line 110
                                        echo "                  <option ";
                                        echo ((twig_in_filter($this->getAttribute($context["ex_mfl"], "edit", array(), "array"), $this->getAttribute($context["cmd_second_item"], "href", array(), "array"))) ? ("selected") : (""));
                                        echo " value=\"";
                                        echo $this->getAttribute($context["ex_mfl"], "edit", array(), "array");
                                        echo "\">";
                                        echo $this->getAttribute($context["ex_mfl"], "name", array(), "array");
                                        echo "</option>
                  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex_mfl'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 112
                                    echo "                  ";
                                }
                                // line 113
                                echo "                  </optgroup>
                  ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mfl'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 115
                            echo "                </select>

              ";
                        }
                        // line 118
                        echo "
            </span>
            <span class=\"item-icons-custom dd-nodrag\">
              <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"";
                        // line 121
                        echo $this->getAttribute($context["cmd_second_item"], "id", array(), "array");
                        echo "\"></span>
            </span>
          </div>


          <!-- third level -->
          ";
                        // line 127
                        if ($this->getAttribute($context["cmd_second_item"], "children", array(), "array")) {
                            // line 128
                            echo "          <ol class=\"dd-list dd-nodrag\">
          ";
                            // line 129
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd_second_item"], "children", array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["cmd_third_item"]) {
                                // line 130
                                echo "          <li id=\"dd_custom_";
                                echo $this->getAttribute($context["cmd_third_item"], "id", array(), "array");
                                echo "\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"";
                                echo $this->getAttribute($context["cmd_third_item"], "id", array(), "array");
                                echo "\">

            <div class=\"dd-handle form-inline\">

              <span class=\"item-icon-picker btn-group\">
                <button type=\"button\" class=\"btn btn-default iconpicker-component\"><i class=\"fa fa-fw fa-heart\"></i></button>
                <button type=\"button\" class=\"icp icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"";
                                // line 136
                                echo $this->getAttribute($context["cmd_third_item"], "icon", array(), "array");
                                echo "\" data-id=\"";
                                echo $this->getAttribute($context["cmd_third_item"], "id", array(), "array");
                                echo "\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                  <span class=\"sr-only\">Toggle Dropdown</span>
                </button>
                <span class=\"dropdown-menu\"></span>
                <input type=\"hidden\" name=\"custom-menu[";
                                // line 141
                                echo $this->getAttribute($context["cmd_third_item"], "id", array(), "array");
                                echo "][icon]\" value=\"";
                                echo $this->getAttribute($context["cmd_third_item"], "icon", array(), "array");
                                echo "\">
              </span>

              <span class=\"item-name\">
                <input type=\"item-name\" name=\"custom-menu[";
                                // line 145
                                echo $this->getAttribute($context["cmd_third_item"], "id", array(), "array");
                                echo "][name]\" value=\"";
                                echo $this->getAttribute($context["cmd_third_item"], "name", array(), "array");
                                echo "\" class=\"custom-item-name form-control\" placeholder=\"";
                                echo $this->getAttribute($context["cmd_third_item"], "name", array(), "array");
                                echo "\">
              </span>
              <span class=\"item-link\">

                ";
                                // line 149
                                if ($this->getAttribute($context["cmd_third_item"], "custom_route", array(), "array")) {
                                    // line 150
                                    echo "
                  <input type=\"hidden\" name=\"custom-menu[";
                                    // line 151
                                    echo $this->getAttribute($context["cmd_third_item"], "id", array(), "array");
                                    echo "][custom_route]\" value=\"1\">
                  <input type=\"text\" name=\"custom-menu[";
                                    // line 152
                                    echo $this->getAttribute($context["cmd_third_item"], "id", array(), "array");
                                    echo "][item_link]\" value=\"";
                                    echo $this->getAttribute($context["cmd_third_item"], "custom_route", array(), "array");
                                    echo "\" class=\"custom-item-link\" placeholder=\"";
                                    echo (isset($context["text_custom_route"]) ? $context["text_custom_route"] : null);
                                    echo "\"  title=\"";
                                    echo (isset($context["help_custom_route"]) ? $context["help_custom_route"] : null);
                                    echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">

                ";
                                } else {
                                    // line 155
                                    echo "
                  <select name=\"custom-menu[";
                                    // line 156
                                    echo $this->getAttribute($context["cmd_third_item"], "id", array(), "array");
                                    echo "][item_link]\" class=\"input-sm custom-item-link\">
                    ";
                                    // line 157
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["modules_for_links"]) ? $context["modules_for_links"] : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["mfl"]) {
                                        // line 158
                                        echo "                    <optgroup label=\"";
                                        echo $this->getAttribute($context["mfl"], "text", array(), "array");
                                        echo "\">
                    ";
                                        // line 159
                                        if ( !$this->getAttribute($context["mfl"], "extra", array(), "array")) {
                                            // line 160
                                            echo "                    <!-- ? -->
                    ";
                                        } else {
                                            // line 162
                                            echo "                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mfl"], "extra", array(), "array"));
                                            foreach ($context['_seq'] as $context["_key"] => $context["ex_mfl"]) {
                                                // line 163
                                                echo "                    <option ";
                                                echo ((twig_in_filter($this->getAttribute($context["ex_mfl"], "edit", array(), "array"), $this->getAttribute($context["cmd_third_item"], "href", array(), "array"))) ? ("selected") : (""));
                                                echo " value=\"";
                                                echo $this->getAttribute($context["ex_mfl"], "edit", array(), "array");
                                                echo "\">";
                                                echo $this->getAttribute($context["ex_mfl"], "name", array(), "array");
                                                echo "</option>
                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex_mfl'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 165
                                            echo "                    ";
                                        }
                                        // line 166
                                        echo "                    </optgroup>
                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mfl'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 168
                                    echo "                  </select>

                ";
                                }
                                // line 171
                                echo "
              </span>
              <span class=\"item-icons-custom dd-nodrag\">
                <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"";
                                // line 174
                                echo $this->getAttribute($context["cmd_third_item"], "id", array(), "array");
                                echo "\"></span>
              </span>
            </div>

          </li>
          ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd_third_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 180
                            echo "          </ol>
          ";
                        }
                        // line 182
                        echo "

        </li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd_second_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 186
                    echo "        </ol>
        ";
                }
                // line 188
                echo "

      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd_first_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "
</ol>
";
        }
        // line 195
        echo "
<template id=\"new_custom_item\">
  <li id=\"dd_custom_%%new_custom_id%%\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"%%new_custom_id%%\">

      <div class=\"dd-handle form-inline\">
          <span class=\"item-icon-picker btn-group\">
            <button type=\"button\" class=\"btn btn-default iconpicker-component\"><i class=\"fa fa-fw fa-flask\"></i></button>
            <button type=\"button\" class=\"icp icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"fa-flask\" data-id=\"%%new_custom_id%%\" data-toggle=\"dropdown\">
              <span class=\"caret\"></span>
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <span class=\"dropdown-menu\"></span>
            <input type=\"hidden\" name=\"custom-menu[%%new_custom_id%%][icon]\" value=\"fa-flask\">
          </span>

        <span class=\"item-name\">
          <input type=\"item-name\" name=\"custom-menu[%%new_custom_id%%][name]\" value=\"Shopunity\" class=\"custom-item-name form-control\" placeholder=\"";
        // line 211
        echo (isset($context["text_phd_item_name"]) ? $context["text_phd_item_name"] : null);
        echo "\">
        </span>

        <span class=\"item-link\">
          <select name=\"custom-menu[%%new_custom_id%%][item_link]\" class=\"input-sm custom-item-link\">
            ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules_for_links"]) ? $context["modules_for_links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mfl"]) {
            // line 217
            echo "            <optgroup label=\"";
            echo $this->getAttribute($context["mfl"], "text", array(), "array");
            echo "\">
            ";
            // line 218
            if ( !$this->getAttribute($context["mfl"], "extra", array(), "array")) {
                // line 219
                echo "            <!-- ? -->
            ";
            } else {
                // line 221
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mfl"], "extra", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["ex_mfl"]) {
                    // line 222
                    echo "            <option ";
                    echo ((($this->getAttribute($context["ex_mfl"], "edit", array(), "array") == "extension/module/d_shopunity")) ? ("selected") : (""));
                    echo " value=\"";
                    echo $this->getAttribute($context["ex_mfl"], "edit", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["ex_mfl"], "name", array(), "array");
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex_mfl'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "            ";
            }
            // line 225
            echo "            </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mfl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "          </select>
        </span>

        <span class=\"item-icons-custom dd-nodrag\">
          <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"%%new_custom_id%%\" aria-hidden=\"true\"></span>
        </span>
      </div>
  </li>
</template>

<template id=\"new_custom_route_item\">
  <li id=\"dd_custom_%%new_custom_id%%\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"%%new_custom_id%%\">

      <div class=\"dd-handle form-inline\">
          <span class=\"item-icon-picker btn-group\">
            <button type=\"button\" class=\"btn btn-default iconpicker-component\"><i class=\"fa fa-fw fa-flask\"></i></button>
            <button type=\"button\" class=\"icp icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"fa-flask\" data-id=\"%%new_custom_id%%\" data-toggle=\"dropdown\">
              <span class=\"caret\"></span>
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <span class=\"dropdown-menu\"></span>
            <input type=\"hidden\" name=\"custom-menu[%%new_custom_id%%][icon]\" value=\"fa-flask\">
          </span>

        <span class=\"item-name\">
          <input type=\"item-name\" name=\"custom-menu[%%new_custom_id%%][name]\" value=\"Shopunity\" class=\"custom-item-name form-control\" placeholder=\"";
        // line 252
        echo (isset($context["text_phd_item_name"]) ? $context["text_phd_item_name"] : null);
        echo "\">
        </span>

        <span class=\"item-link\">
          <input type=\"hidden\" name=\"custom-menu[%%new_custom_id%%][custom_route]\" value=\"1\">
          <input type=\"text\" name=\"custom-menu[%%new_custom_id%%][item_link]\" value=\"\" class=\"custom-item-link\" placeholder=\"";
        // line 257
        echo (isset($context["text_custom_route"]) ? $context["text_custom_route"] : null);
        echo "\"  title=\"";
        echo (isset($context["help_custom_route"]) ? $context["help_custom_route"] : null);
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">
        </span>

        <span class=\"item-icons-custom dd-nodrag\">
          <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"%%new_custom_id%%\" aria-hidden=\"true\"></span>
        </span>
      </div>
  </li>
</template>

";
    }

    public function getTemplateName()
    {
        return "extension/module/d_admin_menu/d_admin_menu_custom_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 257,  603 => 252,  576 => 227,  569 => 225,  566 => 224,  553 => 222,  548 => 221,  544 => 219,  542 => 218,  537 => 217,  533 => 216,  525 => 211,  507 => 195,  502 => 192,  493 => 188,  489 => 186,  480 => 182,  476 => 180,  464 => 174,  459 => 171,  454 => 168,  447 => 166,  444 => 165,  431 => 163,  426 => 162,  422 => 160,  420 => 159,  415 => 158,  411 => 157,  407 => 156,  404 => 155,  392 => 152,  388 => 151,  385 => 150,  383 => 149,  372 => 145,  363 => 141,  353 => 136,  341 => 130,  337 => 129,  334 => 128,  332 => 127,  323 => 121,  318 => 118,  313 => 115,  306 => 113,  303 => 112,  290 => 110,  285 => 109,  281 => 107,  279 => 106,  274 => 105,  270 => 104,  266 => 103,  263 => 102,  251 => 99,  247 => 98,  244 => 97,  242 => 96,  231 => 92,  222 => 88,  212 => 83,  200 => 76,  197 => 75,  193 => 74,  190 => 73,  188 => 72,  179 => 66,  174 => 63,  169 => 60,  162 => 58,  159 => 57,  146 => 55,  141 => 54,  137 => 52,  135 => 51,  130 => 50,  126 => 49,  122 => 48,  119 => 47,  107 => 44,  103 => 43,  100 => 42,  98 => 41,  87 => 37,  78 => 33,  68 => 28,  56 => 22,  52 => 21,  47 => 18,  45 => 17,  41 => 15,  36 => 12,  34 => 11,  27 => 7,  19 => 1,);
    }
}
/* <div class="well well-sm">*/
/*   <div style="float: right;">*/
/*     <button type="button" id="button-collapse-custom" class="btn btn-sm" >Collapse All</button>*/
/*     <button type="button" id="button-expand-custom" class="btn btn-sm">Expand All</button>*/
/*   </div>*/
/*   <button type="button" id="button-add-custom" class="btn btn-sm btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> Item</button>*/
/*   <button type="button" id="button-add-custom-route" class="btn btn-sm btn-basic" ><i class="fa fa-plus" aria-hidden="true"></i> {{ button_custom_route_item }}</button>*/
/* */
/* </div>*/
/* */
/* {% if (not custom_menu_data) %}*/
/* <ol class="dd-list dd-nodrag main-custom-list">*/
/* </ol>*/
/* {% endif %}*/
/* */
/* */
/* {% if (custom_menu_data) %}*/
/* <ol class="dd-list dd-nodrag main-custom-list">*/
/* */
/*       <!-- first level -->*/
/*       {% for cmd_first_item in custom_menu_data %}*/
/*       <li id="dd_custom_{{ cmd_first_item['id'] }}" class="dd-item dd-nodrag custom-menu-item" data-id="{{ cmd_first_item['id'] }}">*/
/* */
/*         <div class="dd-handle form-inline">*/
/* */
/*           <span class="item-icon-picker btn-group">*/
/*             <button type="button" class="btn btn-default iconpicker-component"><i class="fa fa-fw fa-heart"></i></button>*/
/*             <button type="button" class="icp icp-dd btn dropdown-toggle supericon-yep" data-selected="{{ cmd_first_item['icon'] }}" data-id="{{ cmd_first_item['id'] }}" data-toggle="dropdown">*/
/*               <span class="caret"></span>*/
/*               <span class="sr-only">Toggle Dropdown</span>*/
/*             </button>*/
/*             <span class="dropdown-menu"></span>*/
/*             <input type="hidden" name="custom-menu[{{ cmd_first_item['id'] }}][icon]" value="{{ cmd_first_item['icon'] }}">*/
/*           </span>*/
/* */
/*           <span class="item-name">*/
/*             <input type="item-name" name="custom-menu[{{ cmd_first_item['id'] }}][name]" value="{{ cmd_first_item['name'] }}" class="custom-item-name form-control" placeholder="{{ cmd_first_item['name'] }}">*/
/*           </span>*/
/*           <span class="item-link">*/
/* */
/*             {% if cmd_first_item['custom_route'] %}*/
/* */
/*               <input type="hidden" name="custom-menu[{{ cmd_first_item['id'] }}][custom_route]" value="1">*/
/*               <input type="text" name="custom-menu[{{ cmd_first_item['id'] }}][item_link]" value="{{ cmd_first_item['custom_route'] }}" class="custom-item-link custom_route_input form-control" placeholder="{{ text_custom_route }}" title="{{ help_custom_route }}" data-toggle="tooltip" data-placement="bottom">*/
/* */
/*             {% else %}*/
/* */
/*               <select name="custom-menu[{{ cmd_first_item['id'] }}][item_link]" class="input-sm custom-item-link">*/
/*                 {% for mfl in modules_for_links %}*/
/*                 <optgroup label="{{ mfl['text'] }}">*/
/*                 {% if (not mfl['extra']) %}*/
/*                 <!-- ? -->*/
/*                 {% else %}*/
/*                 {% for ex_mfl in mfl['extra'] %}*/
/*                 <option {{ ex_mfl['edit'] in cmd_first_item['href'] ? 'selected' : '' }} value="{{ ex_mfl['edit'] }}">{{ ex_mfl['name'] }}</option>*/
/*                 {% endfor %}*/
/*                 {% endif %}*/
/*                 </optgroup>*/
/*                 {% endfor %}*/
/*               </select>*/
/* */
/*             {% endif %}*/
/* */
/*           </span>*/
/*           <span class="item-icons-custom dd-nodrag">*/
/*             <span class="fa fa-times fa-lg custom-removebtn" style="color: red;" data-del-id="{{ cmd_first_item['id'] }}"></span>*/
/*           </span>*/
/*         </div>*/
/* */
/* */
/*         <!-- second level -->*/
/*         {% if (cmd_first_item['children']) %}*/
/*         <ol class="dd-list dd-nodrag">*/
/*         {% for cmd_second_item in cmd_first_item['children'] %}*/
/* */
/*         <li id="dd_custom_{{ cmd_second_item['id'] }}" class="dd-item dd-nodrag custom-menu-item" data-id="{{ cmd_second_item['id'] }}">*/
/* */
/* */
/*           <div class="dd-handle form-inline">*/
/* */
/*             <span class="item-icon-picker btn-group">*/
/*               <button type="button" class="btn btn-default iconpicker-component"><i class="fa fa-fw fa-heart"></i></button>*/
/*               <button type="button" class="icp icp-dd btn dropdown-toggle supericon-yep" data-selected="{{ cmd_second_item['icon'] }}" data-id="{{ cmd_second_item['id'] }}" data-toggle="dropdown">*/
/*                 <span class="caret"></span>*/
/*                 <span class="sr-only">Toggle Dropdown</span>*/
/*               </button>*/
/*               <span class="dropdown-menu"></span>*/
/*               <input type="hidden" name="custom-menu[{{ cmd_second_item['id'] }}][icon]" value="{{ cmd_second_item['icon'] }}">*/
/*             </span>*/
/* */
/*             <span class="item-name">*/
/*               <input type="item-name" name="custom-menu[{{ cmd_second_item['id'] }}][name]" value="{{ cmd_second_item['name'] }}" class="custom-item-name form-control" placeholder="{{ cmd_second_item['name'] }}">*/
/*             </span>*/
/*             <span class="item-link">*/
/* */
/*               {% if cmd_second_item['custom_route'] %}*/
/* */
/*                 <input type="hidden" name="custom-menu[{{ cmd_second_item['id'] }}][custom_route]" value="1">*/
/*                 <input type="text" name="custom-menu[{{ cmd_second_item['id'] }}][item_link]" value="{{ cmd_second_item['custom_route'] }}" class="custom-item-link" placeholder="{{ text_custom_route }}"  title="{{ help_custom_route }}" data-toggle="tooltip" data-placement="bottom">*/
/* */
/*               {% else %}*/
/* */
/*                 <select name="custom-menu[{{ cmd_second_item['id'] }}][item_link]" class="input-sm custom-item-link">*/
/*                   {% for mfl in modules_for_links %}*/
/*                   <optgroup label="{{ mfl['text'] }}">*/
/*                   {% if (not mfl['extra']) %}*/
/*                   <!-- ? -->*/
/*                   {% else %}*/
/*                   {% for ex_mfl in mfl['extra'] %}*/
/*                   <option {{ ex_mfl['edit'] in cmd_second_item['href'] ? 'selected' : '' }} value="{{ ex_mfl['edit'] }}">{{ ex_mfl['name'] }}</option>*/
/*                   {% endfor %}*/
/*                   {% endif %}*/
/*                   </optgroup>*/
/*                   {% endfor %}*/
/*                 </select>*/
/* */
/*               {% endif %}*/
/* */
/*             </span>*/
/*             <span class="item-icons-custom dd-nodrag">*/
/*               <span class="fa fa-times fa-lg custom-removebtn" style="color: red;" data-del-id="{{ cmd_second_item['id'] }}"></span>*/
/*             </span>*/
/*           </div>*/
/* */
/* */
/*           <!-- third level -->*/
/*           {% if (cmd_second_item['children']) %}*/
/*           <ol class="dd-list dd-nodrag">*/
/*           {% for cmd_third_item in cmd_second_item['children'] %}*/
/*           <li id="dd_custom_{{ cmd_third_item['id'] }}" class="dd-item dd-nodrag custom-menu-item" data-id="{{ cmd_third_item['id'] }}">*/
/* */
/*             <div class="dd-handle form-inline">*/
/* */
/*               <span class="item-icon-picker btn-group">*/
/*                 <button type="button" class="btn btn-default iconpicker-component"><i class="fa fa-fw fa-heart"></i></button>*/
/*                 <button type="button" class="icp icp-dd btn dropdown-toggle supericon-yep" data-selected="{{ cmd_third_item['icon'] }}" data-id="{{ cmd_third_item['id'] }}" data-toggle="dropdown">*/
/*                   <span class="caret"></span>*/
/*                   <span class="sr-only">Toggle Dropdown</span>*/
/*                 </button>*/
/*                 <span class="dropdown-menu"></span>*/
/*                 <input type="hidden" name="custom-menu[{{ cmd_third_item['id'] }}][icon]" value="{{ cmd_third_item['icon'] }}">*/
/*               </span>*/
/* */
/*               <span class="item-name">*/
/*                 <input type="item-name" name="custom-menu[{{ cmd_third_item['id'] }}][name]" value="{{ cmd_third_item['name'] }}" class="custom-item-name form-control" placeholder="{{ cmd_third_item['name'] }}">*/
/*               </span>*/
/*               <span class="item-link">*/
/* */
/*                 {% if cmd_third_item['custom_route'] %}*/
/* */
/*                   <input type="hidden" name="custom-menu[{{ cmd_third_item['id'] }}][custom_route]" value="1">*/
/*                   <input type="text" name="custom-menu[{{ cmd_third_item['id'] }}][item_link]" value="{{ cmd_third_item['custom_route'] }}" class="custom-item-link" placeholder="{{ text_custom_route }}"  title="{{ help_custom_route }}" data-toggle="tooltip" data-placement="bottom">*/
/* */
/*                 {% else %}*/
/* */
/*                   <select name="custom-menu[{{ cmd_third_item['id'] }}][item_link]" class="input-sm custom-item-link">*/
/*                     {% for mfl in modules_for_links %}*/
/*                     <optgroup label="{{ mfl['text'] }}">*/
/*                     {% if (not mfl['extra']) %}*/
/*                     <!-- ? -->*/
/*                     {% else %}*/
/*                     {% for ex_mfl in mfl['extra'] %}*/
/*                     <option {{ ex_mfl['edit'] in cmd_third_item['href'] ? 'selected' : '' }} value="{{ ex_mfl['edit'] }}">{{ ex_mfl['name'] }}</option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                     </optgroup>*/
/*                     {% endfor %}*/
/*                   </select>*/
/* */
/*                 {% endif %}*/
/* */
/*               </span>*/
/*               <span class="item-icons-custom dd-nodrag">*/
/*                 <span class="fa fa-times fa-lg custom-removebtn" style="color: red;" data-del-id="{{ cmd_third_item['id'] }}"></span>*/
/*               </span>*/
/*             </div>*/
/* */
/*           </li>*/
/*           {% endfor %}*/
/*           </ol>*/
/*           {% endif %}*/
/* */
/* */
/*         </li>*/
/*         {% endfor %}*/
/*         </ol>*/
/*         {% endif %}*/
/* */
/* */
/*       </li>*/
/*       {% endfor %}*/
/* */
/* </ol>*/
/* {% endif %}*/
/* */
/* <template id="new_custom_item">*/
/*   <li id="dd_custom_%%new_custom_id%%" class="dd-item dd-nodrag custom-menu-item" data-id="%%new_custom_id%%">*/
/* */
/*       <div class="dd-handle form-inline">*/
/*           <span class="item-icon-picker btn-group">*/
/*             <button type="button" class="btn btn-default iconpicker-component"><i class="fa fa-fw fa-flask"></i></button>*/
/*             <button type="button" class="icp icp-dd btn dropdown-toggle supericon-yep" data-selected="fa-flask" data-id="%%new_custom_id%%" data-toggle="dropdown">*/
/*               <span class="caret"></span>*/
/*               <span class="sr-only">Toggle Dropdown</span>*/
/*             </button>*/
/*             <span class="dropdown-menu"></span>*/
/*             <input type="hidden" name="custom-menu[%%new_custom_id%%][icon]" value="fa-flask">*/
/*           </span>*/
/* */
/*         <span class="item-name">*/
/*           <input type="item-name" name="custom-menu[%%new_custom_id%%][name]" value="Shopunity" class="custom-item-name form-control" placeholder="{{ text_phd_item_name }}">*/
/*         </span>*/
/* */
/*         <span class="item-link">*/
/*           <select name="custom-menu[%%new_custom_id%%][item_link]" class="input-sm custom-item-link">*/
/*             {% for mfl in modules_for_links %}*/
/*             <optgroup label="{{ mfl['text'] }}">*/
/*             {% if (not mfl['extra']) %}*/
/*             <!-- ? -->*/
/*             {% else %}*/
/*             {% for ex_mfl in mfl['extra'] %}*/
/*             <option {{ (ex_mfl['edit'] == 'extension/module/d_shopunity') ? 'selected' : '' }} value="{{ ex_mfl['edit'] }}">{{ ex_mfl['name'] }}</option>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             </optgroup>*/
/*             {% endfor %}*/
/*           </select>*/
/*         </span>*/
/* */
/*         <span class="item-icons-custom dd-nodrag">*/
/*           <span class="fa fa-times fa-lg custom-removebtn" style="color: red;" data-del-id="%%new_custom_id%%" aria-hidden="true"></span>*/
/*         </span>*/
/*       </div>*/
/*   </li>*/
/* </template>*/
/* */
/* <template id="new_custom_route_item">*/
/*   <li id="dd_custom_%%new_custom_id%%" class="dd-item dd-nodrag custom-menu-item" data-id="%%new_custom_id%%">*/
/* */
/*       <div class="dd-handle form-inline">*/
/*           <span class="item-icon-picker btn-group">*/
/*             <button type="button" class="btn btn-default iconpicker-component"><i class="fa fa-fw fa-flask"></i></button>*/
/*             <button type="button" class="icp icp-dd btn dropdown-toggle supericon-yep" data-selected="fa-flask" data-id="%%new_custom_id%%" data-toggle="dropdown">*/
/*               <span class="caret"></span>*/
/*               <span class="sr-only">Toggle Dropdown</span>*/
/*             </button>*/
/*             <span class="dropdown-menu"></span>*/
/*             <input type="hidden" name="custom-menu[%%new_custom_id%%][icon]" value="fa-flask">*/
/*           </span>*/
/* */
/*         <span class="item-name">*/
/*           <input type="item-name" name="custom-menu[%%new_custom_id%%][name]" value="Shopunity" class="custom-item-name form-control" placeholder="{{ text_phd_item_name }}">*/
/*         </span>*/
/* */
/*         <span class="item-link">*/
/*           <input type="hidden" name="custom-menu[%%new_custom_id%%][custom_route]" value="1">*/
/*           <input type="text" name="custom-menu[%%new_custom_id%%][item_link]" value="" class="custom-item-link" placeholder="{{ text_custom_route }}"  title="{{ help_custom_route }}" data-toggle="tooltip" data-placement="bottom">*/
/*         </span>*/
/* */
/*         <span class="item-icons-custom dd-nodrag">*/
/*           <span class="fa fa-times fa-lg custom-removebtn" style="color: red;" data-del-id="%%new_custom_id%%" aria-hidden="true"></span>*/
/*         </span>*/
/*       </div>*/
/*   </li>*/
/* </template>*/
/* */
/* */
