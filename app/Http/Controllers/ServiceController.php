<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    
    public function index(){
        $services = Service::paginate(3);
        return view('pages.home',compact('services'));
    }
    public function addService(){
        return view('pages.add-service');
    }
    public function storeService(Request $request){
        $validated = $request->validate([
            'Title'=>'required|max:255',
            'Address'=>'required|max:255',
            'Director'=>'required|max:255',
            
        ]);
        return redirect('/');
    
    Service::create([
        'Title'=>request('Title'),
        'Address'=>request('Address'),
        'Director'=>request('Director'),
        'user_id'=>Auth::id()
    ]);
    return redirect('/');

    
    }
    public function showService(Service $service){
        return view('pages.show-service', compact('service'));
    }
   
    
    public function destroy(Service $service){
        if(Gate::denies('delete-service',$service)){
            dd('Tu neesi savininkas sio sutinio. Ir negali jo pasalinti.');
        }
        $service->delete();
        return redirect('/');
    }
}