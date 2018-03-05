<?php

namespace ereminmdev\yii2\noty;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

/**
 * Class NotyWidget
 * @package ereminmdev\yii2\noty
 */
class NotyWidget extends Widget
{
    /**
     * @var string notification text
     */
    public $text = '';
    /**
     * @var string alert type
     * @see https://ned.im/noty/#/types
     */
    public $type = 'alert';
    /**
     * @var string layout
     * @see https://ned.im/noty/#/types
     */
    public $layout = 'topRight';
    /**
     * @var string theme
     * @see https://ned.im/noty/#/themes
     */
    public $theme = 'bootstrap-v3';
    /**
     * @var array client options
     * @see https://ned.im/noty/#/options
     */
    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerScripts();
    }

    /**
     * Register javascript
     */
    public function registerScripts()
    {
        $view = $this->getView();

        NotyAsset::register($view);

        $defaultOptions = [
            'type' => $this->type,
            'layout' => $this->layout,
            'text' => $this->text,
            'theme' => $this->theme,
        ];

        $options = ArrayHelper::merge($defaultOptions, $this->clientOptions);

        $view->registerJs('new Noty(' . Json::encode($options, JSON_FORCE_OBJECT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . ').show();');
    }
}
