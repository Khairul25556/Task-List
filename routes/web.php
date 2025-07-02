<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class Task
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public ?string $long_description,
        public bool $completed,
        public string $created_at,
        public string $updated_at
    ) {}
}

$tasks = [
    new Task(
        1,
        'Buy groceries',
        'Task 1 description',
        'Task 1 long description',
        false,
        '2025-03-01 12:00:00',
        '2025-03-01 12:00:00'
    ),
    new Task(
        2,
        'Sell old stuff',
        'Task 2 description',
        null,
        false,
        '2025-03-02 12:00:00',
        '2025-03-02 12:00:00'
    ),
    new Task(
        3,
        'Learn programming',
        'Task 3 description',
        'Task 3 long description',
        true,
        '2025-03-03 12:00:00',
        '2025-03-03 12:00:00'
    ),
    new Task(
        4,
        'Take dogs for a walk',
        'Task 4 description',
        null,
        false,
        '2025-03-04 12:00:00',
        '2025-03-04 12:00:00'
    ),
     new Task(
        5,
        'Take drinking water',
        'Task 5 description',
        null,
        false,
        '2025-03-05 12:00:00',
        '2025-03-05 12:00:00'
    ),
];

Route::get('/', function(){
    return redirect() ->route('tasks.index');
});

//index route
Route::get('/tasks', function() use($tasks){
    return view('index', ['tasks' => $tasks]);
}) ->name('tasks.index');

//to see one single task

//collect($tasks) this one Converts the regular PHP array $tasks into a Laravel Collection (a more powerful wrapper with extra methods).
//->firstWhere('id', $id) Loops through all items in the collection. Looks for the first item where the id property matches the $id passed in the URL

Route::get('/tasks/{id}', function($id) use($tasks){
    $task = collect($tasks) -> firstWhere('id', $id);

    if(!$task){
        abort(Response::HTTP_NOT_FOUND); //404
    }

    return view('show', ['task' => $task]);
}) ->name('tasks.show');



// Route::get('/xxx', function () {
//     return 'Hello';
// })->name('hello'); //to implement route name

//redirect URL
// Route::get('/hallo', function () {
//     return redirect()->route('hello'); //it is using the route name. So if we change the get hello url , it wont afttect the redirect because it will follow the nanme
// });

// Route::get('/greet/{name}', function ($name) {
//     return 'Hello ' . $name . ' !';
// });

// Route::get('/fan/{fanname}', function ($fanName) {
//     return 'This ' . $fanName . ' is so powerful.';
// });

//if no other route is matched we can use fallback route
Route::fallback(function () {
    return 'Still got somewhere!';
});
