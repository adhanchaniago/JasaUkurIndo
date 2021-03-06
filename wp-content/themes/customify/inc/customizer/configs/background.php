<?php
class Customify_Advanced_Styling_Background
{

    function __construct()
    {
        add_filter('customify/customizer/config', array($this, 'config'), 100 );
    }

    function config( $configs = array() ){

        $config  = array(

            array(
                'name'       => 'background',
                'type'       => 'section',
                'priority' => 20,
                'panel'       => 'styling_panel',
                'title'      => __( 'Background', 'customify' ),
            ),

            array(
                'name'       => 'background',
                'type'       => 'styling',
                'section'    => 'background',
                'title'      => __( 'Site Background', 'customify' ),
                'selector'   => array(
                    'normal'  => "body",
                ),
                'css_format' => 'styling', // styling
                'fields'     => array(
                    'normal_fields' => array(
                        'text_color' => false,
                        'link_color' => false,
                        'padding'     => false,
                        'margin'     => false,
                        'border_heading' => false,
                        'border_width' => false,
                        'border_color' => false,
                        'border_radius' => false,
                        'box_shadow' => false,
                        'border_style'  => false
                    ),
                    'hover_fields'  => false,

                )
            ),

        );

        return array_merge( $configs, $config );

    }

}

new Customify_Advanced_Styling_Background();