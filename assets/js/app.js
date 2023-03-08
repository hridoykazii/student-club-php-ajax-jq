function AddStudentDetails(){
    var name =  $('#studentName').val();
    var department =  $('#deapartment').val();
    var email =  $('#emailId').val();
    var phone =  $('#phone').val();

    $.ajax({
        url: "./insert.php",
        method: "post",
        data:{
            studentName : name,
            studentDepartment : department,
            studentEmail : email,
            studentPhone: phone
        },
        success: function(data){
            console.log('data load success')
        }
    })
}