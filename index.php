

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Club</title>
    <!-- style-css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-12">
                <h2 class="header-main">Register Student Page</h2>
            </div>
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Add Student
                </button>

                <!-- Modal -->
                <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="registerModalLabel">Student Data Register</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="studentName" class="form-label">Student Name</label>
                                        <input type="text" class="form-control" name="name" id="studentName" aria-describedby="helpId" placeholder="Student Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="deapartment" class="form-label">Department</label>
                                        <input type="text" class="form-control" name="department" id="deapartment" aria-describedby="helpId" placeholder="Department">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailId" class="form-label">Email ID</label>
                                        <input type="email" class="form-control" name="email" id="emailId" aria-describedby="helpId" placeholder="Email ID">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="Phone Number">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" name="submit" onclick="AddStudentDetails()">Add Contact</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <table class="table" onclick="studentDetailsDisplay()">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Deapartment</th>
                            <th scope="col">Email ID</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="dataRcv">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Script-Js -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>