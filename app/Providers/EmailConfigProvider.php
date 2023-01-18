<?php

namespace App\Providers;

use App\Models\MailSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class EmailConfigProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('mail_settings'))
        {
            $mailSettings = MailSetting::first();
            if($mailSettings)
            {
                $config = array(
                    'driver' => $mailSettings->driver,
                    'host' => $mailSettings->host,
                    'port' => $mailSettings->port,
                    'from' => $mailSettings->name,
                    'encryption' => $mailSettings->encryption,
                    'username' => $mailSettings->username,
                    'password' => $mailSettings->password,
                    //'sendmail' => '/usr/sbin/sendmail-bs',
                    //'pretend' => false,
                );
                
                Config::set('mail',$config);
            }
        }
    }
}
