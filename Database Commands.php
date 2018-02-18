DB::table('$name')->get() / Return all the records
DB::table('$name')->find($column) / Return a specific record

Eloquent
$name::get(); / Return all records. usd in index method usually
$name::all(); / Return all records
$name->create($request->all()) / Creates a record. used in store method usually
$name->delete() / Deletes a specific record. used in destroy method

$name->fill($request->all()); / Updated a record. used in update method usually
$name->save();




$name::where$columnname($val)->first() / Returns a specific record using dynamic method based on the column you specify.
e.g Song::whereHandle($handle)->first()

Request::all()
$request->all() / Return the array of all the input

return redirect()->route('$name') / Redirects to a named route