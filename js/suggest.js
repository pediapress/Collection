(function() {

function collectionSuggestCall(func, args) {
    var propHead = document.getElementById('collectionProposalsHead').innerHTML;
    var memHead = document.getElementById('collectionMembersHead').innerHTML;
    document.getElementById('collectionProposals').innerHTML = "...";
    sajax_request_type = 'POST';
    sajax_do_call('wfAjaxCollectionSuggest' + func, args, function(xhr) {
	    refresh(xhr.responseText, propHead, memHead);
    });
}

window.collectionSuggestCall = collectionSuggestCall;

function refresh(response, propHead, memHead) {
    lists = response.split("<!--split here-->");;
    document.getElementById('collectionProposalsHead').innerHTML = propHead;
    document.getElementById('collectionMembersHead').innerHTML = memHead;
    document.getElementById('collectionProposals').innerHTML = lists[0];
    document.getElementById('collectionMembers').innerHTML = lists[1];
}
 
})();

