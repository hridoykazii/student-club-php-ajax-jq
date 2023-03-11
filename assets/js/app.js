window.addEventListener('load',function(){
    studentDetailsDisplay()
})

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
            studentDetailsDisplay()
        }
    })
}

// read-data

function studentDetailsDisplay(){
    $.ajax({
        url: './read.php',
        method: 'post',
        success: function(data){
            $('#dataRcv').html(data);
        }
    })
}

// delete-data 

function onDelete(id){
    // alert(id);
    $.ajax({
        url: './delete.php',
        method: 'GET',
        data:{
            test:id
        },
        success: function(data){
            // AddStudentDetails(id)
            console.log(id)
        }
    })
}