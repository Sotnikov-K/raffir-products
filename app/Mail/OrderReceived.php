<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class OrderReceived extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $items;
    protected string $country;
    protected string $address;

    protected $orderid;
    protected $orderdate;
    protected $orderamount;

    protected $today;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $items, $country, $address, $orderid, $orderdate, $orderamount )
    {
        $this->name = $name;
        $this->items = $items;
        $this->country = $country;
        $this->address = $address;
        $this->orderid = $orderid;
        $this->orderdate = $orderdate;
        $this->orderamount = $orderamount;
    }

    public function content()
    {
        return new Content(
            markdown: '/emails/orders/received',
            with: [
                'name' => $this->name,
                'items' => $this->items,
                'country' => $this->country,
                'address' => $this->address,
                'orderid' => $this->orderid,
                'orderdate' => $this->orderdate,
                'orderamount' => $this->orderamount,
            ],
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $today = date("y");

        return $this->markdown('/emails/orders/received', 
            [
                'name' => $this->name,
                'items' => $this->items,
                'country' => $this->country,
                'address' => $this->address,
                'orderid' => $this->orderid,
                'orderdate' => $this->orderdate,
                'orderamount' => $this->orderamount, 
            ])->subject("Заказ с сайта [raffir.net] - номер RU{$today}{$this->orderid}");
    }
}
