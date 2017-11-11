(function($) {
	var frm_sel = "#frm_submit";
	var submit_sel = '#btnSubmit';
	var initFormValid = function() {
		$(frm_sel).validate({
			rules: {
				name: {
					required: true,
					maxlength: 100
				},
				url: {
					required: true,
					url: true,
					maxlength: 100
				},
				email: {
					required: true,
					email: true,
					maxlength: 50
				}
			},
			messages: {
				name: {
					required: "????д??????????????1-100λ??????",
					maxlength: "???????????????1-100λ??????"
				},
				url: {
					required: "????д???????????1-100λ??????",
					url: "???????????",
					maxlength: "????????????1-100λ??????"
				},
				email: {
					required: "????д??????????????1-50λ??????",
					email: "???????????????",
					maxlength: "???????????????1-50λ??????"
				}
			}
		});
	};

	var submitSuccess = function(){
		alert('审核已提交，请等待管理员审核!');
		$(submit_sel).val('审核已提交，请等待管理员审核');
		$('#name,#email,#intro').val('');
		$('#url').val('http://');
	}

	var submitError = function(){
		alert('申请错误，请重新申请');
		$(submit_sel).val('提交申请');
	};

	var submit = function() {
		if (!$(frm_sel).valid()) {
			return;
		}
		$(submit_sel).unbind('click').attr('value', '提交申请');
		$.ajax({
			type: "POST",
			contentType: "application/x-www-form-urlencoded; charset=UTF-8",
			url: "//club.jd.com/links/submit.action",
			data: {
				name: encodeURIComponent($('#name').val()),
				url: encodeURIComponent($('#url').val()),
				email: encodeURIComponent($('#email').val()),
				intro: encodeURIComponent($('#intro').val())
			},
			dataType: "json",
			complete: function(jqXHR, textStatus){
				$(submit_sel).click(submit);
			},
			success: function(data) {
				if(data.success){
					submitSuccess();
				}else{
					submitError();
				}
			},
			error: function(xhr) {
				submitError();
			}
		});
	};
	var initSubmit = function() {
		$(submit_sel).click(submit);
	};

	$(function() {
		initFormValid();
		initSubmit();
	});
})(jQuery);
