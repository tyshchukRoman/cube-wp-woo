<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Site Settings')
  
  ->add_tab('Global Settings', [
    Field::make('text', 'cta-link', 'CTA (Link)'),
  ])

  ->add_tab('Contacts', [
    Field::make('text', 'location', 'Location')->set_width('50%'),
    Field::make('text', 'location-url', 'Location (URL)')->set_width('50%'),

    Field::make('text', 'phone', 'Phone')->set_width('50%'),
    Field::make('text', 'phone-url', 'Phone (URL)')->set_width('50%'),

    Field::make('text', 'email', 'Email')->set_width('50%'),
    Field::make('text', 'email-url', 'Email (URL)')->set_width('50%'),
  ])

  ->add_tab('Social Media', [
    Field::make('text', 'instagram', 'Instagram (URL)'),
    Field::make('text', 'tik-tok', 'Tik-Tok (URL)'),
    Field::make('text', 'whatsapp', 'WhatsApp (URL)'),
    Field::make('text', 'viber', 'Viber (URL)')
  ])

  ->add_tab('Footer', [
    Field::make('rich_text', 'footer-text', 'Footer Description')
  ])

  ->add_tab('Page 404', [
    Field::make('rich_text', '404__content', 'Content'),
  ])

  ->add_tab('Scripts', [
    Field::make('header_scripts', 'header-scripts', 'Header Scripts'),
    Field::make('footer_scripts', 'footer-scripts', 'Footer Scripts')
  ]);
