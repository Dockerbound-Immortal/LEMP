<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreateTennisCourtRequest;
use App\Http\Requests\Api\UpdateTennisCourtRequest;
use App\Models\TennisCourt;
use Illuminate\Http\JsonResponse;

final class TennisCourtController extends Controller
{

    public function index()
    {
        $courts = TennisCourt::all();
        $count = $courts->count();

        return new JsonResponse([
            'count' => $count,
            'data' => $courts
        ], JsonResponse::HTTP_OK);
    }

    public function show(int $id)
    {
        $court = TennisCourt::findOrFail($id);

        return new JsonResponse([
            'data' => $court
        ], JsonResponse::HTTP_OK);
    }

    // TODO: Add Request Validation
    public function create(CreateTennisCourtRequest $request) {
        
        $body = $request->all();

        $tennisCourt = new TennisCourt([
            'name' => $body['name'], 
            'description' => $body['description'], 
            'free_access' => $body['free_access'] ?? 'free',
            'num_of_courts' => $body['num_of_courts'], 
            'disabled_access' => $body['disabled_access'] ?? 'none',
            'court_surface_id' => $body['court_surface_id'] ?? null,
            'long' => $body['long'] ?? null,
            'lat' => $body['lat'] ?? null
        ]);

        $tennisCourt->save();

        return new JsonResponse([
            'data' => $tennisCourt, 
        ], JsonResponse::HTTP_CREATED);
    }

    public function update(UpdateTennisCourtRequest $request, $id) {
        $body = $request->all();

        $oldTennisCourt = TennisCourt::findOrFail($id);

        $tennisCourt = TennisCourt::updateOrCreate([
            'id' => $body['id'] ?? $id,
            'name' => $body['name'] ?? $oldTennisCourt->name, 
            'description' => $body['description'] ?? $oldTennisCourt->description, 
            'free_access' => $body['free_access'] ?? $oldTennisCourt->free_access,
            'num_of_courts' => $body['num_of_courts'] ?? $oldTennisCourt->num_of_courts, 
            'disabled_access' => $body['disabled_access'] ?? $oldTennisCourt->disabled_access,
            'court_surface_id' => $body['court_surface_id'] ?? $oldTennisCourt->court_surface_id,
            'long' => $body['long'] ?? $oldTennisCourt->long,
            'lat' => $body['lat'] ?? $oldTennisCourt->lat,
        ]);

        $oldTennisCourt->delete();

        return new JsonResponse([
            'data' => $tennisCourt
        ], JsonResponse::HTTP_OK);
    }

    public function delete(int $id) {
        $court = TennisCourt::findOrFail($id);

        $court->delete();

        return new JsonResponse([
            'court' => $court,
        ], JsonResponse::HTTP_NO_CONTENT);
    }
}
