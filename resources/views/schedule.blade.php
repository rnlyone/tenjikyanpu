@include('Layout.app')

<div class="page-content header-clear-medium">
    <div class="card card-style">
        <div class="content mb-0">
            <h4>Schedule Hari Ini</h4>
            <p>
                Berikut Jadwal Tenji Kyanpu Hari ini
            </p>
            <div class="list-group list-custom list-group-m list-group-flush rounded-xs">
                <a href="#" class="list-group-item">
                    <i class="has-bg bg-red-dark rounded-xs bi bi-heart-fill"></i>
                    <div><strong>List Item 1</strong><span>List item Description</span></div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                <a href="#" class="list-group-item">
                    <i class="has-bg bg-yellow-dark rounded-xs bi bi-star-fill"></i>
                    <div><strong>List Item 2</strong><span>List item Description</span></div>
                    <span class="badge rounded-xl">15</span>
                </a>
                <a href="#" class="list-group-item pe-2" data-trigger-switch="switch-5">
                    <i class="has-bg bg-blue-dark rounded-xs bi bi-gear-fill"></i>
                    <div><strong>List Item 3</strong><span>List item description</span></div>
                    <div class="form-switch ios-switch switch-green switch-m">
                        <input type="checkbox" class="ios-input" id="switch-5" checked="">
                        <label class="custom-control-label" for="switch-5"></label>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@include('Layout.footer')
