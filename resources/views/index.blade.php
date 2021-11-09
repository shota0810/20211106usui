@extends('layouts.default')

@section('title', 'トップページ')

@section('content')
    @if (count($errors) > 0)
    <ul>
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
    </ul>
    @endif
    <form action="/" method="POST">
        <table>
            @csrf
            <tr>
                <th>名前</th>
                <td>
                    <input type="text" name="name" >
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="email" name="email" >
                </td>
            </tr>
        </table>
        <input type="submit" value="送信する">
    </form>
@endsection
