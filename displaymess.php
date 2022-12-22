
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
<section class="bg-light p-5">
    <div class="table-responsive" id="displaymess">
        <h3 class="text-center">Display Message</h3>
        <table class="table bg-white">
            <thead class=" bg-dark text-light"  >
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Place</th>
                    <th>Message</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'connection.php';
                try
                {
                $pdo = new PDO($attr, $user, $pass, $options);
                }
                catch (PDOException $e)
                {
                throw new PDOException($e->getMessage(), (int)$e->getCode());
                }
                $query = "select * from message";
                $result = $pdo->query($query);
                while ($row = $result->fetch()){
                    
                 echo "<tr>
                 <td>".$row["name"] ."</td>
                 <td>".$row["email"] ."</td>
                 <td>".$row["place"] ."</td>
                 <td>".$row["message"] ."</td>
                 
                 
               </tr>";


                }

                ?>
            </tbody>
        </table>
        
    </div>
</section>
</body>
</html>