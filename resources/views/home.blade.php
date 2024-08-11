@extends('layouts.app')

@section('content')
    <div class="container bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        <div id="main" data-user="{{ json_encode($user) }}"></div>
    </div>
@endsection
