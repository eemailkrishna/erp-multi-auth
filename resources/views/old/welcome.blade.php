<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>reBLISS ERP LOGIN</title>
	 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <style>
    	@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
body{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background: #eff0f4;
}
.container{
	position: relative;
	left: -80px;
	display: flex;
	justify-content: center;
	align-items: center;
}
.container .drop{
	position: relative;
	width: 350px;
	height: 350px;
	box-shadow: inset 20px 20px 20px rgba(0,0,0,0.05),25px 35px 20px rgba(0,0,0,0.05),25px 30px 30px rgba(0,0,0,0.05),
		inset -20px -20px 25px rgba(255,255,255,0.9);
	transition: 0.5s;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 62% 38% 24% 76% / 59% 60% 40% 41%  ;
}
.container .drop:hover{
	border-radius: 50%;
}
.container .drop::before{
	content:'';
	position: absolute;
	top: 50px;
	left: 85px;
	width: 35px;
	height: 35px;
	border-radius: 50%;
	background: #fff;
	opacity: 0.9;
}
.container .drop::after{
	content: '';
	position: absolute;
	top: 85px;
	left: 110px;
	width: 15px;
	height: 15px;
	border-radius: 50%;
	background: #fff;
	opacity: 0.9;
}
.container .drop .content{
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	text-align: center;
	padding: 40px;
	gap: 15px;
}
.container .drop .content h2{
	position: relative;
	color: #333;
	font-size: 1.5em;
}
.container .drop .content form{
	display: flex;
	flex-direction: column;
	gap: 20px;
	justify-content: center;
	align-items: center;
}
.container .drop .content form .input-box{
	position: relative;
	width: 225px;
	box-shadow: inset 2px 5px 10px rgba(0,0,0,0.1),
		inset -2px -5px 10px rgba(255,255,255,1),15px 15px 10px rgba(0,0,0,0.05),15px 10px 15px rgba(0,0,0,0.025);
	border-radius: 25px;
}
.container .drop .content form .input-box::before{
	content: '';
	position: absolute;
	top: 8px;
	left: 50%;
	transform: translateX(-50%);
	width: 65%;
	height: 5px;
	background: rgba(255,255,255,0.5);
	border-radius: 5px;
}
.container .drop .content form .input-box input{
	border: none;
	outline: none;
	background: transparent;
	width: 100%;
	font-size: 1em;
	padding: 10px 15px;
}
.container .drop .content form .input-box input[type='submit']{
	color: #fff;
	text-transform: uppercase;
	font-size: 1em;
	cursor: pointer;
	letter-spacing: 0.1em;
	font-weight: 500;
}
.container .drop .content form .input-box:last-child{
	width: 120px;
	background: #3a86ff;
	box-shadow: inset 2px 5px 10px rgba(0,0,0,0.1),
15px 15px 10px rgba(0,0,0,0.05),15px 10px 15px rgba(0,0,0,0.025);
	transition: 0.5s;
}
.container .drop .content form .input-box:last-child:hover{
	width: 150px;
}
.btn{
	position: absolute;
	right: -120px;
	bottom: 0;
	width: 120px;
	height: 120px;
	background: #00b4d8;
	display: flex;
	justify-content: center;
	align-items: center;
	cursor: pointer;
	text-decoration: none;
	color: #fff;
	line-height: 1.2em;
	letter-spacing: 0.1em;
	font-size: 0.8em;
	transition: 0.25s;
	text-align: center;
	box-shadow: inset 10px 10px 10px rgba(0,180,216,0.05),15px 25px 10px rgba(0,180,216,0.1),15px 20px 20px rgba(0,180,216,0.1),
		inset -10px -10px 15px rgba(255,255,255,0.5);
	border-radius: 44% 56% 65% 35% / 57% 58% 42% 43% ;
}
.btn::before{
	content: '';
	position: absolute;
	top: 15px;
	left: 30px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	background: #fff;
	opacity: 0.45;
}
.btn.signup{
	bottom: 150px;
	right: -140px;
	width: 80px;
	height: 80px;
	border-radius: 49% 51% 52% 48% / 63% 59% 41% 37%;
	background: #f77f00;
	box-shadow: inset 10px 10px 10px rgba(247,127,0,0.05),15px 25px 10px rgba(247,127,0,0.1),15px 20px 20px rgba(247,127,0,0.1),
		inset -10px -10px 15px rgba(255,255,255,0.5);
}
.btn.signup::before{
	left: 20px;
	width: 15px;
	height: 15px;
}
.btn:hover{
	border-radius: 50%;
}
.error{
    color:red
}
  </style>
</head>
<body>
	<div class="container">
		<div class="drop">
             @if(session()->has('error'))
                    <div class="alert alert-success" >
                        {{session()->get('error')}}
                    </div>
                @endif
			<div class="content">
				<h2 class='animate__heartBeat'>ERP LOGIN</h2>
				<form id="form-submit" action="{{url('login')}}" method="post" >
                    @csrf
					<div class="input-box">
						<input type="text" name="email" placeholder="Username" required>
						</div>
                        <span style="color:red">@error('email'){{$message}}@enderror</span>
					<div class="input-box">
						<input type="password" name="password" placeholder="Password"required>
						</div>
                <span style="color:red">@error('password'){{$message}}@enderror</span>
					<div class="input-box">
						<input type="submit" value="Login" href='#'>
						</div>
				</form>
		</div>
		</div>
		<a href="#" class='btn'>Forgot Password</a>
	<a href="#" class='btn signup'>Signup</a>
	</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#form-submit").validate();
        $("#forget-password").validate();
    });
</script>
<script src="{{url('public/assets/js/my.js')}}"></script>