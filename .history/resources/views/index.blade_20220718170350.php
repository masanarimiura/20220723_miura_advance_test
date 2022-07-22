<!--  -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>COACHTECH</title>
  <style>
    
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
      @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      <!-- @error を使えば、
            @errot('content') 
            <p>{{$message}}</p>
            @enderror
            でもっとシンプルに実装できる。
            -->
      <div class="todo">
        <form action="/todo/create" method="post" class="flex between mb-30">
          @csrf
          <input type="text" class="input-add" name="content" />
          <input class="button-add" type="submit" value="追加" />
        </form>
        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach($items as $item)
          <tr>
            <td>
              {{ $item->created_at }}
            </td>
            <form action="{{ route('todo.update', ['id' => $item->id]) }}" method="post">
              <!-- route(行き先 , 持っていく配列) routeヘルパという、web.php で
                  Route::post('/todo/update', [TodoController::class, 'update'])->name('todo.update');
              と ->name(名前) をつけておくと routeヘルパが使える。URL が複雑になった時にわかりやすくなる。 -->
              <!-- route()によって、表示されているレコードの id を自動的に update() へ送ることができるために type=hidden などを使う必要がなく、id も表示されないため安全。-->
              @csrf
              <td>
                <input type="text" class="input-update" value="{{ $item->content }}" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="{{ route('todo.delete', ['id' => $item->id]) }}" method="post">
                @csrf
                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
  </div>
</body>
</html>