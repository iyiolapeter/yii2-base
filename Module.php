<?php

namespace pso\yii2\base;

use pso\yii2\base\traits\PsoParamTrait;
use yii\base\Module as YiiModule;

abstract class Module extends YiiModule
{

    abstract protected static function getPsoId();

    use PsoParamTrait;
}