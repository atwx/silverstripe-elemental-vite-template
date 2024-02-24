<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;

/**
 * Class \App\Elements\TextImageElement
 *
 * @property string $Text
 * @property string $Variant
 * @property int $ImageID
 * @method \SilverStripe\Assets\Image Image()
 */
class TextImageElement extends BaseElement
{
    private static $db = [
        "Text" => "HTMLText",
        "Variant" => "Varchar(20)",
    ];

    private static $has_one = [
        "Image" => Image::class,
    ];

    private static $owns = [
        "Image"
    ];

    private static $field_labels = [
        "Text" => "Text",
        "Image" => "Bild",
    ];

    private static $table_name = 'TextImageElement';
    private static $icon = 'font-icon-block-promo-3';

    public function getType()
    {
        return "Text + Bild";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->replaceField('Variant', new DropdownField('Variant', 'Variante', [
            "left" => "Bild links",
            "right" => "Bild rechts",
        ]));
        return $fields;
    }
}
