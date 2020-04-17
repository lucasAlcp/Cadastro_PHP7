<?php
//SESSAO
    session_start();

    if(isset($_SESSION['mensagem'])):
        
?>
        <script>
            //popup de mensagem de erro ou sucesso 
            window.onload = function(){
                M.toast({html: "<?php echo $_SESSION['mensagem']; ?>"});  
            }
        </script>  

<?php 

    endif;
    session_unset();
?>