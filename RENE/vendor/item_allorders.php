<?php
    session_start();     
    
    require_once 'connect.php';
    if ($_SESSION['user']['password']=="0192023a7bbd73250516f069df18b500" && $_SESSION['user']['email']=="admin@admin") {
        
    $orders = mysqli_query($connect, "SELECT * FROM `orders` ORDER BY `id` ");
    
    while($row = mysqli_fetch_assoc($orders)):

    ?>
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
            <td><?php echo $row['product_name']?></td>
            <!-- <td><?php echo count($position)?></td> -->
            <td><?php echo $row['final_price'] ?> руб</td>
            <td><?php echo $row['status']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phone']?></td>
            <td><button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Управление заказом</button></td>
        </tr>
    <?php endwhile;?>   
    <thead>
        <tr class="fw-bold" style="font-size: 20px;">
            <th ></th>
            <td colspan="3"></td>
            <td ></td>
            <!-- <td></td> -->
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </thead> 
<?php }?>
<!-- modal window -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Панель управления заказом</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Выберите опцию:
      </div>
      <div class="modal-footer">
        <button type="button" onclick="document.location='./vendor/confirm_order.php?cancel_id=<?php echo $id?>'" class="btn btn-danger" >Отменить заказ</button>
        <button type="button" onclick="document.location='./vendor/confirm_order.php?status_id=<?php echo $id?>'" class="btn btn-primary">Подтвердить заказ</button>
      </div>
    </div>
  </div>
</div>
<script src="/bootstrap/js/bootstrap.js" ></script> 