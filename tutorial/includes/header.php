<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo $pageTitle = ucwords(str_replace('-', ' ', $pageTitle));
        ?>
    </title>
    <style>
    body {
        display: flex;
        flex-direction: column; /* Stack children vertically */
        justify-content: space-between; /* Space out the container and footer */
        align-items: center; /* Center horizontally */
        height: 100vh; /* Full viewport height */
        margin: 0; /* Remove default body margin */
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

    }

    .container {
        /* Optional: Add styles to the container */
        padding: 20px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        width: 600px;
        height: auto; /* You can set this to auto if you want it to adjust based on content */
    }

    footer {

        padding-bottom: 20px; /* Adjust padding as needed */
        width: 100%; /* Ensure footer takes full width */
        text-align: center; /* Center the footer text */
    }

    ul.footer-list {
        padding: 0; /* Remove padding */
        margin: 0; /* Remove margin */
        list-style: none; /* Remove bullet points */
    }

    h5 {
        margin-block-start: 1em;
        margin-block-end: 1em;
    }


    </style>
</head>
<body>
    <div class="container">
    <h1><?php 
    echo $pageTitle; ?></h1>
    