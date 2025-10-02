<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function create() { return view('students.create'); }
    public function store(Request $request) {
        $s = Student::create($request->only(['nis','name','kelas','qr_id']));
        return redirect()->route('students.index');
    }
    public function edit(Student $student) { return view('students.edit', compact('student')); }
    public function update(Request $request, Student $student) {
        $student->update($request->only(['nis','name','kelas']));
        return redirect()->route('students.index');
    }
    public function destroy(Student $student) { $student->delete(); return redirect()->route('students.index'); }
}
