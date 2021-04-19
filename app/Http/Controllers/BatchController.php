<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::all();
        return view('batches.index', compact('batches'));
    }

    public function create()
    {
        return view('batches.create');
    }

    public function store()
    {
        abort_if(!auth()->user()->isAdmin, 403, "You don't have permission to do the operation.");

        $data = request()->validate([
            'title' => ['required', 'string', 'max:20'],
            'session' => ['required', 'string', 'max:10'],
            'dept' => ['required', 'string', 'max:10'],
        ]);

        Batch::create([
            'title' => $data['title'],
            'session' => $data['session'],
            'dept' => $data['dept'],
        ]);

        return redirect(route('batch.index'));
    }

    public function edit(Batch $batch)
    {
        abort_if(!auth()->user()->isAdmin, 403, "You don't have permission to do the operation.");

        return view('batches.edit', compact('batch'));
    }

    public function update(Batch $batch)
    {
        abort_if(!auth()->user()->isAdmin, 403, "You don't have permission to do the operation.");

        $data = request()->validate([
            'title' => ['required', 'string', 'max:20'],
            'session' => ['required', 'string', 'max:10'],
            'dept' => ['required', 'string', 'max:10'],
        ]);

        $batch->update($data);

        return redirect(route('batch.index'));
    }

    public function destroy(Batch $batch)
    {
        abort_if(!auth()->user()->isAdmin, 403, "You don't have permission to do the operation.");

        $batch->delete();

        return redirect(route('batch.index'));
    }

}
