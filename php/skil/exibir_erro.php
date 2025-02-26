<?php

// Função para exibir mensagens de erro
function exibir_erro($erro = '') {
    if (!empty($erro)) {
        $_SESSION['AlertErro'] = $erro;
    }

    // Verifica se existe uma mensagem de erro na sessão
    if (isset($_SESSION['AlertErro'])) {
        echo '
        <div id="modal-erro" class="modal is-active">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="notification is-danger ">
                    <button class="delete" onclick="closeModal()"></button>
                    <strong>AVISO!</strong><br>
                    ' . $_SESSION['AlertErro'] . '
                </div>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="closeModal()"></button>
        </div>
        
        <script>
            // Função para fechar o modal
            function closeModal() {
                document.getElementById("modal-erro").classList.remove("is-active");
            }
        </script>
        ';

        // Limpa a mensagem de erro após exibi-la
        unset($_SESSION['AlertErro']);
    }
}
?>
