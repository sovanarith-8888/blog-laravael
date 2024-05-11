
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title}}</title>
</head>
<style>
  nav{
    width: 100%;
    height: 45px;
    background-color: teal
  }
  nav ul{
    display: flex;
    justify-content: center;
    align-content: center;
}
nav ul li{
  list-style: none;
  display: block;
  height: 100%;
  margin-left: 20px;
  cursor: pointer;
}
</style>
<body>
  <nav>
    <ul>
      <li class="text-red-500">Home</li>
      <li>Product</li>
      <li>Services</li>
      <li>Profile</li>
    </ul>
  </nav>
  {{ $slot }} 
  {{-- will show when children componetn overload --}}
</body>
</html>
