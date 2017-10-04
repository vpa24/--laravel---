@isset($san_pham_ban_chay)
	<div class="banner" style="background:url('../images/InnerPageBannerImage-Supermarket.jpg') no-repeat">
	<div class="container">
	<section class="rw-wrapper">
					<h1 class="rw-sentence">
						<span>Ưu đãi 50%</span>
					</h1>
		</section>
		</div>
	</div>
@endisset ($san_pham_ban_chay)
@empty ($san_pham_ban_chay)
	@isset($san_pham_theo_ma_loai)
	<div class="banner-top" style="background:url('../images/{{$san_pham_theo_ma_loai[0]->hinh_nhom_loai}}') no-repeat">
		<div class="container">
			<h1 class="ten_nhom_loai">{{$san_pham_theo_ma_loai[0]->ten_nhom_loai	}}</h1>
			<em></em>
			<h2><a href="index.html">Trang chủ</a><label>/</label>{{$san_pham_theo_ma_loai[0]->ten_loai	}}</h2>
		</div>
	</div>
@endisset
@endempty
