<?php

/* extension/module/d_admin_menu/d_admin_menu.twig */
class __TwigTemplate_b7072a33e7482fe1c8be13618817cebb233f1c820b23ee36406bfdc506b5e86d extends Twig_Template
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
        echo "<link href=\"view/stylesheet/d_admin_menu/d_admin_menu";
        echo (isset($context["style_prefix"]) ? $context["style_prefix"] : null);
        echo ".css\" type=\"text/css\" rel=\"stylesheet\">
<ul id=\"menu2\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "menus", array(), "array"));
        foreach ($context['_seq'] as $context["k"] => $context["menu"]) {
            // line 4
            echo "    <li id=\"\" data-sort=\"";
            echo $context["k"];
            echo "\">
        ";
            // line 5
            if ( !$this->getAttribute($context["menu"], "children", array(), "array")) {
                // line 6
                echo "        <a href=\"";
                if (($this->getAttribute($context["menu"], "href_type", array(), "array") == "direct_link")) {
                    echo $this->getAttribute($context["menu"], "href", array(), "array");
                } else {
                    echo ($this->getAttribute($context["menu"], "href", array(), "array") . (isset($context["token"]) ? $context["token"] : null));
                }
                echo "\"><i class=\"fa ";
                echo $this->getAttribute($context["menu"], "icon", array(), "array");
                echo " fa-fw\"></i>
            <span>";
                // line 7
                echo $this->getAttribute($context["menu"], "name", array(), "array");
                echo "</span></a>
        ";
            } else {
                // line 9
                echo "        <a class=\"parent\"><i class=\"fa ";
                echo $this->getAttribute($context["menu"], "icon", array(), "array");
                echo " fa-fw\"></i>
            <span>";
                // line 10
                echo $this->getAttribute($context["menu"], "name", array(), "array");
                echo "</span></a>
        ";
            }
            // line 12
            echo "        ";
            if ($this->getAttribute($context["menu"], "children", array(), "array")) {
                // line 13
                echo "        <ul ";
                if ((twig_constant("VERSION") >= "3.0.0.0")) {
                    echo "class=\"collapse\"";
                }
                echo ">
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "children", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 15
                    echo "            <li style=\"";
                    echo ((($this->getAttribute($context["children_1"], "is_visible", array(), "array", true, true) && ($this->getAttribute($context["children_1"], "is_visible", array(), "array") == 0))) ? ("display: none;") : (""));
                    echo "\">
                ";
                    // line 16
                    if ( !$this->getAttribute($context["children_1"], "children", array(), "array")) {
                        // line 17
                        echo "                <a href=\"";
                        if (($this->getAttribute($context["children_1"], "href_type", array(), "array") == "direct_link")) {
                            echo $this->getAttribute($context["children_1"], "href", array(), "array");
                        } else {
                            echo ($this->getAttribute($context["children_1"], "href", array(), "array") . (isset($context["token"]) ? $context["token"] : null));
                        }
                        echo "\">";
                        echo $this->getAttribute($context["children_1"], "name", array(), "array");
                        echo "</a>
                ";
                    } else {
                        // line 19
                        echo "                <a class=\"parent\">";
                        echo $this->getAttribute($context["children_1"], "name", array(), "array");
                        echo "</a>
                ";
                    }
                    // line 21
                    echo "                ";
                    if ($this->getAttribute($context["children_1"], "children", array(), "array")) {
                        // line 22
                        echo "                <ul ";
                        if ((twig_constant("VERSION") >= "3.0.0.0")) {
                            echo "class=\"collapse\"";
                        }
                        echo ">
                    ";
                        // line 23
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_1"], "children", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 24
                            echo "                    <li style=\"";
                            echo ((($this->getAttribute($context["children_1"], "is_visible", array(), "array", true, true) && ($this->getAttribute($context["children_2"], "is_visible", array(), "array") == 0))) ? ("display: none;") : (""));
                            echo "\">
                        ";
                            // line 25
                            if ( !$this->getAttribute($context["children_2"], "children", array(), "array")) {
                                // line 26
                                echo "                        <a href=\"";
                                if (($this->getAttribute($context["children_2"], "href_type", array(), "array") == "direct_link")) {
                                    echo $this->getAttribute($context["children_2"], "href", array(), "array");
                                } else {
                                    echo ($this->getAttribute($context["children_2"], "href", array(), "array") . (isset($context["token"]) ? $context["token"] : null));
                                }
                                echo "\">";
                                echo $this->getAttribute($context["children_2"], "name", array(), "array");
                                echo "</a>
                        ";
                            } else {
                                // line 28
                                echo "                        <a class=\"parent\">";
                                echo $this->getAttribute($context["children_2"], "name", array(), "array");
                                echo "</a>
                        ";
                            }
                            // line 30
                            echo "                        ";
                            if ($this->getAttribute($context["children_2"], "children", array(), "array")) {
                                // line 31
                                echo "                        <ul ";
                                if ((twig_constant("VERSION") >= "3.0.0.0")) {
                                    echo "class=\"collapse\"";
                                }
                                echo ">
                            ";
                                // line 32
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_2"], "children", array(), "array"));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 33
                                    echo "                            <li><a href=\"";
                                    if (($this->getAttribute($context["children_3"], "href_type", array(), "array") == "direct_link")) {
                                        echo $this->getAttribute($context["children_3"], "href", array(), "array");
                                    } else {
                                        echo ($this->getAttribute($context["children_3"], "href", array(), "array") . (isset($context["token"]) ? $context["token"] : null));
                                    }
                                    echo "\">";
                                    echo $this->getAttribute($context["children_3"], "name", array(), "array");
                                    echo "</a>
                            </li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 36
                                echo "                        </ul>
                        ";
                            }
                            // line 38
                            echo "                    </li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                </ul>
                ";
                    }
                    // line 42
                    echo "            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "        </ul>
        ";
            }
            // line 46
            echo "    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</ul>
<script src=\"view/javascript/d_admin_menu/d_admin_menu.js\" type=\"text/javascript\"></script>


";
    }

    public function getTemplateName()
    {
        return "extension/module/d_admin_menu/d_admin_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 48,  196 => 46,  192 => 44,  185 => 42,  181 => 40,  174 => 38,  170 => 36,  154 => 33,  150 => 32,  143 => 31,  140 => 30,  134 => 28,  122 => 26,  120 => 25,  115 => 24,  111 => 23,  104 => 22,  101 => 21,  95 => 19,  83 => 17,  81 => 16,  76 => 15,  72 => 14,  65 => 13,  62 => 12,  57 => 10,  52 => 9,  47 => 7,  36 => 6,  34 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <link href="view/stylesheet/d_admin_menu/d_admin_menu{{style_prefix}}.css" type="text/css" rel="stylesheet">*/
/* <ul id="menu2">*/
/*     {% for k,menu in config['menus'] %}*/
/*     <li id="" data-sort="{{ k}}">*/
/*         {% if (not menu['children']) %}*/
/*         <a href="{% if menu['href_type'] == 'direct_link' %}{{ menu['href'] }}{% else %}{{ menu['href'] ~ token }}{% endif %}"><i class="fa {{ menu['icon'] }} fa-fw"></i>*/
/*             <span>{{ menu['name'] }}</span></a>*/
/*         {% else %}*/
/*         <a class="parent"><i class="fa {{ menu['icon'] }} fa-fw"></i>*/
/*             <span>{{ menu['name'] }}</span></a>*/
/*         {% endif %}*/
/*         {% if (menu['children']) %}*/
/*         <ul {% if constant('VERSION') >= '3.0.0.0' %}class="collapse"{% endif %}>*/
/*             {% for children_1 in menu['children'] %}*/
/*             <li style="{{ (children_1['is_visible'] is defined and children_1['is_visible'] == 0) ? 'display: none;' : '' }}">*/
/*                 {% if (not children_1['children']) %}*/
/*                 <a href="{% if children_1['href_type'] == 'direct_link' %}{{ children_1['href'] }}{% else %}{{ children_1['href'] ~ token }}{% endif %}">{{ children_1['name'] }}</a>*/
/*                 {% else %}*/
/*                 <a class="parent">{{ children_1['name'] }}</a>*/
/*                 {% endif %}*/
/*                 {% if (children_1['children']) %}*/
/*                 <ul {% if constant('VERSION') >= '3.0.0.0' %}class="collapse"{% endif %}>*/
/*                     {% for children_2 in children_1['children'] %}*/
/*                     <li style="{{ (children_1['is_visible'] is defined and children_2['is_visible'] == 0) ? 'display: none;' : '' }}">*/
/*                         {% if (not children_2['children']) %}*/
/*                         <a href="{% if children_2['href_type'] == 'direct_link' %}{{ children_2['href'] }}{% else %}{{ children_2['href'] ~ token }}{% endif %}">{{ children_2['name'] }}</a>*/
/*                         {% else %}*/
/*                         <a class="parent">{{ children_2['name'] }}</a>*/
/*                         {% endif %}*/
/*                         {% if (children_2['children']) %}*/
/*                         <ul {% if constant('VERSION') >= '3.0.0.0' %}class="collapse"{% endif %}>*/
/*                             {% for children_3 in children_2['children'] %}*/
/*                             <li><a href="{% if children_3['href_type'] == 'direct_link' %}{{ children_3['href'] }}{% else %}{{ children_3['href'] ~ token }}{% endif %}">{{ children_3['name'] }}</a>*/
/*                             </li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                         {% endif %}*/
/*                     </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*                 {% endif %}*/
/*             </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         {% endif %}*/
/*     </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* <script src="view/javascript/d_admin_menu/d_admin_menu.js" type="text/javascript"></script>*/
/* */
/* */
/* */
