<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Infrastructure\Providers\AuthServiceProvider::class,
    App\Infrastructure\Providers\UserServiceProvider::class,
    App\Infrastructure\Providers\UnitServiceProvider::class,
    App\Infrastructure\Providers\HealthcareProfessionalServiceProvider::class,
    App\Infrastructure\Providers\PatientServiceProvider::class,
    App\Infrastructure\Providers\AttendanceQueueServiceProvider::class,
    App\Infrastructure\Providers\SharedServiceProvider::class,
    App\Infrastructure\Providers\EncounterServiceProvider::class,
    App\Infrastructure\Providers\TriageServiceProvider::class,
];
