<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	 @include('layouts.head')
</head>

<body>
	@include('layouts.header')
	@include('layouts.nav')
	@include('layouts.banner_left')
	@include('layouts.banner_right')
	@yield('content')
	@include('layouts.footer')
	@include('layouts.script')
</body>
</html>
