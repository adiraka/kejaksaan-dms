<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Prosecutor;

use Response;
use Validator;
use DataTables;
use App\Util\Constant;

class ProsecutorController extends Controller
{
    public function index() {
        return view('admin.prosecutor.index');
    }

    public function indexData() {
    	$listData = Merk::select(['*'])->get();
		$dataTables = Datatables::of($listData)
						->addColumn('action', function($merk) {
							return '
								<a href="'.route('merk.detail', ['id' => $merk->id]).'" class="btn btn-xs btn-success">Update</a>				
    						';
						})
						->editColumn('status', function($merk) {
							return Constant::STATUS_LABELS[$merk->status];
						})
						->make(true);
		return $dataTables;
    }

    public function detail($id = 0) {
   //  	if (empty($id)) {
			// $merk = new Merk;
   //  	} else {
   //  		$merk = Merk::find($id);	
   //  	}
    	
   //  	if (empty($merk)) abort(404);

   //  	return view('admin.merk.detail', [
   //  		'merk' => $merk
   //  	]);
    }

    public function save($id = 0, Request $request) {
   //  	$data = (object)$request->all();

   //  	if (empty($id)) {
			// $merk = new Merk;
   //  	} else {
   //  		$merk = Merk::find($id);	
   //  	}
    	
   //  	if (empty($merk)) abort(404);

   //  	$request->validate([
   //          'code' => 'required',
   //  		'name' => 'required',
   //  		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
   //      ]);

   //      if (!empty($data->image)) {
			// $imageName = time().'.'.$request->image->extension();  
	  //   	$upload = $request->image->move(public_path('upload'), $imageName);

	  //   	if ($upload) {
	  //   		$merk->image = $imageName;
	  //   	}
   //      }

   //  	$merk->code = $data->code;
	  //   $merk->name = $data->name;
	  //   $merk->status = Constant::STATUS_ACTIVE;

   //  	$merk->save();

   //  	return redirect()->route('merk.index');
    }

    public function find(Request $request) {
        // $term = trim($request->q);

        // if (empty($term)) {
        //     return Response::json([]);
        // }

        // $merks = Merk::where('name', 'LIKE', '%'.$term.'%')->get();

        // $formatted_merks = [];

        // foreach ($merks as $merk) {
        //     $formatted_merks[] = ['id' => $merk->id, 'text' => $merk->name];
        // }

        // return Response::json($formatted_merks);
    }
}
