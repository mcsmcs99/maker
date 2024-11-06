<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * O namespace aplicado às rotas de seu controlador.
     *
     * @var string|null
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Defina o carregamento de rotas para o aplicativo.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Defina as rotas do aplicativo.
     */
    public function map(): void
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Defina as rotas da API para o aplicativo.
     *
     * Estas rotas são normalmente aplicadas ao middleware "api".
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    /**
     * Defina as rotas web para o aplicativo.
     *
     * Estas rotas recebem o middleware "web".
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }
}
