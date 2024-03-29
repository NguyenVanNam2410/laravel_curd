function actionDelete(event){
    event.preventDefault();
    let urlRequest = $(this).data('url');
    // alert(urlRequest);
    let that = $(this);
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url : urlRequest,
                success: function(data){
                    if(data.code == 200){
                        that.parent().parent().remove();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                },
                error: function () {
                    if(data.code == 500)
                    {
                        Swal.fire(
                            'Deleted!',
                            // 'Your file has been deleted.',
                            'delete lỗi'
                        )
                    }
                }
            });
        }
      })
}


$(function(){
    $(document).on('click','.action_delete',actionDelete)
});