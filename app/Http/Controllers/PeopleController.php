<?php

namespace App\Http\Controllers;

use App\People;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PeopleController extends Controller {

  public function index() {
    $People = People::all();
    return response()->json($People);
  }

  public function getPeople($id) {
    $People = People::find($id);
    return response()->json($People);
  }

  public function getAllDeletedPeople() {
    $People = People::onlyTrashed()->get();
    return response()->json($People);
  }

  public function getDeletedPeople($id) {
    $People = People::onlyTrashed()->where('id', $id)->get();
    return response()->json($People);
  }

  public function createPeople(Request $request) {
    $People = People::create($request->all());
    return response()->json($People);
  }

  public function deletePeople($id) {
    $People = People::find($id);
    $People->delete();

    return response()->json('deleted');
  }

  public function updatePeople(Request $request, $id) {
    $People = People::find($id);
    $People->first_name = $request->input('first_name');
    $People->last_name = $request->input('last_name');
    $People->birthdate = $request->input('birthdate');
    $People->save();

    return response()->json($People);
  }

}

?>
