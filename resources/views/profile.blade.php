@extends('layouts/ecl')

@section('title', 'Home')

@section('breadcrumbs')
    <x-ecl.breadcrumb label="Profile Page"/>
@endsection


@section('content')

    <h1 class="ecl-u-type-heading-1 ecl-u-mb-xl-6xl">Profile Page</h1>
    <p class="ecl-u-type-paragraph ecl-u-mb-xl-2xl"
       style="font-size:16pc; margin-top:-26px; font-style: italic !important">{{auth()->user()->email}}</p>

    <div class="ecl-row ecl-u-flex ecl-u-flex-wrap ecl-u-mb-xl-6xl" style="gap: 2rem; margin-left: 0;">
        <div class="ecl-col ecl-u-flex-item-grow">
            <a class="ecl-button ecl-button--secondary" href="/logout">Logout</a>
        </div>
    </div>

@endsection
