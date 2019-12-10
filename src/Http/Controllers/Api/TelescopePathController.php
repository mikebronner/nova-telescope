<?php

namespace GeneaLabs\NovaTelescope\Http\Controllers\Api;

use Illuminate\Routing\Controller;

class TelescopePathController extends Controller
{
    public function __invoke() : string
    {
        return config("telescope.path");
    }
}
