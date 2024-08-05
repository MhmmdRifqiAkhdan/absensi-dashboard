@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Master Data</h1>
    <form action="{{ route('masterdata.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Form fields for editing master data -->
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
