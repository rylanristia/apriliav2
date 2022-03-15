<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/galery.css">

    <style>
        body {
            background-color: #39315C;
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="card p-4 mt-5">
            <table class="table table-responsive">
                <tbody>
                    <tr>
                        <td>Highlighted count</td>
                        <td>{{ $highlighted }}</td>
                    </tr>
                    <tr>
                        <td>Sender twitter count</td>
                        <td>{{ $sender }}</td>
                    </tr>
                    <tr>
                        <th>Total sender</th>
                        <td>{{ $total }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="card p-4 mt-5">
            <h4 class="pb-3">Highlighted sender</h4>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $number = 1;
                    @endphp
                    @foreach ($highlighteddata as $item)
                        <tr>
                            <th scope="row">{{ $number++ }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="card p-4 mt-5">
            <h4 class="pb-3">Data sender</h4>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $number = 1;
                    @endphp
                    @foreach ($senderdata as $item)
                        <tr>
                            <th scope="row">{{ $number++ }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>
