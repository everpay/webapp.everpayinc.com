<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySubcriptionsCreateRequest;
use App\Http\Requests\StoreSubcriptionsCreateRequest;
use App\Http\Requests\UpdateSubcriptionsCreateRequest;
use App\ProductCategory;
use App\ProductTag;
use App\SubcriptionsCreate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubcriptionsCreateController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subcriptions_create_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subcriptionsCreates = SubcriptionsCreate::all();

        return view('admin.subcriptionsCreates.index', compact('subcriptionsCreates'));
    }

    public function create()
    {
        abort_if(Gate::denies('subcriptions_create_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ProductCategory::all()->pluck('name', 'id');

        $tags = ProductTag::all()->pluck('name', 'id');

        return view('admin.subcriptionsCreates.create', compact('categories', 'tags'));
    }

    public function store(StoreSubcriptionsCreateRequest $request)
    {
        $subcriptionsCreate = SubcriptionsCreate::create($request->all());
        $subcriptionsCreate->categories()->sync($request->input('categories', []));
        $subcriptionsCreate->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.subcriptions-creates.index');
    }

    public function edit(SubcriptionsCreate $subcriptionsCreate)
    {
        abort_if(Gate::denies('subcriptions_create_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ProductCategory::all()->pluck('name', 'id');

        $tags = ProductTag::all()->pluck('name', 'id');

        $subcriptionsCreate->load('categories', 'tags');

        return view('admin.subcriptionsCreates.edit', compact('categories', 'tags', 'subcriptionsCreate'));
    }

    public function update(UpdateSubcriptionsCreateRequest $request, SubcriptionsCreate $subcriptionsCreate)
    {
        $subcriptionsCreate->update($request->all());
        $subcriptionsCreate->categories()->sync($request->input('categories', []));
        $subcriptionsCreate->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.subcriptions-creates.index');
    }

    public function show(SubcriptionsCreate $subcriptionsCreate)
    {
        abort_if(Gate::denies('subcriptions_create_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subcriptionsCreate->load('categories', 'tags');

        return view('admin.subcriptionsCreates.show', compact('subcriptionsCreate'));
    }

    public function destroy(SubcriptionsCreate $subcriptionsCreate)
    {
        abort_if(Gate::denies('subcriptions_create_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subcriptionsCreate->delete();

        return back();
    }

    public function massDestroy(MassDestroySubcriptionsCreateRequest $request)
    {
        SubcriptionsCreate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
