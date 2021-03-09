<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehouseController extends Controller
{
   public function addWarehouse(){

   	return view('admin.warehouse.add_warehouse');
   	
   }

}
