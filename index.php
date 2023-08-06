<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/31433afbf8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>AJAX with PHP</title>
</head>

<body>
    <button id="load-data">Load Data</button>
    <div id="output"></div>
    <script>
        $(document).ready(function() {
            $('#load-data').click(function() {
                $.ajax({
                    url: 'get_data.php', // PHP script to fetch data
                    method: 'GET',
                    success: function(data) {
                        $('#output').html(data); // Update the content of the <div> with fetched data
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>
</body>

</html>