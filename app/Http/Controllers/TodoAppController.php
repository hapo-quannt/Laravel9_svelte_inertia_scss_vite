<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTodoRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoAppController extends Controller
{
    public function index() {

        $data = [
            'title' => 'Hello World 3',
            'description' => 'This is a sample object',
            'author' => 'John Doe 5'
        ];

        return Inertia::render("Todo", [
            "data" => $data,
        ]);
    }

    public function create(CreateTodoRequest $request) {
        return to_route('todo-app-test');
    }

    public function test() {

        $data = [
            'title' => 'Hello World',
            'description' => 'This is a sample object',
            'author' => 'John Doe'
        ];

        return Inertia::render("Test", [
            "data" => $data,
        ]);
    }
}
