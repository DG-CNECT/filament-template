<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\Foundation\Application;
use Psr\Http\Client\ClientInterface;
use GuzzleHttp\Client;
use loophp\psr17\Psr17Interface;
use Nyholm\Psr7\Factory\Psr17Factory;
use loophp\psr17\Psr17;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            ClientInterface::class,
            function(Application $app): ClientInterface {
                //or whatever client you want
                return new Client();
            }
        );
        $this->app->bind(
            Psr17Interface::class,
            function(Application $app): Psr17Interface {
                $psr17Factory = new Psr17Factory();

                //or whatever psr17 you want
                return new Psr17(
                    $psr17Factory,
                    $psr17Factory,
                    $psr17Factory,
                    $psr17Factory,
                    $psr17Factory,
                    $psr17Factory
                );
            }
        );
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('ecl_init', true);

        // Analytics Float Format
        Blade::directive('aff', static fn(string $expression) => sprintf("<?php echo number_format(floatval(%s), 2, '.', '&nbsp;'); ?>", $expression));
        // Analytics Int Format
        Blade::directive('aif', static fn(string $expression) => sprintf("<?php echo number_format(intval(%s), 0, '', '&nbsp;'); ?>", $expression));

    }
}
