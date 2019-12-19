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
    <body class="tw-bg-gray-100" style="-webkit-print-color-adjust:exact;">
        <div>
            <header>
                <div class="container mx-auto">
                    Bamo Docs
                </div>

            </header>

            <!-- Main Content -->
            <div class="">
                <div class="container mx-auto flex justify-between ">
                    <aside class="w-1/3">
                        <div class="">
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
