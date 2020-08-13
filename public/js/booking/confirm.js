var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
var btnConfirm =document.getElementsByClassName('btn-confirm');
for (let i = 0; i < btnConfirm.length; i++) {
    btnConfirm[i].onclick = function (){
        if (confirm('Are you sure')){
            var id = this.getAttribute('id').replace('confirm-', '');
            var xmlHttpRequest = new XMLHttpRequest();
            xmlHttpRequest.open('PUT','/confirm/'+id);
            xmlHttpRequest.setRequestHeader('X-CSRF-TOKEN', token);
            xmlHttpRequest.onreadystatechange = function (){
                if (this.readyState == 4){
                    if(this.status == 200){
                        alert('Confirm success')
                        location.reload();
                    }else {
                        alert('Action fails!!')
                    }
                }
            }
            xmlHttpRequest.send();
        }
    }
}
