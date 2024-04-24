<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newnotif extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private $tasks_id;
    private $user_created;
    private $type;
    public function __construct($tasks_id,$user_created,$type)
    {
        $this->tasks_id = $tasks_id;
        $this->user_created = $user_created;
        $this->type = $type;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'task_id'=> $this->tasks_id,
            'user_created'=>$this->user_created,
            'type'=> $this->type

        ];
    }
}
