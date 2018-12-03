<?php

class ModelExtensionModuleDAdminMenu extends Model
{
    private $codename = 'd_admin_menu';
    private $route = 'extension/module/d_admin_menu';

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->load->language($this->route);
        $this->load->model('extension/d_opencart_patch/modification');

        if(!defined('DIR_ROOT')){
            define('DIR_ROOT', substr_replace(DIR_SYSTEM, '/', -8));
        }
    }

    public function installDatabase()
    {
        // install oc_dam_setting ('dam' for 'Dreamvention Admin Menu')
        $query = $this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."dam_setting` (
        `setting_id` int(11) NOT NULL AUTO_INCREMENT,
        `store_id` int(11) NOT NULL,
        `name` varchar(32) NOT NULL,
        `value` text NOT NULL,
        PRIMARY KEY (`setting_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");
    }

    public function uninstallDatabase()
    {
        $query = $this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."dam_setting`");
    }

    public function getCurrentSettingId($id, $store_id = 0)
    {
        $this->load->model('setting/setting');
        $setting = $this->model_setting_setting->getSetting($id, $store_id);

        if(isset($this->request->get['setting_id'])){
            $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "dam_setting`
                WHERE store_id = '" . (int)$store_id . "'
                AND setting_id = '" . (int)$this->request->get['setting_id'] . "'" );
                if($query->row){
                    return $query->row['setting_id'];
                }
        }

        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "dam_setting`
            WHERE store_id = '" . (int)$store_id . "'" );
        if($query->row){
            return $query->row['setting_id'];
        }

        return false;
    }

    public function getSettingName($setting_id)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "dam_setting`
            WHERE setting_id = '" . (int)$setting_id . "'" );
        if(isset($query->row['name'])){
            return $query->row['name'];
        }else{
            return false;
        }
    }

    public function getSetting($setting_id = false)
    {
        if (!$setting_id) {
            $setting_id = $this->getLastSettingId();
        }

        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "dam_setting`
            WHERE setting_id = '" . (int)$setting_id . "'" );

        $result = $query->row;
        if(isset($result['value'])){
            $result['value'] = json_decode($result['value'], true);
        }

        return $result['value'];
    }

    public function getSettings($store_id)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "dam_setting`
            WHERE store_id = '" . (int)$store_id . "'"  );

        $results = $query->rows;

        foreach ($results as $key => $result) {
            $results[$key]['value'] = json_decode($result['value'], true);
        }

        return $results;
    }

    public function getLastSettingId()
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "dam_setting`
            ORDER BY setting_id DESC LIMIT 1");

        $result = $query->row;
        if(isset($result['setting_id'])){
            return (int)$result['setting_id'];
        } else {
            return false;
        }
    }

    public function setSetting($setting_name, $setting_value, $store_id = 0)
    {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "dam_setting`
            SET store_id = '" . (int)$store_id . "',
                `name` = '" . $this->db->escape($setting_name) . "',
                `value` = '" . $this->db->escape(json_encode($setting_value)) . "'");
        return $this->db->getLastId();
    }


    public function editSetting($setting_id, $data)
    {
        $this->db->query("UPDATE `" . DB_PREFIX . "dam_setting`
                SET `name` = '" . $this->db->escape($data['name']) . "',
                    `value` = '" . $this->db->escape(json_encode($data)) . "'
                WHERE setting_id = '" . (int)$setting_id . "'");
        return $setting_id;
    }

    public function deleteSetting($setting_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "dam_setting` WHERE setting_id = '" . (int)$setting_id . "'");
    }


    /////////////////////////////////////////////////////////////////////////////////////
    /////////                         HELPER FUNCTIONS                          /////////
    /////////////////////////////////////////////////////////////////////////////////////

    public function some_sort(&$some_array)
    {
        usort($some_array, function ($a, $b)
        {
            if ($a['sort_order'] == $b['sort_order']) {
                return 0;
            }
            return ($a['sort_order'] < $b['sort_order']) ? -1 : 1;
        });
    }

    public function getAppropriateConfig()
    {
        if ((VERSION >= '2.0.0.0') && (VERSION < '2.0.3.1')) {

            $this->load->config('d_admin_menu/d_admin_menu_201');

        } elseif ((VERSION >= '2.0.3.1') && (VERSION < '2.1.0.0')) {

            $this->load->config('d_admin_menu/d_admin_menu_203');

        } elseif ((VERSION >= '2.1.0.0') && (VERSION < '2.3.0.0')) {

            $this->load->config('d_admin_menu/d_admin_menu_210');

        } elseif ((VERSION >= '2.3.0.0') && (VERSION < '3.0.0.0')) {

            $this->load->config('d_admin_menu/d_admin_menu_230');

        } elseif (VERSION >='3.0.0.0') {

            $this->load->config('d_admin_menu/d_admin_menu_302');
        }
        return $this->config->get('menu_data');
    }

    public function getLanguage($menu_item_lng_name)
    {
        $config = $this->getAppropriateConfig();
        $lang_path = $config['lang_path'];

        $lng = new Language();
        $lng->load($lang_path);

        if ($lng->get($menu_item_lng_name) &&
            $lng->get($menu_item_lng_name) != $menu_item_lng_name) {
            return $lng->get($menu_item_lng_name);
        } else {
            return false;
        }
    }

    public function fillMenuWithIds()
    {
        $standart_menu = $this->getAppropriateConfig()['menu'];

        $temp_id = 1;

        foreach ($standart_menu as $sm_key => $sm_value) {
            $standart_menu[$sm_key]['id'] = $temp_id;
            $temp_id = $temp_id + 1;

            foreach ($sm_value['children'] as $sm_key_2 => $sm_value_2) {
                $standart_menu[$sm_key]['children'][$sm_key_2]['id'] = $temp_id;
                $temp_id = $temp_id + 1;

                foreach ($sm_value_2['children'] as $sm_key_3 => $sm_value_3) {
                    $standart_menu[$sm_key]['children'][$sm_key_2]['children'][$sm_key_3]['id'] = $temp_id;
                    $temp_id = $temp_id + 1;
                }
            }
        }

        return $standart_menu;
    }

    public function fillMenuWithLanguage($standart_menu)
    {
        // first level
        foreach ($standart_menu as $sm_key => $sm_value) {

            if (array_key_exists('lng_name', $sm_value)) {
                if ($this->getLanguage($sm_value['lng_name']) !== false) {
                    $standart_menu[$sm_key]['name'] = $this->getLanguage($sm_value['lng_name']);
                }
            }

            if ($sm_value['children']) {

                // second level
                foreach ($sm_value['children'] as $sm_key_2 => $sm_value_2) {

                    if (array_key_exists('lng_name', $sm_value_2)) {
                        if ($this->getLanguage($sm_value_2['lng_name']) !== false) {
                            $standart_menu[$sm_key]['children'][$sm_key_2]['name'] = $this->getLanguage($sm_value_2['lng_name']);
                        }
                    }

                    if ($sm_value_2['children']) {

                        // third level
                        foreach ($sm_value_2['children'] as $sm_key_3 => $sm_value_3) {

                            if (array_key_exists('lng_name', $sm_value_3)) {
                                if ($this->getLanguage($sm_value_3['lng_name']) !== false) {
                                    $standart_menu[$sm_key]['children'][$sm_key_2]['children'][$sm_key_3]['name'] = $this->getLanguage($sm_value_3['lng_name']);
                                }
                            }
                        }
                    }
                }
            }
        }

        return $standart_menu;
    }

    public function getModulesForLinks()
    {
        $tmp_mdls_data = array();

        // before 230 fix
        $path_fix = (VERSION >= '2.3.0.0') ? 'extension/' : '';

        $cat_files = glob(DIR_APPLICATION . 'controller/extension/'.$path_fix.'*.php', GLOB_BRACE);

        foreach ($cat_files as $c_file) {
            $extension = basename($c_file, '.php');

            // Compatibility code for old extension folders
            $this->load->language('extension/' . $path_fix . $extension);
            if ($this->user->hasPermission('access', 'extension/' . $path_fix . $extension)) {
                $cat_files = glob(DIR_APPLICATION . 'controller/' . $path_fix . $extension . '/*.php', GLOB_BRACE);

                $tmp_mdls_data[] = array(
                    'code' => $extension,
                    'text' => $this->language->get('heading_title'),
                    'extra'=> $this->getExtensionList($extension)
                );
            }

        }

        return $tmp_mdls_data;
    }

    private function getExtensionList($category_shortname)
    {
        $extra_data = array();

        // before 230 fix
        $path_fix = (VERSION >= '2.3.0.0') ? 'extension/' : '';

        // ,' . $category_shortname . '

        // Compatibility code for old extension folders
        $files = glob(DIR_APPLICATION . 'controller/{'. $path_fix . $category_shortname . '}/*.php', GLOB_BRACE);

        if ($files) {
            foreach ($files as $file) {
                $extension = basename($file, '.php');

                $this->load->language($path_fix . $category_shortname . '/' . $extension);

                $extra_data[] = array(
                    'name'          => $this->language->get('heading_title'),
                    'shortname'     => $extension,
                    'edit'          => $path_fix . $category_shortname .'/' . $extension
                );
            }
        }

        $sort_order = array();

        foreach ($extra_data as $key => $value) {
            $sort_order[$key] = $value['name'];
        }

        array_multisort($sort_order, SORT_ASC, $extra_data);

        return $extra_data;
    }

    public function get_href_type($link)
    {
        preg_match("/(https?:\/\/).+/", $link, $matches);

        if ($matches) {
            return 'direct_link';
        } else {
            return 'route';
        }
    }

    public function modification_handler($status)
    {
        $this->model_extension_d_opencart_patch_modification->setModification('d_admin_menu.xml', $status);
        $this->model_extension_d_opencart_patch_modification->refreshCache();
    }

}
