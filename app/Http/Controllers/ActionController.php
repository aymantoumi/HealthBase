<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function delete(Request $Value)
    {
        $actionId = $Value->action_id;
        $action = Action::find($actionId);

        if ($action) {
            $action->delete();
        }

        return redirect()->back()->with('message', 'Action deleted successfully');
    }
}
