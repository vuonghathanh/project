$('#checkAll').click(function (){
    $('.product-checkbox').prop('checked',$(this).prop('checked'));
})
$('#delete-all').click(function (){
    var deleteIds = $('input:checkbox:checked').map(function (){
        return $(this).val();
    }).get();
    if (deleteIds.length == 0 ){
        alert('Please choice at least 1 product!')
        return;
    }
    $.ajax({
        'url':'/room-change-status-all',
        'method':'POST',
        'data':{
            '_token':$('meta[name="csrf-token"]').attr('content'),
            'ids': deleteIds
        },
        'success':function (){
            alert('Action success');
            location.reload();
        },
        'error':function (){
            alert('Action fails!!');
        }
    })
})
