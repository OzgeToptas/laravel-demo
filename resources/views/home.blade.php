<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="offset-3 col-6 mt-5">
        <table class="table table-hover table-striped">
            <thead class="table-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Product Amount</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($customers as $customer)
                <tr>
                    <th scope="row" height="45px">{{ $customer->id }}</th>
                    <th>{{ $customer->first_name." ".$customer->last_name }}</th>
                    <td>{{ $customer->email_address }}</td>
                    <td>{{ $customer->product()->count() }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <div class="d-flex">
            {!! $customers->links() !!}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script></body>
</html>
