<?php

/* extension/module/d_admin_menu/d_admin_menu_editor.twig */
class __TwigTemplate_a0c11734ba195c810f63ce87d0718c15696c04a5a190c162e0966fae4cc7ebc1 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "

<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"form-inline pull-right\">
                <button id=\"save_and_stay\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save_and_stay"]) ? $context["button_save_and_stay"] : null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " ";
        echo (isset($context["version"]) ? $context["version"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>

    <div class=\"container-fluid\">
        ";
        // line 20
        if ( !twig_test_empty($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array(), "array"))) {
            // line 21
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 22
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array(), "array");
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 26
        echo "        ";
        if ( !twig_test_empty($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "shopunity", array(), "array"))) {
            // line 27
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fa fa-exclamation-circle\"></i>
            ";
            // line 29
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "shopunity", array(), "array");
            echo "
        </div>
        ";
        }
        // line 32
        echo "        ";
        if ( !twig_test_empty((isset($context["success"]) ? $context["success"] : null))) {
            // line 33
            echo "        <div class=\"alert alert-success\">
            <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 34
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 38
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 41
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 44
        echo (isset($context["save_and_stay"]) ? $context["save_and_stay"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">

                  <ul  class=\"nav nav-tabs\">
                    <li class=\"active\">
                        <a href=\"#setting\" data-toggle=\"tab\">
                            <span class=\"fa fa-cog\"></span>
                            ";
        // line 50
        echo (isset($context["tab_setting"]) ? $context["tab_setting"] : null);
        echo "
                        </a>
                    </li>
                    <li>
                        <a href=\"#instruction\" data-toggle=\"tab\">
                            <span class=\"fa fa-graduation-cap\"></span>
                            ";
        // line 56
        echo (isset($context["tab_instruction"]) ? $context["tab_instruction"] : null);
        echo "
                        </a>
                    </li>
                  </ul>

                  <div class=\"tab-content\">

                      <div class=\"tab-pane active\" id=\"setting\" >
                          <div class=\"tab-body\">
                            <div class=\"row\">

                              <div class=\"col-sm-12\">
                                <div class=\"tab-content\">


                                  <div id=\"d_menu\" class=\"tab-pane active\">

                                    <div class=\"row\">
                                      <!-- HOME CONTENT -->

                                      <div class=\"col-lg-6\">
                                          <div class=\"form-group\">
                                              <label class=\"col-sm-4 control-label\" for=\"input_status\"><span data-toggle=\"tooltip\" title=\"";
        // line 78
        echo (isset($context["help_status"]) ? $context["help_status"] : null);
        echo "\">";
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span></label>
                                              <div class=\"col-sm-8\">
                                                  <input type=\"checkbox\" value=\"1\" name=\"";
        // line 80
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_status\" id=\"input_status\" data-on-color=\"success\"  data-bs-status=\"true\" ";
        echo ((($this->getAttribute($context, ((isset($context["id"]) ? $context["id"] : null) . "_status")) == "1")) ? ("checked=\"checked\"") : (""));
        echo " class=\"form-control\" />
                                              </div>
                                          </div>
                                      </div>

                                      <div class=\"col-lg-6\">
                                          <div class=\"form-group\">
                                              <label class=\"col-sm-4 control-label\" for=\"input_work_mode\"><span data-toggle=\"tooltip\" title=\"";
        // line 87
        echo (isset($context["help_work_mode"]) ? $context["help_work_mode"] : null);
        echo "\">";
        echo (isset($context["entry_work_mode"]) ? $context["entry_work_mode"] : null);
        echo "</span></label>
                                              <div class=\"col-sm-8\">
                                                  <input type=\"checkbox\" value=\"1\" name=\"";
        // line 89
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_work_mode\" id=\"input_work_mode\" data-on-color=\"primary\" data-off-color=\"primary\" data-on-text=\"";
        echo (isset($context["text_inherit"]) ? $context["text_inherit"] : null);
        echo "\" data-off-text=\"";
        echo (isset($context["text_replace"]) ? $context["text_replace"] : null);
        echo "\" data-label-width=\"20\" data-bs-status=\"true\" ";
        echo ((($this->getAttribute($context, ((isset($context["id"]) ? $context["id"] : null) . "_work_mode")) == "1")) ? ("checked=\"checked\"") : (""));
        echo " class=\"form-control\" />
                                              </div>
                                          </div>
                                      </div>

                                    </div>

                                    <hr>

                                    <div class=\"col-sm-12\">

                                      <!-- STANDART MENU -->
                                      <div class=\"panel-group col-sm-12 col-md-12 col-lg-5\">
                                        <h3 class=\"page-header pd-10px\">
                                            <span class=\"fa fa-bookmark-o fa-fw\"></span> <span>";
        // line 103
        echo (isset($context["text_standart_menu"]) ? $context["text_standart_menu"] : null);
        echo "</span>
                                        </h3>
                                        <div id=\"standart-menu\">
                                          <div class=\"dd nestable\" id=\"nestable-standart\">
                                            ";
        // line 107
        echo (isset($context["standart_menu"]) ? $context["standart_menu"] : null);
        echo "
                                          </div>
                                        </div>
                                      </div>

                                      <!-- CUSTOM MENU -->
                                      <div class=\"panel-group col-sm-12 col-md-12 col-lg-7\">
                                        <h3 class=\"page-header pd-10px\">
                                            <span class=\"fa fa-bookmark fa-fw\"></span> <span>";
        // line 115
        echo (isset($context["text_custom_menu"]) ? $context["text_custom_menu"] : null);
        echo "</span>
                                        </h3>
                                        <div id=\"custom-menu\">
                                          <div class=\"dd nestable\" id=\"nestable-custom\">
                                            ";
        // line 119
        echo (isset($context["custom_menu"]) ? $context["custom_menu"] : null);
        echo "
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                            </div>
                          </div>
                      </div>

                      <div class=\"tab-pane\" id=\"instruction\" >
                          <div class=\"tab-body\">
                              ";
        // line 136
        echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
        echo "
                          </div>
                      </div>

                  </div>

                </form>
            </div>
        </div>



    </div>

</div>

<script>

  function alert_handler(json)
  {
    if (typeof json === 'string') {
      json = JSON.parse(json);
    }

    if (json['error']) {

      for (i in json['error']) {
          alertify.error(json['error'][i]);
      }
    }

    if (json['success']) {
      alertify.success(json['success']);
    }
  }

  function goose_templating(some_html, some_json)
  {
    var re = /%%([^%%]+)?%%/g, match;
    while(match = re.exec(some_html)) {
        some_html = some_html.replace(match[0], some_json[match[1]]);
    };
    return some_html;
  }

  function updateOutput(e)
  {
      var list   = e.length ? e : \$(e.target),
          output = list.data('output');
      if (window.JSON) {
          output.val(window.JSON.stringify(list.nestable('serialize')));
      } else {
          output.val('JSON browser support required for this demo.');
      }
  };

  function changeCustomItemsType(serialize_data)
  {

    for (var i = serialize_data.length - 1; i >= 0; i--) {
      if (\"children\" in serialize_data[i]) {

        \$('#dd_custom_' + serialize_data[i]['id'] + ' > .dd-handle .item-link').css('display', 'none');

        // second children
        for (var ii = serialize_data[i]['children'].length - 1; ii >= 0; ii--) {
          if (\"children\" in serialize_data[i]['children'][ii]) {
            \$('#dd_custom_' + serialize_data[i]['children'][ii]['id'] + ' > .dd-handle .item-link').css('display', 'none');
          } else {
            \$('#dd_custom_' + serialize_data[i]['children'][ii]['id'] + ' > .dd-handle .item-link').css('display', 'inline-block');
          }
        }

      } else {
        \$('#dd_custom_' + serialize_data[i]['id'] + ' > .dd-handle .item-link').css('display', 'inline-block');
      }

    }
  }

  \$(document).ready(function()
  {

      \$('#nestable-standart').nestable_nodrag({maxDepth: '3', group: \"standart\"});

      \$('#nestable-custom').nestable({maxDepth: '3', group: \"custom\"})
      .on('change', function(){
        changeCustomItemsType(\$('#nestable-custom').nestable('serialize'));
      });
      changeCustomItemsType(\$('#nestable-custom').nestable('serialize'));

      \$('#nestable-standart').nestable_nodrag('collapseAll');

      \$('[data-bs=\"true\"]').bootstrapSwitch();
      \$('[data-bs-status=\"true\"]').bootstrapSwitch();

      if (\$('#input_work_mode').prop('checked')) {
        \$('#standart-menu').css('pointer-events', 'none');
        \$('#standart-menu').fadeTo('slow', 0.3);
      }

      \$('#input_work_mode').on('switchChange.bootstrapSwitch', function(event, state) {
          if (state == true) {
            \$('#standart-menu').css('pointer-events', 'none');
            \$('#standart-menu').fadeTo('slow', 0.3);
          } else {
            \$('#standart-menu').css('pointer-events', 'all');
            \$('#standart-menu').fadeTo('slow', 1);
          }
      });

      \$('[data-bs=\"true\"]').on('switchChange.bootstrapSwitch', function(event, state) {
        var tmp_vis = 1;
        if (state == true) { tmp_vis = 1; } else { tmp_vis = 0; };
        \$(this).val(tmp_vis);
      });

      // restore default setting (standart-menu)
      \$('#button-restore-standart').on('click', function() {
        \$('[data-bs=\"true\"]').each(function() {
          \$(this).bootstrapSwitch('state', true, true);
        });
      });

      // collapse-expand buttons
      \$('#button-collapse-standart').on('click', function()
      { \$('#nestable-standart').nestable_nodrag('collapseAll'); });

      \$('#button-expand-standart').on('click', function()
      { \$('#nestable-standart').nestable_nodrag('expandAll'); });

      \$('#button-collapse-custom').on('click', function()
      { \$('#nestable-custom').nestable('collapseAll'); });

      \$('#button-expand-custom').on('click', function()
      { \$('#nestable-custom').nestable('expandAll'); });


      // add new custom element (button)
      \$('#button-add-custom').on('click', function()
      {
        var tmp_new_id = 0;
        \$('.custom-removebtn').each(function() {
          if (\$(this).data('delId') > tmp_new_id) {
            tmp_new_id = \$(this).data('delId');
          }
        });
        tmp_new_id = tmp_new_id + 1;

        var html = \$('#new_custom_item').html();
        var tmp_json = {
          new_custom_id: tmp_new_id
        };
        html = goose_templating(html, tmp_json);
        \$('.main-custom-list').append(html);
        console.log('create custom element ID: ', tmp_new_id);

        // iconpicker re-init
        \$('.supericon-yep').each(function() {
          \$(this).iconpicker();
        });

        return false;
      });

      // add new custom element (button)
      \$('#button-add-custom-route').on('click', function()
      {
        var tmp_new_id = 0;
        \$('.custom-removebtn').each(function() {
          if (\$(this).data('delId') > tmp_new_id) {
            tmp_new_id = \$(this).data('delId');
          }
        });
        tmp_new_id = tmp_new_id + 1;

        var html = \$('#new_custom_route_item').html();
        var tmp_json = {
          new_custom_id: tmp_new_id
        };
        html = goose_templating(html, tmp_json);
        \$('.main-custom-list').append(html);
        console.log('create custom element ID: ', tmp_new_id);

        // iconpicker re-init
        \$('.supericon-yep').each(function() {
          \$(this).iconpicker();
        });

        return false;
      });

      // remove custom element
      \$(document).on('click','.custom-removebtn', function() {
        \$(('#dd_custom_' + \$(this).data('delId'))).remove();
        console.log('removing custom element ID: ', \$(this).data('delId'));
      });


      // iconpicker init
      \$('.supericon-yep').each(function() {
        \$(this).iconpicker();
      });

      // icon input update
      \$(document).on('iconpickerSelected', '.icp', function(e) {
        \$(\"input[name='custom-menu[\" + \$(this).data('id') +\"][icon]']\").val(e.iconpickerValue);
      });

      // TOOLTIP
      \$('.custom_route_input').tooltip();

  });

  \$(document).on('click', '#save_and_stay', function() {

    var jsn = {
      'menus-data': \$('#form').serializeArray(),
      'custom-nested-data': \$('#nestable-custom').nestable('serialize')
    };

    \$.ajax({
        type: 'post',
        url: \$('#form').attr('action'),
        data: jsn,
        beforeSend: function() {
            \$('#form').fadeTo('slow', 0.5);
        },
        complete: function() {
            \$('#form').fadeTo('slow', 1);
        },
        success: function(json) {
            alert_handler(json);
        },
        error: function(json) {
            alert_handler(json);
        }
    });
  });



</script>

";
        // line 380
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/d_admin_menu/d_admin_menu_editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 380,  255 => 136,  235 => 119,  228 => 115,  217 => 107,  210 => 103,  187 => 89,  180 => 87,  168 => 80,  161 => 78,  136 => 56,  127 => 50,  118 => 44,  112 => 41,  107 => 38,  100 => 34,  97 => 33,  94 => 32,  88 => 29,  84 => 27,  81 => 26,  74 => 22,  71 => 21,  69 => 20,  62 => 15,  51 => 13,  47 => 12,  40 => 10,  33 => 8,  29 => 7,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* */
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="form-inline pull-right">*/
/*                 <button id="save_and_stay" data-toggle="tooltip" title="{{ button_save_and_stay }}" class="btn btn-success"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*             </div>*/
/*             <h1>{{ heading_title }} {{ version }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                 <li><a href="{{ breadcrumb['href'] }}">{{ breadcrumb['text'] }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid">*/
/*         {% if (error['warning'] is not empty) %}*/
/*         <div class="alert alert-danger">*/
/*             <i class="fa fa-exclamation-circle"></i> {{ error['warning'] }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if (error['shopunity'] is not empty) %}*/
/*         <div class="alert alert-danger">*/
/*             <i class="fa fa-exclamation-circle"></i>*/
/*             {{ error['shopunity'] }}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if (success is not empty) %}*/
/*         <div class="alert alert-success">*/
/*             <i class="fa fa-exclamation-circle"></i> {{ success }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ save_and_stay }}" method="post" enctype="multipart/form-data" id="form" class="form-horizontal">*/
/* */
/*                   <ul  class="nav nav-tabs">*/
/*                     <li class="active">*/
/*                         <a href="#setting" data-toggle="tab">*/
/*                             <span class="fa fa-cog"></span>*/
/*                             {{ tab_setting }}*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#instruction" data-toggle="tab">*/
/*                             <span class="fa fa-graduation-cap"></span>*/
/*                             {{ tab_instruction }}*/
/*                         </a>*/
/*                     </li>*/
/*                   </ul>*/
/* */
/*                   <div class="tab-content">*/
/* */
/*                       <div class="tab-pane active" id="setting" >*/
/*                           <div class="tab-body">*/
/*                             <div class="row">*/
/* */
/*                               <div class="col-sm-12">*/
/*                                 <div class="tab-content">*/
/* */
/* */
/*                                   <div id="d_menu" class="tab-pane active">*/
/* */
/*                                     <div class="row">*/
/*                                       <!-- HOME CONTENT -->*/
/* */
/*                                       <div class="col-lg-6">*/
/*                                           <div class="form-group">*/
/*                                               <label class="col-sm-4 control-label" for="input_status"><span data-toggle="tooltip" title="{{ help_status }}">{{ entry_status }}</span></label>*/
/*                                               <div class="col-sm-8">*/
/*                                                   <input type="checkbox" value="1" name="{{ id }}_status" id="input_status" data-on-color="success"  data-bs-status="true" {{ attribute(_context, id ~ '_status') == '1' ? 'checked="checked"' : '' }} class="form-control" />*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </div>*/
/* */
/*                                       <div class="col-lg-6">*/
/*                                           <div class="form-group">*/
/*                                               <label class="col-sm-4 control-label" for="input_work_mode"><span data-toggle="tooltip" title="{{ help_work_mode }}">{{ entry_work_mode }}</span></label>*/
/*                                               <div class="col-sm-8">*/
/*                                                   <input type="checkbox" value="1" name="{{ id }}_work_mode" id="input_work_mode" data-on-color="primary" data-off-color="primary" data-on-text="{{ text_inherit }}" data-off-text="{{ text_replace }}" data-label-width="20" data-bs-status="true" {{ attribute(_context, id ~ '_work_mode') == '1' ? 'checked="checked"' : '' }} class="form-control" />*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </div>*/
/* */
/*                                     </div>*/
/* */
/*                                     <hr>*/
/* */
/*                                     <div class="col-sm-12">*/
/* */
/*                                       <!-- STANDART MENU -->*/
/*                                       <div class="panel-group col-sm-12 col-md-12 col-lg-5">*/
/*                                         <h3 class="page-header pd-10px">*/
/*                                             <span class="fa fa-bookmark-o fa-fw"></span> <span>{{ text_standart_menu }}</span>*/
/*                                         </h3>*/
/*                                         <div id="standart-menu">*/
/*                                           <div class="dd nestable" id="nestable-standart">*/
/*                                             {{ standart_menu }}*/
/*                                           </div>*/
/*                                         </div>*/
/*                                       </div>*/
/* */
/*                                       <!-- CUSTOM MENU -->*/
/*                                       <div class="panel-group col-sm-12 col-md-12 col-lg-7">*/
/*                                         <h3 class="page-header pd-10px">*/
/*                                             <span class="fa fa-bookmark fa-fw"></span> <span>{{ text_custom_menu }}</span>*/
/*                                         </h3>*/
/*                                         <div id="custom-menu">*/
/*                                           <div class="dd nestable" id="nestable-custom">*/
/*                                             {{ custom_menu }}*/
/*                                           </div>*/
/*                                         </div>*/
/*                                       </div>*/
/* */
/*                                     </div>*/
/*                                   </div>*/
/* */
/*                                 </div>*/
/*                               </div>*/
/* */
/*                             </div>*/
/*                           </div>*/
/*                       </div>*/
/* */
/*                       <div class="tab-pane" id="instruction" >*/
/*                           <div class="tab-body">*/
/*                               {{ text_instruction }}*/
/*                           </div>*/
/*                       </div>*/
/* */
/*                   </div>*/
/* */
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* <script>*/
/* */
/*   function alert_handler(json)*/
/*   {*/
/*     if (typeof json === 'string') {*/
/*       json = JSON.parse(json);*/
/*     }*/
/* */
/*     if (json['error']) {*/
/* */
/*       for (i in json['error']) {*/
/*           alertify.error(json['error'][i]);*/
/*       }*/
/*     }*/
/* */
/*     if (json['success']) {*/
/*       alertify.success(json['success']);*/
/*     }*/
/*   }*/
/* */
/*   function goose_templating(some_html, some_json)*/
/*   {*/
/*     var re = /%%([^%%]+)?%%/g, match;*/
/*     while(match = re.exec(some_html)) {*/
/*         some_html = some_html.replace(match[0], some_json[match[1]]);*/
/*     };*/
/*     return some_html;*/
/*   }*/
/* */
/*   function updateOutput(e)*/
/*   {*/
/*       var list   = e.length ? e : $(e.target),*/
/*           output = list.data('output');*/
/*       if (window.JSON) {*/
/*           output.val(window.JSON.stringify(list.nestable('serialize')));*/
/*       } else {*/
/*           output.val('JSON browser support required for this demo.');*/
/*       }*/
/*   };*/
/* */
/*   function changeCustomItemsType(serialize_data)*/
/*   {*/
/* */
/*     for (var i = serialize_data.length - 1; i >= 0; i--) {*/
/*       if ("children" in serialize_data[i]) {*/
/* */
/*         $('#dd_custom_' + serialize_data[i]['id'] + ' > .dd-handle .item-link').css('display', 'none');*/
/* */
/*         // second children*/
/*         for (var ii = serialize_data[i]['children'].length - 1; ii >= 0; ii--) {*/
/*           if ("children" in serialize_data[i]['children'][ii]) {*/
/*             $('#dd_custom_' + serialize_data[i]['children'][ii]['id'] + ' > .dd-handle .item-link').css('display', 'none');*/
/*           } else {*/
/*             $('#dd_custom_' + serialize_data[i]['children'][ii]['id'] + ' > .dd-handle .item-link').css('display', 'inline-block');*/
/*           }*/
/*         }*/
/* */
/*       } else {*/
/*         $('#dd_custom_' + serialize_data[i]['id'] + ' > .dd-handle .item-link').css('display', 'inline-block');*/
/*       }*/
/* */
/*     }*/
/*   }*/
/* */
/*   $(document).ready(function()*/
/*   {*/
/* */
/*       $('#nestable-standart').nestable_nodrag({maxDepth: '3', group: "standart"});*/
/* */
/*       $('#nestable-custom').nestable({maxDepth: '3', group: "custom"})*/
/*       .on('change', function(){*/
/*         changeCustomItemsType($('#nestable-custom').nestable('serialize'));*/
/*       });*/
/*       changeCustomItemsType($('#nestable-custom').nestable('serialize'));*/
/* */
/*       $('#nestable-standart').nestable_nodrag('collapseAll');*/
/* */
/*       $('[data-bs="true"]').bootstrapSwitch();*/
/*       $('[data-bs-status="true"]').bootstrapSwitch();*/
/* */
/*       if ($('#input_work_mode').prop('checked')) {*/
/*         $('#standart-menu').css('pointer-events', 'none');*/
/*         $('#standart-menu').fadeTo('slow', 0.3);*/
/*       }*/
/* */
/*       $('#input_work_mode').on('switchChange.bootstrapSwitch', function(event, state) {*/
/*           if (state == true) {*/
/*             $('#standart-menu').css('pointer-events', 'none');*/
/*             $('#standart-menu').fadeTo('slow', 0.3);*/
/*           } else {*/
/*             $('#standart-menu').css('pointer-events', 'all');*/
/*             $('#standart-menu').fadeTo('slow', 1);*/
/*           }*/
/*       });*/
/* */
/*       $('[data-bs="true"]').on('switchChange.bootstrapSwitch', function(event, state) {*/
/*         var tmp_vis = 1;*/
/*         if (state == true) { tmp_vis = 1; } else { tmp_vis = 0; };*/
/*         $(this).val(tmp_vis);*/
/*       });*/
/* */
/*       // restore default setting (standart-menu)*/
/*       $('#button-restore-standart').on('click', function() {*/
/*         $('[data-bs="true"]').each(function() {*/
/*           $(this).bootstrapSwitch('state', true, true);*/
/*         });*/
/*       });*/
/* */
/*       // collapse-expand buttons*/
/*       $('#button-collapse-standart').on('click', function()*/
/*       { $('#nestable-standart').nestable_nodrag('collapseAll'); });*/
/* */
/*       $('#button-expand-standart').on('click', function()*/
/*       { $('#nestable-standart').nestable_nodrag('expandAll'); });*/
/* */
/*       $('#button-collapse-custom').on('click', function()*/
/*       { $('#nestable-custom').nestable('collapseAll'); });*/
/* */
/*       $('#button-expand-custom').on('click', function()*/
/*       { $('#nestable-custom').nestable('expandAll'); });*/
/* */
/* */
/*       // add new custom element (button)*/
/*       $('#button-add-custom').on('click', function()*/
/*       {*/
/*         var tmp_new_id = 0;*/
/*         $('.custom-removebtn').each(function() {*/
/*           if ($(this).data('delId') > tmp_new_id) {*/
/*             tmp_new_id = $(this).data('delId');*/
/*           }*/
/*         });*/
/*         tmp_new_id = tmp_new_id + 1;*/
/* */
/*         var html = $('#new_custom_item').html();*/
/*         var tmp_json = {*/
/*           new_custom_id: tmp_new_id*/
/*         };*/
/*         html = goose_templating(html, tmp_json);*/
/*         $('.main-custom-list').append(html);*/
/*         console.log('create custom element ID: ', tmp_new_id);*/
/* */
/*         // iconpicker re-init*/
/*         $('.supericon-yep').each(function() {*/
/*           $(this).iconpicker();*/
/*         });*/
/* */
/*         return false;*/
/*       });*/
/* */
/*       // add new custom element (button)*/
/*       $('#button-add-custom-route').on('click', function()*/
/*       {*/
/*         var tmp_new_id = 0;*/
/*         $('.custom-removebtn').each(function() {*/
/*           if ($(this).data('delId') > tmp_new_id) {*/
/*             tmp_new_id = $(this).data('delId');*/
/*           }*/
/*         });*/
/*         tmp_new_id = tmp_new_id + 1;*/
/* */
/*         var html = $('#new_custom_route_item').html();*/
/*         var tmp_json = {*/
/*           new_custom_id: tmp_new_id*/
/*         };*/
/*         html = goose_templating(html, tmp_json);*/
/*         $('.main-custom-list').append(html);*/
/*         console.log('create custom element ID: ', tmp_new_id);*/
/* */
/*         // iconpicker re-init*/
/*         $('.supericon-yep').each(function() {*/
/*           $(this).iconpicker();*/
/*         });*/
/* */
/*         return false;*/
/*       });*/
/* */
/*       // remove custom element*/
/*       $(document).on('click','.custom-removebtn', function() {*/
/*         $(('#dd_custom_' + $(this).data('delId'))).remove();*/
/*         console.log('removing custom element ID: ', $(this).data('delId'));*/
/*       });*/
/* */
/* */
/*       // iconpicker init*/
/*       $('.supericon-yep').each(function() {*/
/*         $(this).iconpicker();*/
/*       });*/
/* */
/*       // icon input update*/
/*       $(document).on('iconpickerSelected', '.icp', function(e) {*/
/*         $("input[name='custom-menu[" + $(this).data('id') +"][icon]']").val(e.iconpickerValue);*/
/*       });*/
/* */
/*       // TOOLTIP*/
/*       $('.custom_route_input').tooltip();*/
/* */
/*   });*/
/* */
/*   $(document).on('click', '#save_and_stay', function() {*/
/* */
/*     var jsn = {*/
/*       'menus-data': $('#form').serializeArray(),*/
/*       'custom-nested-data': $('#nestable-custom').nestable('serialize')*/
/*     };*/
/* */
/*     $.ajax({*/
/*         type: 'post',*/
/*         url: $('#form').attr('action'),*/
/*         data: jsn,*/
/*         beforeSend: function() {*/
/*             $('#form').fadeTo('slow', 0.5);*/
/*         },*/
/*         complete: function() {*/
/*             $('#form').fadeTo('slow', 1);*/
/*         },*/
/*         success: function(json) {*/
/*             alert_handler(json);*/
/*         },*/
/*         error: function(json) {*/
/*             alert_handler(json);*/
/*         }*/
/*     });*/
/*   });*/
/* */
/* */
/* */
/* </script>*/
/* */
/* {{ footer }}*/
/* */
