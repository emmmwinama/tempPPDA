<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="https://www.ppda.mw">
                <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
            </a>
        </div>
    </nav>
    <div class="">
        <div class="container">
            <div class="mb-3">
                <strong class="text-uppercase fw-bold">Message from a PPDA website user</strong>
            </div>
            <div class="shadow-sm my-3 p-3">
                <div class="fw-bold my-2">Name of Sender</div>
                <div class="text-capitalize">{{ $name }}</div>
            </div>
            <div class="shadow-sm my-3 p-3">
                <div class="fw-bold my-2">Email of Sender</div>
                <div class="text-capitalize">{{ $email }}</div>
            </div>
            <div class="shadow-sm my-3 p-3">
                <div class="fw-bold my-2">Phone Number</div>
                <div class="text-capitalize">{{ $phone }}</div>
            </div>
            <div class="shadow-sm my-3 p-3">
                <div class="fw-bold my-2">Subject</div>
                <div class="text-capitalize">{{ $subject }}</div>
            </div>
            <div class="shadow-sm my-3 p-3">
                <div class="fw-bold my-2">Message</div>
                <div class="text-capitalize">{{ $userQuery }}</div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
