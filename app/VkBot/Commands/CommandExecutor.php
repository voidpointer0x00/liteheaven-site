<?php

namespace App\VkBot\Commands;

interface CommandExecutor
{
    /**
     * Executes command for given name.
     *
     * @param string|int    $group_id   Current group ID.
     * @param string|int    $user_id    The user who wants to run command.
     * @param string|int    $receiver   ID of user or conversation for output.
     * @param array         $args       Array of command arguments.
     * 
     * @return bool false if user gave invalid arguments, true otherwise.
     */
    public function on_command(mixed $user_id, mixed $receiver, array $args);
}

?>