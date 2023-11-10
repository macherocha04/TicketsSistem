<?php

namespace App\Observers;

use App\Models\TextMessage;
use App\Models\User;
use Filament\Notifications\Notification;
use Filament\Notifications\Events\DatabaseNotificationsSent;

class TextMessageObserver
{
    /**
     * Handle the TextMessage "created" event.
     */
    public function created(TextMessage $message): void
    {
        $sentTo = $message->sentTo;

        if($sentTo){

            Notification::make()
            ->title('A new message has been sent to you')
            ->sendToDatabase($sentTo);

        event(new DatabaseNotificationsSent($sentTo));
        }
        
    }
}

