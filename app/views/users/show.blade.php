@extends('layouts.default')
@section('head')
<title>Pizzaz - show</title>
@stop
<?php
$c=\Carbon\Carbon::create();
$c->hour;
?>
@section('content')
    <div class="well">
        <h2>{{{ $user->username }}}</h2>
        <p>He is cool</p>
        <div class="well">
        {{--{{ Carbon('this monday') }}--}}
            @foreach($orders as $order)
                <ul class="list-unstyled">
                    <li>
                        <h3>Order made on {{ strftime('%B %e, %y at %l:%M%P', $order->created_at->timestamp)}}
                        for {{ strftime('%B %e, %y at %l:%M%P', $order->order_time->timestamp) }}</h3>
                        <table class="table table-striped">
                            <thead><tr>
                                <th>Item</th>
                                <th>Place</th>
                                <th>Count</th>
                                <th>Each</th>
                                <th>Price</th>
                            </tr></thead>
                            <tbody>
                                @foreach($order->items as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->place->name }}</td>
                                        <td>{{ $item->count }}</td>
                                        <td>{{ '$' . money_format('%i', $item->price) }}</td>
                                        <td>{{ '$' . money_format('%i', $item->price * $item->count) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot><tr>
                                <td>Total: {{ '$' . money_format('%i', $order->price) }}</td>
                            </tr></tfoot>
                        </table>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@stop