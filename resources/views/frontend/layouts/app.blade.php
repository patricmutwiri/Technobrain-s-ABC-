<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Patricks ABC System')">
        <meta name="author" content="@yield('meta_author', 'Patrick Mutwiri')">
        @yield('meta')

        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        
        {{ style('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}
        {{ style('css/bootstrap.min.css') }}
        {{ style(mix('css/frontend.css')) }}
        {{ style('css/mutwiri.css') }}

        @stack('after-styles')
    </head>
    <body>
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            <div class="container col-xs-12x">
                @include('includes.partials.messages')
                @yield('content')
            </div><!-- container -->
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
            {!! script(mix('js/frontend.js')) !!}
            {!! script('js/jquery-ui.min.js') !!}
            {!! script('js/bootstrap.min.js') !!}
            {!! script('js/mutwiri.js') !!}
        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
