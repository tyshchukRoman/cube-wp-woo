<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', __('Popup'))

  ->add_fields([
    Field::make('text', 'id', 'Link')->set_width('50%'),
    Field::make('text', 'autoopen', 'Autoopen time')
      ->set_width('50%')
      ->set_attribute('type', 'number')
      ->set_attribute('placeholder', 'time in seconds'),
    Field::make('rich_text', 'title', 'Title'),
    Field::make('association', 'form', 'Form')
      ->set_types([
        [
          'type' => 'post',
          'post_type' => 'wpcf7_contact_form',
        ]
      ])
      ->set_max(1)
  ])

  ->where( 'post_type', '=', 'popup' );
