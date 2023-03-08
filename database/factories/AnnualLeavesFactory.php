<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AnnualLeaves;

// Create factory for AnnualLeave
$factory->define(AnnualLeaves::class, function () {
    return [
        'start_date' => now(),
        'end_date' => now(),
        'reason' => 'Reason here',
    ];
});
