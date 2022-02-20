<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="printThis.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report</title>
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
    <?php
    if (isset($_POST['generate'])) {
        $basic = $_POST['salary'];
        $ot = $_POST['ot'];
        $incentive = $_POST['incentive'];
        $allowance = $_POST['allowance'];
        $bonus = $_POST['bonus'];

        $total = $basic + $ot + $incentive + $allowance + $bonus;
    }

    ?>

    <div class="container" id="printME">
        <h2>Payslip</h2>
        <p>Payment slip for the month of <?php echo date("M-Y") ?></p>
        <table class="table table-bordered">
            <thead class="table-danger">
                <tr>
                    <th>Earning</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Basic Salary</td>
                    <td><?php echo $basic ?> $</td>
                </tr>
                <tr>
                    <td>OverTime</td>
                    <td>
                        <?php echo $ot ?>$
                    </td>
                </tr>
                <tr>
                    <td>Sales Incentive</td>
                    <td>
                        <?php echo $incentive ?> $
                    </td>
                </tr>
                <tr>
                    <td>Special Allowance</td>
                    <td>
                        <?php echo $allowance ?> $
                    </td>
                </tr>
                <tr>
                    <td>Bonus</td>
                    <td>
                        <?php echo $bonus ?> $
                    </td>
                </tr>
                <tr class="table-warning">
                    <td>Total</td>
                    <td>
                        <?php echo $total ?> $
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../pages/home.html">
                            <button type="button" class="btn btn-info">Back</button>
                        </a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-info" id="print">Print</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        // $(document).ready(function() {
        //     $("#print").click(function() {
        //         $('.container').printThis();
        //     });
        // });
        


$("#print").on('click' , function(){
        var printMe = document.getElementById('printME');
        var windowOpen  = window.open("","","width=900","height=700");
        windowOpen.document.write(printMe.outerHTML);
        windowOpen.document.close();
        windowOpen.focus();
        windowOpen.print();
        // //windowOpen.close();
        $(".container").printThis();

    })
    </script>

</body>

</html>