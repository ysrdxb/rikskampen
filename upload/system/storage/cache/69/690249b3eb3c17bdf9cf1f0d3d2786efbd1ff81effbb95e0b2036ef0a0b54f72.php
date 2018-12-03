<?php

/* extension/module/d_admin_menu/d_admin_menu_standart_section.twig */
class __TwigTemplate_93b8a23133bfa754c48da9c0ed00ad55340aa267c981e7273e7e2b83e4157486 extends Twig_Template
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
    <button type=\"button\" id=\"button-collapse-standart\" class=\"btn btn-sm\" >Collapse All</button>
    <button type=\"button\" id=\"button-expand-standart\" class=\"btn btn-sm\">Expand All</button>
  </div>
  <button type=\"button\" id=\"button-restore-standart\" class=\"btn btn-sm btn-success\" >Restore default</button>
</div>

";
        // line 9
        if ( !(isset($context["standart_menu_data"]) ? $context["standart_menu_data"] : null)) {
            // line 10
            echo "<ol class=\"dd-list dd-nodrag\">
</ol>
";
        }
        // line 13
        echo "

";
        // line 15
        if ((isset($context["standart_menu_data"]) ? $context["standart_menu_data"] : null)) {
            // line 16
            echo "<ol class=\"dd-list dd-nodrag\">

      <!-- first level -->
      ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["standart_menu_data"]) ? $context["standart_menu_data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["smd_first_item"]) {
                // line 20
                echo "      <li id=\"dd_";
                echo $this->getAttribute($context["smd_first_item"], "id", array(), "array");
                echo "\" class=\"dd-item dd-nodrag\" data-id=\"";
                echo $this->getAttribute($context["smd_first_item"], "id", array(), "array");
                echo "\">

        <div class=\"dd-handle form-inline\">
          ";
                // line 23
                if (($this->getAttribute($context["smd_first_item"], "icon", array(), "array") == ">>")) {
                    // line 24
                    echo "          <span class=\"item-supericon\">»</span>
          ";
                } else {
                    // line 26
                    echo "          <span class=\"item-supericon fa ";
                    echo $this->getAttribute($context["smd_first_item"], "icon", array(), "array");
                    echo " fa-lg\"></span>
          ";
                }
                // line 28
                echo "          <span class=\"heading-title\">";
                echo $this->getAttribute($context["smd_first_item"], "name", array(), "array");
                echo "</span>
          <span class=\"item-icons dd-nodrag\">
            ";
                // line 30
                if (twig_in_filter("is_visible", twig_get_array_keys_filter($context["smd_first_item"]))) {
                    // line 31
                    echo "            <input type=\"checkbox\" name=\"standart-menu[";
                    echo $this->getAttribute($context["smd_first_item"], "id", array(), "array");
                    echo "][visibility]\" value=\"";
                    echo ((($this->getAttribute($context["smd_first_item"], "is_visible", array(), "array") == 1)) ? (1) : (0));
                    echo "\" data-size=\"mini\" data-label-text=\"Display\" data-bs=\"true\" ";
                    echo ((($this->getAttribute($context["smd_first_item"], "is_visible", array(), "array") == 1)) ? ("checked=\"checked\"") : (""));
                    echo ">
            ";
                }
                // line 33
                echo "          </span>
        </div>


        <!-- second level -->
        ";
                // line 38
                if ($this->getAttribute($context["smd_first_item"], "children", array(), "array")) {
                    // line 39
                    echo "        <ol class=\"dd-list dd-nodrag\">
        ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["smd_first_item"], "children", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["smd_second_item"]) {
                        // line 41
                        echo "
        <li id=\"dd_";
                        // line 42
                        echo $this->getAttribute($context["smd_second_item"], "id", array(), "array");
                        echo "\" class=\"dd-item dd-nodrag\" data-id=\"";
                        echo $this->getAttribute($context["smd_second_item"], "id", array(), "array");
                        echo "\">

          <div class=\"dd-handle form-inline\">
            ";
                        // line 45
                        if (($this->getAttribute($context["smd_second_item"], "icon", array(), "array") == ">>")) {
                            // line 46
                            echo "            <span class=\"item-supericon\">»</span>
            ";
                        } else {
                            // line 48
                            echo "            <span class=\"item-supericon fa ";
                            echo $this->getAttribute($context["smd_second_item"], "icon", array(), "array");
                            echo " fa-lg\"></span>
            ";
                        }
                        // line 50
                        echo "            <span class=\"heading-title\">";
                        echo $this->getAttribute($context["smd_second_item"], "name", array(), "array");
                        echo "</span>
            <span class=\"item-icons dd-nodrag\">
              ";
                        // line 52
                        if (twig_in_filter("is_visible", twig_get_array_keys_filter($context["smd_second_item"]))) {
                            // line 53
                            echo "              <input type=\"checkbox\" name=\"standart-menu[";
                            echo $this->getAttribute($context["smd_second_item"], "id", array(), "array");
                            echo "][visibility]\" value=\"";
                            echo ((($this->getAttribute($context["smd_second_item"], "is_visible", array(), "array") == 1)) ? (1) : (0));
                            echo "\" data-size=\"mini\" data-label-text=\"Display\" data-bs=\"true\" ";
                            echo ((($this->getAttribute($context["smd_second_item"], "is_visible", array(), "array") == 1)) ? ("checked=\"checked\"") : (""));
                            echo ">
              ";
                        }
                        // line 55
                        echo "            </span>
          </div>


          <!-- third level -->
          ";
                        // line 60
                        if ($this->getAttribute($context["smd_second_item"], "children", array(), "array")) {
                            // line 61
                            echo "          <ol class=\"dd-list dd-nodrag\">
          ";
                            // line 62
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["smd_second_item"], "children", array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["smd_third_item"]) {
                                // line 63
                                echo "          <li id=\"dd_";
                                echo $this->getAttribute($context["smd_third_item"], "id", array(), "array");
                                echo "\" class=\"dd-item dd-nodrag\" data-id=\"";
                                echo $this->getAttribute($context["smd_third_item"], "id", array(), "array");
                                echo "\">

            <div class=\"dd-handle form-inline\">
              ";
                                // line 66
                                if (($this->getAttribute($context["smd_third_item"], "icon", array(), "array") == ">>")) {
                                    // line 67
                                    echo "              <span class=\"item-supericon\">»</span>
              ";
                                } else {
                                    // line 69
                                    echo "              <span class=\"item-supericon fa ";
                                    echo $this->getAttribute($context["smd_third_item"], "icon", array(), "array");
                                    echo " fa-lg\"></span>
              ";
                                }
                                // line 71
                                echo "              <span class=\"heading-title\">";
                                echo $this->getAttribute($context["smd_third_item"], "name", array(), "array");
                                echo "</span>
              <span class=\"item-icons dd-nodrag\">
                ";
                                // line 73
                                if (twig_in_filter("is_visible", twig_get_array_keys_filter($context["smd_third_item"]))) {
                                    // line 74
                                    echo "                <input type=\"checkbox\" name=\"standart-menu[";
                                    echo $this->getAttribute($context["smd_third_item"], "id", array(), "array");
                                    echo "][visibility]\" value=\"";
                                    echo ((($this->getAttribute($context["smd_third_item"], "is_visible", array(), "array") == 1)) ? (1) : (0));
                                    echo "\" data-size=\"mini\" data-label-text=\"Display\" data-bs=\"true\" ";
                                    echo ((($this->getAttribute($context["smd_third_item"], "is_visible", array(), "array") == 1)) ? ("checked=\"checked\"") : (""));
                                    echo ">
                ";
                                }
                                // line 76
                                echo "              </span>
            </div>
          </li>
          ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smd_third_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 80
                            echo "          </ol>
          ";
                        }
                        // line 82
                        echo "

        </li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smd_second_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "        </ol>
        ";
                }
                // line 88
                echo "

      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smd_first_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
</ol>
";
        }
    }

    public function getTemplateName()
    {
        return "extension/module/d_admin_menu/d_admin_menu_standart_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 92,  228 => 88,  224 => 86,  215 => 82,  211 => 80,  202 => 76,  192 => 74,  190 => 73,  184 => 71,  178 => 69,  174 => 67,  172 => 66,  163 => 63,  159 => 62,  156 => 61,  154 => 60,  147 => 55,  137 => 53,  135 => 52,  129 => 50,  123 => 48,  119 => 46,  117 => 45,  109 => 42,  106 => 41,  102 => 40,  99 => 39,  97 => 38,  90 => 33,  80 => 31,  78 => 30,  72 => 28,  66 => 26,  62 => 24,  60 => 23,  51 => 20,  47 => 19,  42 => 16,  40 => 15,  36 => 13,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="well well-sm">*/
/*   <div style="float: right;">*/
/*     <button type="button" id="button-collapse-standart" class="btn btn-sm" >Collapse All</button>*/
/*     <button type="button" id="button-expand-standart" class="btn btn-sm">Expand All</button>*/
/*   </div>*/
/*   <button type="button" id="button-restore-standart" class="btn btn-sm btn-success" >Restore default</button>*/
/* </div>*/
/* */
/* {% if (not standart_menu_data) %}*/
/* <ol class="dd-list dd-nodrag">*/
/* </ol>*/
/* {% endif %}*/
/* */
/* */
/* {% if (standart_menu_data) %}*/
/* <ol class="dd-list dd-nodrag">*/
/* */
/*       <!-- first level -->*/
/*       {% for smd_first_item in standart_menu_data %}*/
/*       <li id="dd_{{ smd_first_item['id'] }}" class="dd-item dd-nodrag" data-id="{{ smd_first_item['id'] }}">*/
/* */
/*         <div class="dd-handle form-inline">*/
/*           {% if (smd_first_item['icon'] == '>>') %}*/
/*           <span class="item-supericon">»</span>*/
/*           {% else %}*/
/*           <span class="item-supericon fa {{ smd_first_item['icon'] }} fa-lg"></span>*/
/*           {% endif %}*/
/*           <span class="heading-title">{{ smd_first_item['name'] }}</span>*/
/*           <span class="item-icons dd-nodrag">*/
/*             {% if 'is_visible' in smd_first_item|keys %}*/
/*             <input type="checkbox" name="standart-menu[{{ smd_first_item['id'] }}][visibility]" value="{{ smd_first_item['is_visible'] == 1 ? 1 : 0 }}" data-size="mini" data-label-text="Display" data-bs="true" {{ smd_first_item['is_visible'] == 1 ? 'checked="checked"' : '' }}>*/
/*             {% endif %}*/
/*           </span>*/
/*         </div>*/
/* */
/* */
/*         <!-- second level -->*/
/*         {% if (smd_first_item['children']) %}*/
/*         <ol class="dd-list dd-nodrag">*/
/*         {% for smd_second_item in smd_first_item['children'] %}*/
/* */
/*         <li id="dd_{{ smd_second_item['id'] }}" class="dd-item dd-nodrag" data-id="{{ smd_second_item['id'] }}">*/
/* */
/*           <div class="dd-handle form-inline">*/
/*             {% if (smd_second_item['icon'] == '>>') %}*/
/*             <span class="item-supericon">»</span>*/
/*             {% else %}*/
/*             <span class="item-supericon fa {{ smd_second_item['icon'] }} fa-lg"></span>*/
/*             {% endif %}*/
/*             <span class="heading-title">{{ smd_second_item['name'] }}</span>*/
/*             <span class="item-icons dd-nodrag">*/
/*               {% if 'is_visible' in smd_second_item|keys %}*/
/*               <input type="checkbox" name="standart-menu[{{ smd_second_item['id'] }}][visibility]" value="{{ smd_second_item['is_visible'] == 1 ? 1 : 0 }}" data-size="mini" data-label-text="Display" data-bs="true" {{ smd_second_item['is_visible'] == 1 ? 'checked="checked"' : '' }}>*/
/*               {% endif %}*/
/*             </span>*/
/*           </div>*/
/* */
/* */
/*           <!-- third level -->*/
/*           {% if (smd_second_item['children']) %}*/
/*           <ol class="dd-list dd-nodrag">*/
/*           {% for smd_third_item in smd_second_item['children'] %}*/
/*           <li id="dd_{{ smd_third_item['id'] }}" class="dd-item dd-nodrag" data-id="{{ smd_third_item['id'] }}">*/
/* */
/*             <div class="dd-handle form-inline">*/
/*               {% if (smd_third_item['icon'] == '>>') %}*/
/*               <span class="item-supericon">»</span>*/
/*               {% else %}*/
/*               <span class="item-supericon fa {{ smd_third_item['icon'] }} fa-lg"></span>*/
/*               {% endif %}*/
/*               <span class="heading-title">{{ smd_third_item['name'] }}</span>*/
/*               <span class="item-icons dd-nodrag">*/
/*                 {% if 'is_visible' in smd_third_item|keys %}*/
/*                 <input type="checkbox" name="standart-menu[{{ smd_third_item['id'] }}][visibility]" value="{{ smd_third_item['is_visible'] == 1 ? 1 : 0 }}" data-size="mini" data-label-text="Display" data-bs="true" {{ smd_third_item['is_visible'] == 1 ? 'checked="checked"' : '' }}>*/
/*                 {% endif %}*/
/*               </span>*/
/*             </div>*/
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
