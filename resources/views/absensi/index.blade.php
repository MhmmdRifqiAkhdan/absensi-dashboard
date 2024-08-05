@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Attendances</h1>
    <a href="{{ route('attendances.create') }}" class="btn btn-primary">Add Attendance</a>
    <table class="table">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->employee->name }}</td>
                    <td>{{ $attendance->check_in }}</td>
                    <td>{{ $attendance->check_out }}</td>
                    <td>
                        @if(is_null($attendance->check_out))
                            <form action="{{ route('attendances.checkOut', $attendance->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning">Check Out</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
