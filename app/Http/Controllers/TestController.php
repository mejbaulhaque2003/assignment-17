<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    // public function test(){
    //     $name ='Shibbir';
    //     $age = '22';
    //     return view('test.test',[
    //         'MyName'=>$name,
    //         'MyAge' => $age,
    //     ]);
    // }
    // public function dataPassByCompact(){

    //     $name ='Shibbir';
    //     $age = '22';
    //     return view('test.test',compact('name','age'));
    // }
    public function ComplexDataPass()
    {
        $address ='Raninagar,Naogaon';
        $id=[
            'name' => 'Shibbir',
            'age' => 22,
            'country' => 'Bangladesh',
            'address' => $address

        ];
        $profession = 'Student';

        return view('test.test',[
        'info' => $id,
        'work' => $profession
        ]);
    }
    public function ComplexDataPassByCompact()
    {
        $address ='Raninagar,Naogaon';
        $id=[
            'name' => 'Shibbir',
            'age' => 22,
            'country' => 'Bangladesh',
            'address' => $address

        ];
        $profession = 'Student';

        return view('test.test',compact('id','profession')
        
        );
    }
}
