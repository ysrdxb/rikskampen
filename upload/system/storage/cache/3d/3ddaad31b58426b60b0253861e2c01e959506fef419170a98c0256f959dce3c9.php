<?php

/* OPC080191_2/template/extension/module/account.twig */
class __TwigTemplate_85f10cb9c58dc30bdbf2c6cef49bf6f7f8f5bd367fc8ebeea3c89ad6d58573fe extends Twig_Template
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
        echo "<div class=\"box\">
  <div class=\"box-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
 <div class=\"list-group\">
  ";
        // line 4
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 
  <a href=\"";
            // line 5
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo " </a> <a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a> <a href=\"";
            echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
            echo " </a>
  ";
        }
        // line 6
        echo " 
 <a href=\"";
        // line 7
        echo (isset($context["account"]) ? $context["account"] : null);
        echo " \" class=\"list-group-item\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo " </a>
  ";
        // line 8
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 
  <a href=\"";
            // line 9
            echo (isset($context["edit"]) ? $context["edit"] : null);
            echo " \" class=\"list-group-item\">";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</a> <a href=\"";
            echo (isset($context["password"]) ? $context["password"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_password"]) ? $context["text_password"] : null);
            echo "</a>
  ";
        }
        // line 10
        echo " 
  <a href=\"";
        // line 11
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a> <a href=\"";
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo " \" class=\"list-group-item\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo " </a> <a href=\"";
        echo (isset($context["order"]) ? $context["order"] : null);
        echo " \" class=\"list-group-item\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo " </a> <a href=\"";
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo " </a><a href=\"";
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo " </a> <a href=\"";
        echo (isset($context["reward"]) ? $context["reward"] : null);
        echo " \" class=\"list-group-item\">";
        echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
        echo " </a> <a href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo " </a> <a href=\"";
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo " </a> <a href=\"";
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo " </a>
  ";
        // line 12
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 
  <a href=\"";
            // line 13
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo " </a>
  ";
        }
        // line 14
        echo " 
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OPC080191_2/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 14,  115 => 13,  111 => 12,  73 => 11,  70 => 10,  59 => 9,  55 => 8,  49 => 7,  46 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="box">*/
/*   <div class="box-heading">{{ heading_title }}</div>*/
/*  <div class="list-group">*/
/*   {% if not logged %} */
/*   <a href="{{ login }}" class="list-group-item">{{ text_login }} </a> <a href="{{ register }}" class="list-group-item">{{ text_register }}</a> <a href="{{ forgotten }}" class="list-group-item">{{ text_forgotten }} </a>*/
/*   {% endif %} */
/*  <a href="{{ account }} " class="list-group-item">{{ text_account }} </a>*/
/*   {% if logged %} */
/*   <a href="{{ edit }} " class="list-group-item">{{ text_edit }}</a> <a href="{{ password }}" class="list-group-item">{{ text_password }}</a>*/
/*   {% endif %} */
/*   <a href="{{ address }}" class="list-group-item">{{ text_address }}</a> <a href="{{ wishlist }} " class="list-group-item">{{ text_wishlist }} </a> <a href="{{ order }} " class="list-group-item">{{ text_order }} </a> <a href="{{ download }}" class="list-group-item">{{ text_download }} </a><a href="{{ recurring }}" class="list-group-item">{{ text_recurring }} </a> <a href="{{ reward }} " class="list-group-item">{{ text_reward }} </a> <a href="{{ return }}" class="list-group-item">{{ text_return }} </a> <a href="{{ transaction }}" class="list-group-item">{{ text_transaction }} </a> <a href="{{ newsletter }}" class="list-group-item">{{ text_newsletter }} </a>*/
/*   {% if logged %} */
/*   <a href="{{ logout }}" class="list-group-item">{{ text_logout }} </a>*/
/*   {% endif %} */
/* </div>*/
/* </div>*/
/* */
