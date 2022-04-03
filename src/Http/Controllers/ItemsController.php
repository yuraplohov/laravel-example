<?php

namespace Yuraplohov\LaravelExample\Http\Controllers;

use Yuraplohov\LaravelExample\Models\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::select(['name'])->get();

        return response()->json([
            'items' => $items,
        ]);
    }
}