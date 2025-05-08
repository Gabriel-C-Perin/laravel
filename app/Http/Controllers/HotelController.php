<?php
namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;
class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }
    public function create()
    {
        return view('hotels.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'         => 'required|string',
            'cidade'       => 'required|string',
            'pais'         => 'required|string',
            'estrelas'     => 'required|integer|max:5',
            'diaria'       => 'required|numeric',
            'comodidades'  => 'nullable|string',
        ]);
        Hotel::create($validated);
        return redirect()->route('hotels.index');
    }
    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotels.edit', compact('hotel'));
    }
    public function update(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);
        $validated = $request->validate([
            'nome'         => 'required|string',
            'cidade'       => 'required|string',
            'pais'         => 'required|string',
            'estrelas'     => 'required|integer',
            'diaria'       => 'required|numeric',
            'comodidades'  => 'nullable|string',
        ]);
        $hotel->update($validated);
        return redirect()->route('hotels.index');
    }
    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        return redirect()->route('hotels.index');
    }
}