<?php

namespace uisits\Compoships\Tests\Model;

use uisits\Compoships\Database\Eloquent\Model;

class Allocation extends Model
{
    public function trackingTasks()
    {
        return $this->hasMany(TrackingTask::class, ['booking_id', 'vehicle_id'], ['booking_id', 'vehicle_id']);
    }

    public function space()
    {
        return $this->hasOne(Space::class, 'booking_id', 'booking_id');
    }
}