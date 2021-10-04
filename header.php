<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">

		<meta name="description" content="ノートコミュニケーションサービス"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="stylesheet" type="text/css" href="css/headerstyle.css">
		<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700;800;900&display=swap" rel="stylesheet">
		<script src="js/jquery-3.5.1.min.js"></script>
	</head>
	<body>
		<header>
			<!-- スマホ画面用 -->
			<div class="smallsc">
				<div class="topbar">
					<!-- ロゴタイトル -->
					<a class="logoarea" href="index.php"><img src="images/notesscavenger_logo.svg" alt="notesscavenger"></a>

					<div class="iconarea">
						<!-- ノート投稿 -->
						<a href="upload.php" class="upload-btn">
							<img src="images/notebook_icon.svg" class="notebookimg" alt="notebook">
							<span>投稿</span>
						</a>

						<!-- プロフィール画像 -->
						<div class="profileicon">
							<div class="profilemenu">
								<ul class="hidden">
									<a href='profile.php'><li class="menufst">プロフィール</li></a>
									<a href="profile.php"><li>投稿ノート一覧</li></a>
									<a href="logout.php" class="logoutbtn"><li>ログアウト</li></a>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<!-- 検索窓 -->
				<div class="searcharea">
					<form action="search.php" method="post">
						<input type="search" name="search" class="search" placeholder="キーワードを入力">
						<button type="submit" name="sbutton" class="lupeimg">
							<img src="images/lupe_icon.svg" class="bellimg" alt="lupe">
						</button>
					</form>
				</div>

				<nav class="menu">
					<div class="category">
						<div>
							<img src="images/category_icon.svg">
							<span>カテゴリー</span>
							<ul class="hidden">
								<a href="#"><li>科目1</li></a>
								<a href="#"><li>科目2</li></a>
								<a href="#"><li>科目3</li></a>
								<a href="#"><li>科目4</li></a>
							</ul>
						</div>
					</div>

					<div class="ranking">
						<div>
							<a href='index.php?page=rank'>
								<img src="images/lank_icon.svg">
								<span>ランキング</span>
							</a>
						</div>
					</div>

					<div class="lovelist">
						<div>
							<a href='index.php?page=good'>
								<img src="images/love_icon.svg">
								<span>いいね一覧</span>
							</a>
						</div>
					</div>

				</nav>

			</div>

			<!-- PC画面用 -->
			<div class="bigsc">
				<div class="bigtopbar">
					<!-- ロゴタイトル -->
					<div  class="biglogoarea">
						<a href="index.php"><img src="images/notesscavenger_logo.svg" alt="notesscavenger"></a>
					</div>

					<!-- 検索窓 -->
					<div class="bigsearcharea">
						<form action="search.php" method="post">
							<input type="search" name="search" class="bigsearch" placeholder="キーワードを入力">
							<button type="submit" name="sbutton" class="lupeimg">
								<img src="images/lupe_icon.svg" class="bellimg" alt="lupe">
							</button>
						</form>
					</div>

					<div class="iconarea">
						<!-- ノート投稿 -->
						<a href="upload.php" class="upload-btn">
							<img src="images/notebook_icon.svg" class="notebookimg" alt="notebook">
							<span>投稿</span>
						</a>

						<!-- プロフィール画像 -->
						<div class="profileicon">
							<div class="profilemenu">
								<ul class="hidden">
									<a href='profile.php'><li class="menufst">プロフィール</li></a>
									<a href="profile.php"><li>投稿ノート一覧</li></a>
									<a href="logout.php" class="logoutbtn"><li>ログアウト</li></a>
								</ul>
							</div>
						</div>

					</div>

				</div>

				<nav class="bigmenu">

					<div class="category">
						<div>
							<img src="images/category_icon.svg">
							<span>カテゴリー</span>
							<ul class="hidden">
								<a href="#"><li>科目1</li></a>
								<a href="#"><li>科目2</li></a>
								<a href="#"><li>科目3</li></a>
								<a href="#"><li>科目4</li></a>
							</ul>
						</div>
					</div>

					<div class="ranking">
						<div>
							<a href='index.php?page=rank'>
								<img src="images/lank_icon.svg">
								<span>ランキング</span>
							</a>
						</div>
					</div>

					<div class="lovelist">
						<div>
							<a href='index.php?page=good'>
								<img src="images/love_icon.svg">
								<span>いいね一覧</span>
							</a>
						</div>
					</div>

				</nav>
			</div>


		</header>

		<script>
			$(document).ready(function(){
				$('.category').hover(function(){
					$('.category ul').toggleClass('hidden');
				}, function(){
					$('.category ul').toggleClass('hidden');
				});
			});

			$(document).ready(function(){
				$('li').hover(function(){
					$(this).css('color','white');
				}, function(){
					$(this).css('color','black');
					$('.logoutbtn li').css('color','red');
				});
			});

			$(document).ready(function(){
				$('.profileicon').hover(function(){
					$('.profileicon ul').toggleClass('hidden');
				}, function(){
					$('.profileicon ul').toggleClass('hidden');
				});
			});
		</script>

	</body>


</html>
