<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <script>
        function initSSE() {
            if (typeof(EventSource) !== "undefined") {
                var source = new EventSource("update.php");
                source.onmessage = function(event) {
                    var data = JSON.parse(event.data);
                    var xValue = data.x;
                    //document.getElementById("xValue").innerText = xValue;

                    // Assuming x can be 1, 2, or 3 for different images
                    var imgSrc;
                    if (xValue == "85%") {
                        imgSrc = "beautytable/85.png"; // Replace with your image paths
                    } else if (xValue == "87.4%") {
                        imgSrc = "beautytable/87.4.png"; // Replace with your image paths
                    } else if (xValue == "90.9%") {
                        imgSrc = "beautytable/90.9.png"; // Replace with your image paths
                    } else if (xValue == "83.4%") {
                        imgSrc = "beautytable/83.4.png"; // Replace with your image paths
                    } else if (xValue == "95.6%") {
                        imgSrc = "beautytable/95.6.png"; // Replace with your image paths
                    } else if (xValue == "99.7%") {
                        imgSrc = "beautytable/99.7.png"; // Replace with your image paths
                    } else if (xValue == "0.00%") {
                        imgSrc = "beautytable/00.png"; // Replace with your image paths
                    } else {
                        imgSrc = ""; // Default image path
                    }

                    var imgElement = document.getElementById("dynamicImage");
                    imgElement.src = imgSrc;
                    imgElement.style.display = "block"; // Ensure the image is displayed
                };
            } else {
                console.log("problem");
            }
        }
        window.onload = initSSE;
    </script>
</head>
<body>
    <img id="dynamicImage" style="display:none;" alt="Dynamic Image"/>
</body>
</html>