<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/test.css') }}" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sadnan Rashid</title>
</head>
<body>
    <h1 class="display-5 text-center mt-2">This is a test login FORM</h1>
    <br>
    <button onclick="getData()" class="btn btn-primary d-flex flex-row align-items-center">RUN</button>
    <br>
    <h4 id="changeText"></h4>
    <br>
    <form action="submit">
        <div class="mt-2 p-2">
            <p class="display-6">
                json place holder api test within php using javascript basic fetch(GET)
            </p>
        </div>
    </form>

    <div class="d-flex flex-column w-75 m-5" id="dataBox">

    </div>
</body>
</html>

<script>
    function clickTest(){
        document.getElementById("changeText").innerText = "Changed this";
    }

    async function getData(){
        fetch("https://jsonplaceholder.typicode.com/todos/")
        .then(res => res.json())
        .then(data => console.log(data));
    }

    function addData(data){
        const dataDiv = document.getElementById("dataBox");
        for(let i=0; i<data.length; i++){
            dataDiv += ` <h5> ${data[i].title} <h5/> `; 
        }
    }
</script>