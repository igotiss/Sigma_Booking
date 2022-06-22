<?php

namespace App\Http\Controllers;

use App\Models\Stay;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function main() {
        $stays = Stay::where('status', 'active')->paginate(10);
        return view('main', compact('stays'));
    }
}
