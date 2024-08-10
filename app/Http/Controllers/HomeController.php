<?php

namespace App\Http\Controllers;

use App\Events\GotMessage;
use App\Jobs\SendMessage;
use App\Models\Message;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): Factory|View|Application
    {
        $user = User::query()->where('id', auth()->id())->select([
            'id', 'name', 'email',
        ])->first();

        return view('home', [
            'user' => $user,
        ]);
    }

    public function messages(): JsonResponse
    {
        $messages = Message::with(['sender','receiver'])->get()->append('time');

        return response()->json($messages);
    }

    public function message(Request $request): JsonResponse
    {
        $message = Message::query()->create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->get('message'),
        ]);
        broadcast(new GotMessage($message));
        // SendMessage::dispatch($message);
        return response()->json([
            'success' => true,
            'message' => "Message created and job dispatched.",
        ]);
    }
}
