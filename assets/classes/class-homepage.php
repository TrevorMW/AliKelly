<?php

class Homepage extends WP_ACF_CPT
{

    public $homeID;

    /**
     * 
     * __construct function.
     *
     * @access public
     * @param mixed $action (default: null)
     * @return void
     */
    public function __construct($id)
    {
        if (is_int($id)) {
            $this->homeID = $id;
        }
    }

    public function getGlobalSetting($key)
    {
        $data = null;

        if ($key !== null) {
            $data = get_field($key, $this->postID);
        }

        return $data;
    }

    public function getHomepageHero()
    {
        $html = '';

        $data = array( 'hero' => array(
            'desktopImage'  => get_field('hero_desktop_image', $this->homeID),
            'mobileImage'   => get_field('hero_mobile_image',  $this->homeID),
            'text'          => get_field('hero_overlay_text',  $this->homeID)
        ));

        //var_dump($data);

        $html .= Template_Helper::loadView('hero', '/assets/views/', $data);

        return $html;
    }
}
