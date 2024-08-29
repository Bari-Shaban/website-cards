<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
        <meta charset="utf-8" >
        <meta name="keywords" content="" >
        <meta name="description" content="" >
        <meta name="author" content="" >
        <meta name="viewport" content="width=device-width,initial-scale=1.0" >

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- BOOTSTRAP ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <!-- FONTAWESOME ICONS -->
        <script src="https://kit.fontawesome.com/64087b922b.js" crossorigin="anonymous"></script>
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="../style.css">
    </head>
    <body class="bg-tab">
        <div class="container py-5 ">
            <div class="row">
                <div class="col-12">
                    <div class="row py-5 text-center px-5">
                        <h1 class="text-dark fw-bold ">Licnosti (kompanii) so baranje do akademijata Brainster da vrabotat studenti</h1>
                    </div>
                    <div class="row">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th class="text-center">id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>Phone</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                // conection to database
                                require_once 'connect.php';
                                
                                //read data from database
                                $query = "SELECT * FROM clients";
                                $sth = $pdo->query($query);

                                if (!$sth) {
                                    die("invalid query:" . $pdo->error);
                                }
                                
                                // data from each row 
                                while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr>
                                                <td>".$row["id"]."</td>
                                                <td>".$row["Name"]."</td>
                                                <td>".$row["Company"]."</td>
                                                <td>".$row["Email"]."</td>
                                                <td>".$row["Phone"]."</td>
                                                <td>".$row["Type"]."</td>
                                            </tr>";
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>