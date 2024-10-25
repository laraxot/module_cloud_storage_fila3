<?php

declare(strict_types=1);

namespace Modules\CloudStorage\Providers;

use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Modules\CloudStorage\Filesystem\CustomAdapter;
use Modules\Xot\Providers\XotBaseServiceProvider;

class CloudStorageServiceProvider extends XotBaseServiceProvider
{
    public string $module_name = 'cloudstorage';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function bootCallback(): void
    {
        // Storage::extend('custom', function ($app, $config) {
        //    return new Filesystem(new CustomAdapter($config));
        // });
    }
}