<h2>
    <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else{
            echo "Welcome";
        }
    ?>
</h2>
    <?php
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id]']);
        }else{
            echo "hello, php";
        }
    ?>
    