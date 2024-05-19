<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンクスページ</title>
    <link rel="stylesheet" href="{{ asset('cdd/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('cdd/thanks.css') }}">
</head>
<body>
    <main>
        <div class="thanks__content">
            <div class="thanks__heading">
                <h2>お問い合わせありがとうございました</h2>
            </div>
        </div>
    </main>
</body>
@csrf
<div>
    <label for="last_name">姓</label>
    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
    @error('last_name')
        <div>{{ $message }}</div>
    @enderror
</div>
<div>
    <label for="first_name">名</label>
    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}>
    @error('first_name')
        <div>{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="gender">性別</label>
    <input type="radio" id="male" name="gender" value="male" checked> 男性
    <input type="radio" id="female" name="gender" value="female"> 女性
    <input type="radio" id="other" name="gender" value="other"> その他
    @error('gender')
        <div>{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="gender"></label>
</div>
</html>