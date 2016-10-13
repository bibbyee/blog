<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * @param Request $request
     */
    public function postValidate(Request $request)
    {
        $result = $this->validate($request, [
            'geetest_challenge' => 'geetest',
        ], [
            'geetest' => Config::get('geetest.server_fail_alert')
        ]);
        if ($request) {
            return 'success';
        }
    }
}