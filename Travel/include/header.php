<header>
		<div id="div_header">
			<div id="div1">
				<div id="div_search">
					<input style="border-radius: 5px;border-style: solid; border-color: #808080;" type="text" name="search" size="40">
					<button id="btn_search" class="btn btn-warning" type="button"> <i style="font-size: 20px;" class="fa fa-search"></i> </button>
				</div>	
			</div>
			<div id="div2">
				<div id="div_list">
					<ul>
						<li><a href="http://localhost:81/cntt3/Travel/public/trangcanhan.php"><img src="..\public\upload\<?=$img ?>" style="border-radius: 50%;width: 44px;height: 44px;"> 
							<?php
							$arr = explode(" ",$Hoten );
							echo($arr[count($arr)-1]);
							?>
						</a></li>
						<li><a href="http://localhost:81/cntt3/Travel/public/home.php"><i style="width: 40px;height: 40px;font-size: 30px;margin-top: 5px;" class="fa fa-home"></i></a></li>
						<li><a href="#news"><i style="width: 40px;height: 40px;font-size: 28px;margin-top: 5px;" class="fa fa-envelope"></i></a></li>
						<li><a href="#news"><i style="width: 40px;height: 40px;font-size: 28px;margin-top: 5px;" class="fa fa-bell"></i></a></li>
					</ul>
				</div>
			</div>
			<div id="div_dropdown" class="dropdown">
				<i onclick="myFunction()" id="menu1" class="fa fa-reorder dropbtn"></i> 
				<div id="myDropdown" class="dropdown-content">
					<a href="..\public\trangcanhan.html"><img src="..\public\upload\<?=$img ?>"
						style="border-radius: 50%;width: 35px;height: 35px;">
						<strong style="margin-left: 1em">
							<?php 
							echo $_SESSION['name'][1];
							?>
						</strong>
					</a>
					<a href="#contact">
						<img style="width: 25px;height: 25px;" src="..\image\icon_facebook.png">
						<label style="margin-left: 1em">Facebook</label>
					</a>
					<a href="#contact">
						<img style="width: 25px;height: 25px;" src="..\image\icon_google.png">
						<label style="margin-left: 1em">Google</label>
					</a>
					<a href="#contact">
						<img style="width: 25px;height: 25px;" src="..\image\Instagram_icon.png">
						<label style="margin-left: 1em">Instagram</label>
					</a>
					<a href="http://localhost:81/cntt3/Travel/public/Editpass.php">
						<i class="fa fa-gear" style="font-size:25px;"></i>
						<label style="margin-left: 1.3em">Cài đặt</label>
					</a>
					<?php
					if(isset($_SESSION['name'])){
						echo "<a href='..\login\logout.php?logout'>
						<i class='fa fa-sign-out' style='font-size:20px;'></i>
						<label style='margin-left: 1.3em'>Đăng Xuất</label>
						</a>";
					}
					else{
						header("location:http://localhost:81/cntt3/Travel/login/login.php");
					}   
					?>
				</div>
			</div>		
		</div>
	</header>