<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Attendance;

class ReportController extends Controller
{
    public function index(Request $request) {
        $records = Attendance::with('student')->orderBy('scanned_at','desc')->get();
        return view('reports.index', compact('records'));
    }
}
