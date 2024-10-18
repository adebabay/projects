<?php
date_default_timezone_set('Asia/Manila');
require_once 'conn.php'; // Database connection

if (isset($_POST['save'])) {
    $video_name = $_FILES['video']['name'];
    $video_temp = $_FILES['video']['tmp_name'];
    $video_size = $_FILES['video']['size'];

    // Handle video upload
    if ($video_size < 50000000) {
        $video_ext = pathinfo($video_name, PATHINFO_EXTENSION);
        $allowed_video_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');

        if (in_array($video_ext, $allowed_video_ext)) {
            $video_new_name = date("Ymd") . time() . "." . $video_ext;
            $video_location = 'video/' . $video_new_name;

            if (move_uploaded_file($video_temp, $video_location)) {
                
                // Handle image upload
                if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                    $image_name = $_FILES['image']['name'];
                    $image_temp = $_FILES['image']['tmp_name'];
                    $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
                    $allowed_image_ext = array('jpg', 'jpeg', 'png', 'gif');

                    if (in_array($image_ext, $allowed_image_ext)) {
                        $image_new_name = date("Ymd") . time() . "_img." . $image_ext;
                        $image_location = 'images/' . $image_new_name; // Change path as needed

                        if (move_uploaded_file($image_temp, $image_location)) {
                            // Insert into database
                            $email = mysqli_real_escape_string($conn, $_POST['email']);
                            $subject = mysqli_real_escape_string($conn, $_POST['subject']);
                            $description = mysqli_real_escape_string($conn, $_POST['message']);
                            
                            mysqli_query($conn, "INSERT INTO `video` (`video_name`, `location`, `image_location`, `email`, `subject`, `description`) VALUES ('$video_new_name', '$video_location', '$image_location', '$email', '$subject', '$description')") or die(mysqli_error($conn));
                            echo "<script>alert('Video and Image Uploaded')</script>";
                            echo "<script>window.location = 'index.php'</script>";
                        } else {
                            echo "<script>alert('Image upload failed')</script>";
                        }
                    } else {
                        echo "<script>alert('Wrong image format')</script>";
                    }
                } else {
                    echo "<script>alert('Image file not uploaded')</script>";
                }
            } else {
                echo "<script>alert('Video upload failed')</script>";
            }
        } else {
            echo "<script>alert('Wrong video format')</script>";
        }
    } else {
        echo "<script>alert('File too large to upload')</script>";
    }
}
?>
