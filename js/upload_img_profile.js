(function () {
        
        function uploadImg(previewTargetId, eventUrl, $input) {
        	
        	
        	var $cid = document.getElementById("cid");
        	if($cid.value.trim().length != 13){
        		$('#resp').removeClass().addClass('alert alert-danger');
        		$('#resp').text('ต้องกรอกรหัสประชาชน');
        		$cid.focus();
        		return;
        	}
        	
	       	if (window.FormData) {
	            formdata = new FormData();
	        }
        	
        	var showUploadedItem = function (source) {
	            var preview1 = document.getElementById(previewTargetId);
	            while ( preview1.firstChild ) preview1.removeChild( preview1.firstChild );
	            
	            img  = document.createElement("img");
	            img.src = source;
	            preview1.appendChild(img);
        	};
            
            //document.getElementById(previewTargetId).innerHTML = "Uploading . . .";
            
            var i = 0, len = $input.files.length, img, reader, file;
        
            for ( ; i < len; i++ ) {
                file = $input.files[i];
        
                if (!!file.type.match(/image.*/)) {
                    if ( window.FileReader ) {
                        reader = new FileReader();
                        reader.readAsDataURL(file);
                    }
                    if (formdata) {
                        formdata.append("images[]", file);
                    }
                }   
            }
            
            var imgSelector = "#"+previewTargetId+" > img";
            var img = $(imgSelector);
            console.log(img);
            if(formdata){
                if(img.length){
                    formdata.append("previmg", img[0].src.split("/").pop());
                }
            }
            
            formdata.append("memberId", document.getElementById("id").value);
            formdata.append("cid", document.getElementById("cid").value);
            
            if (formdata) {
                $.ajax({
                    url : eventUrl,
                    type: "POST",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    complete : function(data) {
        				console.log(data.status);
    				},
    				error: function() {
					    console.log(arguments);
					},
                    success: function (res) {
                    	console.log(res);
                        if(res && res.status){
                            if(res.status == 'Success'){
                                showUploadedItem(res.fileName);
                                $('#resp').removeClass().addClass('alert alert-success');
                            }else{
                            	$('#resp').removeClass().addClass('alert alert-danger');
                            }
                            $('#resp').text(res.message);
                            $('#cid').val('');
                        } 
                    }
                });
            }
        };
        
        var formdata = false;
        var image1 = document.getElementById("image1");
        
        image1.addEventListener("change", uploadImg.bind(null, 'profileImg', 'member/uploadProfileImage', image1), false);
		
		var hide = true;
		$('#editView').hide();
		
		$('#editBtn').click(function() {
		  if(hide){
		  	$('.glyphicon-flash').removeClass( "glyphicon-flash" ).addClass( "glyphicon-remove-sign" );
		  	$('#editView').show('slow');
		  	$('#cid').val('');
		  }else{
		  	$('#resp').removeClass().addClass('alert alert-info');
		  	$('#resp').text('ใส่เลขบัตรประชาชน แล้ว เลือกภาพ');
		  	$('.glyphicon-remove-sign').removeClass( "glyphicon-remove-sign" ).addClass( "glyphicon-flash" );
		  	$('#editView').hide('slow');
		  }
		  
		  hide = !hide;
		});

}());
