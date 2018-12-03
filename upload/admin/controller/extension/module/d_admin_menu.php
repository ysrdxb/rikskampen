<?php

class ControllerExtensionModuleDAdminMenu extends Controller
{
    private $codename = 'd_admin_menu';
    private $route = 'extension/module/d_admin_menu';
    private $extension = array();
    private $store_id = 0;
    private $error = array();


    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->load->language($this->route);
        $this->load->model($this->route);
        $this->load->model('setting/setting');
        $this->load->model('extension/d_opencart_patch/module');
        $this->load->model('extension/d_opencart_patch/url');
        $this->load->model('extension/d_opencart_patch/load');
        $this->load->model('extension/d_opencart_patch/user');

        $this->d_shopunity = (file_exists(DIR_SYSTEM.'library/d_shopunity/extension/d_shopunity.json'));
        $this->d_opencart_patch = (file_exists(DIR_SYSTEM.'library/d_shopunity/extension/d_opencart_patch.json'));
        $this->extension = json_decode(file_get_contents(DIR_SYSTEM.'library/d_shopunity/extension/'.$this->codename.'.json'), true);
        $this->d_twig_manager = (file_exists(DIR_SYSTEM.'library/d_shopunity/extension/d_twig_manager.json'));

        if (isset($this->request->get['store_id'])) {
            $this->store_id = $this->request->get['store_id'];
        }
    }

    public function index()
    {
        if($this->d_shopunity){
            $this->load->model('extension/d_shopunity/mbooth');
            $this->model_extension_d_shopunity_mbooth->validateDependencies($this->codename);
        }

        if($this->d_twig_manager){
            $this->load->model('extension/module/d_twig_manager');
            if(!$this->model_extension_module_d_twig_manager->isCompatible()){
                $this->model_extension_module_d_twig_manager->installCompatibility();
                $this->session->data['success'] = $this->language->get('success_twig_compatible');
                $this->response->redirect($this->model_extension_d_opencart_patch_url->getExtensionLink('module'));
            }
        }

        // Styles and scripts
        $this->document->addStyle('view/stylesheet/d_bootstrap_extra/bootstrap.css');
        $this->document->addStyle('view/javascript/d_bootstrap_switch/css/bootstrap-switch.css');
        $this->document->addScript('view/javascript/d_bootstrap_switch/js/bootstrap-switch.min.js');

        $this->document->addScript('view/javascript/d_admin_menu/library/serializeObject.js');
        $this->document->addScript('view/javascript/d_admin_menu/library/jquery.nestable.nodrag.js');
        $this->document->addScript('view/javascript/d_admin_menu/library/jquery.nestable.js');
        $this->document->addScript('view/javascript/d_admin_menu/library/alertify.min.js');
        $this->document->addStyle('view/stylesheet/d_admin_menu/library/alertify/alertify.min.css');
        $this->document->addStyle('view/stylesheet/d_admin_menu/library/alertify/bootstrap-theme.cstm.min.css');
        $this->document->addScript('view/javascript/d_admin_menu/library/fontawesome-iconpicker.js');
        $this->document->addStyle('view/stylesheet/d_admin_menu/library/fontawesome-iconpicker.min.css');
        $this->document->addStyle('view/stylesheet/d_admin_menu/d_admin_menu_editor.css');

        $this->document->addScript('https://use.fontawesome.com/0b3dfb29a7.js');

        $url = '';

        if (isset($this->request->get['store_id'])) {
            $url .= '&store_id=' . $this->store_id;
        }

        if (isset($this->request->get['setting_id'])) {
            $url .= '&setting_id=' . $this->request->get['setting_id'];
        } elseif ($this->model_extension_module_d_admin_menu->getCurrentSettingId($this->codename, $this->store_id)) {
            $url .= '&setting_id=' . $this->model_extension_module_d_admin_menu->getCurrentSettingId($this->codename, $this->store_id);
        }

        if (isset($this->request->get['config'])) {
            $url .= '&config=' . $this->request->get['config'];
        }

        // Breadcrumbs
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->model_extension_d_opencart_patch_url->link('common/dashboard')
        );

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_modules'),
            'href'      => $this->model_extension_d_opencart_patch_url->getExtensionLink('module')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title_main'),
            'href' => $this->model_extension_d_opencart_patch_url->link($this->route, $url)
        );

        // Notification
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        // Heading
        $this->document->setTitle($this->language->get('heading_title_main'));
        $data['heading_title'] = $this->language->get('heading_title_main');
        $data['text_edit'] = $this->language->get('text_edit');

        // Variable
        $data['id'] = $this->codename;
        $data['route'] = $this->route;
        $data['store_id'] = $this->store_id;
        $data['support_email'] = $this->extension['support']['email'];
        $data['version'] = $this->extension['version'];
        $data['token'] = $this->model_extension_d_opencart_patch_user->getUrlToken();

        // Tab
        $data['tab_setting'] = $this->language->get('tab_setting');
        $data['tab_instruction'] = $this->language->get('tab_instruction');

        // Text
        $data['text_home'] = $this->language->get('text_home');
        $data['text_general'] = $this->language->get('text_general');
        $data['text_menu'] = $this->language->get('text_menu');
        $data['text_standart_menu'] = $this->language->get('text_standart_menu');
        $data['text_custom_menu'] = $this->language->get('text_custom_menu');
        $data['text_instruction'] = $this->language->get('text_instruction');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_enable'] = $this->language->get('text_enable');
        $data['text_select'] = $this->language->get('text_select');
        $data['text_none'] = $this->language->get('text_none');
        $data['text_replace'] = $this->language->get('text_replace');
        $data['text_inherit'] = $this->language->get('text_inherit');
        $data['text_intro_create_setting'] = $this->language->get('text_intro_create_setting');
        $data['text_default_route'] = $this->language->get('text_default_route');
        $data['text_custom_route'] = $this->language->get('text_custom_route');

        // Help
        $data['help_status'] = $this->language->get('help_status');
        $data['help_standart_menu'] = $this->language->get('help_standart_menu');
        $data['help_work_mode'] = $this->language->get('help_work_mode');

        // Button
        $data['button_save'] = $this->language->get('button_save');
        $data['button_save_and_stay'] = $this->language->get('button_save_and_stay');
        $data['button_cancel'] = $this->language->get('button_cancel');
        $data['button_clear'] = $this->language->get('button_clear');
        $data['button_add'] = $this->language->get('button_add');
        $data['button_remove'] = $this->language->get('button_remove');
        $data['button_hide'] = $this->language->get('button_hide');
        $data['button_support_email'] = $this->language->get('button_support_email');


        // Entry
        $data['entry_work_mode'] = $this->language->get('entry_work_mode');
        $data['entry_status'] = $this->language->get('entry_status');

        // Action
        $data['module_link'] = $this->model_extension_d_opencart_patch_url->link($this->route);
        $data['cancel'] = $this->model_extension_d_opencart_patch_url->getExtensionLink('module');
        $data['save_and_stay'] = $this->model_extension_d_opencart_patch_url->link($this->route.'/save_and_stay', $url);


        // Create setting if not exist
        $data['setting_id'] = $this->model_extension_module_d_admin_menu->getLastSettingId();
        if ($data['setting_id'] === false) {
            $this->createSetting();
            $data['setting_id'] = $this->model_extension_module_d_admin_menu->getLastSettingId();
        }
        $data['setting'] = $this->model_extension_module_d_admin_menu->getSetting($data['setting_id']);

        $data[$this->codename . '_status'] = $data['setting']['status'];
        $data[$this->codename . '_work_mode'] = $data['setting']['work_mode'];

        $data['standart_menu'] = $this->model_extension_d_opencart_patch_load->view($this->route . '/' . $this->codename . '_standart_section',
            array("standart_menu_data" => $data['setting']['main_menu']['menu_data'])
        );

        $data['custom_menu'] = $this->model_extension_d_opencart_patch_load->view($this->route . '/' . $this->codename . '_custom_section',
            array(
                "custom_menu_data"   => $data['setting']['custom_menu'],
                "modules_for_links"  => $this->model_extension_module_d_admin_menu->getModulesForLinks(),
                "text_phd_item_name" => $this->language->get('text_placeholder_item_name'),
                "button_custom_route_item" => $this->language->get('button_custom_route_item'),
                "text_custom_route" => $this->language->get('text_custom_route'),
                "help_custom_route" => $this->language->get('help_custom_route')
            )
        );

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->model_extension_d_opencart_patch_load->view($this->route . '/' . $this->codename . '_editor', $data));
    }



    /////////////////////////////////////////////////////////////////////////////////////
    /////////                             ASSISTING                             /////////
    /////////////////////////////////////////////////////////////////////////////////////

    private function createSetting()
    {
        $json = array();

        $setting_name = "default-setting";
        $new_setting = array(
            "name"          => $setting_name,
            "status"        => 0,
            "work_mode"     => 1,
            "main_menu"     => array(
                "version"           => VERSION,
                "menu_data"         => $this->model_extension_module_d_admin_menu->fillMenuWithLanguage($this->model_extension_module_d_admin_menu->fillMenuWithIds())
            ),
            "custom_menu"   => array()
        );

        $default_data_shopunity = array(
            "id"                    => 1,
            "icon"                  => "fa-flask",
            "name"                  => "Shopunity",
            "custom_route"          => False,
            "link"                  => "extension/module/d_shopunity",
            "children"              => array(),
            "sort_order"            => 0
        );
        $default_data_dreamvention = array(
            "id"                    => 2,
            "icon"                  => "fa-euro",
            "name"                  => "Dreamvention",
            "custom_route"          => True,
            "link"                  => "http://dreamvention.ee/",
            "children"              => array(),
            "sort_order"            => 0
        );

        $this->custom_menu_helper($new_setting['custom_menu'], $default_data_shopunity);
        $this->custom_menu_helper($new_setting['custom_menu'], $default_data_dreamvention);

        $setting_id = $this->model_extension_module_d_admin_menu->setSetting($setting_name, $new_setting, $this->store_id);

        if ($setting_id) {
            $this->session->data['success'] = $this->language->get('text_success_setting_created');
        } else {
            $json['error'] = $this->language->get('error_setting_not_created');
        }

        $this->response->setOutput(json_encode($json));
    }




    /////////////////////////////////////////////////////////////////////////////////////
    /////////                              ACTIONS                              /////////
    /////////////////////////////////////////////////////////////////////////////////////

    public function save_and_stay()
    {
        $current_setting = $this->model_extension_module_d_admin_menu->getSetting();
        $json = array();

        if (isset($this->request->post['menus-data']) && $this->validate()) {

            $menus_data = $this->request->post['menus-data'];

            $custom_nested_data = array();
            if (isset($this->request->post['custom-nested-data'])) {
                $custom_nested_data = $this->request->post['custom-nested-data'];
            }

            // STANDART MENU
            foreach ($current_setting['main_menu']['menu_data'] as $mm_key => $mm_value) {

                // first level
                if (array_key_exists('is_visible', $mm_value)) {
                    foreach ($menus_data as $md_value) {
                        if (('standart-menu[' . $mm_value['id'] . '][visibility]') == trim($md_value['name'])) {
                            $current_setting['main_menu']['menu_data'][$mm_key]['is_visible'] = 1;
                            break;
                        } else {
                            $current_setting['main_menu']['menu_data'][$mm_key]['is_visible'] = 0;
                        }
                    }
                }

                // second level
                if ($mm_value['children']) {

                    foreach ($mm_value['children'] as $mm_key_2 => $mm_value_2) {
                        if (array_key_exists('is_visible', $mm_value_2)) {
                            foreach ($menus_data as $md_value) {
                                if ('standart-menu[' . $mm_value_2['id'] . '][visibility]' == $md_value['name']) {
                                    $current_setting['main_menu']['menu_data'][$mm_key]['children'][$mm_key_2]['is_visible'] = 1;
                                    break;
                                } else {
                                    $current_setting['main_menu']['menu_data'][$mm_key]['children'][$mm_key_2]['is_visible'] = 0;
                                }
                            }
                        }


                        //third level
                        if ($mm_value_2['children']) {

                            foreach ($mm_value_2['children'] as $mm_key_3 => $mm_value_3) {
                                if (array_key_exists('is_visible', $mm_value_3)) {
                                    foreach ($menus_data as $md_value) {
                                        if ('standart-menu[' . $mm_value_3['id'] . '][visibility]' == $md_value['name']) {
                                            $current_setting['main_menu']['menu_data'][$mm_key]['children'][$mm_key_2]['children'][$mm_key_3]['is_visible'] = 1;
                                            break;
                                        } else {
                                            $current_setting['main_menu']['menu_data'][$mm_key]['children'][$mm_key_2]['children'][$mm_key_3]['is_visible'] = 0;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            // CUSTOM MENU
            $new_custom_menu = array();

            // first level
            foreach ($custom_nested_data as $cnd_value) {

                $cnd_first_children = array();
                if (array_key_exists('children', $cnd_value)) {

                    // second level
                    foreach ($cnd_value['children'] as $cnd_value_2) {

                        // third level
                        $cnd_second_children = array();
                        if (array_key_exists('children', $cnd_value_2)) {

                            foreach ($cnd_value_2['children'] as $cnd_key_3 => $cnd_value_3) {

                                foreach ($menus_data as $md_value) {
                                    if ('custom-menu[' . $cnd_value_3['id'] . '][icon]' == $md_value['name']) {
                                        $fc_icon = $md_value['value'];
                                    }
                                    if ('custom-menu[' . $cnd_value_3['id'] . '][name]' == $md_value['name']) {
                                        $fc_name = $md_value['value'];
                                    }
                                    if ('custom-menu[' . $cnd_value_3['id'] . '][item_link]' == $md_value['name']) {
                                        $fc_link = $md_value['value'];
                                    }
                                    if ('custom-menu[' . $cnd_value_3['id'] . '][custom_route]' == $md_value['name']) {
                                        $fc_cr = $md_value['value'];
                                    }
                                }

                                $second_data = array(
                                    "id"                    => $cnd_value_3['id'],
                                    "icon"                  => $fc_icon,
                                    "name"                  => $fc_name,
                                    "custom_route"          => isset($fc_cr) ? $fc_link : False,
                                    "link"                  => $fc_link,
                                    "children"              => array(),
                                    "sort_order"            => 0
                                );
                                $this->custom_menu_helper($cnd_second_children, $second_data);
                                unset($fc_icon, $fc_name, $fc_link, $fc_cr);
                            }
                        }

                        foreach ($menus_data as $md_value) {
                            if ('custom-menu[' . $cnd_value_2['id'] . '][icon]' == $md_value['name']) {
                                $fc_icon = $md_value['value'];
                            }
                            if ('custom-menu[' . $cnd_value_2['id'] . '][name]' == $md_value['name']) {
                                $fc_name = $md_value['value'];
                            }
                            if ('custom-menu[' . $cnd_value_2['id'] . '][item_link]' == $md_value['name']) {
                                $fc_link = $md_value['value'];
                            }
                            if ('custom-menu[' . $cnd_value_2['id'] . '][custom_route]' == $md_value['name']) {
                                $fc_cr = $md_value['value'];
                            }
                        }

                        $first_data = array(
                            "id"                    => $cnd_value_2['id'],
                            "icon"                  => $fc_icon,
                            "name"                  => $fc_name,
                            "custom_route"          => isset($fc_cr) ? $fc_link : False,
                            "link"                  => $fc_link,
                            "children"              => $cnd_second_children,
                            "sort_order"            => 0
                        );
                        $this->custom_menu_helper($cnd_first_children, $first_data);
                        unset($fc_icon, $fc_name, $fc_link, $fc_cr);
                    }
                }

                foreach ($menus_data as $md_value) {
                    if ('custom-menu[' . $cnd_value['id'] . '][icon]' == $md_value['name']) {
                        $fc_icon = $md_value['value'];
                    }
                    if ('custom-menu[' . $cnd_value['id'] . '][name]' == $md_value['name']) {
                        $fc_name = $md_value['value'];
                    }
                    if ('custom-menu[' . $cnd_value['id'] . '][item_link]' == $md_value['name']) {
                        $fc_link = $md_value['value'];
                    }
                    if ('custom-menu[' . $cnd_value['id'] . '][custom_route]' == $md_value['name']) {
                        $fc_cr = $md_value['value'];
                    }
                }

                $_data = array(
                    "id"                    => $cnd_value['id'],
                    "icon"                  => $fc_icon,
                    "name"                  => $fc_name,
                    "custom_route"          => isset($fc_cr) ? $fc_link : False,
                    "link"                  => $fc_link,
                    "children"              => $cnd_first_children,
                    "sort_order"            => 0
                );
                $this->custom_menu_helper($new_custom_menu, $_data);
                unset($fc_icon, $fc_name, $fc_link, $fc_cr);
            }

            $current_setting['custom_menu'] = $new_custom_menu;

            // SET STATUS
            foreach ($menus_data as $md_value) {
                if (($this->codename . '_status') == trim($md_value['name'])) {
                    $current_setting['status'] = 1;
                    break;
                } else {
                    $current_setting['status'] = 0;
                }
            }

            // SET WORK MODE
            foreach ($menus_data as $md_value) {
                if (($this->codename . '_work_mode') == trim($md_value['name'])) {
                    $current_setting['work_mode'] = 1;
                    break;
                } else {
                    $current_setting['work_mode'] = 0;
                }
            }

            // SAVE SETTING
            $setting_id = $this->model_extension_module_d_admin_menu->editSetting($this->model_extension_module_d_admin_menu->getLastSettingId(), $current_setting);
            $this->session->data['success'] = $this->language->get('text_success');
            $json['setting_id'] = $setting_id;
        }

        $json['error'] = $this->error;

        if (isset($this->session->data['success'])) {
            $json['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $json['success'] = '';
        }

        // ON-OFF MODULE
        $this->uninstallEvents();
        if ($current_setting['status'] == 1) {
            $this->installEvents();
        }

        $this->response->setOutput(json_encode($json));
    }

    // ADD MENU ITEM
    public function custom_menu_helper(&$ref_array, $data)
    {
        $custom_route = (isset($data['custom_route']) && $data['custom_route'] != False) ? $data['link'] : False;
        $href_type = $this->model_extension_module_d_admin_menu->get_href_type($data['link']);
        $href = ($href_type == 'direct_link') ? $data['link'] : ('index.php?route=' .$data['link']. '&');
        $children = (isset($data['children'])) ? $data['children'] : array();
        $sort_order = (isset($data['sort_order'])) ? $data['sort_order'] : 0;

        $ref_array[] = array(
            'id'            => $data['id'],
            'icon'          => $data['icon'],
            'name'          => $data['name'],
            'custom_route'  => $custom_route,
            'href'          => $href,
            'href_type'     => $href_type,
            'children'      => $children,
            'sort_order'    => $sort_order
        );
    }



    /////////////////////////////////////////////////////////////////////////////////////
    /////////                              INSTALL                              /////////
    /////////////////////////////////////////////////////////////////////////////////////

    private function validate($permission = 'modify')
    {
        if (!$this->user->hasPermission($permission, $this->route)) {
            $this->error['warning'] = $this->language->get('error_permission');
            return false;
        }

        return true;
    }

    public function install()
    {
        if ($this->d_shopunity) {
            $this->load->model('extension/d_shopunity/mbooth');
            $this->model_extension_d_shopunity_mbooth->installDependencies($this->codename);
        }

        $this->load->model($this->route);
        $this->model_extension_module_d_admin_menu->installDatabase();
        $this->model_extension_module_d_admin_menu->modification_handler(1);
    }

    public function uninstall()
    {
        $this->load->model($this->route);
        $this->model_extension_module_d_admin_menu->uninstallDatabase();
        $this->model_extension_module_d_admin_menu->modification_handler(0);

        $this->uninstallEvents();
    }

    public function installEvents()
    {
        $this->load->model('extension/module/d_event_manager');
        if (!$this->model_extension_module_d_event_manager->isCompatible()) {
            $this->model_extension_module_d_event_manager->installCompatibility();
        }

        $this->model_extension_module_d_event_manager->addEvent('d_admin_menu', 'admin/view/common/column_left/after', $this->route . '/view_column_left_after');
        $this->model_extension_module_d_event_manager->addEvent('d_admin_menu', 'admin/view/common/column_left/before', $this->route . '/view_column_left_before');
        $this->model_extension_module_d_event_manager->addEvent('d_admin_menu_script', 'admin/view/common/header/before', $this->route . '/view_column_left_scripts_before');
    }

    public function uninstallEvents()
    {
        $this->load->model('extension/module/d_event_manager');
        $this->model_extension_module_d_event_manager->deleteEvent('d_admin_menu');
        $this->model_extension_module_d_event_manager->deleteEvent('d_admin_menu_script');
    }




    /////////////////////////////////////////////////////////////////////////////////////
    /////////                               VIEW                                /////////
    /////////////////////////////////////////////////////////////////////////////////////

    public function display_menu($display_menu_setting)
    {
        $standart_menu = array();
        if ($display_menu_setting['work_mode'] == 0) {
            $standart_menu = $display_menu_setting['main_menu']['menu_data'];
        }
        $custom_menu = $display_menu_setting['custom_menu'];

        foreach ($custom_menu as $custom_md) {
            $standart_menu[] = $custom_md;
        }

        // fill with lang on every load
        $standart_menu = $this->model_extension_module_d_admin_menu->fillMenuWithLanguage($standart_menu);

        $data['config']['menus'] = $standart_menu;

        $data['style_prefix'] = '';
        if (VERSION >= '3.0.0.0') {
            $data['style_prefix'] = '_3x';
        }

        $data['token'] = $this->model_extension_d_opencart_patch_user->getUrlToken();
        return $this->model_extension_d_opencart_patch_load->view($this->route . '/' . $this->codename, $data);
    }

    public function view_column_left_after(&$route, &$data, &$output)
    {
        $display_menu_setting = $this->model_extension_module_d_admin_menu->getSetting();
        $admin_menu = $this->load->controller($this->route . '/display_menu', $display_menu_setting);

        if ($display_menu_setting['work_mode'] == 0) {

            $html_dom = new d_simple_html_dom();
            $html_dom->load($output, $lowercase = true, $stripRN = false, $defaultBRText = DEFAULT_BR_TEXT);

            if ($html_dom) {
                $html_dom->find('#menu', 0)->outertext = $admin_menu;
            }

            $output = (string)$html_dom;
        }
    }

    public function view_column_left_before(&$route, &$data, &$output)
    {
        $display_menu_setting = $this->model_extension_module_d_admin_menu->getSetting();
        $admin_menu = $this->load->controller($this->route . '/display_menu', $display_menu_setting);

        if ($display_menu_setting['work_mode'] == 1) {
            $data['d_admin_menu'] = $admin_menu;
        }
    }

    public function view_column_left_scripts_before(&$route, &$data, &$output)
    {
        // Add fontawesome icons to COLUMN_LEFT
        $data['scripts'][] = 'https://use.fontawesome.com/0b3dfb29a7.js';
    }


}
