<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProxyIp extends Model
{
    protected $primaryKey = [
        'ip',
        'port',
    ];

    protected $fillable = [
        'ip',
        'port',
        'active',
        'provider',
    ];

    public $incrementing = false;

    /**
     * active accessor
     * @param $value
     * @return bool
     */
    public function getActiveAttribute($value)
    {
        return $value == 1;
    }

    /**
     * active mutator
     * @param $value
     */
    public function setActiveAttribute($value)
    {
        array_set($this->attributes, 'active', $value === true ? 1 : 0);
    }
}
