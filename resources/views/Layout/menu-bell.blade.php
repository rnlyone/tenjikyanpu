<div class="content">
    <div class="d-flex">
        <div>
            <h1 class="mb-0 font-20">Notifications</h1>
        </div>
        <div class="ms-auto me-n2">
            <a href="#" data-bs-dismiss="offcanvas" class="icon icon-xs mt-n1"><i
                    class="bi bi-x-circle-fill color-red-dark font-18"></i></a>
        </div>
    </div>
    <div class="divider mt-2 mb-3"></div>
    @php
        $c = 0;
    @endphp
    @foreach ($notifs->take(3) as $n)
    <a href="{{$n->links}}">
        <div class="d-flex">
            <div class="align-self-center me-3">
                <span class="icon icon-xxl gradient-red shadow-bg shadow-bg-s rounded-m color-white"><i
                        class="bi {{$n->icons}} font-24"></i></span>
            </div>
            <div class="align-self-center">
                <h5 class="font-15 mb-0 ps-1 pt-1">{{$n->title}}</h5>
                <p class="ps-1 pb-1 mb-0 font-12 line-height-s opacity-80">
                    {{$n->subject}}
                </p>
            </div>
        </div>
    </a>
    @php
        $c++;
    @endphp

    @if ($c == 3)
        <div class="pb-2"></div>
    @else
        <div class="mb-3"></div>
    @endif
    @endforeach

    <a href="#" class="btn btn-full btn-m gradient-highlight shadow-bg shadow-bg-s mt-3">View All</a>
</div>
