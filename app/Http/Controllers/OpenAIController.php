<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Session;
class OpenAIController extends Controller
{
    public function generateImage(Request $request)
    {
        // Valider le prompt
       // Valider le prompt
       $validatedData = $request->validate([
        'prompt' => 'required|string|max:255',
    ]);

    // Récupérer le prompt
    $prompt = $validatedData['prompt'];

    // Générer l'image
    $result = OpenAI::images()->create([
        'prompt' => $prompt,
        'size' => '1024x1024',
    ]);
   $image=$result->data[0]->url;
   Session::put('image',$image);
   return view('generate_image');
}
}

