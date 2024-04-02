<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side-by-Side PHP Code Editor</title>
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-direction: column; 
            align-items: center; 
        }

        .editor,
        .output {
            width: 100%; 
            margin-bottom: 20px; 
        }

        .editor {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            font-size: 1.5rem;
            margin-top: 0;
        }

        textarea {
            width: 100%;
            height: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 14px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            width: 100%; 
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .output {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .output pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        @media screen and (min-width: 768px) {
            .container {
                flex-direction: row; 
                justify-content: space-between; 
                align-items: flex-start; 
            }

            .editor,
            .output {
                width: 45%;
                height: 68vh;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="editor">
            <div style="display: flex; align-items: center; justify-content: center;">
                <img src="logo.gif" alt="Your Logo" class="logo">
            </div>

            <form action="" method="POST">
                <textarea name="code" placeholder="Enter your HTML, CSS, JS code here..." spellcheck="false"></textarea>
                <button type="submit">Run Code</button>
            </form>
        </div>
        <div class="output">
            <h2>Output</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $code = $_POST['code'];
                echo $code;
            } else {
                echo "Please enter your code and click 'Run Code' button to see the output.";
            }
            ?>
        </div>
    </div>
    <div class="container">
        <p>
            Welcome to the D-Code Editor. Enter your HTML, CSS, and JavaScript code in the left editor and click the
            "Run Code" button to see the output in the right editor. This code editor is made by Dhruv Thakkar
            email-id: dhruvt2005@gmail.com.
        </p>
    </div>
</body>

</html>
