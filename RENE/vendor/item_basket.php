<?php 
    session_start();
    require_once 'connect.php';
    $numberOfPositions = 0;
  

    if(isset($_SESSION['cart'])):
        $cost = 0;
        $alltitle =" ";
        foreach($_SESSION['cart'] as $item):  
            $numberOfPositions++;          
            $id = $item['id'];
           
            $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
            while ($row = mysqli_fetch_assoc($product)):
                $cost = $cost + $row['price'];
                $show_img = base64_encode($row['image']);
                $title = $row['title'];
                $price = $row['price'];
                $alltitle .= $title. "<br>";
              ?>
                <tr>
                    <th  scope="row">
                        <div >
                          <a href="./vendor/delete_item_basket.php?del_id=<?php echo $row['id']?>">Удалить</a>
                        </div>
                    </th>
                    
                    <td>
                        <img width="150" height="200" alt="" src="data:image/jpeg;base64,<?php echo $show_img ?>">
                    </td>
                    <td name="title"><?php echo $title?><input type = "text" name = "title" value ="<?php echo $alltitle?>" hidden/></td>
                    <!-- <td><input type="number" id="quanity" min="1" name="quanity"  name="quantity_input_<?php echo $numberOfPositions?>" value="<?php echo $item['quantity']?>"></td> -->
                    <td ><?php echo  $price?> руб</td>
                </tr>
              
        <?php endwhile; endforeach; endif;?>
    <thead>
        <tr class="fw-bold" style="font-size: 20px;">
            <th ></th>
            <td ></td>
            <td ></td>
            <td></td>
        </tr>
    </thead>



   