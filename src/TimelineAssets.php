<?php

namespace vivekmarakana\widgets;

/**
 * Asset bundle for Timeline Widget
 *
 * @author Vivek Marakana <vivek.marakana@gmail.com>
 */
class TimelineAsset extends \yii\web\AssetBundle
{
    public $depends = [
        '\rmrevin\yii\fontawesome\AssetBundle'
    ];

    public $css = [
        'timeline.css',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        parent::init();
    }

    /**
     * Sets the source path if empty
     * @param string $path the path to be set
     */
    protected function setSourcePath($path)
    {
        if (empty($this->sourcePath)) {
            $this->sourcePath = $path;
        }
    }
}
?>
