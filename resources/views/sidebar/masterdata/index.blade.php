@extends('layouts.app')

@section('title', 'Master Data')
@section('page-title', 'Master Data')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Manage Master Data</h3>
        <div class="card-tools">
            <a href="{{ route('masterdata.create') }}" class="btn btn-sm btn-primary">Add New</a>
        </div>
    </div>
    <div class="card-body">
        <!-- Table to display master data will go here -->
    </div>
</div>
@endsection
