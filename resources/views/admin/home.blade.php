@extends('layouts.app')

@section('breadcrumbs', '')

@section('content')
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item"><a href="{{ route('admin.home') }}" class="nav-link active">Adminka</a></li>
        <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link">Users</a></li>
    </ul>
@endsection
