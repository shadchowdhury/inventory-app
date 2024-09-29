<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $employees = Employee::latest()->get();
            return Datatables::of($employees)
                ->addIndexColumn()
                ->addColumn('image', function ($employee) {
                    if ($employee->image) {
                        $imageUrl = asset('storage/' . $employee->image);
                        return '<img src="' . $imageUrl . '" class="img-thumbnail" width="50" height="50">';
                    } else {
                        $imageUrl = asset('storage/images/employees/default.jpg');
                        return '<img src="' . $imageUrl . '" class="img-thumbnail" width="50" height="50">';
                    }
                })
                ->addColumn('action', function ($employee) {
                    $btn = '<button class="btn btn-secondary btn-sm viewEmployee" value="' . $employee->id . '"><i class="fa fa-eye"></i></button> ';
                    $btn .= '<button class="btn btn-info btn-sm editEmployee" value="' . $employee->id . '" data-toggle="modal" data-target="#editEmployeeModal"><i class="fa fa-edit"></i></button> ';
                    $btn .= '<button class="btn btn-danger btn-sm deleteEmployee" value="' . $employee->id . '" data-toggle="modal" data-target="#deleteEmployeeModal"><i class="fa fa-trash"></i></button>';
                    return $btn;
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }
        return view('employee.manage_employee');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.add_employee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Employee::class],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'experience' => ['max:255'],
            'nid_no' => ['max:255'],
            'salary' => ['required', 'string', 'max:255'],
            'vacation' => ['max:255'],
            'city' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:200']
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('images/employees', $request->image);
        }

        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'experience' => $request->experience,
            'nid_no' => $request->nid_no,
            'salary' => $request->salary,
            'vacation' => $request->vacation,
            'city' => $request->city,
            'image' => $path
        ]);

        return response()->json([
            "status" => "New Employee Added Successfully",
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::find($id);

        $image_url = $employee->image ? asset('storage/' . $employee->image) : asset('storage/images/employees/default.jpg') ;

        return response()->json([
            'status' => 'success',
            'employee' => $employee,
            'image_url' => $image_url
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            'request' => $request->name
        ]);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Employee::class . ',email,' . $id],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'experience' => ['max:255'],
            'nid_no' => ['max:255'],
            'salary' => ['required', 'string', 'max:255'],
            'vacation' => ['max:255'],
            'city' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:200']
        ]);

        // $employee = Employee::find($id);

        // // Update image if exist
        // $path = $employee->image ?? null;
        // if ($request->hasFile('image')) {
        //     if ($employee->image) {
        //         Storage::disk('public')->delete($employee->image);
        //     }
        //     $path = Storage::disk('public')->put('images/employees', $request->image);
        // }

        // //Update the post
        // $employee->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'address' => $request->address,
        //     'experience' => $request->experience,
        //     'nid_no' => $request->nid_no,
        //     'salary' => $request->salary,
        //     'vacation' => $request->vacation,
        //     'city' => $request->city,
        //     'image' => $path
        // ]);

        return response()->json([
            "status" => "Employee Updated Successfully",
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);

        // return response()->json([
        //     "employee" => "ok"
        // ]);

        if($employee->image){
            Storage::disk('public')->delete($employee->image);
        }
        $employee->delete();

        if (!$employee) {
            return response()->json([
                "status" => "failed",
                "msg" => "Something went wrong!"
            ], 210);
        } else {
            return response()->json([
                "status" => "success",
                "msg" => "This Employee Has Been Deleted Successfully"
            ], 201);
        }
    }
}
