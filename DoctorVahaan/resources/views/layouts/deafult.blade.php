<?php isset($rtl) or $rtl = false ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="<?php echo($rtl ? 'rtl':'ltr') ?>">
<head>
    <title>@yield('title')</title>
    @includeWhen(!$rtl,'includes.head')
    @yield('style')
</head>
<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
    @include('includes.navbar')
    @include('includes.main-menu')
    @yield('content')
    @include('includes.footer')
@yield('script')
</body>
</html> 