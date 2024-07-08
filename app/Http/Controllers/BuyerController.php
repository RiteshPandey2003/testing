<?php
namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function show($id)
    {
        $buyer = Buyer::findOrFail($id);
        return view('admin.all-buyer-detail', compact('buyer'));
    }
    

    public function update(Request $request, $id)
    {
        $buyer = Buyer::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:buyers,email,' . $buyer->id,
            'phone_number' => 'sometimes|required|string|max:15|unique:buyers,phone_number,' . $buyer->id,
            'pan_number' => 'sometimes|required|string|max:20|unique:buyers,pan_number,' . $buyer->id,
            'password' => 'sometimes|required|string|min:8',
        ]);

        $buyer->update($validatedData);
        return response()->json($buyer);
    }

    public function destroy($id)
    {
        $buyer = Buyer::findOrFail($id);
        $buyer->delete();
        return response()->json(null, 204);
    }

    public function count()
    {
        $count = Buyer::count();
        return response()->json(['count' => $count]);
    }

    public function allBuyersdata()
    {
        $buyers = Buyer::all();
        return view('admin.all-buyer1', compact('buyers'));
    }
   
}
