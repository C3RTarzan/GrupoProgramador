<header>
    <div class="header">
        <?php
        if(isset($_SESSION["id"])):
            $id = $_SESSION["id"];
            $user = $_SESSION["user"];
            $img = $_SESSION["img"];
        ?>
        <div class="account">
            <div class="img">
                <div class="imgbc">
                    <div class="foto">
                        <img src="/public/img/<?php echo $img?>" alt="">
                    </div>
                </div>
               <div class="nick">
                    <span><?php echo $user ?></span>
                    <div class="copied">
                        <span>Copiado</span>
                    </div>
               </div>
            </div>
            <div class="right">
                <div class="life">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                </div>
                <div class="gear">
                    <span class="iconify" data-icon="raphael:smallgear" data-inline="false"></span>
                </div>
            </div>
        </div>
        <?php
            endif;
        ?>
        
        <?php
        if(!isset($_SESSION["id"])):
        
        ?>
        <div class="account-login">
            <div class="intern-div">
                <a href="/Account/index.php"><span>Logar</span></a>
            </div>
        </div>
        <?php
            endif;
        ?>


        <div class="nav">
            <div class="pai home-page">
                <div class="namedir">
                    <span class="click">
                        <div class="icons">
                            <span class="iconify" data-icon="eva:arrow-ios-forward-fill" data-inline="false"></span>
                        </div>    
                        Web
                    </span>
                </div>
                <div class="itens">
                    <div class="home">
                        <div class="pai">
                            <div class="icon">
                                <span class="iconify" data-icon="bx:bxs-home" data-inline="false"></span>
                            </div>
                            <div class="span">
                                </span>Home</span>
                            </div>
                        </div>
                    </div>
                    <div class="home">
                        <div class="pai">
                            <div class="icon">
                                <span class="iconify" data-icon="uil:comment-info" data-inline="false"></span>
                            </div>
                            <div class="span">
                                </span>Sobre</span>
                            </div>
                        </div>
                    </div>
                    <div class="home">
                        <div class="pai">
                            <div class="icon">
                                <span class="iconify" data-icon="bx:bxs-group" data-inline="false"></span>
                            </div>
                            <div class="span">
                                </span>Grupo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pai">
                <div class="namedir">
                    <!-- <span class="off"><span class="iconify" data-icon="eva:arrow-ios-downward-outline" data-inline="false"></span>Home</span> -->
                    <span class="click">
                        <div class="icons">
                            <span class="iconify" data-icon="eva:arrow-ios-forward-fill" data-inline="false"></span>
                        </div>    
                         Desafios
                    </span>
                </div>
                <div class="itens">
                    <div class="home">
                        <div class="pai">
                            <div class="icon">
                                <span class="iconify" data-icon="zmdi:view-web" data-inline="false"></span>
                            </div>
                            <div class="span">
                                </span>Front-end</span>
                            </div>
                        </div>
                    </div>
                    <div class="home">
                        <div class="pai">
                            <div class="icon">
                                <span class="iconify" data-icon="fa-solid:tools" data-inline="false"></span>
                            </div>
                            <div class="span">
                                </span>Back-end</span>
                            </div>
                        </div>
                    </div>
                    <div class="home">
                        <div class="pai">
                            <div class="icon">
                                <span class="iconify" data-icon="fluent:brain-circuit-24-filled" data-inline="false"></span>
                            </div>
                            <div class="span">
                                </span>Lógica</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pai">
                <div class="namedir">
                    <!-- <span class="off"><span class="iconify" data-icon="eva:arrow-ios-downward-outline" data-inline="false"></span>Home</span> -->
                    <span class="click">
                        <div class="icons">
                            <span class="iconify" data-icon="eva:arrow-ios-forward-fill" data-inline="false"></span>
                        </div>    
                         Aulas
                    </span>
                </div>
                <div class="itens">
                    <div class="home">
                        <div class="pai">
                            <div class="icon">
                                <span class="iconify" data-icon="zmdi:view-web" data-inline="false"></span>
                            </div>
                            <div class="span">
                                </span>Front-end</span>
                            </div>
                        </div>
                    </div>
                    <div class="home">
                        <div class="pai">
                            <div class="icon">
                                <span class="iconify" data-icon="fa-solid:tools" data-inline="false"></span>
                            </div>
                            <div class="span">
                                </span>Back-end</span>
                            </div>
                        </div>
                    </div>
                    <div class="home">
                        <div class="pai">
                            <div class="icon">
                                <span class="iconify" data-icon="fluent:brain-circuit-24-filled" data-inline="false"></span>
                            </div>
                            <div class="span">
                                </span>Lógica</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</header>