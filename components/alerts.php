<?php if(isset($_SESSION['error'])): ?>
<script>
Toastify({
    text: "<?= $_SESSION['error'] ?>",
    duration: 3500,
    gravity: "top",
    position: "right",
    style: {
        background: "linear-gradient(to right, #ef4444, #dc2626)",
        borderRadius: "8px",
        padding: "12px 16px",
        fontWeight: "500"
    }
}).showToast();
</script>
<?php unset($_SESSION['error']); endif; ?>


<?php if(isset($_SESSION['success'])): ?>
<script>
Toastify({
    text: "<?= $_SESSION['success'] ?>",
    duration: 3500,
    gravity: "top",
    position: "right",
    style: {
        background: "linear-gradient(to right, #22c55e, #16a34a)",
        borderRadius: "8px",
        padding: "12px 16px",
        fontWeight: "500"
    }
}).showToast();
</script>
<?php unset($_SESSION['success']); endif; ?>