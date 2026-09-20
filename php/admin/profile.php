<?php

$message = "";
$messageType = "";

$uploadFolder = "../assets/images/";
$profileImage = $uploadFolder . "profile.jpg";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_FILES["profile_image"])) {

        $message = "Please select an image.";
        $messageType = "error";

    } else {

        $image = $_FILES["profile_image"];


        /* Check upload error */

        if ($image["error"] !== 0) {

            $message = "Upload error: " . $image["error"];
            $messageType = "error";

        } else {


            /* Check file size */

            if ($image["size"] > 5 * 1024 * 1024) {

                $message = "Image must be less than 5 MB.";
                $messageType = "error";

            } else {


                /* Check whether it is actually an image */

                $check = getimagesize($image["tmp_name"]);


                if ($check === false) {

                    $message = "Please select a valid image.";
                    $messageType = "error";

                } else {


                    /* Allowed image types */

                    $allowedTypes = [
                        "image/jpeg",
                        "image/png",
                        "image/webp"
                    ];


                    if (!in_array($check["mime"], $allowedTypes)) {

                        $message =
                            "Only JPG, PNG and WEBP images are allowed.";

                        $messageType = "error";

                    } else {


                        /*
                        |--------------------------------------------------------------------------
                        | Convert uploaded image to profile.jpg
                        |--------------------------------------------------------------------------
                        */

                        if (move_uploaded_file(
                            $image["tmp_name"],
                            $profileImage
                        )) {

                            $message =
                                "Profile picture changed successfully!";

                            $messageType = "success";

                        } else {

                            $message =
                                "Could not save the image. Check folder permissions.";

                            $messageType = "error";

                        }

                    }

                }

            }

        }

    }

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Change Profile Picture
    </title>


    <style>

        * {
            box-sizing: border-box;
        }


        body {

            margin: 0;

            padding: 40px 20px;

            font-family: Arial, sans-serif;

            background: #f5f5ff;

        }


        .container {

            width: 100%;

            max-width: 500px;

            margin: auto;

            background: white;

            padding: 35px;

            border-radius: 12px;

            box-shadow:
                0 10px 30px rgba(0,0,0,0.08);

        }


        h1 {

            text-align: center;

            color: #17172b;

            margin-bottom: 10px;

        }


        .description {

            text-align: center;

            color: #666;

            margin-bottom: 30px;

        }


        .profile-preview {

            text-align: center;

            margin-bottom: 30px;

        }


        .profile-preview img {

            width: 200px;

            height: 200px;

            object-fit: cover;

            border-radius: 50%;

            border: 7px solid white;

            box-shadow:
                0 10px 30px rgba(108,99,255,0.25);

        }


        .message {

            padding: 12px;

            border-radius: 7px;

            margin-bottom: 20px;

            text-align: center;

            font-weight: bold;

        }


        .success {

            background: #dff5e7;

            color: #198754;

        }


        .error {

            background: #fde2e2;

            color: #dc3545;

        }


        label {

            display: block;

            font-weight: bold;

            margin-bottom: 8px;

            color: #17172b;

        }


        input[type="file"] {

            width: 100%;

            padding: 12px;

            border: 1px solid #ddd;

            border-radius: 7px;

            margin-bottom: 20px;

        }


        button {

            width: 100%;

            padding: 14px;

            border: none;

            border-radius: 7px;

            background: #6c63ff;

            color: white;

            font-weight: bold;

            cursor: pointer;

        }


        button:hover {

            background: #5148d8;

        }


        .back {

            display: block;

            text-align: center;

            margin-top: 20px;

            color: #6c63ff;

            text-decoration: none;

            font-weight: bold;

        }

    </style>

</head>


<body>


<div class="container">

    <h1>
        Change Profile Picture
    </h1>


    <p class="description">
        Select a new picture for your portfolio.
    </p>


    <?php if ($message !== ""): ?>

        <div class="message <?= $messageType ?>">

            <?= htmlspecialchars($message) ?>

        </div>

    <?php endif; ?>


    <div class="profile-preview">

        <img
            src="../assets/images/profile.jpg?<?= time() ?>"
            alt="Profile Picture"
        >

    </div>


    <form
        method="POST"
        enctype="multipart/form-data"
    >

        <label for="profile_image">
            Select New Picture
        </label>


        <input
            type="file"
            id="profile_image"
            name="profile_image"
            accept=".jpg,.jpeg,.png,.webp"
            required
        >


        <button type="submit">
            Change Profile Picture
        </button>

    </form>


    <a
        href="../index.php"
        class="back"
    >
        ← Back to Portfolio
    </a>

</div>


</body>

</html>
