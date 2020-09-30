# nova-telescope
Integrate Laravel Telescope into Laravel Nova.

![Tenancy for Laravel Nova masthead image.](https://repository-images.githubusercontent.com/186876699/bfc34500-f1b9-11e9-8ff3-4b4180303dec)

## Installation
### Composer Dependency

```sh
composer require genealabs/nova-telescope
```

### Nova Service Provider

Add `GeneaLabs\NovaTelescope\NovaTelescope` to the tools section in `App\Providers\NovaServiceProvider`. It should look something like this:

```php
<?php

namespace App\Providers;

use GeneaLabs\NovaTelescope\NovaTelescope;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{

    // ...

    public function tools()
    {
        return [
            // ...
            new NovaTelescope,
        ];
    }

    // ...

}
```
