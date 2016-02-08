Yii2 Timeline Widget
====================
Timeline/Telemetry Widget for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist vivekmarkana/yii2-timeline-widget "*"
```

or add

```
"vivekmarkana/yii2-timeline-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
    $items = [];
    foreach ($posts as $post) {
        $data = [];
        $data['title'] = $post->title;
        $data['date'] = \Yii::$app->formatter->asDate(date("Y-m-d H:i:s", strtotime('+330 minutes', strtotime($post->published_at))), 'php:d M,Y');
        $data['time'] = \Yii::$app->formatter->asDate(date("Y-m-d H:i:s", strtotime('+330 minutes', strtotime($post->published_at))), 'php:h:i A');
        $data['notes'] = $post->summary;

        if(!is_null($post->postedBy)) {
            $data['subtitle'] = "By {$post->postedBy->name} - {$post->postedBy->bio}";
        }

        $items[] = $data;
    }
    \vivekmarakana\widgets\Timeline::widget(['items' => $items]);
?>
```
