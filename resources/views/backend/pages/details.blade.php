<?php

namespace App\Http\Controllers;

use App\user_requests;
use Illuminate\Http\Request;
?>
@extends('backend.layouts.default')
@section('content')
    <?php
        $data = user_requests::where('request','=','pending')
        ->get();
    ?>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <td>ID No.</td>
                    <td>Name</td>
                    <td>Requests</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            @if(count($data)>0)
                @foreach($data as $t)
                <tr>
                    <td>{{ $t ->id }}&nbsp;&nbsp;</td>
                    <td>{{ $t ->name }}&nbsp;&nbsp;</td>
                    <td>{{ $t ->request }}&nbsp;&nbsp;</td>
                    <td><a href="/edit/{{ $t->id }}">Show Profile&nbsp;&nbsp;</a></td>
                </tr>
                </tr>
                @endforeach
            @else
            @endif
            </tbody>
        </table>
    </div>
@stop

