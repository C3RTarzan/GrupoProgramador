<?php
    if(isset($_SESSION["id"])):

?>
<div class="secoptions">
    <div class="itens">
        <div class="bcnav">
            <div class="nav">
                <div class="name">
                    <span>USUÁRIO</span>
                </div>
                <div class="button">
                    <div class="account">
                        <span>Minha Conta</span>
                    </div>
                </div>
                <div class="button">
                    <div class="account">
                        <span>Privacidade</span>
                    </div>   
                </div>
                <div class="button">
                    <div class="account">
                        <span>Segurança</span>
                    </div>   
                </div>
            </div>
            <div class="nav">
                <div class="button exitAccount">
                    <div class="account">
                        <span class="exit">Exit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="info">
        <div class="ExitOptions">
            <span class="iconify" data-icon="bi:x-circle" data-inline="false"></span>
            <span>ESC</span>
        </div>
    </div>
</div>
<?php
    endif;
?>