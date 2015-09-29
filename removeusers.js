var deleteAllGroupMembers = (function () {
    var deleteAllGroupMembers = {};
    // the facebook ids of the users that will not be removed.
    // IMPORTANT: add your own facebook id here so that the script will not remove yourself!
    var excludedFbIds = ['1851198440']; // make sure each id is a string!
    var usersToDeleteQueue = [];
    var scriptEnabled = false;
    var processing = false;
 
    deleteAllGroupMembers.start = function() {
        scriptEnabled = true;
        deleteAll();
    };
    deleteAllGroupMembers.stop = function() {
        scriptEnabled = false;
    };
 
    function deleteAll() {
        if (scriptEnabled) {
            queueMembersToDelete();
            
            console.log("users: "+usersToDeleteQueue.length);
            console.log(JSON.stringify(usersToDeleteQueue));
            
            processQueue();

        }
    }
 
    function queueMembersToDelete() {
        var adminActions = document.getElementsByClassName('adminActions');
        console.log(excludedFbIds);
        for(var i=0; i<adminActions.length; i++) {
            var gearWheelIconDiv = adminActions[i];
            var hyperlinksInAdminDialog = gearWheelIconDiv.getElementsByTagName('a');
            
            
            //var gearWheelHref = gearWheelIconDiv.getElementsByTagName('a')[0];
            //console.log('gearWheelHref: '+gearWheelHref.id);

            var items = gearWheelIconDiv.parentNode.parentNode.parentNode.getElementsByTagName('a');
            
            
            var aTage = items[0];
            // var fbMemberName = getTextFromElement(fcbNode);
            var fbMemberName = aTage.innerHTML;
            var href = aTage.href;
            var dataHovercard = aTage.getAttribute("data-hovercard");
            if(dataHovercard != undefined){
            	var fbMemberId = dataHovercard.split("=")[1].split("&")[0];
            	//console.log(fbMemberName+", "+href+", "+fbMemberId);
            	
           		if (excludedFbIds.indexOf(fbMemberId) != -1) {
	                console.log("SKIPPING "+fbMemberName+' ('+fbMemberId+')');
	                continue;
	            } else {
	                usersToDeleteQueue.push({'memberId': fbMemberId, 'gearWheelIconDiv': gearWheelIconDiv, 'fbMemberName':fbMemberName, 'href':href});
	            }
            	
            }
            
            

            
            /*
            if(elClass != undefined){
	            var fbMemberName = getTextFromElement(gearWheelIconDiv.parentNode.parentNode.getElementsByClassName('fcb')[0]);
	 			
	 			console.log("fbMemberName: "+fbMemberName);
	 			
	            if (excludedFbIds.indexOf(fbMemberId) != -1) {
	                console.log("SKIPPING "+fbMemberName+' ('+fbMemberId+')');
	                continue;
	            } else {
	                usersToDeleteQueue.push({'memberId': fbMemberId, 'gearWheelIconDiv': gearWheelIconDiv});
	            }
            }
            */
            
            
        }
    }
 
    function processQueue() {
        if (!scriptEnabled) {
            return;
        }
        if (usersToDeleteQueue.length > 0) {
            removeNext();
 
            setTimeout(function(){
                processQueue();
            },1000);
        } else {
            getMore();
        }
    }
 
    function removeNext() {
        if (!scriptEnabled) {
            return;
        }
        if (usersToDeleteQueue.length > 0) {
            var nextElement = usersToDeleteQueue.pop();
            removeMember(nextElement.memberId, nextElement.gearWheelIconDiv);
        }
    }
 
    function removeMember(memberId, gearWheelIconDiv) {
        if (processing) {
            return;
        }
        var gearWheelHref = gearWheelIconDiv.getElementsByTagName('a')[0];
        gearWheelHref.click();
        processing = true;
        setTimeout(function(){
            var popupRef = gearWheelHref.id;
            var popupDiv = getElementByAttribute('data-ownerid',popupRef);
            var popupLinks = popupDiv.getElementsByTagName('a');
            for(var j=0; j<popupLinks.length; j++) {
                if (popupLinks[j].getAttribute('href').indexOf('remove.php') !== -1) {
                    // this is the remove link
                    popupLinks[j].click();
                    setTimeout(function(){
                        var confirmButton = document.getElementsByClassName('layerConfirm uiOverlayButton selected')[0];
                        var errorDialog = getElementByAttribute('data-reactid','.4.0');
                        if (confirmButton != null) {
                            if (canClick(confirmButton)) {
                                confirmButton.click();
                            } else {
                                console.log('This should not happen memberid: '+memberId);
                                5/0;
                                console.log(gearWheelIconDiv);
                            }
                        }
                        if (errorDialog != null) {
                            console.log("Error while removing member "+memberId);
                            errorDialog.getElementsByClassName('selected  layerCancel autofocus')[0].click();
                        } 
                        processing = false;
                    },700);
                    continue;
                }
            }
        },500);
    }
 
    function canClick(el) {
        return (typeof el != 'undefined') && (typeof el.click != 'undefined');
    }
 
    function getMore() {
        processing = true;
        more = document.getElementsByClassName("pam uiBoxLightblue  uiMorePagerPrimary");
        if (typeof more != 'undefined' && canClick(more[0])) {
            more[0].click();
            setTimeout(function(){
                deleteAll();
                processing = false;
           }, 2000);
        } else {
            deleteAllGroupMembers.stop();
        }
    }
 
    function getTextFromElement(element) {
        var text = element.textContent;
        return text;
    }
 
    function getElementByAttribute(attr, value, root) {
        root = root || document.body;
        if(root.hasAttribute(attr) && root.getAttribute(attr) == value) {
            return root;
        }
        var children = root.children,
            element;
        for(var i = children.length; i--; ) {
            element = getElementByAttribute(attr, value, children[i]);
            if(element) {
                return element;
            }
        }
        return null;
    }
    return deleteAllGroupMembers;
})();
deleteAllGroupMembers.start();
 