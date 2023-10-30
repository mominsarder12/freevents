jQuery(document).ready(function ($) {
	$(".sponsor-logo-wrapper").click(function () {
		$.ajax({
			url: $(this).data("ajax-url"),
			type: "post",
			data: {
				action: "get_sponsor_details", // Action defined in step 4
				id: $(this).data("id"),
			},
			success: function (response) {
				// Handle the response
				var popup_data = JSON.parse(response);
				console.log(popup_data.post);

				//click to fade in
				$(".freevent_popup_wrapper").fadeIn();

				// You can now use the `myHTML`
				var append_content = `<h1 class="text-3xl">${popup_data.post.post_title}</h1>
                <p>${popup_data.post.post_content}</p>`;

				//binding the html value
				$(".popup-content").append(append_content);
			},
		});
    });
    
    // fadding out controls 
    $("#freevent-close-popup , .freevent_popup_wrapper").click(function () {
		setTimeout(function () {
			$(".popup-content").empty();
		}, 400);
		$(".freevent_popup_wrapper").fadeOut();
	});
});

jQuery(document).ready(function ($) {
	// $("#freevent-close-popup , .freevent_popup_wrapper").click(function () {
	// 	setTimeout(function () {
	// 		$(".popup-content").empty();
	// 	}, 400);
	// 	$(".freevent_popup_wrapper").fadeOut();
	// });
});
