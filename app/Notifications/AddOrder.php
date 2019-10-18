<?php
namespace App\Notifications;

use App\UserOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
class AddOrder extends Notification
{
    use Queueable;
    protected  $UserOrder;
    public function __construct(UserOrder $UserOrder)
    {
        $this->UserOrder = $UserOrder;
    }
    public function via($notifiable)
    {
        return ['database'];
    }
    public function toArray($notifiable)
    {
        return [
            'data' => 'We Have New Order ' .$this->UserOrder->id ." <br> Added By " . auth()->user()->full_name
        ];
    }
}