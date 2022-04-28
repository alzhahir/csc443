<!DOCTYPE html>
<html>
    <head>
        <title>Form Feedback</title>
    </head>
    <body>
        <?php #Script handle form

            if (strlen($_POST["name"]) > 0) {
                $_POST["name"] = $_POST["name"];
            } else {
                $_POST["name"] = null;

                echo "<p><b> You forgot to enter your name! </b></p>";
            }

            if (strlen($_POST["comments"]) > 0) {
                $_POST["comments"] = $_POST["comments"];
            } else {
                $_POST["comments"] = null;

                echo "<p><b> You forgot to enter your comment! </b></p>";
            }

            if (strlen($_POST["email"]) > 0) {
                $_POST["email"] = $_POST["email"];
            } else {
                $_POST["email"] = null;

                echo "<p><b> You forgot to enter your email! </b></p>";
            }

            if (isset($_POST["gender"])) {
                if($_POST["gender"] == 'M'){
                    $message = '<p><b>Good Day, Sir</b></p>';
                }
                if($_POST["gender"] == 'F'){
                    $message = '<p><b>Good Day, Madam</b></p>';
                }
            } else {
                $_POST["gender"] = null;

                echo "<p><b> You forgot to choose your gender! </b></p>";
            }

            if($_POST["name"] && $_POST["comments"] && $_POST["email"] && $_POST["gender"]) {
                echo "Thank you, ".$_POST["name"]. "for the following comment: <br/> <tt>".
                $_POST["comments"]. "</tt> <p> We will reply to you at <i>" .$_POST["email"].
                "</i><p>";
                echo $message;
            }

        ?>
    </body>
</html>