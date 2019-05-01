<?php

namespace App\Http\Controllers\VkBot;

use App\Http\Controllers\Controller;

class VkRequestController extends Controller {
    public function handle() {
        $request = json_decode(file_get_contents('php://input'), true);

        $group_id = $request['group_id'];

        switch ( strtolower($request['type']) ) {
            case 'confirmation':
                return self::handleConfirmation($group_id);
            case 'message_new':
                break;

            default:
                \Log::info('Unknown vk request type: '. $request['type']);
                return 'Unknown type';
        }
    }

    private function handleConfirmation($group_id) {
        return config('app.vkbot.groups')[$group_id]['confirm'];
    }
}

?>
