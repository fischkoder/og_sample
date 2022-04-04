<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Detail</title>
    </head>
    <body>
        <?php
            $id = $_GET['id'];
            $db_link = mysqli_connect('localhost','root','mysql','grocery') or die("Error Connection");
            $query_string = "select * from products where product_id = $id;";
            $db_result = mysqli_query($db_link,$query_string);
            $num_rows = mysqli_num_rows($db_result); 
            print "<img src='images/$id.jpg'>";
            if($num_rows > 0){
                while($row = mysqli_fetch_assoc($db_result)){
                    print "<ul>";
                    print "<li>Product ID: ".$row['product_id']."</li>";
                    print "<li>Name: ".$row['product_name']."</li>";
                    print "<li>Unit Price: ".$row['unit_price']."</li>";
                    print "<li>Specs: ".$row['unit_quantity']."</li>";
                    print "<li>In Stock: ".$row['in_stock']."</li>";
                    print "</ul>";
                }
            }
        ?>
    </body>
</html>