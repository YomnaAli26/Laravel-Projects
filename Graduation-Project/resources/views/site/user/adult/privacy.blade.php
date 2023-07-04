<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    @livewireStyles
    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/privacy.css")}}">
</head>

<body>

    <!--start navbar-->
    @include("layouts.site.user.adult.inc.navbar")


    <header class="container">
        <div class="first">
            <h1>Privacy</h1>
            <h2>This privacy policy will help you better understand how we collect, use and share your personal
                information</h2>
        </div>
        <hr>
        <div class="second">

            <ul>An organization or agency's privacy policy must tell you:
                <br><br>
                <li>their name and contact details</li>
                <li>what kinds of personal information they collect and store</li>
                <li>how they collect personal information and where it is stored</li>
                <li>the reasons why they need to collect personal information</li>
                <li>how they'll use and disclose personal information</li>
                <li>how you can access your personal information ,or ask for a correction</li>
                <li>how to lodge a complaint if you think your information has mishandled, and how they'll handle your
                    complaint if they are likely to disclose your information outside Australia and, if practical, which
                    countries they are likely to disclose the information to. </li>
                <li>If an organization or agency's privacy policy says that your personal information is likely to be
                    sent overseas, if something goes wrong then they may be legally responsible.
                </li>
            </ul><br>

            <ul>If information handling practices change <br><br>
                <li>An organisation or agency must update their privacy policy when their information handling practices
                    change. </li>
            </ul><br>


            <ul>Other important privacy information Notice to End Users <br><br>
                <li>Many of our products are intended for use by organizations. Where the Services are made available to
                    you through an organization (e.g. your employer), that organization is the administrator of the
                    Services and is responsible for the accounts and/or Service sites over which it has control. If this
                    is the case, please direct your data privacy questions to your administrator, as your use of the
                    Services is subject to that organization's policies. We are not responsible for the privacy or
                    security practices of an administrator's organization, which may be different than this policy.
                </li>
            </ul><br>

            <ul>Administrators are able to: <br><br>
                <li>require you to reset your account password; </li>
                <li>restrict, suspend or terminate your access to the Services;</li>
            </ul><br><br>
        </div>
    </header>

    @include("layouts.site.user.adult.inc.footer")
    <script src="{{asset("site/js/main.js")}}"></script>
    @livewireScripts

</body>
