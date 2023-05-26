$(document).ready(function(){
	//регистрация
	$("#reg-form-button").click(function(){
		if($(this).attr('disabled')) return;
		$(this).attr('disabled', true);
		let data = $(this).closest('form').serializeArray();
		$.ajax({
			url: '/ajax/lk/registration.php',
			type: 'post',
			data: data,
			dataType: 'json',
			success: $.proxy(function(data){
				if(data.success){
					$('.thanks-reg').fadeIn();
				}
				else alert(data.error);
				$(this).attr('disabled', false);
			}, this),
			error: $.proxy(function(data){
				console.log(data);
				$(this).attr('disabled', false);
			}, this)
		});
	});

	//авторизация
	$("#form-auth_btn").click(function(){
		if($(this).attr('disabled')) return;
		$(this).attr('disabled', true);
		let data = $(this).closest('#form-wrapper').find("#form-auth").serializeArray();
		$.ajax({
			url: '/ajax/lk/auth.php',
			type: 'post',
			data: data,
			dataType: 'json',
			success: $.proxy(function(data){
				if(data.success){
					window.location = data.success.url;
				}
				else alert(data.error);
			}, this),
			error: $.proxy(function(){
				alert("Ошибка сервера");
				$(this).attr('disabled', false);
			}, this)
		});
	});

	BX.ready(function(){
	//создание коллекций
		var addToCollectionPopup = new BX.PopupWindow('call_add_to_collection', null, {
			content: BX('add_to_collection'),
			closeIcon: true,
		});
		
		var addCollectionPopup = new BX.PopupWindow('call_add_collection', null, {
			content: BX('add_collection'),
			closeIcon: true,
		});

		$('.add-to-collection').click(function(){
			sessionStorage.setItem("productId", $(this).data('id'));
			let data = {
				"action": "get_collections",
				"sessid": $(addToCollectionPopup.params.content).find('input[name="sessid"]').val(),
				"productId": sessionStorage.getItem("productId")
			};
			console.log(data);
			$.ajax({
				url: '/ajax/collection/collection.php',
				type: 'post',
				data: data,
				dataType: 'json',
				success: $.proxy(function(data){
					console.log(data);
					if(data.success){
						$(addToCollectionPopup.params.content).find('.collection_list').html(data.success.collections);
						$('.add_to_collection_btn').click(function(){
							if($(this).disabled) return;
							$(this).disabled = true;
							let data = {
								"action": "add2collection",
								"collection_id": $(this).data('id'),
								"product_id": sessionStorage.getItem("productId"),
								"sessid": $(addToCollectionPopup.params.content).find('input[name="sessid"]').val()
							};
							$.ajax({
								url: '/ajax/collection/collection.php',
								type: 'post',
								data: data,
								dataType: 'json',
								success: $.proxy(function(data){
									console.log(data);
									if(data.success){
										$(this).text(data.success.text);
										$(this).disabled = false;
									}
								}, this),
								error: $.proxy(function(data){
									console.log(data);
									$(this).disabled = false;
								}, this)
							});
						});
					}
				}, this),
				error: $.proxy(function(data){
					console.log(data)
				}, this)
			});
			//$.ajax()
			addToCollectionPopup.show();
		});

		$('.add-collection').click(function(){
			addCollectionPopup.show();
		});

		$('#add_collection_btn').click(function(){
			if($(this).disabled) return;
			$(this).disabled = true;
			let data = $(this).closest('form').serializeArray();
			data.push({
				"name": "action",
				"value": "add_collection"
			});
			$.ajax({
				url: '/ajax/collection/collection.php',
				type: 'post',
				data: data,
				dataType: 'json',
				success: $.proxy(function(data){
					console.log(data);
					if(data.success){
						$(addToCollectionPopup.params.content).find('.collection_list').append(data.success["COLLECTION_HTML"]);
						addCollectionPopup.close();
					}
					else alert(data.error);

					/*if(data.success){
						console.log(data);
					}
					else alert(data.error);*/
					$(this).disabled = false;
				}, this),
				error: $.proxy(function(error) {
				  console.log(error);
				  $(this).disabled = false;
				}, this)
			});
		});
	});

	//форма обратной связи
	$("#feedback_form_btn").click(function(){
		if($(this).disabled) return;
		$(this).disabled = true;
		let data = $(this).closest('form').serializeArray();
		$.ajax({
			url: '/ajax/forms/feedbackform.php',
			type: 'post',
			data: data,
			dataType: 'json',
			success: $.proxy(function(data){
				console.log(data);
			}, this),
			error: $.proxy(function(data){
				console.log(data);
			}, this)
		});
	})
});