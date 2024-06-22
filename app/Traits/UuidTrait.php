<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

trait UuidTrait
{
    /**
     * {@inheritdoc}
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getKeyType()
    {
        return 'string';
    }

    protected static function bootUuidTrait()
    {
        static::creating(function (Model $model) {
            if ($model->getAttributeValue($model->getKeyName()) === null) {
                $model->setAttribute($model->getKeyName(), (string) Uuid::uuid4());
            }
        });
    }
}
