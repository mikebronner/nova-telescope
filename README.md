# nova-telescope
Integrate Laravel Telescope into Laravel Nova.

![Tenancy for Laravel Nova masthead image.](https://repository-images.githubusercontent.com/186876699/bfc34500-f1b9-11e9-8ff3-4b4180303dec)

## Installation

Require this package in the composer.json of your Laravel project.

```bash
composer genealabs/nova-telescope
```

### Add to NovaServiceProvider

First, add the `new NovaTelescope` tool to your tools() in `App\Providers\NovaServiceProvider`

Make sure to import the class `use GeneaLabs\NovaTelescope\NovaTelescope;`

You should end up with a file that looks like this

```php
<?php namespace App\Providers;

use GeneaLabs\NovaTelescope\NovaTelescope;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{

    [...]

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new NovaTelescope,
        ];
    }

    [...]

}
```

