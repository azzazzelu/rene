<?php
    session_start();     
    require_once 'connect.php';

    $user_id = $_SESSION['user']['id'];
    $orders = mysqli_query($connect, "SELECT * FROM `orders` WHERE `id_user` = '$user_id'");

    while($row = mysqli_fetch_assoc($orders)):?>
        <?php
            $id=$row['id'];
            $position = explode(';', $row['products_info']);
            foreach($position as $item){
                $arr = explode(',', $item);
                array_push($test, $arr);
            }
        ?> 
        <tr>
            
            <td><?php echo $id?></td>
            <td><?php echo $row['date']?></td>
            <!-- <td><?php echo count($position)?></td> -->
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['status']?></td>
            <td><?php echo $row['final_price']?> руб</td>
            <td><?php echo $row['name']?></td>
            <td><button type="button" onclick="document.location='./vendor/confirm_order.php?cancel_id=<?php echo $id?>'" class="btn btn-danger" >Отменить заказ</button></td>
        </tr>
    <?php endwhile;?>   
    <thead>
        <tr class="fw-bold" style="font-size: 20px;">
            <th ></th>
            <th ></th>
            <td colspan="3"></td>
            <td ></td>
            <td></td>
            <td></td>
        </tr>
    </thead> 
   
