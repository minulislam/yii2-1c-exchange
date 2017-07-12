<?php


namespace carono\exchange1c;


class UrlRule extends \yii\web\UrlRule
{
    public $route = 'exchange/api/<mode>';
    public $pattern = '1c_exchange.php';

    public function init()
    {
        //
    }

    public function parseRequest($manager, $request)
    {
        $this->defaults = ['mode' => \Yii::$app->request->get('mode', 'index')];
        return parent::parseRequest($manager, $request);
    }
}