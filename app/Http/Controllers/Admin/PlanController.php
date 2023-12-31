<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    private $repository;

    public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }

    public function index()
    {
        $plans = $this->repository->latest()->paginate();

        return view('admin.pages.plans.index', [
            'plans' => $plans
        ]);
    }

    public function create()
    {
        return view('admin.pages.plans.create');
    }

    public function store(StoreUpdatePlanRequest $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('plans.index');
    }

    public function show($url)
    {
        if (!$plan = $this->repository->where('url', $url)->first())
            return redirect()->back();

        return view('admin.pages.plans.show', [
            'plan' => $plan
        ]);
    }

    public function destroy($url)
    {
        if (!$plan = $this->repository->where('url', $url)->first())
            return redirect()->back();

        $plan->delete();

        return redirect()->route('plans.index');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');
        $plans = $this->repository->search($request->filter);

        return view('admin.pages.plans.index', [
            'plans' => $plans,
            'filters' => $filters
        ]);
    }

    public function edit($url)
    {
        if (!$plan = $this->repository->where('url', $url)->first())
            return redirect()->back();

        return view('admin.pages.plans.edit', [
            'plan' => $plan
        ]);
    }

    public function update(StoreUpdatePlanRequest $request, $url)
    {
        if (!$plan = $this->repository->where('url', $url)->first())
            return redirect()->back();

        $plan->update($request->all());

        return redirect()->route('plans.index');
    }
}