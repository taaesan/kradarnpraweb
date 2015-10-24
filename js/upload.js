(function () {
        
        function uploadImg(previewTargetId, eventUrl, $input) {
        	
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
                            //document.getElementById(previewTargetId).innerHTML = res.status;
                            if(res.status.length > 0){
                                showUploadedItem(res.fileName);
                            }
                        } 
                    }
                });
            }
        };
        
        var formdata = false;
        var image1 = document.getElementById("image1");
        var image2 = document.getElementById("image2");
        var image3 = document.getElementById("image3");
        
        
        image1.addEventListener("change", uploadImg.bind(null, 'preview1', 'member/uploadImage1', image1), false);
        image2.addEventListener("change", uploadImg.bind(null, 'preview2', 'member/uploadImage2', image2), false);
        image3.addEventListener("change", uploadImg.bind(null, 'preview3', 'member/uploadImage3', image3), false);

}());
