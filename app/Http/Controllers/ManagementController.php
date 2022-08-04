<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $management = Management::latest()->paginate(5);
        return view('management.index',compact('management'))
        ->with('i', (request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('management.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            //'password' => 'required',
            'name' => 'required',
            'job_title' => 'required',
            //'grade' => 'required',
            //'comment' => 'required',
            'Address' => 'required',
            'Phone' => 'required'
        ]);
    

      Management::create($request->all());

      return redirect()->route('management.index')

      ->with('success', 'Employee created successfully.');
    }

public function show(Management $management) 
{
    return view('management.evaluate',compact('management'));

}

public function edit(Management $management)
{
    return view('management.edit',compact('management'));
}


public function evaluate(Management $management)
{
    return view('management.evaluate',compact('management'));
}

public function update(Request $request, Management $management)
{
    $request->validate([
 
    ]);

    $management->update($request->all());

    return redirect()->route('management.index')
        ->with('success', 'Updated successfully');

}

public function destroy(Management $management)
{
    $management->delete();

   
return redirect()->route('management.index')

->with('success', 'Employee deleted successfully');

}



}