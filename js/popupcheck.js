//checking for navigationpopup-gadget
if (typeof popupVersion == 'undefined' && 
    typeof popStyleSheet == 'undefined' && 
    typeof window.pg == 'undefined' && 
    typeof window.pop == 'undefined') {
    document.write('<script type="text/javascript" src="' + wgScriptPath + '/extensions/Collection/js/popup.js"></script>');
}
