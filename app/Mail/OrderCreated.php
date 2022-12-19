<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Headers;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;


    protected $name;
    protected $order;

    

    // public function __construct($order)
    // {
    //     $this->order = $order;
    // }


    public function __construct($name)
    {
        $this->name = $name;
    }


    public function envelope()
    {
        return new Envelope(
            // from: new Address('jeffrey@example.com', 'Jeffrey Way'),
            subject: 'Заказ через сайт Raffir.net',
        );
    }

    public function content()
    {
        return new Content(
            view: '/mail/order_created',
            with: [
                'name' => $this->name,
            ],
        );



       
    }

    public function headers()
    {
        return new Headers(
            messageId: 'custom-message-id@example.com',
            references: ['previous-message@example.com'],
            text: [
                'X-Custom-Header' => 'Custom Value',
            ],
        );
    }

   

    // public function build()
    // {
    //     return $this->view('/mail/order_created', ['name' => $this->name]);
    // }

}
