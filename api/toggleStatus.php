
<?php
    include_once '../config/db.php';

    $id = intval($_GET['id']);
    $status = $_GET['status'] === 'active' ? 'active' : 'inactive';

    $stmt = $conn->prepare("UPDATE users SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $id);

    if($stmt->execute()){
        $_SESSION['success'] = 'User status updated successfully!';
    } else {
        $_SESSION['error'] = 'Failed to update status!';
    }

    $stmt->close();

?>