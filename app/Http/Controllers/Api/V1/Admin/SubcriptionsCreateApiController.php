<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubcriptionsCreateRequest;
use App\Http\Requests\UpdateSubcriptionsCreateRequest;
use App\Http\Resources\Admin\SubcriptionsCreateResource;
use App\SubcriptionsCreate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubcriptionsCreateApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subcriptions_create_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SubcriptionsCreateResource(SubcriptionsCreate::with(['categories', 'tags'])->get());
    }

    public function store(StoreSubcriptionsCreateRequest $request)
    {
        $subcriptionsCreate = SubcriptionsCreate::create($request->all());
        $subcriptionsCreate->categories()->sync($request->input('categories', []));
        $subcriptionsCreate->tags()->sync($request->input('tags', []));

        return (new SubcriptionsCreateResource($subcriptionsCreate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(SubcriptionsCreate $subcriptionsCreate)
    {
        abort_if(Gate::denies('subcriptions_create_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SubcriptionsCreateResource($subcriptionsCreate->load(['categories', 'tags']));
    }

    public function update(UpdateSubcriptionsCreateRequest $request, SubcriptionsCreate $subcriptionsCreate)
    {
        $subcriptionsCreate->update($request->all());
        $subcriptionsCreate->categories()->sync($request->input('categories', []));
        $subcriptionsCreate->tags()->sync($request->input('tags', []));

        return (new SubcriptionsCreateResource($subcriptionsCreate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(SubcriptionsCreate $subcriptionsCreate)
    {
        abort_if(Gate::denies('subcriptions_create_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subcriptionsCreate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
