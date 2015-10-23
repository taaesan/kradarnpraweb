(function () {
        
        var input = document.getElementById("images"), formdata = false;
    
        function showUploadedItem(source) {
            
            var preview1 = document.getElementById("preview1");
            while ( preview1.firstChild ) preview1.removeChild( preview1.firstChild );
            
            img  = document.createElement("img");
            img.src = source;
            preview1.appendChild(img);
        }   
    
        if (window.FormData) {
            formdata = new FormData();
        }
        
        input.addEventListener("change", function (evt) {
            
            document.getElementById("response1").innerHTML = "Uploading . . .";
            
            
            
            var i = 0, len = this.files.length, img, reader, file;
        
            for ( ; i < len; i++ ) {
                file = this.files[i];
        
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
            
            
            var img = $("#preview1 > img");
            console.log(img);
            if(formdata){
                if(img.length){
                    formdata.append("previmg", img[0].src.split("/").pop());
                }
            }
            
            formdata.append("memberId", document.getElementById("id").value);
            
            if (formdata) {
                $.ajax({
                    url: "member/testupload2",
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
                            document.getElementById("response1").innerHTML = res.status;
                            if(res.status.length > 0){
                                showUploadedItem(res.fileName);
                            }
                        } 
                    }
                });
            }
        }, false);

}());
