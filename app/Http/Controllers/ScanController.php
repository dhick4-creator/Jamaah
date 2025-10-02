<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendance;

class ScanController extends Controller
{
    public function index() { return view('scan.index'); }
    public function scan(Request $request) {
        $id = $request->input('student_id');
        $student = Student::where('qr_id', $id)->first();
        if(!$student) { return response()->json(['message'=>'QR tidak valid'], 404); }
        $att = Attendance::create(['student_id'=>$student->id,'session'=>'Dzuhur','scanned_at'=>now()]);
        return response()->json(['message'=>$student->name.' hadir']);
    }
}
