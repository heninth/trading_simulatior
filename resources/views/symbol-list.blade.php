@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-xs-6">
            <h1>SET</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>สัญลักษณ์</td>
                        <td>ราคา</td>
                        <td>ซื้อ / ขาย</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stocks as $symbol)
                        @if ($symbol->market == 'SET')
                            <tr>
                                <td>{{ $symbol->symbol }}</td>
                                @if ($symbol->is_suspended)
                                    <td> - </td>
                                    <td><a href="#" class="btn btn-default" disabled>การซื้อขายถูกระงับ</a></td>
                                @else
                                    <td>{{ $symbol->close_price }}</td>
                                    @if ($symbol->close_price < 10)
                                        <td><a href="{{ url('/symbol/'.$symbol->symbol) }}" class="btn btn-default">ขาย</a></td>
                                    @else
                                        <td><a href="{{ url('/symbol/'.$symbol->symbol) }}" class="btn btn-default">ซื้อ / ขาย</a></td>
                                    @endif
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-6 col-xs-6">
            <h1>mai</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>สัญลักษณ์</td>
                        <td>ราคา</td>
                        <td>ซื้อ / ขาย</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stocks as $symbol)
                        @if ($symbol->market == 'mai')
                            <tr>
                                <td>{{ $symbol->symbol }}</td>
                                @if ($symbol->is_suspended)
                                    <td> - </td>
                                    <td><a href="#" class="btn btn-default" disabled>การซื้อขายถูกระงับ</a></td>
                                @else
                                    <td>{{ $symbol->close_price }}</td>
                                    @if ($symbol->close_price < 10)
                                        <td><a href="{{ url('/symbol/'.$symbol->symbol) }}" class="btn btn-default">ขาย</a></td>
                                    @else
                                        <td><a href="{{ url('/symbol/'.$symbol->symbol) }}" class="btn btn-default">ซื้อ / ขาย</a></td>
                                    @endif
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
