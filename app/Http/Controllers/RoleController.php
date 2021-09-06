<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

function index(){

return view('welcome', [
'role'=>Role::get()
]);
}

public function store()
{
Role::create(request()->all());
    return back();
}

public function delete($id){
Role::whereId($id)->delete();
return back();
}
}
