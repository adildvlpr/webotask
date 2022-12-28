<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @livewireStyles
    <style>
    body {
    background:white;
    }

#screen1 {
    margin:50px;
    background-color: rgb(232, 234, 218);
    -webkit-animation:bgChange 1s 1s alternate infinite;
    transition: all 1s ease;
}


#screen2 {
    margin:50px;
    background-color: rgb(239, 241, 231);
    -webkit-animation:bgChange 1s 1s alternate infinite;
    transition: all 1s ease;
}


    </style>
	</head>
<body>
<div>
    @livewire('calculation')
</div>


@livewireScripts
</body>
</html>
