<html>
    <head>
        <title>@yied("title")</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    </head>
    <body>
        <div clas="container">
            @yied("content")
        </div>
        
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>