<?php

namespace Myrtle\Core\Docks;

use Myrtle\Core\Establishments\Models\EstablishmentType;
use Myrtle\Core\Establishments\Policies\EstablishmentPolicy;

class EstablishmentsDock extends Dock
{
    /**
     * Description for Dock
     *
     * @var string
     */
    public $description = 'Establisments system';

    /**
     * Explicit Gate definitions
     *
     * @var array
     */
    public $gateDefinitions = [
        'establishments.admin' => EstablishmentPolicy::class . '@admin',
        'establishments.access.admin' => EstablishmentPolicy::class . '@accessAdmin',
    ];

    /**
     * Policy mappings
     *
     * @var array
     */
    public $policies = [
        EstablishmentType::class => EstablishmentPolicy::class,
        EstablishmentPolicy::class => EstablishmentPolicy::class,
    ];

    /**
     * List of config file paths to be loaded
     *
     * @return array
     */
    public function configPaths()
    {
        return [
            'docks.' . self::class => dirname(__DIR__, 2) . '/config/docks/establishments.php',
            'abilities' => dirname(__DIR__, 2) . '/config/abilities.php',
        ];
    }

    public function migrationPaths()
    {
        return [
            dirname(__DIR__, 2) . '/database/migrations',
        ];
    }

    /**
     * List of routes file paths to be loaded
     *
     * @return array
     */
    public function routes()
    {
        return [
            'admin' => dirname(__DIR__, 2) . '/routes/admin.php',
        ];
    }
}
