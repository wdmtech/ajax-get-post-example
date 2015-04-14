<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ajax Get Post Example</title>
        <script src="/js/jquery/jquery-1.11.2.js"></script>
    </head>
    <body>

        <div id="getResult" style="width: 50%; border: 2px solid #FF6969; margin: 250px auto 0 auto; padding: 10px">
            This will be overwritten by data from a GET request
        </div>

        <br/>

        <div id="postResult" style="width: 50%; border: 2px dashed #FF6969; margin: 0 auto; padding: 10px">
            This will be overwritten by data from a POST request
        </div>

        <script type="text/javascript">

            $(document).ready(function() {

                /*
                 * You can learn more about when to use which method (GET or POST) here:
                 * http://blog.teamtreehouse.com/the-definitive-guide-to-get-vs-post
                 *
                 * NOTE: GET should NEVER be used for sending passwords or other sensitive information!
                 * Use POST instead (more info in link above)
                 */

                $.get("server.php", function(data) {

                    $('#getResult').html( data );

                });

                var dataToPost = { name: 'jimbob', drink: 'beer' };

                $.post("server.php", dataToPost, function(data) {

                    $('#postResult').html( data );

                });

            });

        </script>
    </body>
</html>