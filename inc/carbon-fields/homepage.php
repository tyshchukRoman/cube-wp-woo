<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', __('Home Fields'))

  ->add_tab('Hero', [
    Field::make('text', 'main-hero__title', 'Title'),
    Field::make('image', 'main-hero__image', 'Image'),
    Field::make('text', 'main-hero__description', 'Description'),
    Field::make('text', 'main-hero__button-1-url', 'Button 1 (URL)')->set_width('50%'),
    Field::make('text', 'main-hero__button-1-text', 'Button 1 (Text)')->set_width('50%'),
    Field::make('text', 'main-hero__button-2-url', 'Button 2 (URL)')->set_width('50%'),
    Field::make('text', 'main-hero__button-2-text', 'Button 2 (Text)')->set_width('50%'),
  ])

  ->where( 'post_type', '=', 'page' )
  ->where('post_id', '=', get_option( 'page_on_front' ));
