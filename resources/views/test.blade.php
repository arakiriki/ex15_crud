@extends('book.layouts.base')

@section('title','Rakuten Search')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$( function() {
	$("#button1").click(
	function(){
		$("#span1").text("データ取得中です");

		// 送信先のURL
		const url = "https://app.rakuten.co.jp/services/api/BooksTotal/Search/20170404?format=json&applicationId=1027694280592738789";

		// 送信するデータは、フォームの内容をserialize()しています
		// serialize()の内容は、cs1=custom1&cs2=custom2です
		const testData = $("#form1").serialize();

		// 1. $.getで通信を行う。"json"はサーバから返されるデータの種類。
		// $.get(url,testData,null,"json")
        $.get(url,testData,null,"json")

			// 2. doneは、通信に成功した時に実行される
			//  引数のdata1は、通信で取得したデータ
			.done(function(data1,textStatus,jqXHR) {
				$("#span1").text(jqXHR.status); //例：200
				$("#span2").text(textStatus); //例：success

				// 3. キーを指定して値を表示
                $("#span3").text(data1.Items[0].Item.title);

                $("#title").text(data1.Items[0].Item.title);
                $("#author").text(data1.Items[0].Item.author);
                $("#url").text(data1.Items[0].Item.itemUrl);
                $("#story").text(data1.Items[0].Item.itemCaption);
                $("#img").attr('src',data1.Items[0].Item.largeImageUrl);
                
                $("#page").click(function(){
                    const itemUrl = data1.Items[0].Item.itemUrl;
                    window.open(itemUrl, '_blank')
                });

				// 4. JavaScriptオブジェクトをJSONに変換
				const data2 = JSON.stringify(data1);
				console.log(data2); //コンソールにJSONが表示される
			})
			// 5. failは、通信に失敗した時に実行される
			.fail(function(jqXHR, textStatus, errorThrown ) {
				$("#span1").text(jqXHR.status); //例：404
				$("#span2").text(textStatus); //例：error
				$("#span3").text(errorThrown); //例：NOT FOUND
			})
			// 6. alwaysは、成功/失敗に関わらず実行される
			.always(function() {
				$("#span4").text("完了しました");
			});
	});
} );
</script>
</head>
<body >


{{-- <p>ステータス：<span id="span1"></span></p>
<p>検索結果：<span id="span2"></span></p>
<p>著者名：<span id="span3"></span></p>
<p>完了：<span id="span4"></span></p> --}}

<form id="form1">
<input class="btn btn-primary" type="button" id="button1" value="検索">
<button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.index') }}'">一覧画面</button><br><br>
<p>キーワード：<input type="text" name="keyword" value="laravel"></p>
<p>検索数：<input type="text" name="hits" value="1" maxlength="10"></p>
</form>



<table class="table table-light table-striped" Valign=center>
    <thead>
    <tr>
        <th scope="col" style="width: 150px">image</th>
        <th scope="col" style="width: 150px">title</th>
        <th scope="col" style="width: 150px">author</th>
        <th scope="col" style="width: ">story</th>
        <th scope="col" style="width: 60px">item page</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row" style="vertical-align:middle;"><img id="img" src=""></th>
        <th scope="row" style="vertical-align:middle;"><p><span id="title"></span></p></th>
        <th scope="row" style="vertical-align:middle;"><p><span id="author"></span></p></th>
        <th scope="row" style="vertical-align:middle;"><p><span id="story"></span></p></th>
        <th scope="row" style="vertical-align:middle;"><button type="button" id="page" class="btn btn-dark">jamp</button><br><br></th>
        
    </tr>
    </tbody>
</table>

@endsection
