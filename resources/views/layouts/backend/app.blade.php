<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<script src="{{ asset('js/app.js') }}"></script>
    </head>
<body>


	<div class="wrapper">
		@include('layouts.backend.navigation')
		<div class="main">
			@include('layouts.backend.header')
			<main class="content">
				<div class="container-fluid p-0">
					{{ $slot }}
				</div>
			</main>
            @include('layouts.backend.footer')
		</div>
	</div>

</body>
</html>