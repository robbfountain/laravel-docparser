<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Information -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name')}} - Docs</title>

        <!-- CSS -->
        <link href="/vendor/docparser/app.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100" style="-webkit-print-color-adjust:exact;">
        <div>
            <header class="py-6 bg-white shadow">
                <div class="container mx-auto pl-10">
                    @include('docparser::partials.brand')
                </div>

            </header>

            <!-- Main Content -->
            <div class="">
                <div class="container mx-auto flex justify-between pt-10">
                    <aside class="w-1/3 md:pl-10">
                        <div class="index">
                            {!! $index !!}
                        </div>
                    </aside>

                    <section class="flex-1">
                        {!! $content !!}
                    </section>
                </div>

            </div>
        </div>
    </body>
</html>
