<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
class PDFController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view ('welcome',compact('data'));
    }
     // export PDF
     public function exportPDF() {
       
        $data = User::all();
  
        $pdf = PDF::loadView('testPDF', ['data' => $data]);
        
        return $pdf->download('hasil_export.pdf');
        
      }
}