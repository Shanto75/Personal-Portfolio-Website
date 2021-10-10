<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        html,body{
            height: 100%;
        }
        .container{
            height: 100%;
        }
    </style>
    <title>Education</title>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container p-5 text-center">
        
        <div class="shadow-lg p-5 mb-5 bg-body rounded table-responsive-lg">
            <div class="pb-5">
                <strong>
                    <h1>Academic Qualifications</h1>
                </strong>
            </div>

            <table class="table table-borderless">
                <thead class="table-dark">
                    <tr>
                        <th>Year</th>
                        <th>Program</th>
                        <th>Institution</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2018-2021</td>
                        <td>B.Sc. in Computer Science and Engineering</td>
                        <td>East West University</td>
                        <td>CGPA 3.1 on a scale of 4</td>
                    </tr>
                    <tr>
                        <td>2015-2017</td>
                        <td>HSC (Higher Secondary Certificate)</td>
                        <td>Milerstone Schoole and College</td>
                        <td>GPA 4.83 on a scale of 5</td>
                    </tr>
                    <tr>
                        <td>2013-2015</td>
                        <td>SSC (Secondary School Certificate)</td>
                        <td>Milerstone Schoole and College</td>
                        <td>GPA 5 on a scale of 5</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>