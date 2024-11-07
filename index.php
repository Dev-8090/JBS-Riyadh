<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JBS Consulting</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #1a1a1a; /* Set a background color */
            overflow: hidden;
        }

        img {
            width: 100%;
            height: 100%;
            max-width: none;
            object-fit: cover; /* Ensures the image covers the entire container */
            object-position: center; /* Centers the image */
        }

        @media (max-width: 768px) {
            img {
                object-fit: contain; /* Keeps the whole image in view on smaller screens */
                padding: 10px; /* Optional padding for smaller screens */
            }
        }
    </style>
</head>
<body>
    <img src="jbsr.jpg" alt="JBSCo Coming Soon">
</body>
</html>
