function dellbascet(elem) {
	var postidm = jQuery(elem).data("postid");

	var  jqXHR = jQuery.post(
		allAjax.ajaxurl,
		{
			action: 'del_bascet',		
			nonce: allAjax.nonce,	
			postid:postidm,	
		}
		
	);
	
	
	jqXHR.done(function (responce) {
		location.reload();	
	});
	
	jqXHR.fail(function (responce) {
		console.log("ERROR!");
	});	
}

function recalcbascet(elem) {
	var postidm = jQuery(elem).data("postid");
	var elcountm = jQuery(elem).val();
	
	
	if (elcountm<=0) elcountm = 1;
	
	// console.log(elcount);
	
	var  jqXHR = jQuery.post(
		allAjax.ajaxurl,
		{
			action: 'rec_bascet',		
			nonce: allAjax.nonce,	
			postid:postidm, 
			elcount:elcountm,
			
		}
		
	);
	
	
	jqXHR.done(function (responce) {
		location.reload();
	});
	
	jqXHR.fail(function (responce) {
		console.log("ERROR!");
	});	
}

function toBascetFnk (postidm, tovskum, tovtypem, groupidm, offeridm, dpricem, qty) {
		
		var  jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'to_bascet',		
						nonce: allAjax.nonce,
						postid:postidm, 
						tovsku:tovskum, 
						tovtype:tovtypem, 
						groupid:groupidm, 
						offerid:offeridm,
						dprice:dpricem,
						qty: qty					
					}
					
				);
				
				
				jqXHR.done(function (responce) {
					var rezm = responce.split("|");
					console.log(responce);
					jQuery(".inputCount").html(rezm[0]);
					jQuery(".inputPrice").html(rezm[1]);
					//jQuery("#bascetblk .bascetsod").html(rezm[1]);
					jQuery('#buy-modal').arcticmodal("close");
				});
				
				jqXHR.fail(function (responce) {
					console.log("ERROR!");
				});
}

function checkInputs() {
	jQuery('.checkout-form__block input, .checkout-form__block textarea').focusout(function() {
		

		if(jQuery(this).val() !== '' && jQuery(this).hasClass('mascedphoneclass')) {
			var regex = /^((8|\+7)[\-]?)?(\(?\d{3}\)?[\-]?)?[\d\-]{7,10}$/;
			var phone = jQuery(this).val();
			var valid = regex.test(phone);
			if(valid) {
				jQuery(this).next().show();
				jQuery(this).siblings('.checkout-form__block-wrong').hide();
			}
			else {
				jQuery(this).siblings('.checkout-form__block-wrong').show();
				jQuery(this).next().hide();
			}
		} else if(jQuery(this).hasClass("checkout-form__email")) {
			var regex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
			var email = jQuery(this).val();
			var valid_email = regex.test(email);
			if(valid_email || jQuery(this).val() == '') {
				jQuery(this).next().show();
				jQuery(this).siblings('.checkout-form__block-wrong').hide();
			} else {
				jQuery(this).siblings('.checkout-form__block-wrong').show();
				jQuery(this).next().hide();
			}
		} else if(jQuery(this).val() !== '') {
			jQuery(this).next().show();
			jQuery(this).siblings('.checkout-form__block-wrong').hide();
		} else {
			jQuery(this).next().hide();
			jQuery(this).siblings('.checkout-form__block-wrong').show();
		}
	});
}

checkInputs();

jQuery(document).ready(function($) {

		
		jQuery(".toBascetInWin").click(function(){ 
			
			toBascetFnk(
				jQuery('#buy-modal .postId').html(),
				jQuery('#buy-modal .tovSKU').html(),
				jQuery('#buy-modal .tovType').html(),
				jQuery('#buy-modal .tovGroupID').html(),
				jQuery('#buy-modal .order-popup__param').val(),
				$('#buy-modal #buy-submit-link').attr('data-price'),
				'1'
			);
		});
		
		
		jQuery(".toBascetInPage").click(function(){ 
			
			console.log(jQuery(this).data("postid"));
			console.log(jQuery(this).data("offersku"));
			console.log(jQuery(this).data("offertype"));
			console.log(jQuery(this).data("groupid"));
			console.log(jQuery('#order-popup__param_page').val());
			console.log(jQuery('.product-loop__price-current .product-loop__price-current_load').html());
		
		
		
			toBascetFnk(
				jQuery(this).data("postid"),
				jQuery(this).data("offersku"),
				jQuery(this).data("offertype"),
				jQuery(this).data("groupid"),
				jQuery('#order-popup__param_page').val(),
				$(this).data('price'),
				jQuery('#qty-product').val()
			);
			jQuery('#messgeModal #lineMsg').html("Товар добавлен в корзину");
			jQuery('#messgeModal').arcticmodal();
		});
		
		
		jQuery('.cancel-link').click(function() {
			jQuery('#buy-modal').arcticmodal("close");
		});
		
		jQuery('.link-buy').click(function(e) {
     		e.preventDefault();
			var groupid = jQuery(this).data("groupid");
			var offertype = jQuery(this).data("offertype");
			var postid = jQuery(this).data("postid");
			
			console.log(postid);
			
			var src = jQuery(this).attr('data-src');
			var name = jQuery(this).parent().siblings('.products-loop__title').text();
			if(name.length == 0) {
				name = jQuery(this).data('name');
			}
			var price = jQuery(this).parent().parent().find(".products-loop__price").html();
			var price_number = jQuery(this).attr('data-pricereg');
			var priceOld = jQuery(this).parent().parent().find('.product-loop__price-old').html();
			jQuery('.loadImg').attr('src', src);
			jQuery('.tovName').text(name);
			
			if (priceOld === undefined) 
				jQuery('#buy-modal .single-price__old').hide();
			else 
				jQuery('#buy-modal .single-price__old').show();
			console.log(priceOld);
			
			jQuery('#buy-modal .tovPrice').html(price);
			$('#buy-modal #buy-submit-link').attr('data-price',  price_number);
			jQuery('#buy-modal .tovOldPrice').html(priceOld);
			
			jQuery('#buy-modal .postId').html(jQuery(this).data("postid"));
			jQuery('#buy-modal .tovSKU').html(jQuery(this).data("offersku"));
			jQuery('#buy-modal .tovType').html(jQuery(this).data("offertype"));
			jQuery('#buy-modal .tovGroupID').html(jQuery(this).data("groupid"));
			
			
			var  jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
				  action: 'get_tov_option',    
				  nonce: allAjax.nonce,
				  groupid: groupid,
				  offertype: offertype,
				  postid:postid
				}
				
			  );
			  
			  
			  jqXHR.done(function (responce) {
				console.log(responce);
				
				if (responce != ""){
					jQuery('#buy-modal #order-popup__param').show();
					jQuery('#buy-modal #order-popup__param').html(responce);
				}else {
					jQuery('#buy-modal #order-popup__param').hide();
					jQuery('#buy-modal #order-popup__param').html("");
				}
			  });
			  
			  jqXHR.fail(function (responce) {
				jQuery('#buy-modal #order-popup__param').hide();
				jQuery('#buy-modal #order-popup__param').html("");
			  });
			  
			  jQuery('#buy-modal').arcticmodal({
				afterClose: function() {
				  
				}
			  });
    });
		jQuery('.link-buy-1').click(function(e) {
     		e.preventDefault();
			var groupid = jQuery(this).data("groupid");
			var offertype = jQuery(this).data("offertype");
			var postid = jQuery(this).data("postid");
			
			console.log(postid);
			
			var src = jQuery(this).attr('data-src');
			var name = jQuery(this).parent().siblings('.products-loop__title').text();
			if(name.length == 0) {
				name = jQuery(this).data('name');
			}
			var price = jQuery(this).parent().parent().find(".products-loop__price").html();
			var price_number = jQuery(this).attr('data-pricereg');
			var priceOld = jQuery(this).parent().parent().find('.product-loop__price-old').html();
			jQuery('.loadImg').attr('src', src);
			jQuery('.tovName').text(name);
			var name_client = $(this).parent().siblings('input[type=text]').val();
			var tel = $(this).parent().siblings('input[type=tel]').val();
			if (priceOld === undefined) 
				jQuery('#buy-modal-1 .single-price__old').hide();
			else 
				jQuery('#buy-modal-1 .single-price__old').show();
			console.log(priceOld);
			
			jQuery('#buy-modal-1 .tovPrice').html(price);
			$('#buy-modal-1 #buy-submit-link').attr('data-price',  price_number);
			jQuery('#buy-modal-1 .tovOldPrice').html(priceOld);
			
			jQuery('#buy-modal-1 .postId').html(jQuery(this).data("postid"));
			jQuery('#buy-modal-1 .tovSKU').html(jQuery(this).data("offersku"));
			jQuery('#buy-modal-1 .tovType').html(jQuery(this).data("offertype"));
			jQuery('#buy-modal-1 .tovGroupID').html(jQuery(this).data("groupid"));
			
		
			  
			  jQuery('#buy-modal-1').arcticmodal({
				afterClose: function() {
				  
				}
			  });
    });

		$('#buy-one-link1').click(function(e)  {
			
			e.preventDefault();
			var product_name = jQuery('#buy-modal-1 .tovName').text();
			var name_client = $(this).parent().siblings('input[type=text]').val();
			var tel = $(this).parent().siblings('input[type=tel]').val();
			
			console.log(product_name);
			console.log(name_client);
			console.log(tel);
			
			var  jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
				  action: 'one_click_bay',
				  nonce: allAjax.nonce,
				  clname: name_client,
				  cltel: tel,
				  tovarname: product_name
				}
				
			  );
			  
			  
			  jqXHR.done(function (responce) {
			
				  
				  console.log(responce);
				
				if (responce != ""){
					jQuery('#buy-modal-1 #order-popup__param').show();
					jQuery('#buy-modal-1 #order-popup__param').html(responce);
				}else {
					jQuery('#buy-modal-1 #order-popup__param').hide();
					jQuery('#buy-modal-1 #order-popup__param').html("");
				}
				$.arcticmodal('close');
				jQuery('#messgeModal #lineMsg').html(responce);
				jQuery('#messgeModal').arcticmodal();
				 
			  });
			  
			  jqXHR.fail(function (responce) {
				jQuery('#buy-modal-1 #order-popup__param').hide();
				jQuery('#buy-modal-1 #order-popup__param').html("");
			  });
			 
		});
	
	jQuery(".oformlenieZak").click(function(){


		if (jQuery("#checkout-form__name").val() == "")
		{
			jQuery("#checkout-form__name").css("background", "#f69679");
			return;
		}
	
		
		if (jQuery("#checkout-form__phone").val() == "")
		{
			jQuery("#checkout-form__phone").css("background", "#f69679");
			return;
		}
		

		
		var  jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'oformit_zak',		
				nonce: allAjax.nonce,
				namecl:jQuery("#checkout-form__name").val(),
				phonecl:jQuery("#checkout-form__phone").val(),
				emailcl:jQuery("#checkout-form__email").val(),
				sdostcl:jQuery("#checkout-form__delivery").val(),
				adrdost:jQuery("#checkout-form__address").val(),
				msgst:jQuery("#checkout-form__comment").val()
			}
			
		);
		
		
		jqXHR.done(function (responce) {
			jQuery(".inputCount").html(0);
			jQuery(".inputPrice").html(0);
			jQuery('.bascetTextZonn').html(responce);
			jQuery('#messgeModal #lineMsg').html(responce);
			jQuery('#messgeModal').arcticmodal();
		
		});
		
		jqXHR.fail(function (responce) {
			console.log("ERROR!");
		});	
		
		
	});
	
	jQuery('#order-link').click(function(e) {
    	e.preventDefault();
    	var size = jQuery('#order-popup__param_page option:selected').html();
    	var price = jQuery('.product-loop__price-current_load').html();
    	
		if(size) {
    		var html = '<div><label>Характеристики товара:</label> <br/> <span class = "tovCr">' + size + '</span></div><br/>';
    		html += '<div><label>Цена:</label> <br/> <span class = "tovPr">' + price + '</span> руб.</div>';
    		jQuery('#order-modal .product-content__block').append(html);
    	}
		
    	
		
    	jQuery('#order-modal').arcticmodal({
    		afterClose: function() {
    			jQuery('#order-modal .product-content__block').empty();
    		}
    	});
    });

	
	
	jQuery(".oneClickBay").click(function(){ 
     
	 var phone = jQuery("#order-modal-form-phone").val();
      if ((phone == "")||(phone.indexOf("_")>0)) {
        jQuery("#order-modal-form-phone").css("background-color","#ff91a4")
      } else {
        console.log(jQuery("#order-modal-form .tovCr").html());
		var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'one_click_bay',    
            nonce: allAjax.nonce,
            tovarname: jQuery("#order-modal-form .section-title").html(),
            tovcaracter: jQuery("#order-modal-form .tovCr").html(),
            tovsku: jQuery(this).data("offersku"),
            tovprice: jQuery("#order-modal-form  .tovPr").html(),
            clname: jQuery("#order-modal-form-name").val(),
            cltel: phone,
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          jQuery("#order-modal").arcticmodal('close');
          jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          jQuery('#messgeModal').arcticmodal();
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });

	
		
	jQuery('.work-modal').click(function(e) {
		e.preventDefault();
		var title = $(this).data('title');
		jQuery('#work-modal .uniSendBtn').attr('data-title', 'Узнать цену работы ' + title);
		jQuery('#work-modal').arcticmodal();
	});
	jQuery(".uniSendBtn").click(function(){ 
     var title = jQuery(this).data('title');
	 var phone = jQuery(this).siblings('input[type=tel]').val();
      if ((phone == "")||(phone.indexOf("_")>0)) {
        jQuery(this).siblings('input[type=tel]').css("background-color","#ff91a4")
      } else {
		  var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'send_work',    
            nonce: allAjax.nonce,
            title: title,
            cltel: phone,
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          // jQuery("#order-modal").arcticmodal('close');
          // jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          // jQuery('#messgeModal').arcticmodal();
          window.location.href = "https://n-avtomatic.ru/spasibo-za-zayavku/";
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });


});
