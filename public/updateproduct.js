var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
var btnDeletes = document.getElementsByClassName('btn-delete');
for (let i = 0; i < btnDeletes.length; i++) {
    btnDeletes[i].onclick = function () {
        if (confirm('Are you sure?')) {
            var id = this.getAttribute('id').replace('delete-', '');
            var xmlHttpRequest = new XMLHttpRequest();
            xmlHttpRequest.open('DELETE', '/admin/categories/' + id);
            xmlHttpRequest.setRequestHeader('X-CSRF-TOKEN', token);
            xmlHttpRequest.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        alert('Delete Success');
                        location.reload();
                    } else {
                        alert('Action fails!');
                    }
                }
            };
            xmlHttpRequest.send();
        }
    }
}
