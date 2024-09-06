<?php

namespace Database\Seeders\Themes\Grocery;

use Database\Seeders\Themes\Main\ThemeOptionSeeder as MainThemeOptionSeeder;

class ThemeOptionSeeder extends MainThemeOptionSeeder
{
    protected function getData(): array
    {
        return [
            ...parent::getData(),
            'primary_color' => '#678E61',
            'tp_primary_font' => 'Jost',
            'header_style' => 5,
            'ecommerce_product_item_style' => 5,
            'section_title_shape_decorated' => 'style-3',
            'header_top_background_color' => '#fff',
            'header_top_text_color' => '#010f1c',
            'header_main_background_color' => '#678E61',
            'header_main_text_color' => '#fff',
        ];
    }
}
