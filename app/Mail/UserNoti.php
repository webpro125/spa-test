<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class UserNoti extends Mailable
{
    use Queueable, SerializesModels;

    private $userId;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userId)
    {
        //
        $this->userId = $userId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $params['user'] = User::find($this->userId);
        return $this->view('email.user_noti')->with($params);
    }
}
