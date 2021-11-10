<?php

use App\Property;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// route to specific property
Route::get('/property/{id}', function($id) {
    $property = Property::find($id);
    $reviews = $property->reviews()->get();
    return view('property')
            ->with('property', $property)
            ->with('reviews', $reviews);
});


// route to default page
Route::get('/', function (Request $request) {
    
    $filter_by = $request->query('filter-by-type', 'None');
    
    $properties = $filter_by == 'None'
            ? Property::all()
            : DB::table('property')->where('property_type', $filter_by)->get();
    $property_types = DB::table('property')->select('property_type')->distinct()->get();
    
    
    return view('welcome')
            ->with('properties', $properties)
            ->with('property_types', $property_types);
});
