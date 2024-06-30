<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <script>
        function initSSE() {
            if (typeof(EventSource) !== "undefined") {
                var source = new EventSource("update.php");
                source.onmessage = function(event) {
                    var data = JSON.parse(event.data);
                    document.getElementById("xValue").innerText = data.x;
                };
            } else {
                document.getElementById("xValue").innerText = "SSE not supported in your browser.";
            }
        }
        window.onload = initSSE;
    </script>
</head>
<body>
    <p>Value of x: <span id="xValue">Loading...</span></p>
</body>
</html>