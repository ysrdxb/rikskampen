<?php

/* OPC080191_2/template/extension/module/category.twig */
class __TwigTemplate_a3ac33664edb27c4e0cd22077cfbaca6e7c05277b37b4425c13d52086e2a97ff extends Twig_Template
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
        echo "<div class=\"box category\">
  <div class=\"box-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"box-content\">
    <ul class=\"box-category treeview-list treeview\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "      <li>
        ";
            // line 7
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 8
                echo "        <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"active\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo " </a>
        ";
            } else {
                // line 10
                echo "        <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
         ";
            }
            // line 12
            echo "        ";
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 13
                echo "        <ul>
          ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 15
                    echo "          <li>
            ";
                    // line 16
                    if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                        // line 17
                        echo "            <a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\" class=\"active\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a>
             ";
                    } else {
                        // line 19
                        echo "            <a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a>
            ";
                    }
                    // line 21
                    echo "          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        </ul>
        ";
            }
            // line 25
            echo "      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ul>\t
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  95 => 25,  91 => 23,  84 => 21,  76 => 19,  68 => 17,  66 => 16,  63 => 15,  59 => 14,  56 => 13,  53 => 12,  45 => 10,  37 => 8,  35 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="box category">*/
/*   <div class="box-heading">{{ heading_title }}</div>*/
/*   <div class="box-content">*/
/*     <ul class="box-category treeview-list treeview">*/
/*       {% for category in categories %}*/
/*       <li>*/
/*         {% if category.category_id == category_id %}*/
/*         <a href="{{ category.href }}" class="active">{{ category.name }} </a>*/
/*         {% else %}*/
/*         <a href="{{ category.href }}">{{ category.name }}</a>*/
/*          {% endif %}*/
/*         {% if category.children %}*/
/*         <ul>*/
/*           {% for child in category.children %}*/
/*           <li>*/
/*             {% if child.category_id == child_id %}*/
/*             <a href="{{ child.href }}" class="active">{{ child.name }}</a>*/
/*              {% else %}*/
/*             <a href="{{ child.href }}">{{ child.name }}</a>*/
/*             {% endif %}*/
/*           </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         {% endif %}*/
/*       </li>*/
/*       {% endfor %}*/
/*     </ul>	*/
/*   </div>*/
/* </div>*/
/* */
