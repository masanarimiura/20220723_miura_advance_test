<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>advance_test</title>
  <style>

  </style>
</head>

<body>
  <div class="manage">
    <h2>管理システム</h2>
    <div class="system">
      <form action="">
        <table>
          @csrf
          <tr>
            <th>お名前</th>
            <td>
              <input type="text" name="full_name-search" value="" >
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
              <input type="text" name="begin-search-date" value="" >
              <span>~</span>
            </td>
            <td>
              <input type="text" name="end-search-date" value="" >
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
          <button type="submit" formmethod="get" class="reset-btn">リセット</button>
        </div>
      </form>
    </div>
    <div class="show-data">
      @if (count($items) >= 1)
      <div>
        {{ $items->links('pagination::bootstrap-4') }}
      </div>
      @endif
      <table>
        <tr>
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
            {{$item->name}}
          </td>
          <td>
            {{$item->gender}}
          </td>
          <td>
            {{$item->email}}
          </td>
          <td>
            {{$item->opinion}}
          </td>
        </tr>
        @endforeach
      </table>
      @endif
    </div>
  </div>
</body>
</html>

<script>

</script>