<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class CustomerController extends Controller
{
    
    public function index() {
        $data_users = User::all();
        return view('customer.index', compact('data_users'));
    }

    public function onAction($id = null) {
        $user = User::find($id);
        return view('customer.edit')
            ->with('user', $user);
    }
    public function onUpdate(Request $body) {
        $id = $body->id;
        $user = User::find($id);
        $user->name = $body->name;
        $user->email = $body->email;
        // $user->save();
        return redirect('customer') 
            ->with('ok', true)
            ->with('msg', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }
}
