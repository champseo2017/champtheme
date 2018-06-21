<?php
/*
Template Name: Page Tabbed Content with jQuery and CSS
*/
get_header();
?>
<!-- <form class="form-inline my-2 my-lg-0 px-2">
	<input type="text" id="search" class="form-control mr-sm-2 justify-content-end"  placeholder="Search" />
</form> -->

<div class="container">
	<ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true" data-slug="">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false" data-slug="news">The New Concept News</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false" data-slug="test3">Real Estate</a>
  </li>
	<li class="nav-item">
    <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false" data-slug="test4">Lifestyles</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab"></div>
  <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab"></div>
  <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab"></div>
	<div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab"></div>
</div>

<div id="blogs"></div>
</div>
<script>

	function fecthData(id, slug) {
		var uri = '/wordpress1/fefefefe'
		if (slug) {
			uri = uri + '?cat=' + slug
		}
		$.get(uri, function(resp) {
			$(id).html(resp)
		})
	}

	$('a[data-toggle="pill"]').each(function () {
		if ($(this).hasClass('active')) {
			fecthData($(this).attr('href'), $(this).data('slug'))
		}
	})


	$(document).on('click', '.page-numbers', function (e) {
		e.preventDefault()
		var $this = $(this)
		$.get($this.attr('href'), function (resp) {
			$this.parents('.tab-pane').html(resp)

			$('html, body').animate({
					scrollTop: $("#pills-tab").offset().top
			}, 1000)

		})
	})

	$('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {

		fecthData($(this).attr('href'), $(this).data('slug')) //ส่ง id กับ slug เข้าไปที่ feacthdata
	})

</script>

<?php get_footer(); ?>
