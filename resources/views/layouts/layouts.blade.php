<html>
    <head>
        <title>@yield("title")</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    </head>
    <body>
        @component("components.header")
        @endcomponent
        <div clas="container">
            @yield("content")
        </div>
        
        @component("components.footer")
        @endcomponent
        
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>