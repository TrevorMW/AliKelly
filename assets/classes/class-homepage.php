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

    public function getHomepageHero()
    {
        $html = '';

        $data = array( 'hero' => array(
            'desktopImage'  => get_field('hero_desktop_image', $this->homeID),
            'mobileImage'   => get_field('hero_mobile_image',  $this->homeID),
            'text'          => get_field('hero_overlay_text',  $this->homeID)
        ));

        $html .= Template_Helper::loadView('hero', '/assets/views/', $data);

        return $html;
    }

    public function getSocialMediaOutlets() {
        $html = '';

        $settings = new Global_Settings($post->ID);

        $outlets = $settings->getGlobalSetting('social_media_outlets');

        if(is_array($outlets)){
            
            foreach( $outlets as $outlet ){

                $data = array('outlet' => array(
                    'name' => $outlet['outlet_name'],
                    'url' => $outlet['outlet_url']
                ));

                $html .= Template_Helper::loadView('social-media', '/assets/views/', $data);
            }
        }

        return $html;
    }
}
