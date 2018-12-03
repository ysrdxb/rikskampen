<?php

/* OPC080191_2/template/common/menu.twig */
class __TwigTemplate_468dc012a8f0f3150390fb347ed7839f2fa5f3b83509f10aaef9096f57714911 extends Twig_Template
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
        echo "<nav class=\"nav-container\" role=\"navigation\">
<div class=\"nav-inner container\">
<!-- ======= Menu Code START ========= -->
";
        // line 4
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 5
            echo "<!-- Opencart 3 level Category Menu-->
<div id=\"menu\" class=\"main-menu\" style=\"display: block;\">
\t<div class=\"navbar-header collapsed\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><span id=\"category\" class=\"visible-xs\">Menu</span>
    </div>

 
      <ul class=\"nav navbar-nav\">
\t  \t<li class=\"top_level\"><a href=\"";
            // line 12
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></li>
    \t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 15
                    echo "\t\t\t<li class=\"top_level dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>

\t\t\t<div class=\"dropdown-menu megamenu column";
                    // line 17
                    echo $this->getAttribute($context["category"], "column", array());
                    echo "\">
      <div class=\"dropdown-inner\">
\t\t\t  ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 20
                        echo "\t\t\t\t<ul class=\"list-unstyled childs_1\">
                ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 22
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories START -->
\t\t\t\t\t";
                            // line 23
                            if ($this->getAttribute($context["child"], "childs", array())) {
                                // line 24
                                echo "\t\t\t\t\t  <li class=\"dropdown\"><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a>

\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t              <div class=\"dropdown-inner\">
\t\t\t              ";
                                // line 28
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["child"], "childs", array()), (twig_length_filter($this->env, $this->getAttribute($context["child"], "childs", array())) / twig_round($this->getAttribute($context["child"], "column", array()), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 29
                                    echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t\t  ";
                                    // line 30
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 31
                                        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                                        echo $this->getAttribute($context["childs_2"], "href", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["childs_2"], "name", array());
                                        echo "</a></li>
\t\t\t\t\t\t\t  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 33
                                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 35
                                echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t  </li>
\t\t\t\t\t";
                            } else {
                                // line 40
                                echo "\t\t\t\t\t  <li><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a></li>
\t\t\t\t\t";
                            }
                            // line 42
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories END -->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "               
              
\t\t\t    </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "            </div>
\t\t\t</div>

\t\t\t</li>
        ";
                } else {
                    // line 53
                    echo "\t\t\t<li class=\"top_level\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
       ";
                }
                // line 55
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "         <li> <a href=\"";
            echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
            echo "\">";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "</a></li> 
  </ul>
  
</div>
";
        }
        // line 61
        echo "

";
        // line 63
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 64
            echo "<!-- Opencart 3 level Category Menu-->
<div id=\"res-menu\" class=\"main-menu nav-container1\">
<div class=\"nav-responsive\"><span>Menu</span><div class=\"expandable\"></div></div>
 
       <ul class=\"main-navigation\">
       
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 71
                echo "                    <li>
                      ";
                // line 72
                if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 73
                    echo "                      <a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"activSub\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo " </a>
                      ";
                } else {
                    // line 75
                    echo "                      <a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
                       ";
                }
                // line 77
                echo "                      ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 78
                    echo "                      <ul class=\"\">
                        ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 80
                        echo "                        <li>
                          ";
                        // line 81
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 82
                            echo "                          <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"activSub\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
                           ";
                        } else {
                            // line 84
                            echo "                          <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
                          ";
                        }
                        // line 86
                        echo "                        </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "                      </ul>
                      ";
                }
                // line 90
                echo "                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
             <li> <a href=\"";
            // line 93
            echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
            echo "\">";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "</a></li>

      </ul> 
</div>
";
        }
        // line 98
        echo "




</div>




</nav>   ";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 98,  270 => 93,  267 => 92,  260 => 90,  256 => 88,  249 => 86,  241 => 84,  233 => 82,  231 => 81,  228 => 80,  224 => 79,  221 => 78,  218 => 77,  210 => 75,  202 => 73,  200 => 72,  197 => 71,  193 => 70,  185 => 64,  183 => 63,  179 => 61,  168 => 56,  162 => 55,  154 => 53,  147 => 48,  138 => 44,  131 => 42,  123 => 40,  116 => 35,  109 => 33,  98 => 31,  94 => 30,  91 => 29,  87 => 28,  77 => 24,  75 => 23,  72 => 22,  68 => 21,  65 => 20,  61 => 19,  56 => 17,  48 => 15,  45 => 14,  41 => 13,  35 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <nav class="nav-container" role="navigation">*/
/* <div class="nav-inner container">*/
/* <!-- ======= Menu Code START ========= -->*/
/* {% if categories %}*/
/* <!-- Opencart 3 level Category Menu-->*/
/* <div id="menu" class="main-menu" style="display: block;">*/
/* 	<div class="navbar-header collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span id="category" class="visible-xs">Menu</span>*/
/*     </div>*/
/* */
/*  */
/*       <ul class="nav navbar-nav">*/
/* 	  	<li class="top_level"><a href="{{ home }}">{{ name }}</a></li>*/
/*     	{% for category in categories %}*/
/*         {% if category.children %}*/
/* 			<li class="top_level dropdown"><a href="{{ category.href }}">{{ category.name }}</a>*/
/* */
/* 			<div class="dropdown-menu megamenu column{{ category.column }}">*/
/*       <div class="dropdown-inner">*/
/* 			  {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/* 				<ul class="list-unstyled childs_1">*/
/*                 {% for child in children %}*/
/* 					<!-- 2 Level Sub Categories START -->*/
/* 					{% if child.childs %}*/
/* 					  <li class="dropdown"><a href="{{ child.href }}">{{ child.name }}</a>*/
/* */
/* 						  <div class="dropdown-menu">*/
/* 			              <div class="dropdown-inner">*/
/* 			              {% for childs_col in child.childs|batch(child.childs|length / child.column|round(1, 'ceil')) %}*/
/* 							<ul class="list-unstyled childs_2">*/
/* 							  {% for childs_2 in childs_col %}*/
/* 								<li><a href="{{ childs_2.href }}">{{ childs_2.name }}</a></li>*/
/* 							  {% endfor %}*/
/* 							</ul>*/
/* 						  {% endfor %}*/
/* 						  </div>*/
/* 						  </div>*/
/* */
/* 					  </li>*/
/* 					{% else %}*/
/* 					  <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/* 					{% endif %}*/
/* 					<!-- 2 Level Sub Categories END -->*/
/*                 {% endfor %}*/
/*                */
/*               */
/* 			    </ul>*/
/*               {% endfor %}*/
/*             </div>*/
/* 			</div>*/
/* */
/* 			</li>*/
/*         {% else %}*/
/* 			<li class="top_level"><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*        {% endif %}*/
/*         {% endfor %}*/
/*          <li> <a href="{{ all_blogs }}">{{ text_blog }}</a></li> */
/*   </ul>*/
/*   */
/* </div>*/
/* {% endif %}*/
/* */
/* */
/* {% if categories %}*/
/* <!-- Opencart 3 level Category Menu-->*/
/* <div id="res-menu" class="main-menu nav-container1">*/
/* <div class="nav-responsive"><span>Menu</span><div class="expandable"></div></div>*/
/*  */
/*        <ul class="main-navigation">*/
/*        */
/*                     {% for category in categories %}*/
/*                     <li>*/
/*                       {% if category.category_id == category_id %}*/
/*                       <a href="{{ category.href }}" class="activSub">{{ category.name }} </a>*/
/*                       {% else %}*/
/*                       <a href="{{ category.href }}">{{ category.name }}</a>*/
/*                        {% endif %}*/
/*                       {% if category.children %}*/
/*                       <ul class="">*/
/*                         {% for child in category.children %}*/
/*                         <li>*/
/*                           {% if child.category_id == child_id %}*/
/*                           <a href="{{ child.href }}" class="activSub">{{ child.name }}</a>*/
/*                            {% else %}*/
/*                           <a href="{{ child.href }}">{{ child.name }}</a>*/
/*                           {% endif %}*/
/*                         </li>*/
/*                         {% endfor %}*/
/*                       </ul>*/
/*                       {% endif %}*/
/*                     </li>*/
/*                     {% endfor %}*/
/* */
/*              <li> <a href="{{ all_blogs }}">{{ text_blog }}</a></li>*/
/* */
/*       </ul> */
/* </div>*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* </nav>   */
