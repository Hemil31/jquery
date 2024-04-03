<html lang="en">

<head>
    <title>Random Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>




    <?php

    $var = array("hemil" => 20, "jay" => 15, "Hemal" => 34);

    foreach ($var as $key => $value) {
        echo $key . "= <span id='$key'>" . $value . "</span>" . "<br>" . "<br>";

    }






    ?>

    <div class="append-to-me"></div>

        <div class="banner-section"  id="img-container">
        </div>

        <button onclick="start()">start</button>
        <script>


            function start() {
                setInterval(() => {
                    $.ajax({
                        url: 'data.php',
                        dataType: 'json',
                        type: 'get',
                        success: function (responese) {
                            console.log(responese)

                            $.each(responese, function (key, value) {
                                $('#' + key).html(value)
                            })
                        }
                    })

                }, 2000);
            }


            $.ajax({
                type: 'GET',
                url: 'https://jsonplaceholder.typicode.com/photos/1',
                success: function (response) {
                    var title = response.title;

                    var img = new Image()
                    img.src = response.url;
                    img.setAttribute("class", "banner-section");
                    img.setAttribute("alt", "effy");
                     document.getElementById("img-container").appendChild(img);

                    $('div.append-to-me').append(title);
                    $('banner-section').appendChild(img);







                },
                error: function (error) {
                    console.log('not implemented');
                }
            });


        </script>

</body>

</html>