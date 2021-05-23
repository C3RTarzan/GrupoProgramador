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
                <div class="button click">
                    <div class="account">
                        <span>Minha Conta</span>
                    </div>
                </div>
                <div class="button">
                    <div class="account click">
                        <span>Privacidade</span>
                    </div>   
                </div>
                <div class="button">
                    <div class="account click">
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
        <div class="sections">
            <div class="myAccount divdisplay">
                <div class="title-account">
                    <span>Minha Conta</span>
                </div>
                <div class="content-account">
                    <div class="img-bc">
                        <div class="img">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="itens-account">
                        <div class="pai-account">
                            <div class="info-username">
                                <span class="title-username">NOME DE USÚARIO</span>
                                <span class="username">MASDMASMD</span>
                            </div>
                            <div class="edit-username">
                                <div class="edit">
                                    <span>Editar</span>
                                </div>  
                            </div>
                        </div>
                        <div class="pai-account">
                            <div class="info-username">
                                <span class="title-username">E-MAIL</span>
                                <span class="username">MASDMASMD</span>
                            </div>
                            <div class="edit-username">
                                <div class="edit">
                                    <span>Editar</span>
                                </div>  
                            </div>
                        </div>
                        <div class="pai-account">
                            <div class="info-username">
                                <span class="title-username">SENHA</span>
                                <span class="username">MASDMASMD</span>
                            </div>
                            <div class="edit-username">
                                <div class="edit">
                                    <span>Editar</span>
                                </div>  
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="end-account">
                    <div class="button-end">
                        <span>DESATIVAR CONTA</span>
                    </div>
                </div>
            </div>
            <div class="privacy divdisplay">
                <span>aiiiiiiiiiii</span>
            </div>
            <div class="safety divdisplay">
                <span>uiiiiiiiiiii</span>
            </div>
        </div>
        <div class="ExitOptions">
            <span class="iconify" data-icon="bi:x-circle" data-inline="false"></span>
            <span>ESC</span>
        </div>
    </div>
</div>
<?php
    endif;
?>
<script src="/public/js/options.js"></script>