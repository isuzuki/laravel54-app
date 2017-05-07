<?php

namespace App\Http\Controllers;

use App\Models\Board;

class BoardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $boards = Board::all();
        return view('board.index', [
            'boards' => $boards,
        ]);
    }
}
