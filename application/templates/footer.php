<?php
$flashMessage = isset($_SESSION['flash-message']) ?? null;

unset($_SESSION['flash-message']);

if ($flashMessage):
?>

    <div class="modal fade" id="flash-message-modal" tabindex="-1" role="dialog" aria-labelledby="flash-message-modal-label" aria-describedby="flash-message-modal-text" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="flash-message-modal-label">
                        Aviso <i class="bi bi-info-circle" aria-hidden="true"></i>
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0" id="flash-message-modal-text"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">
                        Entendido <i class="bi bi-check-circle" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const flashMessageModal = new bootstrap.Modal(document.querySelector('#flash-message-modal'));
        const flashMessageModalText = document.querySelector('#flash-message-modal-text');
        flashMessageModalText.textContent = <?= json_encode($flashMessage); ?>;
        flashMessageModal.show();
    </script>

<?php endif; ?>

<footer class="bg-body-tertiary">
    <div class="container-xxl py-3">
        <p class="text-center text-muted mb-0">&copy; 2026<?= CURRENT_YEAR > 2026 ? ' - ' . CURRENT_YEAR : '' ?> Rabisca - Todos os direitos reservados.</p>
    </div>
</footer>
</body>

</html>