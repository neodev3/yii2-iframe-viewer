Iframe viewer
==============
This will render website in iframe and auto resize according to the content.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist neodev3/yii2-iframe-viewer "*"
```

or add

```
"neodev3/yii2-iframe-viewer": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use neo\iframeviewer\IframeWidget;
<?=  IframeWidget::widget([
                    'options' => [
                       'src' => 'http://127.0.0.1/your-website/survey/default/link?id=14&isIframe=1'
                    ],
                ]); ?>```

