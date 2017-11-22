<!-- slide -->

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
	@isset($gio_hang)
	    @foreach ($gio_hang as $cart)
$("#tang_{{$cart->rowId}}").click(function(){
		var sl=$("#qty_{{$cart->rowId}}").val();
		sl++;
		$("#qty_{{$cart->rowId}}").val(sl);
});
$("#giam_{{$cart->rowId}}").click(function(){
	var sl=$("#qty_{{$cart->rowId}}").val();
	sl--;
	$("#qty_{{$cart->rowId}}").val(sl);
	if(sl<=1)
		$("#qty_{{$cart->rowId}}").val(1);
});
		@endforeach
	@endisset

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
