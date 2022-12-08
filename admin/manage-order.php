<?php include('partials/menu.php');?> 

   <!--Main Content Section Statrts-->
   <div class="main-content">
    <div class="wrapper">
        <h1> Manage Order</h1>
        <br> <br><br>
        <!--button -->
        <?php

        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        ?>
        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Food</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Customer Name</th>
                <th>Customer Contact</th>
                <th>Email</th>
                <th>Address</th>
                <!-- <th>Actions</th>
                 -->
            </tr>
            <?php
            $sql= "SELECT * FROM tbl_order ORDER BY id DESC";
            $res=mysqli_query($conn,$sql);

            $count=mysqli_num_rows($res);
            $sn=1;
            if($count>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                    $id=$row['id'];
                    $food=$row['food'];
                    $price=$row['price'];
                    $qty=$row['qty'];
                    $total=$row['total'];
                    $order_date=$row['order_date'];
                    $status=$row['status'];
                    $customer_name=$row['customer_name'];
                    $customer_contact=$row['customer_contact'];
                    $cutsomer_email=$row['customer_email'];
                    $customer_address=$row['customer_address'];
                    ?>

                    <tr>
                        <td><?php echo $sn++;?></td>
                        <td> <?php echo $food;?></td>
                        <td> <?php echo $price;?></td>
                        <td> <?php echo $qty;?></td>
                        <td> <?php echo $total;?></td>
                        <td><?php echo $order_date;?></td>
                        
                        <td> 
                            <?php
                            if($status=="Ordered")
                            {
                                echo "<label>$status</lable> ";
                            }
                            else if($status=="On Delivery ")
                            {
                                
                                echo "<label style='color:orange;'>$status</lable> ";
                            
                            }
                            else if($status=="Delivered")
                            {
                                echo "<label style='color:green;'>$status</lable> ";
 
                            }
                            else if($status=="Cancelled")
                            {
                                echo "<label style='color:red;'>$status</lable> ";
 
                            }
                            
                            ?>
                        </td>

                        
                        <td> <?php echo $customer_name;?></td>
                        <td> <?php echo $customer_contact;?></td>
                        <td> <?php echo $cutsomer_email?></td>
                        <td> <?php echo $customer_address;?></td>
                        <!-- <td>
                            <a href="<?php echo SITEURL;?>admin/update-order.php?id=<?php echo $id;?>"
                             class="btn-secondary">UpdateOrder</a>
                            
                        </td>
                         -->
                    </tr>
            

                    <?php
                }

            }
            else
            {
                echo "<tr> <td colspan='12' class='error'> Order Not Available .</td></tr>";
            }
            ?>
           </table>
       
    </div>

   </div>
   
   <!--Main Content Section Ends-->


   <?php include('partials/footer.php');?> 