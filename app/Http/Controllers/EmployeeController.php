<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view('crud.add');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'mail' => 'required',
            'address' => 'required'
        ]);

        $data = new Employee();

        $data->Name = $validateData['name'];
        $data->Email = $validateData['mail'];
        $data->Address = $validateData['address'];
        $data->save();
        // dd($data);

        return redirect()->route('show.data');
    }

    public function show()
    {
        $data = Employee::all();
        return view('crud.show',compact('data'));
    }

    public function edit($id)
    {
        $data = Employee::find($id);

        return view('crud.edit',compact('data'));
    }

    public function update(Request $request, $id)
{
    $data = Employee::find($id);

    $data->update([
        'Name' => $request->input('name'),
        'Email' => $request->input('mail'),
        'Address' => $request->input('address'),
    ]);

    return redirect()->route('show.data');
}

    public function delete($id)
    {
        $data = Employee::find($id);
        $data->delete();

        return redirect()->route('show.data');
    }
}
