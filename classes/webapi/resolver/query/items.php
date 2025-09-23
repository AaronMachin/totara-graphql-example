<?php

namespace local_todo\webapi\resolver\query;

use core\webapi\execution_context;
use core\webapi\query_resolver;
use core\reference\user_record_reference;

// The local_todo_items query
class items extends query_resolver {

    public static function resolve(array $args, execution_context $ec) {
        // Retrieve the user record using the user record reference class
        $user_record = user_record_reference::load_for_viewer($args['user'] ?? []);

        return [
            'items' => [
                [
                    'id' => 1,
                    'title' => "Cook dinner for user $user_record->id",
                    'completed_at' => null,
                ]
            ]
        ];
    }
}