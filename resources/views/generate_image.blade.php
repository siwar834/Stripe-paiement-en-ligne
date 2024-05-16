
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate OpenAI Image</title>
</head>
<body>
    <form action="/generate-image" method="POST">
        @csrf
        <label for="prompt">Prompt:</label>
        <input type="text" id="prompt" name="prompt" required>
        <button type="submit">Generate</button>
    </form>


     <div>
       <a href="{{Session::get('image')}}" >Voir image</a>
     </div>
</body>
</html>
