(function () {
        
        function uploadImg(previewTargetId, eventUrl, $input) {
        	var log = document.getElementById("log");
        	//log.innerHTML = log.innerHTML+'Start upload<br/>';
        	
        	var $cid = document.getElementById("cid");
        	if($cid.value.trim().length != 4){
        		$('#resp').removeClass().addClass('alert alert-danger');
        		$('#resp').text('ต้องกรอกเลข 4 หลักสุดท้ายของเลขบัตรประชาชน');
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
            //log.innerHTML = log.innerHTML+',Create form elements<br/>';
            
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
            
            //log.innerHTML = log.innerHTML+',Finish form elements<br/>';
            var imgSelector = "#"+previewTargetId+" > img";
            var img = $(imgSelector);
            //console.log(img);
            if(formdata){
                if(img.length){
                    formdata.append("previmg", img[0].src.split("/").pop());
                }
            }
            //log.innerHTML = log.innerHTML+',Finish previmg<br/>';
            
            formdata.append("memberId", document.getElementById("id").value);
            formdata.append("cid", document.getElementById("cid").value);
            //log.innerHTML = log.innerHTML+',Finish prepare data<br/>';
            
            if (formdata) {
            	//log.innerHTML = log.innerHTML+'Ajax call<br/>';
                $.ajax({
                    url : eventUrl,
                    type: "POST",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    complete : function(data) {
        				//console.log(data.status);
        				//log.innerHTML = log.innerHTML+',Complete: '+data.status+'<br/>';
    				},
    				error: function() {
					    //console.log(arguments);
					    //log.innerHTML = log.innerHTML+',Error: '+arguments+'<br/>';
					},
                    success: function (res) {
                    	//console.log(res);
                    	//log.innerHTML = log.innerHTML+',Success: '+res+'<br/>';
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
        //log.innerHTML = window.navigator.userAgent;
        //log.innerHTML = log.innerHTML+', Start prepare ui parameters';
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
		  	$('#resp').text('ใส่เลขบัตรประชาชน 4 หลักสุดท้าย แล้ว เลือกภาพ');
		  	$('.glyphicon-remove-sign').removeClass( "glyphicon-remove-sign" ).addClass( "glyphicon-flash" );
		  	$('#editView').hide('slow');
		  }
		  
		  hide = !hide;
		});
		//log.innerHTML = log.innerHTML+', Finish prepare ui parameters';

}());
