<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Add New Student</h1> <a href="{{route('students')}}">Back to Students Page</a>

    <div class="container">
        <form action="{{route('students.store')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="studentds" class="form-label">Student Name</label>
              <input type="text" class="form-control" name="name">

            </div>
            <div class="mb-3">
                <label for="studddents" class="form-label">Student Roll</label>
                <input type="text" class="form-control" name="roll">
            </div>
            <div class="mb-3">
                <label for="studenddxxxts" class="form-label">Student Class</label>
                <input type="text" class="form-control" name="class">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>
