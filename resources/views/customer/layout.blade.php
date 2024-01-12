<html>
<head>
    <title>XPLORE Customer Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
    @yield('content')
</div>
<script>
    $(function ()
        {
            $('#anchor-cards-list').hide();
        }
    )

    $(document).ready(function(){
        $("#anchor-open-cards-list-btn").click(function(){
            $("#anchor-cards-list").toggle();
        });
    });

</script>
</body>
</html>
