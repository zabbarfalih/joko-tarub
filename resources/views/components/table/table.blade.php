@props(['idTable'])

<div class="card-block container-fluid">
    <div id="izin-container-sesuai">
        <div class="dt-responsive table-responsive">
            <table id="{{ $idTable }}" class="table table-bordered nowrap hover responsive" style="overflow: auto;">
                <thead>
                    <tr>
                        @php $i = 0 @endphp
                        @foreach($headers as $header)
                            @php $i++ @endphp
                            <th class="text-center {{ $header['classes'] }} col-{{$i}}">{{ $header['name'] }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    {{ $slot }}
                </tbody>
            </table>
        </div>
    </div>
</div>
