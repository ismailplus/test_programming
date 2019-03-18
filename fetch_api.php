
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fetch API Example</title>
    <link type="text/css"  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="heading">
            <h2 class="text-center text-red">Top Ten news Headline are</h2>
                <div id="newsHeading">
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    var url = 'https://newsapi.org/v2/top-headlines?' +
            'country=us&' +
            'apiKey=510bc7445ae44b08b01e931bf7386f42';
    var req = new Request(url);
    fetch(req)
        .then(response =>response.json())
        .then(data => {
            //console.log(data)
            {
                let result ="<a href=></a>";
                for(var i = 0; i < 10; i++){

                    var title = data.articles[i].title;
                    //console.log(title);

                    result += "<a href=" + '#' + '><div class="title">' + title + "</div ></a>";
                    
                }
                document.getElementById('newsHeading').innerHTML = result;
            }
        })
        .catch(error => console.error(error))
      
</script>

</body>
</html>

