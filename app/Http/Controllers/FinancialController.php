<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FinancialController extends Controller
{
   public function index()
   {
       $this->authorize('view',Customer::class);
       return view('financial');
   }
}
