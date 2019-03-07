<?php

namespace uisits\Compoships\Tests\Model;

use uisits\Compoships\Database\Eloquent\Model;

class PickupTime extends Model
{
    public function pickupPoint()
    {
        return $this->belongsTo(PickupPoint::class, ['contract_number', 'pickup_index'], [
            'contract_number',
            'pickup_index',
        ]);
    }
}