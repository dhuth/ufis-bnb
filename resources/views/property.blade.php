<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $property->title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                padding-top: 5rem;
            }
            
            .sub-title {
                font-size: 42px;
            }

            .links > a {
                color: #636b6f;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display: block;
                margin: 5px 0px;
            }
        </style>
    </head>
    <body>
        <div class="full-height">
            <div class="content">
                <div class="title m-b-md">
                    {{ $property->title }} <br/>
                </div>
                <div class="sub-title">
                    {{ $property->property_type }}
                </div>
                <div>
                    @foreach($reviews as $review)
                    <p>{{ $review->rating }}/5 "{{ $review->comment }}"</p>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
