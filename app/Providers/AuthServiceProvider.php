<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('livres', 'App\Policies\LivrePolicy');
        Gate::resource('creancedettes', 'App\Policies\CreanceDettePolicy');
        Gate::resource('paiements', 'App\Policies\PaiementPolicy');
        Gate::resource('structures', 'App\Policies\StructurePolicy');
        Gate::resource('users', 'App\Policies\UserPolicy');
        Gate::resource('roles', 'App\Policies\RolePolicy');
        Gate::resource('permissions', 'App\Policies\PermissionPolicy');
        Gate::resource('parametres', 'App\Policies\ParametrePolicy');
        Gate::resource('valeurs', 'App\Policies\ValeurPolicy');
        Gate::resource('exercices', 'App\Policies\ExercicePolicy');
    }
}
