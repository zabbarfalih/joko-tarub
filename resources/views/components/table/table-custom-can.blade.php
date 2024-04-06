@props(['idTable'])

<div class="card-block container-fluid">
    <div id="izin-container-sesuai">
        <div class="dt-responsive table-responsive">
            <table id="{{ $idTable }}" class="table table-bordered nowrap hover" style="overflow: auto;">
                <thead>
                    {{ $slot1 }}
                </thead>
                <tbody>
                    {{ $slot2 }}
                </tbody>
            </table>
        </div>
    </div>
</div>
