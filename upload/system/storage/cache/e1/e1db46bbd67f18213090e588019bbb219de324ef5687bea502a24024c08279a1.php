<?php

/* OPC080191_2/template/common/header.twig */
class __TwigTemplate_c0becee9bf64f95135993eb6849213ddad1e60a57f200430cbeaa0d00ad50ecf extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<!--<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />-->
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href='//fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>
<link href=\"catalog/view/theme/";
        // line 26
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 29
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/megnor/carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 30
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/megnor/custom.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 31
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/megnor/bootstrap.min.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 32
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/megnor/animate.css\" />

";
        // line 34
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 35
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
            echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
            echo "/stylesheet/megnor/rtl.css\">
";
        }
        // line 37
        echo "
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 39
            echo "<link href=\"style.href\" type=\"text/css\" rel=\"style.rel\" media=\"style.media\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "

";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 44
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 47
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 51
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 54
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "<!-- Megnor www.templatemela.com - Start -->
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/parallex.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/custom.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/jstree.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/megnor.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/jquery.custom.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/jquery.formalize.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/jquery.elevatezoom.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/bootstrap-notify.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/jquery.bxslider.min.js\"></script>  
<script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/megnor/doubletaptogo.js\"></script>
<!-- Megnor www.templatemela.com - End -->

<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/megnor/tabs.js\" type=\"text/javascript\"></script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 74
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/megnor/lightbox.css\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 76
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/megnor/animate.css\" />


<script type=\"text/javascript\" src=\"catalog/view/javascript/lightbox/lightbox-2.6.min.js\"></script>

";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 82
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
</head>

";
        // line 87
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 88
            $context["layoutclass"] = "layout-3";
        } elseif ((        // line 89
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 90
            if ((isset($context["column_left"]) ? $context["column_left"] : null)) {
                // line 91
                $context["layoutclass"] = "layout-2 left-col";
            } elseif (            // line 92
(isset($context["column_right"]) ? $context["column_right"] : null)) {
                // line 93
                $context["layoutclass"] = "layout-2 right-col";
            }
        } else {
            // line 96
            $context["layoutclass"] = "layout-1";
        }
        // line 98
        echo "
<body class=\"";
        // line 99
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " ";
        echo " ";
        echo " ";
        echo (isset($context["layoutclass"]) ? $context["layoutclass"] : null);
        echo "\">
<div class=\"header_container\">
  <nav id=\"top\">
  <div class=\"container\">    
    <div id=\"top-links\" class=\"nav pull-right\">
      <div class=\"list-inline\">
        <div class=\"col-sm-5 header_search\">";
        // line 105
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>       
        <div class=\"dropdown myaccount\"><a href=\"";
        // line 106
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
          <ul class=\"dropdown-menu dropdown-menu-right myaccount-menu\">
            ";
        // line 108
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 109
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 110
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 111
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 112
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 113
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 114
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" title=\"";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 115
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>
            <li class=\"lang_cur_block\">";
            // line 116
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "</li>
            ";
        } else {
            // line 118
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 119
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 120
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" title=\"";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 121
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>
            <li class=\"lang_cur_block\">";
            // line 122
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "</li>
            ";
        }
        // line 124
        echo "          </ul>
        </div>
        <div class=\"col-sm-3 header-cart\">";
        // line 126
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>   
      </div>
    </div>
   </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 header-logo\">
        <div id=\"logo\">";
        // line 135
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 136
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 137
        echo "</div>
      </div>     
    </div>
  </div>
</header>
";
        // line 142
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "

</div>
<div class=\"main\">





";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 142,  415 => 137,  407 => 136,  395 => 135,  383 => 126,  379 => 124,  373 => 122,  365 => 121,  357 => 120,  351 => 119,  344 => 118,  338 => 116,  330 => 115,  322 => 114,  316 => 113,  310 => 112,  304 => 111,  298 => 110,  291 => 109,  289 => 108,  280 => 106,  276 => 105,  263 => 99,  260 => 98,  257 => 96,  253 => 93,  251 => 92,  249 => 91,  247 => 90,  245 => 89,  243 => 88,  241 => 87,  236 => 84,  225 => 82,  221 => 81,  213 => 76,  208 => 74,  188 => 56,  180 => 54,  176 => 53,  165 => 51,  161 => 50,  158 => 49,  149 => 47,  145 => 46,  132 => 44,  128 => 43,  124 => 41,  117 => 39,  113 => 38,  110 => 37,  104 => 35,  102 => 34,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  79 => 26,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <!--<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />-->*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href='//fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>*/
/* <link href='//fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>*/
/* <link href="catalog/view/theme/{{ mytemplate }}/stylesheet/stylesheet.css" rel="stylesheet" />*/
/* */
/* <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/magnific/magnific-popup.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{ mytemplate }}/stylesheet/megnor/carousel.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/megnor/custom.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/megnor/bootstrap.min.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/megnor/animate.css" />*/
/* */
/* {% if direction == 'rtl' %}*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{ mytemplate }}/stylesheet/megnor/rtl.css">*/
/* {% endif %}*/
/* */
/* {% for style in styles %}*/
/* <link href="style.href" type="text/css" rel="style.rel" media="style.media" />*/
/* {% endfor %}*/
/* */
/* */
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* <!-- Megnor www.templatemela.com - Start -->*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/parallex.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/custom.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/jstree.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/carousel.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/megnor.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/jquery.custom.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/jquery.formalize.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/jquery.elevatezoom.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/bootstrap-notify.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/jquery.bxslider.min.js"></script>  */
/* <script type="text/javascript" src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/megnor/doubletaptogo.js"></script>*/
/* <!-- Megnor www.templatemela.com - End -->*/
/* */
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/megnor/tabs.js" type="text/javascript"></script>*/
/* */
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/megnor/lightbox.css" />*/
/* */
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/megnor/animate.css" />*/
/* */
/* */
/* <script type="text/javascript" src="catalog/view/javascript/lightbox/lightbox-2.6.min.js"></script>*/
/* */
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* */
/* </head>*/
/* */
/* {% if (column_left and column_right) %}*/
/* {% set layoutclass = 'layout-3' %}*/
/* {% elseif (column_left or column_right) %}*/
/* {% if column_left %}*/
/* {% set layoutclass = 'layout-2 left-col' %}*/
/* {% elseif column_right %}*/
/* {% set layoutclass = 'layout-2 right-col' %}*/
/* {% endif %}*/
/* {% else %}*/
/* {% set layoutclass = 'layout-1' %}*/
/* {% endif %}*/
/* */
/* <body class="{{ class }} {{ " " }} {{ layoutclass }}">*/
/* <div class="header_container">*/
/*   <nav id="top">*/
/*   <div class="container">    */
/*     <div id="top-links" class="nav pull-right">*/
/*       <div class="list-inline">*/
/*         <div class="col-sm-5 header_search">{{ search }}</div>       */
/*         <div class="dropdown myaccount"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown">{{ text_account }}</a>*/
/*           <ul class="dropdown-menu dropdown-menu-right myaccount-menu">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             <li><a href="{{ checkout }}" title="{{ text_checkout }}">{{ text_checkout }}</a></li>*/
/*             <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}">{{ text_wishlist }}</a></li>*/
/*             <li class="lang_cur_block">{{ currency }}{{ language }}</li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             <li><a href="{{ checkout }}" title="{{ text_checkout }}">{{ text_checkout }}</a></li>*/
/*             <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}">{{ text_wishlist }}</a></li>*/
/*             <li class="lang_cur_block">{{ currency }}{{ language }}</li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-3 header-cart">{{ cart }}</div>   */
/*       </div>*/
/*     </div>*/
/*    </div>*/
/* </nav>*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-4 header-logo">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>     */
/*     </div>*/
/*   </div>*/
/* </header>*/
/* {{ menu }}*/
/* */
/* </div>*/
/* <div class="main">*/
/* */
/* */
/* */
/* */
/* */
/* */
