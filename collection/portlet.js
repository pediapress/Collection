function refreshCollectionPortlet(hint) {
  sajax_request_type = 'GET';
  sajax_do_call('wfAjaxCollectionGetPortlet', [hint], function(xhr) {
    document.getElementById('collectionPortletList').parentNode.innerHTML = xhr.responseText;
    if (hint) {
      wgCollectionAddRemoveState = hint;
    }
    if (typeof refreshCollectionArticleList == 'function') {
      refreshCollectionArticleList();
    }
  });
}

function collectionCall(func, args) {
  var hint = args.shift();
  sajax_request_type = 'POST';
  sajax_do_call('wfAjaxCollection' + func, args, function(xhr) {
    refreshCollectionPortlet(hint);
  });
}
