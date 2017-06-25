<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index() {
    	// 保存数据
    	// $student = new Student();
    	// $student->name = 'pcd';
    	// $student->email = '111';
    	// $student->password = '123';
    	// $student->save();
    	
    	// 获取数据
    	// $students = Student::all();
    	// foreach($students as $student) {
    	// 	echo $student->name;
    	// }
    	// $student = Student::get();
    	// $student = Student::find(2);
    	// $student = Student::findOrFail(5);//找不到则保存
    	// $student = Student::find(5);//找不到不报错
    	
    	// 修改数据
    	// $student = Student::find(1);
    	// echo $student;
    	// $student->name = 'pcd222';
    	// $student->save();
    	// $student2 = Student::find(1);
    	
    	// 删除数据
    	// $student = Student::find(2);
    	// $student->delete();
    }
}
