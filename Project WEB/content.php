<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin - Manage News</title>
    <meta name="description" content="Admin - Manage News">
    <meta name="author" content="Your Name">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/content.css">
</head>
<body>
    <div class="container">
        <h2>Admin - Manage News</h2>

        <form action="content.php" method="post">
            <h3>Add New News</h3>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="5" required></textarea>
            <label for="image">Image URL:</label>
            <input type="text" id="image" name="image">
            <input type="submit" name="submit" value="Add News">
        </form>

        <?php
        include 'db.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit'])) {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $image = $_POST['image'];

                $sql = "INSERT INTO news (title, content, image) VALUES ('$title', '$content', '$image')";
                if ($conn->query($sql) === TRUE) {
                    echo "<div style='color: green; text-align: center;'>News added successfully</div>";
                } else {
                    echo "<div style='color: red; text-align: center;'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                }
            }

            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $content = $_POST['content'];
                $image = $_POST['image'];

                $sql = "UPDATE news SET title='$title', content='$content', image='$image' WHERE id=$id";
                if ($conn->query($sql) === TRUE) {
                    echo "<div style='color: green; text-align: center;'>News updated successfully</div>";
                } else {
                    echo "<div style='color: red; text-align: center;'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
