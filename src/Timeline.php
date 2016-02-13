<?php

namespace vivekmarakana\widgets;

/**
 * This is just an example.
 */
class Timeline extends \yii\base\Widget
{
    const WIDGET_NAME = 'history';

    public $items = [];
    public $icon_color = "#0073B7";
    public $last_icon_color = "#D2D6DE";
    public $icon_font_color = "#FFF";
    public $last_icon_font_color = "#666";
    public $different_last_icon = true;
    public $collapsible = false;
    public $id;

    public function run()
    {
        return $this->render('timeline', [
            'history' => $this->items,
            'icon_color' => $this->icon_color,
            'last_icon_color' => $this->last_icon_color,
            'icon_font_color' => $this->icon_font_color,
            'last_icon_font_color' => $this->last_icon_font_color,
            'different_last_icon' => $this->different_last_icon,
            'collapsible' => $this->collapsible,
            'id' => (!empty($this->id)) ? $this->id : 'timeline-widget-' . $this->getId()
        ]);
    }
}
