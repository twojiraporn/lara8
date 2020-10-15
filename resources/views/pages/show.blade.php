{{--@extends('layouts.main')--}}

{{--@section('content')--}}
{{--    <h1>Show Pages</h1>--}}

{{--    <p>ID: {{ $id }}</p>--}}
{{--    <p>Name: {{ $name }}</p>--}}

{{--    {{ $text }}--}}

{{--    @@section('content')--}}

{{--    XSS--}}
{{--    {!! $text !!}--}}

{{--    <p>{{ time() }}</p>--}}
{{--    <p>{{ date('Y-m-d H:i:s') }}</p>--}}

{{--    @if($id > 100)--}}
{{--        <p>{{ $id }} > 100</p>--}}
{{--    @endif--}}

{{--    @unless($id > 100)--}}
{{--         <p>{{ $id }} <= 100</p>--}}
{{--    @endunless--}}

{{--    @isset($records)--}}
{{--         <p>มีตัวแปร $records ให้ใช้งาน</p>--}}
{{--    @endisset--}}

{{--    @empty($array)--}}
{{--         <p>ตรวจสอบแล้วว่าเป็น array ว่าง</p>--}}
{{--    @endempty--}}
{{--@endsection--}}

@extends('layouts.main')

@section('content')
    <h1>Show Pages</h1>

    <p>ID: {{ $id }}</p>
    <p>Name: {{ $name }}</p>


@endsection

