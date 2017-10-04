<script src="{{asset('js/simpleCart.min.js')}}"> </script>
<!-- slide -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!--light-box-files -->
		<script src="{{asset('js/jquery.chocolat.js')}}"></script>
		<link rel="stylesheet" href="{{asset('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>

<script type="text/javascript">
$(document).ready(function(){
	$("#giam").click(function(){
		var sl=$(".value").val();
		sl--;
		$(".value").val(sl);
		if(sl<=1)
			$(".value").val(1);
	});
	$("#tang").click(function(){
			var sl=$(".value").val();
			sl++;
			$(".value").val(sl);
	});
});
</script>
<script>
$("#zoom_08").elevateZoom({
			zoomWindowFadeIn: 800,
			zoomWindowFadeOut: 800,
			lensFadeIn: 800,
			lensFadeOut: 800
});
</script>
