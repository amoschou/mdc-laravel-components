@extends('layouts.app.app-frame')

@section('body')
    <div class="mdc-layout-grid__inner">
        <div class="
            mdc-layout-grid__cell
            mdc-layout-grid__cell--span-4-desktop
            mdc-layout-grid__cell--span-2-tablet
            mdc-layout-grid__cell--span-4-phone
        ">
            @foreach($component as $c)
                @include('demos.' . $c)
            @endforeach
        </div>
        <div class="
            mdc-layout-grid__cell
            mdc-layout-grid__cell--span-4-desktop
            mdc-layout-grid__cell--span-2-tablet
            mdc-layout-grid__cell--span-4-phone
            {{ App\Helpers\Theme::wrapperClass(App\Helpers\Theme::generateRandomTheme()) }}
        ">
            @foreach($component as $c)
                @include('demos.' . $c)
            @endforeach
        </div>
        <div class="
            mdc-layout-grid__cell
            mdc-layout-grid__cell--span-4-desktop
            mdc-layout-grid__cell--span-2-tablet
            mdc-layout-grid__cell--span-4-phone
            {{ App\Helpers\Theme::wrapperClass(App\Helpers\Theme::generateRandomTheme()) }}
        ">
            @foreach($component as $c)
                @include('demos.' . $c)
            @endforeach
        </div>
    </div>
@endsection
