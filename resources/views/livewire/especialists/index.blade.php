@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- @livewire('especialists') --}}
            <livewire:especialists
            searchable="name, email"
            exportable
         />
        </div>
    </div>
@endsection
