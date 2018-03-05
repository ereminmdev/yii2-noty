# yii2-noty

Alternative alert - success - error - warning - information - confirmation messages for Yii framework.

Based on JavaScript library: https://ned.im/noty/#/

## Install

``composer require --prefer-dist ereminmdev/yii2-noty``

## Documentation

See for clientOptions: https://ned.im/noty/#/options

## Use

Insert widget into view:

```
<?= \ereminmdev\yii2\noty\NotyWidget::widget([
    'text' => 'Some text...',
]); ?>
```

or with more options: 

```
<?= \ereminmdev\yii2\noty\NotyWidget::widget([
    'text' => 'Some text...',
    'type' => 'alert',
    'layout' => 'topRight',
    'theme' => 'bootstrap-v3',
    'clientOptions' => [
        ...
    ],
]); ?>
```

See all client options: https://ned.im/noty/#/options