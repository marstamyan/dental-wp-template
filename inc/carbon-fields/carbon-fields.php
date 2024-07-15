<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options()
{

    // main options
    Container::make( 'theme_options', 'theme_options', __( 'Theme Options' ) )
        ->add_fields( [
            Field::make( 'separator', 'intro_separator', __( 'Intro section', 'dental' ) ),
            Field::make( 'text', 'intro_title'.carbon_lang_prefix(), __( 'Intro title', 'dental' ) ),
            Field::make( 'text', 'intro_desc'.carbon_lang_prefix(), __( 'Intro desc', 'dental' ) ),
            Field::make( 'text', 'intro_btn_text'.carbon_lang_prefix(), __( 'Intro button text', 'dental' ) ),
            Field::make( 'image', 'intro_img', __( 'Intro image', 'dental' ) ),
            Field::make( 'separator', 'services_separator', __( 'Services section', 'dental' ) ),
            Field::make( 'text', 'services_title'.carbon_lang_prefix(), __( 'Services title', 'dental' ) ),
            Field::make( 'text', 'services_subtitle'.carbon_lang_prefix(), __( 'Services subtitle', 'dental' ) ),
            Field::make( 'textarea', 'services_desc'.carbon_lang_prefix(), __( 'Services description', 'dental' ) ),
            Field::make( 'text', 'services_list_title'.carbon_lang_prefix(), __( 'Services list title', 'dental' ) ),
            Field::make( 'complex', 'services_list'.carbon_lang_prefix(), __( 'Services list', 'dental' ) )
                ->add_fields( [
                    Field::make( 'text', 'services_list_item', __( 'Services list item', 'dental' ) )
                ] )->set_collapsed( true ),
            Field::make( 'separator', 'advantages_separator', __( 'Advantages section', 'dental' ) ),
            Field::make( 'image', 'advantage_1_icon', __( 'Advantage 1 Icon', 'dental' ) )->set_width( '20%' ),
            Field::make( 'text', 'advantage_1_title'.carbon_lang_prefix(), __( 'Advantage 1 Title', 'dental' ) )->set_width( '40%' ),
            Field::make( 'textarea', 'advantage_1_text'.carbon_lang_prefix(), __( 'Advantage 1 Text', 'dental' ) )->set_width( '40%' ),

            Field::make( 'image', 'advantage_2_icon', __( 'Advantage 2 Icon', 'dental' ) )->set_width( '20%' ),
            Field::make( 'text', 'advantage_2_title'.carbon_lang_prefix(), __( 'Advantage 2 Title', 'dental' ) )->set_width( '40%' ),
            Field::make( 'textarea', 'advantage_2_text'.carbon_lang_prefix(), __( 'Advantage 2 Text', 'dental' ) )->set_width( '40%' ),

            Field::make( 'image', 'advantage_3_icon', __( 'Advantage 3 Icon', 'dental' ) )->set_width( '20%' ),
            Field::make( 'text', 'advantage_3_title'.carbon_lang_prefix(), __( 'Advantage 3 Title', 'dental' ) )->set_width( '40%' ),
            Field::make( 'textarea', 'advantage_3_text'.carbon_lang_prefix(), __( 'Advantage 3 Text', 'dental' ) )->set_width( '40%' ),
            Field::make( 'separator', 'pricing_separator', __( 'Pricing section', 'dental' ) ),
            Field::make( 'text', 'pricing_title'.carbon_lang_prefix(), __( 'Pricing Title', 'dental' ) )->set_width( '50%' ),
            Field::make( 'textarea', 'pricing_description'.carbon_lang_prefix(), __( 'Pricing Description', 'dental' ) )->set_width( '50%' ),
            Field::make( 'complex', 'pricing_list'.carbon_lang_prefix(), __( 'Pricing List', 'dental' ) )
                ->add_fields( [
                    Field::make( 'text', 'pricing_item_name', __( 'Pricing Item Name', 'dental' ) ),
                    Field::make( 'text', 'pricing_item_price', __( 'Pricing Item Price', 'dental' ) ),
                ] )->set_collapsed( true ),
            Field::make( 'separator', 'reviews_separator', __( 'Reviews section', 'dental' ) ),
            Field::make( 'text', 'reviews_title'.carbon_lang_prefix(), __( 'Reviews Title', 'dental' ) ),
            Field::make( 'complex', 'reviews_list'.carbon_lang_prefix(), __( 'Reviews List', 'dental' ) )
                ->add_fields( [
                    Field::make( 'image', 'review_avatar', __( 'Review Avatar', 'dental' ) ),
                    Field::make( 'textarea', 'review_text', __( 'Review Text', 'dental' ) ),
                    Field::make( 'text', 'review_author', __( 'Review Author', 'dental' ) ),
                ] )
                ->set_collapsed( true ),
        ] );

    // parent page Contact 
    Container::make( 'theme_options', __( 'Contact info', 'dental' ) )
        ->set_page_parent( 'crb_carbon_fields_container_theme_options.php' )
        ->add_fields( [
            Field::make( 'text', 'address_text'.carbon_lang_prefix(), __( 'Address', 'dental' ) ),
            Field::make( 'text', 'phone', __( 'Phone', 'dental' ) ),
            Field::make( 'text', 'mail', __( 'Email', 'dental' ) ),
            Field::make( 'text', 'twitter', __( 'Twitter', 'dental' ) ),
            Field::make( 'text', 'instagram', __( 'Instagram', 'dental' ) ),
            Field::make( 'text', 'vk', __( 'VK', 'dental' ) ),
            Field::make( 'textarea', 'map_code', __( 'Map code', 'dental' ) ),
        ] );

    // footer
    Container::make( 'theme_options', __( 'Footer info', 'dental' ) )
        ->set_page_parent( 'crb_carbon_fields_container_theme_options.php' )
        ->add_fields( [
            field::make( 'complex', 'footer_services'.carbon_lang_prefix(), __( 'Footer services' ) )
                ->add_fields( [
                    Field::make( 'text', 'footer_services_item', __( 'Footer services text' ) ),
                ] ),
            field::make( 'complex', 'working_time'.carbon_lang_prefix(), __( 'Working time' ) )
            ->add_fields( [
                Field::make( 'text', 'working_time_day', __( 'Schedule Day' ) ),
                Field::make( 'text', 'working_time', __( 'Schedule Time' ) ),
            ] )
            ->set_collapsed( true ),

        ] );

    //staff fields
    Container::make( 'post_meta', 'staff_fields', __( 'Staff Fields' ) )
        ->where( 'post_type', '=', 'staff' )
        ->add_fields( [
            Field::make( 'complex', 'education_list', __( 'Education List' ) )
                ->add_fields( [
                    Field::make( 'textarea', 'education_item', __( 'Education Item' ) ),
                ] )
                ->set_collapsed( true ),
            Field::make( 'complex', 'experience_list', __( 'Experience List' ) )
                ->add_fields( [
                    Field::make( 'textarea', 'experience_item', __( 'Experience Item' ) ),
                ] )
                ->set_collapsed( true ),
            Field::make( 'complex', 'schedule_list', __( 'Schedule List' ) )
                ->add_fields( [
                    Field::make( 'text', 'schedule_day', __( 'Schedule Day' ) ),
                    Field::make( 'text', 'schedule_time', __( 'Schedule Time' ) ),
                ] )
                ->set_collapsed( true ),
            Field::make( 'text', 'staff_profession', __( 'Profession' ) ),
            Field::make( 'text', 'phone_number', __( 'Phone Number' ) ),
            Field::make( 'text', 'email_address', __( 'Email Address' ) ),
            Field::make( 'text', 'social_twitter', __( 'Twitter URL' ) ),
            Field::make( 'text', 'social_instagram', __( 'Instagram URL' ) ),
            Field::make( 'text', 'social_vk', __( 'VK URL' ) ),
        ] );
}

