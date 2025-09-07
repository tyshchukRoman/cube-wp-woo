<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', __('Additional Page Settings'))

  ->add_tab('Optimization', [
    Field::make('textarea', 'head-html', 'Head HTML'),
  ])

  ->where( 'post_type', '=', 'page' );
