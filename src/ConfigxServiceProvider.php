<?php

namespace Liuhelong\laravelAdmin\Configx;

use Illuminate\Support\ServiceProvider;
use Encore\Admin\Form;
use Encore\Admin\Admin;
use Liuhelong\laravelAdmin\Configx\Field\TestText;

class ConfigxServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Configx $extension)
    {
        if (!Configx::boot()) {
            return;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'configx');
        }

        $this->app->booted(function () {
            Configx::routes(__DIR__ . '/../routes/web.php');
        });

        Admin::booting(function () {

            Form::extend('test_text', TestText::class);
        });
    }
}
