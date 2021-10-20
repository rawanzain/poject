<?php

namespace App\Mail;

use App\Models\Driver;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DriverComplaintMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     *
     */

    public $driver;
    public $data = array();

    public function __construct(Driver $driver ,$data )
    {
        $this->driver = $driver;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
     return $this->view('email.complaint')->from('obeysaad@yahoo.com');
            ;
    }
}














