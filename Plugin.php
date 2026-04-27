<?php namespace Pensoft\Synergies;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name'        => 'Synergies',
            'description' => 'No description provided yet...',
            'author'      => 'Pensoft',
            'icon'        => 'icon-leaf'
        ];
    }

    public function register(): void
    {
    }

    public function boot(): void
    {
    }

    public function registerComponents(): array
    {
        return [];
    }

    public function registerPermissions(): array
    {
        return [
            'pensoft.synergies.access' => [
                'tab' => 'Synergies',
                'label' => 'Manage synergies'
            ],
        ];
    }

    public function registerNavigation(): array
    {
        return [
            'synergies' => [
                'label'       => 'Synergies',
                'url'         => Backend::url('pensoft/synergies/synergies'),
                'icon'        => 'oc-icon-institution',
                'permissions' => ['pensoft.synergies.*'],
                'order'       => 500,
            ],
        ];
    }
}