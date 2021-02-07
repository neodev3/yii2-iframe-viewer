<?php

namespace neo\iframeviewer;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\JsExpression;

class IframeWidget extends Widget
{
    /*
    @usage
              echo IframeWidget::widget([
                'options' => [
                   'src' => 'http://127.0.0.1/your-website/survey/default/link?id=14&isIframe=1'
                ],
            ]);
     * */
    /**
     * @var array iframe element options
     */
    public $options = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $id = $this->getId();
        return Html::tag('iframe', '', ArrayHelper::merge($this->options, [
            'id' => $id,
            'onload' => new JsExpression("this.style.height = this.contentWindow.document.documentElement.scrollHeight + 'px';")
        ]));
    }
}
