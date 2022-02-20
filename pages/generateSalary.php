<?php
    include '../Model/connecttion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Report</title>
    <link rel="stylesheet" href="../styles/addEmploye.css" />
    <script src="../scripts/addEmploye.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="../scripts/home.js"></script>
    <script src="../scripts/employeeReport.js"></script>
    <link rel="stylesheet" href="../styles/home.css" />
</head>

<body>
    
<nav class="navbar sticky-top navbar-expand-sm">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/addEmployee.php"
              >Add Employee</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/employeeReport.php"
              >Employee Report</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/generateSalary.php"
              >Salary Report</a
            >
          </li>
        </ul>
      </div>
      <button id="btn_signout" class="button-82-pushable">
        <span class="button-82-shadow"></span>
        <span class="button-82-edge"></span>
        <span class="button-82-front text"> Sign Out </span>
      </button>
    </nav>

    <div class="mt-lg-5">
        <table id="myTable" class="table table-primary table-striped add_table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PinCode</th>
                    <th>Basic Salary</th>
                    <th>Bank Account</th>
                    <th>Degree</th>
                    <th>Branch</th>
                    <th>Mobile</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM  `add_employee`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['city'] ?></td>
                            <td><?php echo $row['pincode'] ?></td>
                            <td><?php echo $row['basicSalary'] ?></td>
                            <td><?php echo $row['bank'] ?></td>
                            <td><?php echo $row['degree'] ?></td>
                            <td><?php echo $row['Branch'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <td><?php echo $row['e-mail'] ?>
                                <a target="blank" href="../pages/salaryReport.php?id=<?php echo $row['id'] ?>">Generate Salary</a>
                            </td>
                            
                        </tr>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            // $('#myTable').on('click', '.datamodal', function(e) {
            //     e.preventDefault();
            //     var mainUrl = window.location.origin;
            //     var id = $(this).data('id');
            //     $.ajax({
            //         method: "POST",
            //         url: "../Model/ajax.php",
            //         data: {
            //             id
            //         },
            //         dataType: "text",
            //         success: function(datas) {
            //             var json = JSON.parse(datas)[0];
            //             console.log(json);
            //             var html = `
                        
            //                 <div class="modal-body">
            //             <ul class="list-group">
            //                 <li class="list-group-item">Employee ID : ${json['id']}</li>
            //                 <li class="list-group-item">Name : ${json['name']}</li>
            //                 <li class="list-group-item">Address : ${json['address']}</li>
            //                 <li class="list-group-item">City : ${json['city']}</li>
            //                 <li class="list-group-item">PinCode : ${json['pincode']}</li>
            //                 <li class="list-group-item">Basic Salary : ${json['basicSalary']}</li>
            //                 <li class="list-group-item">Bank Account :  ${json['bank']}</li>
            //                 <li class="list-group-item">Degree :${json['degree']} </li>
            //                 <li class="list-group-item">Branch : ${json['Branch']}</li>
            //                 <li class="list-group-item">Mobile : ${json['mobile']}</li>
            //                 <li class="list-group-item">E-mail : ${json['e-mail']}</li>
            //             </ul>
            //             </div>
            //             <div class="modal-footer">
            //                 <a type="button" href="../Model/delete.php?id_del=${json['id']}" name="delete" class="btn btn-danger">Delete</button>
            //                 <a type="button" target="blank" href="../pages/updateData.php?id_up=${json['id']}" name="update" class="btn btn-primary">Update</a>
            //             </div>`;

            //             $('.modal-body-footer').html(html);

            //             $('#exampleModal').modal('toggle');
            //         }
            //     });
            // });

        });
    </script>
</body>

</html>