<?php

namespace Spatie\Health\Checks\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\HasHeartbeatCheck;

class ScheduleCheck extends Check implements HeartbeatCheck
{
    use HasHeartbeatCheck;

    public static function new(): static
    {
        $instance = parent::new();
        $instance->cacheKey = 'health:checks:schedule:latestHeartbeatAt';

        return $instance;
    }
}
