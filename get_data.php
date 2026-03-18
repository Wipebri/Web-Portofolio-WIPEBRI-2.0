<?php
include 'config.php';

$data = [];

$profile = mysqli_query($conn, "SELECT * FROM profile LIMIT 1");
$data['profile'] = mysqli_fetch_assoc($profile);

$skills = mysqli_query($conn, "SELECT * FROM skills");
$data['skills'] = mysqli_fetch_all($skills, MYSQLI_ASSOC);

$experiences = mysqli_query($conn, "SELECT title FROM experiences");
$exp_list = [];
while($row = mysqli_fetch_assoc($experiences)) {
    $exp_list[] = $row['title'];
}
$data['experiences'] = $exp_list;

$certs = mysqli_query($conn, "SELECT * FROM certificates");
$data['certificates'] = mysqli_fetch_all($certs, MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($data);
?>