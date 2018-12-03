<?php

/* default/template/extension/module/store.twig */
class __TwigTemplate_f4df7281cf22be167487af31adc8398e61f6d976774ecb55cb6e403ee67691dc extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <p style=\"text-align: center;\">";
        // line 3
        echo (isset($context["text_store"]) ? $context["text_store"] : null);
        echo "</p>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 5
            echo "  ";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["store_id"]) ? $context["store_id"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["store"], "url", array());
                echo "\"><b>";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</b></a><br />
  ";
            } else {
                // line 6
                echo "<a href=\"";
                echo $this->getAttribute($context["store"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</a><br />
  ";
            }
            // line 8
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<br />
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/store.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  44 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">{{ heading_title }}</div>*/
/*   <p style="text-align: center;">{{ text_store }}</p>*/
/*   {% for store in stores %}*/
/*   {% if store.store_id == store_id %}<a href="{{ store.url }}"><b>{{ store.name }}</b></a><br />*/
/*   {% else %}<a href="{{ store.url }}">{{ store.name }}</a><br />*/
/*   {% endif %}*/
/*   {% endfor %}<br />*/
/* </div>*/
/* */
