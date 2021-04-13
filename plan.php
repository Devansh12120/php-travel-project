<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;300&display=swap" rel="stylesheet">
<style>
    html{
	margin: 0;
	padding: 0;
	font-family: 'Fira Sans', sans-serif;
	background: url(1.jpg) no-repeat center / cover;
	height: 100%;
}

.container{
	position: relative;
	justify-content: center;
	display: flex;
	margin-top: 80px;
}

.card{
	position: relative;
	background: #eee;
	color: #5555fa;
	width: 250px;
	height: 400px;
	border-radius: 15px;
	margin: 20px;
	cursor: pointer; 
	transition: all ease-in-out 1s;
}

.title{		
	font-size: 14px;
	padding: 2px;
	text-align: center;
	font-weight: bold;
	text-transform: uppercase;
}
.price{
	margin-top: -25px;
	text-align: center;
}
.price h5{
	font-size: 4em;
	margin-top: 20px;
	padding: 20px;
}
.price h5 sup{
	font-size: 25px;
}
.price p{
	margin-top: -135px;
	font-size:12px;
	padding-bottom: 25px

}
.option{
	position: relative;
	padding: 10px;
}
.option li{
	text-align: center;
	font-size: 12px;
	padding: 8px;
	font-weight: bold;
	list-style: none;
}
button{
	position: absolute;
	bottom: 5%;
	left: 30%;
	outline: none;
	border: none;
	background: #5555fa;
	color:#eee;
	width: 100px;
	height: 30px;
	border-radius: 25px;
	font-weight: bold;
	cursor: pointer; 
	transition: all ease-in-out 1s;
	box-shadow: 0 0 4px #0909e6;
}

.card:hover{
	box-shadow: 0 0 0 20em inset #5555fa;
	color: #eee;
	}

.card:hover button{
	background: #eee;
	color:#5555fa;
}
</style>
</head>
<body>
<div class="container">

	<div class="card">
		<div class="title">
			<p>Free</p>
		</div>
		<div class="price">
			<h5><sup>$</sup>0</h5>
			<p>Per month</p>
		</div>
		<div class="option">
				<li>One User</li>
				<li>Email Support</li>
				<li>30 Days Trail</li>
		</div>
			<button type="button">Sign Up</button>
	</div>		

	<div class="card">
		<div class="title">
			<p>Professional</p>
		</div>
		<div class="price">
			<h5><sup>$</sup>49</h5>
			<p>Per month</p>
		</div>
		<div class="option">
				<li>Up to 10 User</li>
				<li>Email Support</li>
				<li>Analytics</li>
				<li>Help Line</li>
		</div>
			<button type="button">Sign Up</button>
	</div>		

	<div class="card">
		<div class="title">
			<p>Premium</p>
		</div>
		<div class="price">
			<h5><sup>$</sup>72</h5>
			<p>Per month</p>
		</div>
		<div class="option">
				<li>100 User</li>
				<li>Email Support</li>
				<li>Analytics</li>
				<li>Phone Support</li>
		</div>
			<button type="button">Sign Up</button>
	</div>		
</div><!--
-->
</body>
</html>