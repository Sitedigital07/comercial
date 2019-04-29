<?php

namespace Digitalsite\Comercial;

use Illuminate\Support\ServiceProvider;

class ComercialServiceProvider extends ServiceProvider{
 public function register(){
  $this->app->bind('comercial', function($app) {
  return new Comercial;
  });
 }

 public function boot(){
  require __DIR__ . '/Http/routes.php';
  $this->loadViewsFrom(__DIR__ . '/../views', 'comercial');
  $this->publishes([
   __DIR__ . '/migrations/2015_07_25_000000_create_usuario_table.php' => base_path('database/migrations/2015_07_25_000000_create_usuario_table.php'),
  ]);
  }
 }
