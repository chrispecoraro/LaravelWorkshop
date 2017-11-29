
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
        <title>Health Test</title>
    </head>
    <body>
        <div class="container">
            <div id="health-test" style="" class="">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Health Test</div>
                    </div>
                    <div class="panel-body">
                        Your score is {{ $score }}.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
