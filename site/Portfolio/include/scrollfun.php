<script>
$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() >= 600) {
			$("#hd-str").addClass("fixed");
		} else {
			$("#hd-str").removeClass("fixed");
		}
	});
});

</script>