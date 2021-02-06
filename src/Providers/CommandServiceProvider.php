<?php

namespace Simtabi\GitCommitChecker\Providers;

use Simtabi\GitCommitChecker\Commands\InstallHooks;
use Simtabi\GitCommitChecker\Commands\InstallPhpCs;
use Simtabi\GitCommitChecker\Commands\PreCommitHook;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallHooks::class,
                PreCommitHook::class,
                InstallPhpCs::class,
            ]);
        }
    }
}
