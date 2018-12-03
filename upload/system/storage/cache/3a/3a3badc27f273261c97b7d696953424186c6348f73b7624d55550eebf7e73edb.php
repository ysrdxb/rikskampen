<?php

/* OPC080191_2/template/common/search.twig */
class __TwigTemplate_08be4a0936498edfd19fba30027d7f93a64f84056be7daa5c01a4a6b5926ce3e extends Twig_Template
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
        echo "<div class=\"search\"></div>
\t\t<div id=\"search\" class=\"input-group searchtoggle\" style=\"display: none;\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 3
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
  <span class=\"input-group-btn\">
      <button type=\"button\" class=\"btn btn-default btn-lg\">
      \t<span class=\"button-search\"></span>
      </button>
      </span>
  </div>


";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div class="search"></div>*/
/* 		<div id="search" class="input-group searchtoggle" style="display: none;">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/*   <span class="input-group-btn">*/
/*       <button type="button" class="btn btn-default btn-lg">*/
/*       	<span class="button-search"></span>*/
/*       </button>*/
/*       </span>*/
/*   </div>*/
/* */
/* */
/* */
