<div class="devs"> 
    <div class="title">
        <span>Users</span>
    </div>
    <?php
        
        $query = "SELECT * FROM user";
        $result = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($result);
        for($i = 0; $i < $row; $i++):
        $dado = mysqli_fetch_array($result);
        $nome = $dado["user"];
    ?>
        <div class="intern">
            <div class="user">
                <div class="userimg">
                    <div class="img">
                        <img src="/public/img/user.png" alt="">
                    </div>
                </div>
                <div class="span">
                    <span><?php echo $nome ?></span>
                </div>
            </div>
            <div class="userstatus">
            </div>
        </div>
    <?php
        endfor;
    ?>
</div>