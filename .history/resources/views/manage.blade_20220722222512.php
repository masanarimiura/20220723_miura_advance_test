<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>advance_test</title>
  <style>
    html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;  
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}
/* ここまでreset.css */
.manage {
  width:90%;
  margin: 0 auto;
}
.manage h2{
  text-align:center;
  padding: 20px;
  font-size:20px;
  width: 100%;
}
.system {
  width:100%;
  border:solid 1px black;
}
.system form {
  width: 100%;
}
.system form table {
  width: 100%;
}
.system form table tr th {
  width: 18%;
  font-weight: bold;
  text-align: left;
  padding-left: 10px;
}
.system form table tr td {
  padding: 1em .5em;
}
.search-gender p {
  display: inline;
  font-weight: bold;
}
.system form table tr input {
  width: 90%;
  height: 3em;
  padding: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.system form table tr span {
  display: inline-block;
  font-size:30px;
}
.search-gender p {
  display: inline;
  font-weight: bold;
}
.system form table tr .check-box {
  width: 10%;
  height: 2em;
}
.submit-box {
  text-align:center;
  padding: 10px;
  font-size:20px;
  width: 100%;
}
.submit-btn{
  border-radius: 6px;
  margin: 10px auto 0;
  padding-top: 10px;
  padding-bottom: 10px;
  width: 200px;
  display: block;
  background: black;
  color: #fff;
  font-weight: bold;
  font-size: 15px;
  border: none;
  cursor: pointer;
}
.reset-btn{
  border: none;
  margin: 0 auto;
  padding-bottom: 10px;
  display: block;
  background: #fff;
  color: black;
  font-size: 15px;
  text-decoration:underline;
  cursor: pointer;
}
.show-data {
  width:100%;
  margin:50px 0;
}
.show-data nav div {
  display:flex;
  justify-content: space-between;
}
.show-data nav div div .page {
  border-left:1px solid black;
  border-top:1px solid black;
  border-bottom:1px solid black;
  text-decoration:none;
}
.show-data nav div div .last-page {
  border-right:1px solid black;
  text-decoration:none;
}
svg.w-5.h-5 {  
    width: 15px;
    height: 15px;
    display: inline;
    }
.show-data table{
  margin-top:50px;
  width: 100%;
}
.show-data table tr th, .show-data table tr td{
  padding: 10px;
  text-align:left;
}
.show-data table tr .opinion {
  padding: 0;
  margin: 0;
}
.opinion-all {
  display: none;
  width: 400px;
  position: absolute;
  padding: 16px;
  background: #f5f5f5;
  color: black;
  border:1px solid black;
}
.show-data table tr .opinion p:hover + .opinion-all {
  display: block;
}
.show-data table tr td form .button-delete {
  border-radius: 6px;
  margin: 10px auto 0;
  padding-top: 5px;
  padding-bottom: 5px;
  width: 50px;
  display: block;
  background: black;
  color: #fff;
  font-weight: bold;
  font-size: 15px;
  border: none;
  cursor: pointer;
}
.show-data .notFind{
  text-align:center;
  font-size:120%;
  color: red;
}



  </style>
  
</head>
<body>
  <div class="manage">
    <h2>管理システム</h2>
    <div class="system">
      <form action="/manage" method="POST">
        <table>
          @csrf
          <tr>
            <th>お名前</th>
            <td>
              <input type="text" name="full_name" value="" >
            </td>
            <td class="search-gender">
              <p>性別</p>
              <input type="radio" name="gender" value="全て" checked class="check-box">全て
              <input type="radio" name="gender" value="男性" class="check-box">男性
              <input type="radio" name="gender" value="女性" class="check-box">女性
            </td>
          </tr>
          <tr>
            <th>登録日</th>
            <td>
              <label class="date-edit"><input type="date" value="2019-08-22" /></label>
              <span>~</span>
            </td>
            <td>
              <label class="date-edit"><input type="date" value="2019-08-22" /></label>
            </td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>
              <input type="text" name="email-search" value="" >
            </td>
          </tr>
        </table>
        <div class="submit-box">
          <button type="submit" class="submit-btn">検索</button>
        </div>
        <div class="submit-box">
          <input type="reset" class="reset-btn" value="リセット">
        </div>
      </form>
    </div>
    <div class="show-data">
      @if (count($items) >= 1)
      <div>
        {{ $items->links('vendor.pagination.tailwind') }}
      </div>
      @endif
      <table>
        <tr class="line">
          <th>ID</th>
          <th>お名前</th>
          <th>性別</th>
          <th>メールアドレス</th>
          <th>ご意見</th>
        </tr>
        @if (count($items) >= 1)
        @foreach ($items as $item)
        <tr>
          <td>
            {{$item->id}}
          </td>
          <td>
            {{$item->full_name}}
          </td>
          <td>
            {{$item->gender}}
          </td>
          <td>
            {{$item->email}}
          </td>
          <td class="opinion">
            <p>{{ Str::limit($item->opinion, 50, '...')}}</p>
            <p class="opinion-all">{{$item->opinion}}</p>
          </td>
          <td>
            <form action="{{ route('delete', ['id' => $item->id]) }}" method="post">
              @csrf
              <button class="button-delete">削除</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
      @else
      <p class="notFind">検索に合うデータが見つかりませんでした。別な検索ワードや方法をお試しください</p>
      @endif
    </div>
  </div>
</body>
</html>

<script>

</script>