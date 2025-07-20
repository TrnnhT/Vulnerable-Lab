<?php
function startLayout($pageTitle = "FakeBook") {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title><?= htmlspecialchars($pageTitle) ?></title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f0f2f5;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 80px;
                margin: 0;
            }

            .header {
                font-size: 36px;
                font-weight: bold;
                color: #1877f2;
                margin-bottom: 40px;
            }

            .form-container {
                background: white;
                padding: 20px 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                width: 300px;
            }

            .form-container input {
                width: 100%;
                padding: 10px;
                margin-top: 10px;
                border-radius: 6px;
                border: 1px solid #ccc;
            }

            .form-container button {
                width: 100%;
                margin-top: 20px;
                padding: 10px;
                background-color: #1877f2;
                color: white;
                border: none;
                border-radius: 6px;
                cursor: pointer;
            }

            .form-container a {
                display: block;
                text-align: center;
                margin-top: 10px;
                color: #1877f2;
                text-decoration: none;
            }

            .form-container a:hover {
                text-decoration: underline;
            }

            .error, .success {
                text-align: center;
                margin-bottom: 10px;
                font-weight: bold;
            }

            .error { color: red; }
            .success { color: green; }

            .footer {
                margin-top: 60px;
                padding: 20px;
                text-align: center;
                color: #888;
                font-size: 14px;
            }

            .post-box {
                background: #fff;
                padding: 15px;
                margin-bottom: 20px;
                border-radius: 10px;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                border-left: 6px solid #1877f2;
            }

            /* Extra styling for admin tools and alerts */
            form {
                margin-top: 20px;
            }

            label {
                font-weight: bold;
                margin-right: 10px;
            }

            input[type="text"] {
                padding: 6px 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                width: 250px;
            }

            button {
                background-color: #007bff;
                color: white;
                padding: 6px 12px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-left: 8px;
            }

            button:hover {
                background-color: #0056b3;
            }

            .alert {
                padding: 12px;
                margin-top: 20px;
                border-radius: 5px;
                font-weight: 500;
                max-width: 500px;
            }

            .alert-success {
                background-color: #e0f7e9;
                border: 1px solid #34c38f;
                color: #218838;
            }

            .alert-danger {
                background-color: #fce8e6;
                border: 1px solid #e74c3c;
                color: #c0392b;
            }
        </style>
    </head>
    <body>
        <div class="header">FakeBook</div>
    <?php
}

function endLayout() {
    ?>
        <div class="footer">
            &copy; <?= date("Y") ?> FakeBook. All rights reserved. <br>
            Contact us: <a href="mailto:support@fakebook.org">support@fakebook.org</a> |
            📞 +1-800-FAKEBOOK |
            📍 Heaven and Earth
        </div>
    </body>
    </html>
    <?php
}
?>
