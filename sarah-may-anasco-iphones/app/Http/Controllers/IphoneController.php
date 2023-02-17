<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IphoneController extends Controller
{
    // set index page view
    public function index() {
        return view('index');
    }

    // handle fetch all eamployees ajax request
    public function read() {
        $read_iphones = Iphone::all();
        $output = '';
        if ($read_iphones->count() > 0) {
            $output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>iPhone Image</th>
                <th>Model</th>
                <th>Released</th>
                <th>Discontinued</th>
                <th>Capacities</th>
                <th>Processor</th>
                <th>OS</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($read_iphones as $read_iphone) {
                $output .= '<tr>
                <td>' . $read_iphone->id . '</td>
                <td><img src="storage/images/' . $read_iphone->iphone_image . '" width="50" class="img-thumbnail "></td>
                <td>' . $read_iphone->model . '</td>
                <td>' . $read_iphone->released . '</td>
                <td>' . $read_iphone->discontinued . '</td>
                <td>' . $read_iphone->capacities . '</td>
                <td>' . $read_iphone->processor . '</td>
                <td>' . $read_iphone->os . '</td>
                <td>
                  <a href="#" id="' . $read_iphone->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editIphoneModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $read_iphone->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    // handle insert a new iphone ajax request
    public function create(Request $request) {
        $file = $request->file('iphone_image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);

        $iphoneData = ['model' => $request->model, 'released' => $request->released, 'discontinued' => $request->discontinued, 'capacities' => $request->capacities, 'processor' => $request->processor, 'os' => $request->os, 'iphone_image' => $fileName];
        Iphone::create($iphoneData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle edit an iphone ajax request
    public function edit(Request $request) {
        $id = $request->id;
        $iphone_edit = Iphone::find($id);
        return response()->json($iphone_edit);
    }

    // handle update an iphone ajax request
    public function update(Request $request) {
        $fileName = '';
        $iphone_update = Iphone::find($request->iphone_update_id);
        if ($request->hasFile('iphone_image')) {
            $file = $request->file('iphone_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($iphone_update->iphone_image) {
                Storage::delete('public/images/' . $iphone_update->iphone_image);
            }
        } else {
            $fileName = $request->iphone_update_image;
        }

        $iphoneData = ['model' => $request->model, 'released' => $request->released, 'discontinued' => $request->discontinued, 'capacities' => $request->capacities, 'processor' => $request->processor, 'os' => $request->os, 'iphone_image' => $fileName];

        $iphone_update->update($iphoneData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an iphone ajax request
    public function delete(Request $request) {
        $id = $request->id;
        $iphone_delete = Iphone::find($id);
        if (Storage::delete('public/images/' . $iphone_delete->iphone_image)) {
            Iphone::destroy($id);
        }
    }


}
