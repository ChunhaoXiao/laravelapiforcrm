<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerContactController extends Controller
{
    public function index(Customer $customer) {
        return $customer->contacts()->get();
    }
}
