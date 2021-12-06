<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



// tabs
    Container::make("post_meta", "Виды профилей")
    // ->set_context('side')
    ->set_priority("high")
    ->show_on_template("templates/front-page.php")
    // video box
    ->add_fields( array(
        Field::make( 'complex', 'views', 'кнопка  максимум 10шт' )->set_layout( 'tabbed-horizontal' )->set_max( 10 )
            ->add_fields( array(
                Field::make( 'textarea', 'view_title', __( ' Заголовок кнопки' ))
                ->set_width( 15 )
                ->set_required(true),
                Field::make( 'image', 'view_icon', __( ' Изображение' ) )
                ->set_width( 10 ),
                Field::make( 'textarea', 'view_alt', __( ' "Alt" Фонового изображения' ))
                ->set_width( 15 ),
                Field::make( 'rich_text', 'view_description', __( ' Описание' ))
                ->set_width( 60 )
                ->set_required(true),
            ) )
    ) );