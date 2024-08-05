@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Master Data</h1>
    <form action="{{ route('masterdata.store') }}" method="POST">
        @csrf
        <!-- Form fields for creating master data -->
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
