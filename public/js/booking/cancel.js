var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
var btnCancel =document.getElementsByClassName('btn-cancel');
for (let i = 0; i < btnCancel.length; i++) {
    btnCancel[i].onclick = function (){
        if (confirm('Are you sure')){
            var id = this.getAttribute('id').replace('cancel-', '');
            var xmlHttpRequest = new XMLHttpRequest();
            xmlHttpRequest.open('PUT','/cancel/'+id);
            xmlHttpRequest.setRequestHeader('X-CSRF-TOKEN', token);
            xmlHttpRequest.onreadystatechange = function (){
                if (this.readyState == 4){
                    if(this.status == 200){
                        alert('Cancel success')
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
