    <?php   
        //Calls Common.php
        include "Common.php";
    ?>
    <!--Calls Header from Common.php-->
    <?=$head;?>

    <!--Calls Navigation Bar from Common.php-->
    <?=$NavigationBar;?>
   <?=$GroceryNavBar;?>
    <div class="right_div">
        <div class="innerproductsdiv">
            <br>
                  
                <p>
                <h2>Your Order Information</h2>
                <?=$ShoppingCartViewer?>
                <p></p>

                    
        
            <!--Calls Footer from Common.php-->    
        </div>
    </div>
    
</div>
<!--<?=$footer;?>-->
        <!--Calls html closer from Common.php-->
        <?=$htmlcloser?>