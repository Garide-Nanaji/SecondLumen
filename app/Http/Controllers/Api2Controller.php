<?php

namespace App\Http\Controllers;

use App\Models\DcpsModel;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Http\Request;


class Api2Controller extends Controller
{
    //listing the records from table
    public function index()
    {
        $records = DcpsModel::paginate(10);

        return response()->json($records);
    }

    // for creating a record
    public function store(Request $request)
    {
       
       $validator= $this->validate($request, [
    
            'request_type_id' => 'required',
            'employee_name' => 'required',
            'employee_no' => 'required|digits:5|unique:dcps',
            'designation_name' => 'required',
        ]);

    
       if($validator){
        $record = new DcpsModel();
         $record->request_type_id=$request->request_type_id;
         $record->employee_name=$request->employee_name;
         $record->employee_no=$request->employee_no;
         $record->designation_name=$request->designation_name;
         $record->save();

         return response()->json([
            'message' => 'Record created successfully',
            'data' => $record
        ]);
    }


    }

    // for updating the particular record 
    public function update(Request $request, $id)
    {
        $record = DcpsModel::find($id);
        $validator= $this->validate($request, [
    
            'request_type_id' => 'required',
            'employee_name' => 'required',
            'employee_no' => 'required|digits:5|unique:dcps',
            'designation_name' => 'required',
        ]);

        if (!$record) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        if($validator){
         $record->request_type_id=$request->request_type_id;
         $record->employee_name=$request->employee_name;
         $record->employee_no=$request->employee_no;
         $record->designation_name=$request->designation_name;
         $record->save();

        return response()->json([
            'message' => 'Record updated successfully',
            'data' => $record
        ], 200);
    }
    }

    //for showing particular record 
    public function show($id)
    {
        $record = DcpsModel::find($id);

        if (!$record) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        return response()->json($record);
    }

    //Deleting the particular $id
    public function destroy($id)
    {
        $record = DcpsModel::find($id);
 
        if (!$record) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $record->delete();

        return response()->json(['message' => 'Record deleted Successfully', 'deleted_id' => $id]);
    }
}
