<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Speaker;
 
class SpeakerSearchController extends Controller
{
 
    public function index()
    {
        return view('search');
    }
 
    public function searchSpeaker(Request $request)
    {
          $search = $request->get('term');

      
          $result = Speaker::where(function ($query) use ($search){
              $query->where('name', 'like', '%' . $search . '%')->orWhere('surname', 'like', '%' . $search . '%');
          })->get();
 
          return response()->json($result);
            
    } 
}