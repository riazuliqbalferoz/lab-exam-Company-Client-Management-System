<!DOCTYPE html>
<html>
<head>
	<title>All User Login </title>
</head>
<body>


	<div class="main">

    <h1> All User login</h1>
    <form method="post">
	<table>
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<tr>
			<td>Name</td>
			<td><input type="text" name="uname" value="{{old('uname')}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" palceholder="Enter your password " name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"  name="Submit" value="submit"></td>
		</tr>
	</table>
	</form>
    
    </div>
		{{session('msg')}}
		<br>

		@foreach ($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>

<style>
.main{
 padding-left: 300px;
 padding-top: 100px;
 padding-bottom: 100px;
background:gray;
text:white;

}
</style>
