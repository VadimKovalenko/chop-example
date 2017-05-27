$(document).ready(function() {

	//Scroll to top
	$("#toTop").click(function(event) {
		//Prevet default event click on <a> tag
		event.preventDefault();
		//use animate method with scrollTop property and slow duration
		//html selector for firefox
		//body selector for chrome
		$("html, body").animate({ scrollTop: 0 }, "slow");
	});

	//Expand item with "read more"
	$(".read-more").click(function() {
		$(this).prev($(".item")).animate(
			{height: ($(this).prev($(".item")).height() == 388) ? 680 : 388}
		);
		//!!!Smooth Animation does not work with height:100%, need a fixed end value!!!	
	});

	//Highlight all "Ipsum" words in columns
	$("#push").click(function() {
		$(".item p:contains('ipsum')").html(function(_, html) {
			return html.replace(/(ipsum)/gi, '<span class="red">$1</span>');
		})
		setTimeout(function() {$(".red").css("color", "inherit")}, 3000);

	});

	//AJAX
	//Prevent redirection to post.php
	$("#Form").submit(function() {
		return false;
	});
	//AJAX query to server
	$("#submitForm").click(function() {
		var val = JSON.stringify($("#Form :input").serializeArray());
		console.log(val);
		$.ajax({
			//method: "POST",
			type: "POST",
			url: "post.php",
			data: {data: val},
			success: function(result) {
				$("#login-modal .modal-wrapper").html(result);
				$("#login-modal").css("display", "block");
				$("#overlay").css("display", "block");
			}
		});
	});

	//Close modal window 		
	$("#modal-close-btn").click(function(event) {
		event.preventDefault();
		$("#login-modal, #overlay").css("display", "none");
	})

});