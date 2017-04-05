<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index()
    {
        $students = Student::paginate(10);

        return view('student.index',[
            'students'   =>  $students,
        ]);
    }

    public function create(Request $request)
    {
        if($request->isMethod('POST')){
            $data = $request->input('student');
            $this->validate($request,[
               'student.name'=>'required|min:4|max:20',
                'student.age'=>'required|integer',
                'student.sex'=>'required'
            ],[
                'required'=>':attribute 不能为空',
                'min'=>':attribute 最小长度为4个字符',
                'max'=>':attribute 最大长度为20个字符',
                'integer'=>':attribute 只能为整数'
            ],[
                'student.name'=>'姓名',
                'student.age'=>'年龄',
                'student.sex'=>'性别'
            ]);
            $student = new Student();
            $student->name = $data['name'];
            $student->age = $data['age'];
            $student->sex = $data['sex'];
            $student->created_at = date('Y-m-d H:i:s',time());
            if($student->save()){
                return redirect('student')->with('success','添加成功!');
            }else{
                return redirect()->back();
            }
        }
        return view('student.create');
    }


}
