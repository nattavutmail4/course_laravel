<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function service()
    {
        return view('pages.service');

    }
    public function contact()
    {
        return view('pages.contact');

    }
    public function login()
    {
        return view('pages.login');

    }

    public function employee()
    {
        return 'Emplyee page';
    }

    public function employees()
    {
        // อ่านข้อมูลทั้งหมดจากตาราง employee get
        // $employees = DB::table('employees')->get(); // select * from employees

        // อ่านข้อมูลเพียงรายการเดียวจากตาราง first
        // $employees = DB::table('employees')->first();

        // อ่านข้อมูลระบุ field ที่ต้องการ ในตัวอย่างระบุแค่ fullname gender email
        //  $employees = DB::table('employees')->first(['fullname','gender','email']);

        // อ่านข้อมูลแบบระบุเงือนไข select fullname ,gender,email from employees where id >= 2;
        // $employees = DB::table('employees')->where('id', '>=',2)->get(['fullname','gender','email']); //
        //อ่านข้อมูลแบบระบุเงือนไข มากกว่า 1
        // $employees = DB::table('employees')
        //                 ->where('id', '>=',2)
        //                 ->where('status',1)
        //                 // ->where('age','<=',30)
        //                 ->orWhere('age',27)
        //                 ->get(['fullname','gender','email','age']);

        // ค้นหาโดยระบุ id โดยตรง ถ้าแปรเป็น sql ได้ดังต่อไปนี้ ->  // select * from employee where id = 3;
        // $employees = DB::table('employees')->find(3);

        // การนับจำนวน record ที่พบ count
        // $employees = DB::table('employees')->count();

        //  การหาค่าสูงสุด ต่ำสุด และค่าเฉลีย
        // $employees =DB::table('employees')->max('age'); // การหาค่ามากสุด
        // $employees =DB::table('employees')->min('age'); //การหาค่าต่ำสุด
        // $employees =DB::table('employees')->avg('age'); //การหาค่าเฉลี่ยน

        // การจัดเรียงข้อมูล และการเลือกข้อมูลบางส่วนออกมา
        // $employees = DB::table('employees')->orderByDesc('id')->get(); //orderby เป็นการเรียงข้อมูลจากมากไปน้อย
        // $employees = DB::table('employees')->orderBy('id')->get(); //orderby เป็นการเรียงข้อมูลจากน้อยไปมาก
        // $employees = DB::table('employees')->orderByDesc('age')->limit(2)->get(); //การ limit ข้อมูลที่แสดง

        //  การเพิ่มข้อมูลเข้าไปในตาราง
        // อันนี้จะเป็นการ insert ข้อมูล แบบ 2 อัน
        // $employees = DB::table('employees')->insert([
        //       [
        //           'fullname'=>'ชัย โสโร',
        //           'gender'=>'Male',
        //           'email'=>'samit@email.com',
        //           'tel'=>'0991231233',
        //           'age'=>20,
        //           'address'=>'20/1 moo.2 bangkok',
        //           'avartar'=>'noavatar.jpg',
        //           'status'=>1
        //       ],
        //       [
        //         'fullname'=>'ณัฐวุฒิ ขุนตำลิ',
        //         'gender'=>'Male',
        //         'email'=>'nattavut@email.com',
        //         'tel'=>'0991231221',
        //         'age'=>26,
        //         'address'=>'99/1 moo.2 hayai',
        //         'avartar'=>'noavatar.jpg',
        //         'status'=>1
        //     ]
        // ]);

        // การอัพเดทข้อมูลเข้าไปในตาราง
        // $employees = DB::table('employees')->where('id', 4)->update(array(
        //     'fullname' => 'ณัฐวุฒิ ขุนตำลิ',
        //     'gender'   => 'Male',
        //     'email'    => 'nattavut@email.com',
        //     'tel'      => '0991231221',
        //     'age'      => 26,
        //     'address'  => '99/1 moo.2 hayai',
        //     'avartar'  => 'noavatar.jpg',
        // ));

        // การลบข้อมูลเข้าไปในตาราง
        // $employees = DB::table('employees')->where('id',5)->delete();
        // print_r($employees);
    }

    public function employees_list()
    {
        // การอ่านข้อมูลเข้าไปในตาราง
        // การอ่านจ้อมูลทั้งหมดจากตาราง employee
        // $employees = Employee::all(); // select * from employees
        // อ่านข้อมูลระบุ field ที่ต้องการ ในตัวอย่างระบุแค่ fullname gender email
        // $employees = Employee::all(['id','fullname']);

        //อ่านข้อมูลเพียงรายการเดียวจากตาราง employees
        // $employees = Employee::first(['id','fullname']);

        // อ่านข้อมูลแบบระบุเงือนไข
        // $employees =Employee::where('age','<',27)->get(['id','fullname','age']);

        // การจัดเรียงข้อมูล และการเลือกข้อมูลบางส่วน
        // $employees = Employee::where('age', '<', 27)
        //     ->orderByDesc('id')
        //     ->get(['id', 'fullname', 'age']);


        // การเพิ่มข้อมูลเข้าตาราง
        // $employees = Employee::create(array(
        //          'fullname'=>'ชัย โสโร',
        //           'gender'=>'Male',
        //           'email'=>'samit@email.com',
        //           'tel'=>'0991231233',
        //           'age'=>20,
        //           'address'=>'20/1 moo.2 bangkok',
        //           'avartar'=>'noavatar.jpg',
        //           'status'=>1
        // ));
        
        // การอัพเดทข้อมูล
        // $employees = Employee::where('id',7)->update(
        //   array(
        //     'fullname'=>'นิสัย รวยนะครับ'
        //   )
        // );

        // การลบข้อมูล
        // $employees = Employee::where('id',7)->delete();
        // $employees = Employee::all();
        $employees = Employee::orderByDesc('id')->paginate(1); //แบ่งข้อมูล เป็น paginatetion ได้
        return view('pages.employeelist', compact('employees'));

    }
}
