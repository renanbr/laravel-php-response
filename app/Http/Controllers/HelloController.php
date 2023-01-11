<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    use UpdateOperation { update as traitUpdate; } // PHPStan doesn't trigger the error as expected
//    use UpdateOperation; // PHPStan triggers the error as expected

    public function index(): Response
    {
        return $this->traitUpdate();
    }
}
