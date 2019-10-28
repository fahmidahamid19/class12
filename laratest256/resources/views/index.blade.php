@extends('layouts.master')
@push('css')

    @endpush
@section('content')
    <form action="{{ route('show.submit') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="name"><br>
        <input type="submit" value="Add" name="submit">
    </form>

    @endsection
@section('title')
