<?php
require_once __DIR__ . '/db.php';

header('Content-Type: text/html; charset=UTF-8');

$q = isset($_GET['q']) ? trim($_GET['q']) : '';

if ($q === '') {
    echo '<div style="color:#2b537f;">Start typing to search doctors or specialties.</div>';
    exit;
}

$like = '%' . $q . '%';

$sql = "
    SELECT full_name AS doctor_name, specialization AS doctor_specialization
    FROM doctors_account
    WHERE full_name LIKE ? OR specialization LIKE ?
    ORDER BY full_name ASC
    LIMIT 8
";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    echo '<div style="color:#b13b3b;">Search is temporarily unavailable.</div>';
    exit;
}

mysqli_stmt_bind_param($stmt, 'ss', $like, $like);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result || mysqli_num_rows($result) === 0) {
    echo '<div style="color:#2b537f;">No matching doctors found.</div>';
    mysqli_stmt_close($stmt);
    exit;
}

echo '<div style="display:grid; gap:10px;">';
while ($row = mysqli_fetch_assoc($result)) {
    $name = htmlspecialchars($row['doctor_name'], ENT_QUOTES, 'UTF-8');
    $specialization = htmlspecialchars($row['doctor_specialization'], ENT_QUOTES, 'UTF-8');

    echo '<div class="glass-card" style="padding:12px; border-radius:12px;">';
    echo '<strong style="display:block; color:#1a3b63; margin-bottom:4px;">' . $name . '</strong>';
    echo '<span style="display:block; color:#2b537f; margin-bottom:10px;">' . $specialization . '</span>';
    echo '<button type="button" class="btn-primary">Book Now</button>';
    echo '</div>';
}
echo '</div>';

mysqli_stmt_close($stmt);
?>
