<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('front-assets/img/comingSoon/logo.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="{{asset('front-assets/css/style.css?').time()}}" rel="stylesheet" />
    {!! RecaptchaV3::initJs() !!}
    <title>@yield('title','Home')</title>
    {{-- <title>Licata Insurance</title> --}}
</head>
<body>
    @include('components.front.header')

    @yield('content')

    @include('components.front.footer')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{asset('front-assets/js/main.js')}}"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'es,en',  // Set the target language to Spanish
                // layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            }, 'google_translate_element');
        }

        // function googleTranslateElementInit() {
        //     new google.translate.TranslateElement(
        //     {
        //     pageLanguage: 'en',  // Set the language of your website
        //     includedLanguages: 'es',  // Set the target language to Spanish
        //     layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        //     },
        //     'google_translate_element'
        // );
        // }

    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    @yield('script')

</body>

</html>
