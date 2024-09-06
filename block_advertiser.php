<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Projectt";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if advertiserId is set
if (isset($_POST['advertiserId'])) {
    $advertiserId = $_POST['advertiserId'];

    // Begin transaction
    $conn->begin_transaction();

    try {
        // Block the advertiser by setting status to 0
        $block_advertiser_sql = "UPDATE sign_up SET status = 0 WHERE Id = ?";
        $stmt = $conn->prepare($block_advertiser_sql);
        $stmt->bind_param("i", $advertiserId);
        if (!$stmt->execute()) {
            throw new Exception($stmt->error);
        }

        // Delete all advertisements of the blocked advertiser
        $delete_ads_sql = "DELETE FROM advertisement WHERE AdvertiserID = ?";
        $stmt = $conn->prepare($delete_ads_sql);
        $stmt->bind_param("i", $advertiserId);
        if (!$stmt->execute()) {
            throw new Exception($stmt->error);
        }

        // Commit transaction
        $conn->commit();

        echo "success";
    } catch (Exception $e) {
        // Rollback transaction in case of error
        $conn->rollback();
        echo "error: " . $e->getMessage();
    } finally {
        $stmt->close();
    }
} else {
    echo "error: Invalid request.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('image40.png');
            background-color: #f0f0f0; /* Fallback color in case the background image doesn't load */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .ad-card {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f9f9f9;
        }
        .ad-card h3 {
            margin-top: 0;
        }
        .ad-video {
            width: 100%;
            height: auto;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Advertisements</h1>
        <?php if ($ads_result->num_rows > 0): ?>
            <?php while ($row = $ads_result->fetch_assoc()): ?>
                <div class="ad-card" id="ad-<?php echo $row['ID']; ?>">
                    <h3><?php echo $row['Title']; ?></h3>
                    <p><?php echo $row['Description']; ?></p>
                    <?php if (!empty($row['Video_path'])): ?>
                        <video class="ad-video" controls>
                            <source src="<?php echo $row['Video_path']; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    <?php endif; ?>
                    <p><strong>Created at:</strong> <?php echo $row['Created_at']; ?></p>
                    <button class="btn btn-danger block-advertiser" data-advertiser-id="<?php echo $row['AdvertiserID']; ?>">Block Advertiser</button>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No advertisements found.</p>
        <?php endif; ?>
    </div>
    <script>
        $(document).ready(function() {
            $('.block-advertiser').click(function() {
                var advertiserId = $(this).data('advertiser-id');
                $.ajax({
                    url: 'block_advertiser.php',
                    type: 'POST',
                    data: { advertiserId: advertiserId },
                    success: function(response) {
                        if (response === 'success') {
                            alert('Advertiser has been blocked.');
                            location.reload();
                        } else {
                            alert('Failed to block advertiser.');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>




