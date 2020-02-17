<?php

namespace pso\yii2\base\behaviors;

use yii\behaviors\TimestampBehavior;

class DateTimeBehavior extends TimestampBehavior
{
    protected function getValue($event)
    {
        if ($this->value === null) {
            return date("Y-m-d H:i:s");
        }
        return parent::getValue($event);
    }
}