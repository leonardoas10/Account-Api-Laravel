<?php

namespace App\Http\Controllers;

use App\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index() {
        return "index";
    }
    public function store() {
        $investment = new Investment();
        $investment->title = "title";
        $investment->balance = 12.5;
        $investment->user_id = 5;
        $investment->save();
        return $investment;
    }
    public function update() {
        return "update";
    }
    public function destroy() {
        return "destroy";
    }
}
