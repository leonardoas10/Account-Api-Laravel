<?php

namespace App\Http\Controllers;

use App\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index() {
        return "index";
    }
    public function store(Request $request) {
        $title = $request->input('title');
        $api_token = $request->input('api_token');
        $user = App\User::where('api_token', $api_token)->first();
        
        if ($user !== null) {
        $investment = new Investment();
        $investment->title = $title;
        $investment->balance = 0;
        $investment->user_id = $user->id;
        $investment->save();
        return $investment;
        }
        
    }
    public function update() {
        return "update";
    }
    public function destroy() {
        return "destroy";
    }
}
