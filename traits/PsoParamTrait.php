<?php

namespace pso\yii2\base\traits;

use Yii;
use yii\helpers\ArrayHelper;

trait PsoParamTrait
{
    public static function getPsoParams(){
        return Yii::$app->params['pso_']??[];
    }

    public static function getPsoParam(string $param, $default = NULL){
        return ArrayHelper::getValue(static::getPsoParams(), $param, $default);
    }

    public static function coalescePsoParams(array $params, $throw = true){
        foreach($params as $param){
            $value = static::getPsoParam($param);
            if(!is_null($value)){
                return $value;
            }
        }
        if(!$throw){
            return NULL;
        }
        throw new \yii\base\InvalidConfigException('Required pso_ params '.\implode(' or ', $params).' does not exist');
    }
}