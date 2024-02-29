<?php

namespace app\controllers;
use Yii;
use yii\base\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
        $appLang = Yii::$app->language;
        $formatter = Yii::$app->formatter;
        
        echo "<h2>$appLang</h2>";
        echo "
        <p>percentual {$formatter->asPercent(0.123123, 2)}</p>
        <p>booleans {$formatter->asBoolean(true)}</p>
        <p>e-mail {$formatter->asEmail('hecton.gon@gmail.com')}</p>
        <p>quebra de linha {$formatter->asNtext("primiero\nsegundo\nasdasd")}</p>
        <p>data {$formatter->asDate("2023-06-01", 'short')}</p>
        <p>data {$formatter->asDate("2023-06-01", 'medium')}</p>
        <p>data {$formatter->asDate("2023-06-01", 'long')}</p>
        <p>data {$formatter->asDate("2023-06-01", 'full')}</p>
        <p>data {$formatter->asDate("2023-06-01", 'YYYY/MM/dd')}</p>
        <p>data {$formatter->asDate("2023-06-01")}</p>
        <p>Moeda {$formatter->asCurrency(23124.2323)}</p>
        <p>Size {$formatter->asShortSize(5646545646, 2)}</p>
        <p>Size {$formatter->asCpf(5646545646)}</p>
        
        ";



        // return "aqui";
    }
}