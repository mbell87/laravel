<?php

namespace App\Http\Controllers;

use App\Workorder;
use App\MDF;
use App\Status;
use App\User;
use Illuminate\Http\Request;
use App\CallType;
use App\Http\Requests\WorkorderStoreRequest;
use Illuminate\Support\Facades\Auth;
use App\WorkorderType;
use App\TaskType;

class WorkOrdersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workorders = Workorder::latest()->get();
        return view("workorders.index", compact('workorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mdfs = MDF::all();
        $workers = User::all();
        $statuses = Status::all();
        $callTypes = CallType::all();
        $woTypes = WorkorderType::all();
        return view("workorders.create")
            ->with('mdfs', $mdfs)
            ->with('workers', $workers)
            ->with('statuses', $statuses)
            ->with('woTypes', $woTypes)
            ->with('callTypes', $callTypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkorderStoreRequest $request)
    {
        $createdBy = ["created_by" => Auth::user()->id, "updated_by" => Auth::user()->id];
        $wo = Workorder::create(\array_merge($request->all(), $createdBy));
        return redirect($wo->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function show(Workorder $workorder)
    {
        $taskTypes = TaskType::get(["id", "name"]);
        $workers = User::get(["id", "name"]);

        return view('workorders.show')
            ->with('workorder', $workorder)
            ->with('tasktypes', $taskTypes)
            ->with('workers', $workers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Workorder $workorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workorder $workorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workorder $workorder)
    {
        //
    }
}
