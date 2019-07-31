@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Attendee Name</th>
                <th>Attendee Email</th>
                <th>Attendee Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendees as $attendee)
                <tr>
                    <td>{{$attendee->expoMembers->name}}</td>
                    <td>{{$attendee->expoMembers->email}}</td>
                    <td>{{$attendee->expoMembers->phone}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection