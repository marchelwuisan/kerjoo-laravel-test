<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AnnualLeaves;

$factory->define(AnnualLeaves::class, function () {
    return [
        'start_date' => now(),
        'end_date' => now(),
        'reason' => 'Reason here',
    ];
});
