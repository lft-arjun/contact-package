<?php


namespace Dhanphe\Contact\Providers;


use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        info('we are loading our packages service provider test here ');
    }

    public function register()
    {
        //parent::register(); // TODO: Change the autogenerated stub
    }
}