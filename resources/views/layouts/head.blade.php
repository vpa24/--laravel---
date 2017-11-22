<head>
<title> @yield('title')</title>
<!-- Custom Theme files -->
{{html::style('css/bootstrap.css')}}
<!--theme-style-->
{{html::style('css/style.css')}}
{{html::style('css/style4.css')}}
{{html::style('css/jstarbox.css')}}
{{html::style('css/chocolat.css')}}
<!--//theme-style-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->

<!--//theme-style-->
{{html::script('js/jquery.min.js')}}
{{html::script('js/giohang.js')}}
{{html::script('js/jquery.elevatezoom.js')}}
{{html::script('js/jstarbox.js')}}
{{html::script('js/bootstrap.min.js')}}
{{html::script('js/jquery.chocolat.js')}}

<!--- start-rate---->
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					}
				})
			});
		});
		</script>
<!---//End-rate---->
</head>
