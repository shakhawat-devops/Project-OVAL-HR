<html>
<head>
    <title>DevOps Tools List</title>
</head>

<body>
    <h1>My DevOps Tools Bucket List</h1>
    <h2>Tools I'd Like to Work</h2>
    <ul>
      @foreach ($togo as $newplace)
        <li>{{ $newplace->name }}</li>
      @endforeach
    </ul>

    <h2>Tools I've Already Worked on</h2>
    <ul>
          @foreach ($worked as $worked)
                <li>{{ $worked->name }}</li>
          @endforeach
    </ul>
</body>
</html>
